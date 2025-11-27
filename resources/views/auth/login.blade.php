@extends('layout.app')

@section('title', 'Login')

@section('content')
<div class="container mt-5" style="max-width: 450px;">
    <div class="card shadow p-4">
        <h3 class="text-center mb-4 fw-bold">Login</h3>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" 
                       class="form-control" 
                       name="email" 
                       placeholder="Masukkan email" 
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" 
                       class="form-control" 
                       name="password" 
                       placeholder="Masukkan password" 
                       required>
            </div>

            <button type="submit" class="btn btn-secondary w-100">Login</button>

            <p class="mt-3 text-center">
                Belum punya akun? 
                <a href="{{ route('register') }}">Register</a>
            </p>
        </form>
    </div>
</div>
@endsection
