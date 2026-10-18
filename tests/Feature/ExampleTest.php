<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_halaman_utama_daftar_dan_detail_film_tampil(): void
    {
        $this->seed();

        $this->get('/')->assertStatus(200)->assertSee('Daftar Film Indonesia');
        $this->get('/film')->assertStatus(200)->assertSee('Laskar Pelangi');
        $this->get('/film/1')->assertStatus(200)->assertSee('Sinopsis');
    }
}
