<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    public $timestamps = false;

    protected $fillable = [
        'title', 'genre', 'duration', 'release_year', 'description', 'poster',
    ];

    /** URL poster dari folder public/assets/images/ */
    public function getPosterUrlAttribute(): string
    {
        return asset('assets/images/' . $this->poster);
    }

    /** Durasi menit -> "2 jam 4 menit" */
    public function getFormattedDurationAttribute(): string
    {
        $jam = intdiv($this->duration, 60);
        $menit = $this->duration % 60;

        return trim(($jam ? $jam . ' jam ' : '') . ($menit ? $menit . ' menit' : ''));
    }
}
