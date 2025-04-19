<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function dashboard() {
        $students = Student::all();
        return view('admin.dashboard', compact('students'));
    }
    
}
