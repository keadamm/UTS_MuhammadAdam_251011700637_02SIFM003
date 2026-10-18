<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Tema 7 - Daftar Film
        // Kolom: id, title, genre, duration, release_year, description, poster
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('genre');
            $table->unsignedSmallInteger('duration');      // dalam menit
            $table->unsignedSmallInteger('release_year');
            $table->text('description');
            $table->string('poster');                       // nama file di public/assets/images/
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
