<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Show all students
    public function index()
    {
        $students = Student::all();
        return view('admin.students.index', compact('students'));
    }

    // Show the form to create a student
    public function create()
    {
        return view('admin.students.create');
    }

    // Store a new student
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'registration_number' => 'required|unique:students',
            'term' => 'required',
            'subject' => 'required',
            'marks' => 'required|numeric',
            'tgpa' => 'required|numeric',
            'cgpa' => 'required|numeric',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }

    // Show a specific student
    public function show(Student $student)
    {
        return view('admin.students.show', compact('student'));
    }

    // Show the form to edit a student
    public function edit(Student $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    // Update the student
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'registration_number' => 'required|unique:students,registration_number,' . $student->id,
            'term' => 'required',
            'subject' => 'required',
            'marks' => 'required|numeric',
            'tgpa' => 'required|numeric',
            'cgpa' => 'required|numeric',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    // Delete the student
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
