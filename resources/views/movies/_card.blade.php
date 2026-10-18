<div class="card movie-card h-100 shadow-sm">
    <a href="{{ route('movies.show', $movie) }}" class="poster-wrap">
        <img src="{{ $movie->poster_url }}" class="card-img-top" alt="Poster {{ $movie->title }}">
    </a>
    <div class="card-body d-flex flex-column">
        <span class="badge badge-genre mb-2 align-self-start">{{ $movie->genre }}</span>
        <h5 class="card-title">{{ $movie->title }}</h5>
        <p class="text-secondary small mb-2">{{ $movie->release_year }} &middot; {{ $movie->formatted_duration }}</p>
        <p class="card-text small">{{ \Illuminate\Support\Str::limit($movie->description, 85) }}</p>
        <a href="{{ route('movies.show', $movie) }}" class="btn btn-warning btn-sm mt-auto">Lihat Detail</a>
    </div>
</div>
