@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Book a Consultation</h1>

    <form action="{{ route('student.bookConsultation') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="message" class="block font-medium text-gray-700">Consultation Message</label>
            <textarea id="message" name="message" rows="4" class="w-full p-2 border rounded" placeholder="Enter your message..."></textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Book Consultation</button>
    </form>
</div>
@endsection
