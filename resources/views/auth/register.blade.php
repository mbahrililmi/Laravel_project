@extends('layout.auth')
@section('containerforauth')
    <main class="form-signin">
        <form action="/auth/store" method="post">
            @csrf
            <img class="mb-4" src="{{ asset('assets/img/register.svg') }}" alt="" width="250" height="250">
            <h1 class="h3 mb-3 fw-normal">{{ $title }}</h1>
            <div class="form-floating mb-2">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-2">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="nama anda">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-2">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-secondary" type="submit">Buat Akun</button>
            <div class="text-center mt-3">
                <a class="small font-weight-bold fw-bold" href="/auth">Sudah Punya Password, Login!!</a>
            </div>
            <div class="text-center mt-3">
                <a class="small font-weight-bold fw-bold" href="#">Lupa Password?</a>
            </div>
            <p class="mt-5 mb-3 text-muted">M. BAHRIL ILMI &copy; {{ date('Y') }}</p>
        </form>
    </main>
@endsection