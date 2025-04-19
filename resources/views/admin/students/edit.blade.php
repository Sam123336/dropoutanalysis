<!-- resources/views/admin/students/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Student</h1>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- This is important for updating a resource -->
        
        <!-- Name -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $student->name) }}" required>
        </div>

        <!-- Registration Number -->
        <div class="form-group">
            <label for="registration_number">Registration Number</label>
            <input type="text" name="registration_number" id="registration_number" class="form-control" value="{{ old('registration_number', $student->registration_number) }}" required>
        </div>

        <!-- Term -->
        <div class="form-group">
            <label for="term">Term</label>
            <input type="text" name="term" id="term" class="form-control" value="{{ old('term', $student->term) }}" required>
        </div>

        <!-- Subject -->
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" class="form-control" value="{{ old('subject', $student->subject) }}" required>
        </div>

        <!-- Marks -->
        <div class="form-group">
            <label for="marks">Marks</label>
            <input type="number" name="marks" id="marks" class="form-control" value="{{ old('marks', $student->marks) }}" required>
        </div>

        <!-- TGPA -->
        <div class="form-group">
            <label for="tgpa">TGPA</label>
            <input type="number" step="0.01" name="tgpa" id="tgpa" class="form-control" value="{{ old('tgpa', $student->tgpa) }}" required>
        </div>

        <!-- CGPA -->
        <div class="form-group">
            <label for="cgpa">CGPA</label>
            <input type="number" step="0.01" name="cgpa" id="cgpa" class="form-control" value="{{ old('cgpa', $student->cgpa) }}" required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Update Student</button>
    </form>

</div>
@endsection
