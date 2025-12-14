@extends('layouts.app')
@section('content')
    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Login</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" class="w-full mb-2 p-2 border rounded">
            <input type="password" name="password" placeholder="Password" class="w-full mb-4 p-2 border rounded">
            <button type="submit" class="bg-blue-600 text-white p-2 rounded w-full">Login</button>
        </form>
        <p class="mt-2">Don't have an account? <a href="{{ route('register.form') }}" class="text-blue-600">Register</a></p>
    </div>
@endsection