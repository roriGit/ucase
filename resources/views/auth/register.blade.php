@extends('layouts.app')
@section('content')
    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Register</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name" class="w-full mb-2 p-2 border rounded">
            <input type="email" name="email" placeholder="Email" class="w-full mb-2 p-2 border rounded">
            <input type="password" name="password" placeholder="Password" class="w-full mb-2 p-2 border rounded">
            <input type="password" name="password_confirmation" placeholder="Confirm Password"
                class="w-full mb-4 p-2 border rounded">
            <button type="submit" class="bg-blue-600 text-white p-2 rounded w-full">Register</button>
        </form>
        <p class="mt-2">Already have an account? <a href="{{ route('login.form') }}" class="text-blue-600">Login</a></p>
    </div>
@endsection