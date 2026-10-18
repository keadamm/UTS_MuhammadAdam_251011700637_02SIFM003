# UTS Rekayasa Web — Tema 7: Daftar Film (CineNusantara)

Aplikasi web **frontend** Laravel 13 + Blade + Bootstrap (asset lokal di `public/Bootstrap`).

- Tabel: `movies` (`id, title, genre, duration, release_year, description, poster`)
- Data berasal dari **seeder** (`database/seeders/MovieSeeder.php`)
- Poster disimpan di `public/assets/images/`
- Halaman: Beranda (`/`), Daftar Film (`/film`), Detail Film (`/film/{id}`)
- Layout Blade: `resources/views/layouts/app.blade.php`

## Cara menjalankan (Laragon / XAMPP)

1. Buat database MySQL bernama **`db_uts_nim`** (ganti `nim` dengan NIM kamu, lalu samakan di `.env` → `DB_DATABASE`).
2. `composer install` (lewati bila folder `vendor` sudah ada)
3. `copy .env.example .env` lalu `php artisan key:generate` (lewati bila `.env` sudah ada)
4. `php artisan migrate:fresh --seed`
5. `php artisan serve` → buka http://127.0.0.1:8000

## Ubah identitas

Edit `config/uts.php` (nama, NIM, kelas, email) — tampil di Beranda dan footer.
