@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Add New Student</h1>

    <form action="{{ route('admin.students.store') }}" method="POST" class="bg-white p-6 rounded shadow-md w-full max-w-2xl">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
            <input type="text" name="name" id="name" class="w-full border border-gray-300 rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label for="registration_number" class="block text-gray-700 font-semibold mb-2">Registration Number</label>
            <input type="text" name="registration_number" id="registration_number" class="w-full border border-gray-300 rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label for="term" class="block text-gray-700 font-semibold mb-2">Term</label>
            <input type="text" name="term" id="term" class="w-full border border-gray-300 rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label for="subject" class="block text-gray-700 font-semibold mb-2">Subject</label>
            <input type="text" name="subject" id="subject" class="w-full border border-gray-300 rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label for="marks" class="block text-gray-700 font-semibold mb-2">Marks</label>
            <input type="number" name="marks" id="marks" class="w-full border border-gray-300 rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label for="tgpa" class="block text-gray-700 font-semibold mb-2">TGPA</label>
            <input type="number" step="0.01" name="tgpa" id="tgpa" class="w-full border border-gray-300 rounded px-4 py-2" required>
        </div>

        <div class="mb-4">
            <label for="cgpa" class="block text-gray-700 font-semibold mb-2">CGPA</label>
            <input type="number" step="0.01" name="cgpa" id="cgpa" class="w-full border border-gray-300 rounded px-4 py-2" required>
        </div>

        <div class="mt-6">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                Create Student
            </button>
        </div>
    </form>
</div>
@endsection
