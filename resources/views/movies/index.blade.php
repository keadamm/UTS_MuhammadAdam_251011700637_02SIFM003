@extends('layouts.app')
@section('title', 'Daftar Film')

@section('content')
<section class="page-header">
    <div class="container">
        <h1 class="fw-bold mb-1">Daftar Film</h1>
        <p class="text-secondary mb-0">{{ $movies->count() }} film di katalog</p>
    </div>
</section>

<section class="container py-5">
    <div class="row g-4">
        @forelse ($movies as $movie)
            <div class="col-6 col-md-4 col-lg-3">
                @include('movies._card', ['movie' => $movie])
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-secondary mb-0">
                    Belum ada data film. Jalankan <code>php artisan migrate:fresh --seed</code>.
                </div>
            </div>
        @endforelse
    </div>
</section>
@endsection
