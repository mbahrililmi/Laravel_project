<!DOCTYPE html>
<html lang="en">
    {{-- head --}}
    @include('partials.head')

    <body class="sb-nav-fixed">

        {{-- navbar --}}
        @include('partials.navbar')

        <div id="layoutSidenav">

            {{-- sidebar --}}
           @include('partials.sidebar')

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        {{-- Judul Content --}}
                        <h1 class="mt-1">{{ $title }}</h1>

                            {{-- Isi Content --}}
                            @yield('container')

                    </div>
                </main>

                {{-- footer --}}
                @include('partials.footer')

            </div>
        </div>

        {{-- foot --}}
        @include('partials.foot') 

    </body>
</html>
