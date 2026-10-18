<!DOCTYPE html>
<html lang="id" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Beranda') | {{ config('app.name') }}</title>

    {{-- Bootstrap dari asset lokal: public/Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg sticky-top navbar-cine shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">🎬 {{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
                aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active fw-semibold' : '' }}" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('movies.*') ? 'active fw-semibold' : '' }}" href="{{ route('movies.index') }}">Daftar Film</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="flex-grow-1">
    @yield('content')
</main>

<footer class="footer-cine py-4 mt-5">
    <div class="container">
        <div class="row g-3 align-items-center">
            <div class="col-md-7">
                <div class="fw-semibold">{{ config('app.name') }} &mdash; Daftar Film Indonesia</div>
                <div class="small text-secondary">
                    UTS {{ config('uts.mk') }} &middot; {{ config('uts.nama') }} ({{ config('uts.nim') }}) &middot; {{ config('uts.kelas') }}
                </div>
            </div>
            <div class="col-md-5 text-md-end small text-secondary">
                Prodi {{ config('uts.prodi') }} &middot; Universitas Pamulang<br>
                &copy; {{ date('Y') }} {{ config('app.name') }}
            </div>
        </div>
    </div>
</footer>

{{-- Bootstrap JS (bundle) dari asset lokal --}}
<script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
