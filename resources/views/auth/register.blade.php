@extends('layout.app')

@section('title', 'Register')

@section('content')
<div class="container mt-5" style="max-width: 450px;">
    <div class="card shadow p-4">
        <h3 class="text-center mb-4 fw-bold">Register</h3>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0 px-3">
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register.post') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text"
                       class="form-control"
                       name="name"
                       placeholder="Masukkan nama"
                       required>
            </div>

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

            <div class="mb-3">
                <label class="form-label">Konfirmasi Password</label>
                <input type="password"
                       class="form-control"
                       name="password_confirmation"
                       placeholder="Ulangi password"
                       required>
            </div>

            <button type="submit" class="btn btn-outline-secondary w-100">Daftar</button>

            <p class="mt-3 text-center">
                Sudah punya akun?
                <a href="{{ route('login') }}">Login</a>
            </p>
        </form>
    </div>
</div>
@endsection
