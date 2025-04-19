@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Admin Dashboard</h1>

    <div class="mb-4">
        <a href="{{ route('admin.students.create') }}" class="bg-green-500 text-white px-4 py-2 rounded">Add Student</a>
    </div>

    <h2 class="text-xl font-semibold mb-4">All Students</h2>
    <table class="min-w-full border-collapse">
        <thead>
            <tr>
                <th class="border p-2">Name</th>
                <th class="border p-2">Registration Number</th>
                <th class="border p-2">Term</th>
                <th class="border p-2">Subject</th>
                <th class="border p-2">Marks</th>
                <th class="border p-2">TGPA</th>
                <th class="border p-2">CGPA</th>
                <th class="border p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td class="border p-2">{{ $student->name }}</td>
                <td class="border p-2">{{ $student->registration_number }}</td>
                <td class="border p-2">{{ $student->term }}</td>
                <td class="border p-2">{{ $student->subject }}</td>
                <td class="border p-2">{{ $student->marks }}</td>
                <td class="border p-2">{{ $student->tgpa }}</td>
                <td class="border p-2">{{ $student->cgpa }}</td>
                <td class="border p-2">
                    <a href="{{ route('admin.students.edit', $student) }}" class="bg-blue-500 text-white px-2 py-1 rounded">Edit</a>
                    <form action="{{ route('admin.students.destroy', $student) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
