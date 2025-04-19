<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    // Book a consultation for the logged-in student
    public function bookConsultation(Request $request)
    {
        Consultation::create([
            'student_id' => Auth::id(),
            'status' => 'pending',
        ]);

        return back()->with('success', 'Consultation booked successfully!');
    }

    // Optional: Admin view to list all consultations
    public function index()
    {
        $consultations = Consultation::with('student')->get();
        return view('admin.consultations.index', compact('consultations'));
    }
}
