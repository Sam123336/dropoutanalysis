<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Consultation;
use Illuminate\Support\Facades\Auth;

class StudentDashboardController extends Controller
{
    /**
     * Show the student dashboard with their records.
     */
    public function dashboard()
    {
        // Get the currently authenticated user (student)
        $student = Auth::user();

        // Fetch the student record based on their registration number
        $records = Student::where('registration_number', $student->email)->get();

        // Return the student dashboard view with their records
        return view('student.dashboard', compact('records'));
    }

    /**
     * Book a consultation for the student.
     */
    public function bookConsultation()
    {
        // Create a consultation record for the currently authenticated student
        Consultation::create(['student_id' => Auth::id()]);

        // Redirect back with a success message
        return back()->with('success', 'Consultation booked successfully');
    }
}
