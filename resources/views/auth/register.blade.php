@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <form method="POST" action="{{ route('register') }}" class="bg-white p-6 rounded shadow-md w-96">
        @csrf

        <h2 class="text-2xl font-semibold mb-4 text-center">Register</h2>

        @error('error')
            <p class="text-red-500 text-sm mb-2">{{ $message }}</p>
        @enderror

        <input type="text" name="name" placeholder="Full Name" class="w-full mb-3 p-2 border rounded" required>

        <input type="email" name="email" placeholder="Email" class="w-full mb-3 p-2 border rounded" required>

        <input type="password" name="password" placeholder="Password" class="w-full mb-3 p-2 border rounded" required>

        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="w-full mb-3 p-2 border rounded" required>

        <select name="role" class="w-full mb-3 p-2 border rounded" required>
            <option value="">Select Role</option>
            <option value="student">Student</option>
            <option value="admin">Admin</option> <!-- You can remove this option if you don't want open admin registration -->
        </select>

        <button type="submit" class="bg-green-500 text-white w-full p-2 rounded">Register</button>
    </form>
</div>
@endsection
