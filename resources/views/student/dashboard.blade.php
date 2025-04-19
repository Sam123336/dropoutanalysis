@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Student Dashboard</h1>

    <h2 class="text-xl font-semibold mb-4">Your Records</h2>
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
            </tr>
        </thead>
        <tbody>
            @foreach($records as $record) <!-- updated from $students -->
            <tr>
                <td class="border p-2">{{ $record->name }}</td>
                <td class="border p-2">{{ $record->registration_number }}</td>
                <td class="border p-2">{{ $record->term }}</td>
                <td class="border p-2">{{ $record->subject }}</td>
                <td class="border p-2">{{ $record->marks }}</td>
                <td class="border p-2">{{ $record->tgpa }}</td>
                <td class="border p-2">{{ $record->cgpa }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-6">
        <form action="{{ route('student.bookConsultation') }}" method="POST">
            @csrf
            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Book Consultation</button>
        </form>
    </div>
</div>
@endsection
