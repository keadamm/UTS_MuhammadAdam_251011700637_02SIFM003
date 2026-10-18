<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        // [title, genre, duration (menit), release_year, description, poster (nama file)]
        $data = [
            ['Laskar Pelangi', 'Drama', 124, 2008,
                'Kisah sepuluh anak dari keluarga sederhana di Belitung yang bersekolah di sebuah SD Muhammadiyah yang nyaris ditutup, dibimbing oleh guru-guru yang penuh dedikasi. Diadaptasi dari novel karya Andrea Hirata.',
                'laskar-pelangi.jpg'],
            ['Pengabdi Setan', 'Horor', 107, 2017,
                'Sebuah keluarga dihantui kejadian-kejadian mengerikan setelah sang ibu, mantan penyanyi, meninggal dunia setelah lama sakit. Disutradarai Joko Anwar sebagai penggarapan ulang film horor klasik tahun 1980.',
                'pengabdi-setan.jpg'],
            ['The Raid', 'Aksi', 101, 2011,
                'Tim polisi elite menyerbu sebuah gedung apartemen yang dikuasai gembong narkoba, lalu terjebak di dalamnya dan harus bertarung lantai demi lantai untuk bertahan hidup. Disutradarai Gareth Evans.',
                'the-raid.jpg'],
            ['Ada Apa dengan Cinta?', 'Romantis', 112, 2002,
                'Cinta, siswi SMA yang gemar sastra, jatuh hati pada Rangga, cowok pendiam penyuka puisi. Kisah cinta remaja mereka diwarnai persahabatan dan kesalahpahaman.',
                'ada-apa-dengan-cinta.jpg'],
            ['Habibie & Ainun', 'Drama', 118, 2012,
                'Kisah cinta Bacharuddin Jusuf Habibie dan Hasri Ainun Besari, dari pertemuan di masa muda hingga perjuangan mereka membangun keluarga dan mengabdi bagi bangsa.',
                'habibie-ainun.jpg'],
            ['Dilan 1990', 'Romantis', 110, 2018,
                'Di Bandung tahun 1990, Milea, siswi pindahan dari Jakarta, bertemu Dilan, siswa SMA yang unik dan romantis. Diangkat dari novel karya Pidi Baiq.',
                'dilan-1990.jpg'],
            ['KKN di Desa Penari', 'Horor', 130, 2022,
                'Sekelompok mahasiswa menjalani KKN di sebuah desa terpencil dan mulai mengalami kejadian misterius setelah melanggar pantangan setempat. Berawal dari utas viral di media sosial.',
                'kkn-di-desa-penari.jpg'],
            ['Gundala', 'Aksi', 123, 2019,
                'Sancaka, pemuda yang tumbuh sebagai yatim piatu di jalanan, mendapat kekuatan petir dan harus melindungi Jakarta dari ancaman kejahatan. Film pembuka jagat sinema Bumilangit.',
                'gundala.jpg'],
            ['Marlina si Pembunuh dalam Empat Babak', 'Drama', 93, 2017,
                'Seorang janda di Sumba membela diri dari para perampok yang mengancam hidupnya, lalu menempuh perjalanan panjang untuk mencari keadilan. Disutradarai Mouly Surya.',
                'marlina.jpg'],
            ['Agak Laen', 'Komedi', 119, 2024,
                'Empat sahabat pengelola wahana rumah hantu di pasar malam menghadapi masalah besar setelah seorang pengunjung meninggal di dalam wahana mereka.',
                'agak-laen.jpg'],
        ];

        foreach ($data as [$title, $genre, $duration, $year, $description, $poster]) {
            Movie::create([
                'title'        => $title,
                'genre'        => $genre,
                'duration'     => $duration,
                'release_year' => $year,
                'description'  => $description,
                'poster'       => $poster,
            ]);
        }
    }
}
