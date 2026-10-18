@extends('layouts.app')
@section('title', $movie->title)

@section('content')
<section class="container py-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ route('movies.index') }}">Daftar Film</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $movie->title }}</li>
        </ol>
    </nav>

    <div class="row g-5">
        <div class="col-md-5 col-lg-4">
            <img src="{{ $movie->poster_url }}" class="img-fluid rounded-4 shadow w-100" alt="Poster {{ $movie->title }}">
        </div>
        <div class="col-md-7 col-lg-8">
            <span class="badge badge-genre mb-2">{{ $movie->genre }}</span>
            <h1 class="fw-bold">{{ $movie->title }}</h1>

            <div class="row g-3 my-3">
                <div class="col-6 col-lg-4">
                    <div class="info-box">
                        <div class="small text-secondary">Tahun Rilis</div>
                        <div class="fw-semibold">{{ $movie->release_year }}</div>
                    </div>
                </div>
                <div class="col-6 col-lg-4">
                    <div class="info-box">
                        <div class="small text-secondary">Durasi</div>
                        <div class="fw-semibold">{{ $movie->formatted_duration }} ({{ $movie->duration }} menit)</div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="info-box">
                        <div class="small text-secondary">Genre</div>
                        <div class="fw-semibold">{{ $movie->genre }}</div>
                    </div>
                </div>
            </div>

            <h5 class="mt-4">Sinopsis</h5>
            <p class="text-body-secondary">{{ $movie->description }}</p>

            <a href="{{ route('movies.index') }}" class="btn btn-outline-warning mt-2">&larr; Kembali ke Daftar Film</a>
        </div>
    </div>

    <h4 class="section-title mt-5 mb-4">Film Lainnya</h4>
    <div class="row g-4">
        @foreach ($others as $other)
            <div class="col-6 col-md-3">
                @include('movies._card', ['movie' => $other])
            </div>
        @endforeach
    </div>
</section>
@endsection
