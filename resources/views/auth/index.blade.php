@extends('layout.auth')
@section('containerforauth')
    <main class="form-signin">
        <div class="row">
        <form>
            <img class="mb-4" src="{{ asset('assets/img/login.svg') }}" alt="" width="250" height="250">
            <h1 class="h3 mb-3 fw-normal">{{ $title }}</h1>

            @if (session()->has('success'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="form-floating mb-2">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
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