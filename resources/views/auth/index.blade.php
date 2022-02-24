@extends('layout.auth')
@section('containerforauth')
    <main class="form-signin">
        <div class="row">
        <form action="/auth" method="post">
            @csrf
            <img class="mb-4" src="{{ asset('assets/img/login.svg') }}" alt="" width="250" height="250">
            <h1 class="h3 mb-3 fw-normal">{{ $title }}</h1>

            @if (session()->has('success'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="form-floating mb-2">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-2">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
            <button class="w-100 btn btn-lg btn-secondary" type="submit">Masuk</button>
            <div class="text-center mt-3">
                <a class="small font-weight-bold fw-bold" href="/auth/register">Buat Akun</a>
            </div>
            <div class="text-center mt-3">
                <a class="small font-weight-bold fw-bold" href="#">Lupa Password?</a>
            </div>
            <p class="mt-5 mb-3 text-muted">M. BAHRIL ILMI &copy; {{ date('Y') }}</p>
        </form>
    </div>
    </main>
@endsection