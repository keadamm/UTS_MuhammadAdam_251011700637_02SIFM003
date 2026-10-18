@extends('layouts.app')
@section('title', 'Beranda')

@section('content')
<section class="hero text-center">
    <div class="container">
        <p class="eyebrow mb-2">Welcome To</p>
        <h1 class="display-4 fw-bold mb-3">Daftar Film Indonesia</h1>
        <p class="lead text-secondary mb-4">Katalog {{ $total }} film pilihan lengkap dengan genre, durasi, tahun rilis, dan sinopsis.</p>

        <div class="d-flex flex-column align-items-center gap-4">
            <div class="identity">
                <div class="fw-semibold">Muhammad Adam</div>
                <div class="small text-secondary">
                    NIM 251011700637 &middot; 02SIFM003<br>
                    Prodi Sistem Informasi
                </div>
            </div>

            <a href="{{ route('movies.index') }}" class="btn btn-warning btn-lg px-4">Lihat Semua Film</a>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="d-flex justify-content-between align-items-end mb-4">
        <div>
            <h2 class="section-title mb-1">Film Terbaru</h2>
            <p class="text-secondary mb-0">Rilis paling baru di katalog kami</p>
        </div>
        <a href="{{ route('movies.index') }}" class="btn btn-outline-warning btn-sm">Semua Film &rarr;</a>
    </div>

    <div class="row g-4">
        @foreach ($latest as $movie)
            <div class="col-6 col-md-4 col-lg-3">
                @include('movies._card', ['movie' => $movie])
            </div>
        @endforeach
    </div>
</section>
@endsection