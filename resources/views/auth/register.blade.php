@extends('layout.auth')
@section('containerforauth')
    <main class="form-signin">
        <form action="/auth/store" method="post">
            @csrf
            <img class="mb-4" src="{{ asset('assets/img/register.svg') }}" alt="" width="250" height="250">
            <h1 class="h3 mb-3 fw-normal">{{ $title }}</h1>
            <div class="form-floating mb-2">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}" autofocus>
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                   {{ var_dump($message) }}
                </div>
                @enderror
            </div>
            <div class="form-floating mb-2">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="nama anda" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-floating mb-2">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button class="w-100 btn btn-lg btn-secondary" type="submit">Buat Akun</button>
            <div class="text-center mt-3">
                <a class="small font-weight-bold fw-bold" href="/">Sudah Punya Password, Login!!</a>
            </div>
            <div class="text-center mt-3">
                <a class="small font-weight-bold fw-bold" href="#">Lupa Password?</a>
            </div>
            <p class="mt-5 mb-3 text-muted">M. BAHRIL ILMI &copy; {{ date('Y') }}</p>
        </form>
    </main>
@endsection