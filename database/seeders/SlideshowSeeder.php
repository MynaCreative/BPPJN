<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Slideshow as Model;
use Illuminate\Database\Seeder;

class SlideshowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collections = [
            ['name' => 'Selamat Datang', 'type' => 'video', 'url' => null, 'thumbnail' => '/images/videos/explore-poster.png', 'video' => '/images/videos/explore.mp4', 'description' => '
            <h2 data-animate="fadeInUp">SELAMAT DATANG DI</h2>
            <h2 data-animate="fadeInUp">
                BALAI BESAR PELAKSANAAN JALAN NASIONAL<br>
                DKI JAKARTA - JAWA BARAT
            </h2>
            <h2 data-animate="fadeInUp"></h2>
            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">
                DIREKTORAT JENDERAL BINA MARGA<br>
                KEMENTERIAN PEKERJAAN UMUM DAN PERUMAHAN RAKYAT
            </p>
            '],
            ['name' => 'Pelayanan Publik', 'type' => 'image', 'url' => null, 'thumbnail' => '/images/slider/swiper/1.png', 'video' => 'null', 'description' => '
            <h2 data-animate="fadeInUp">Pelayanan Publik PUPR BBPJN</h2>
            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">
                DIREKTORAT JENDERAL BINA MARGA<br>
                KEMENTERIAN PEKERJAAN UMUM DAN PERUMAHAN RAKYAT
            </p>
            '],
        ];

        collect($collections)->each(fn ($item) => Model::create($item));
    }
}
