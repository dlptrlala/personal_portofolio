@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')

<section class="auth-section section">
    <div class="auth-card">

        <div class="auth-icon">
            <i class="fa-solid fa-lock"></i>
        </div>

        <p class="section-label">
            Portfolio Admin
        </p>

        <h1>
            Login
        </h1>

        <p class="auth-description">
            Login untuk mengelola project portfolio.
        </p>

        @if($errors->any())
            <div class="form-errors">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form
            action="{{ route('login.store') }}"
            method="POST"
            class="auth-form"
        >
            @csrf

            <label for="email">
                Email
            </label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="admin@portfolio.test"
                required
            >

            <label for="password">
                Password
            </label>

            <input
                type="password"
                id="password"
                name="password"
                placeholder="••••••••"
                required
            >

            <label class="remember">
                <input
                    type="checkbox"
                    name="remember"
                    value="1"
                >

                Remember me
            </label>

            <button
                type="submit"
                class="btn"
            >
                Login
            </button>

        </form>

        <a href="{{ route('home') }}" class="back-home">
            ← Kembali ke portfolio
        </a>

    </div>
</section>

@endsection
