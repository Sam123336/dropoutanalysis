<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\StudentController;

// Registration & Login Routes
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', [AuthLoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthLoginController::class, 'login']);
Route::post('logout', [AuthLoginController::class, 'logout'])->name('logout');

// Admin Routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('students', StudentController::class);
});

// Student Routes
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('student/dashboard', [StudentDashboardController::class, 'dashboard'])->name('student.dashboard');
    Route::post('student/book-consultation', [ConsultationController::class, 'bookConsultation'])->name('student.bookConsultation');
});
Route::resource('students', StudentController::class);
// Fallback + Role Redirection
Route::get('/unauthorized', fn () => view('unauthorized'));
Route::get('/home', fn () => Auth::user()->role === 'admin'
    ? redirect()->route('admin.dashboard')
    : redirect()->route('student.dashboard'))->name('home');
