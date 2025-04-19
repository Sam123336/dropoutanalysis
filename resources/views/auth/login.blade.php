@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <form method="POST" action="{{ route('login') }}" class="bg-white p-6 rounded shadow-md w-96">
        @csrf
        <h2 class="text-2xl font-semibold mb-4 text-center">Login</h2>

        @error('error')
            <p class="text-red-500 text-sm mb-2">{{ $message }}</p>
        @enderror

        <input type="email" name="email" placeholder="Email" class="w-full mb-3 p-2 border rounded">
        <input type="password" name="password" placeholder="Password" class="w-full mb-3 p-2 border rounded">

        <button type="submit" class="bg-blue-500 text-white w-full p-2 rounded">Login</button>
    </form>
</div>
@endsection
