<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post as Model;
use App\Models\PostType;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type = $this->getType('video');
        $collections = [
            [
                'post_type_id' => $type, 'published_at' => now(), 'is_active' => true,
                'slug' => 'Pisah Sambut Pejabat - Estafet Tugas di Balai DKI Jakarta - Jawa Barat', 'name' => 'Pisah Sambut Pejabat - Estafet Tugas di Balai DKI Jakarta - Jawa Barat', 'body' => 'https://www.youtube.com/embed/M_7jf0_8o8I'
            ],
            [
                'post_type_id' => $type, 'published_at' => now(), 'is_active' => true,
                'slug' => 'Rehabilitasi Mayor Jalan | Penanganan Cantilever Jatinangor - Bts Kota Sumedang | Cadas Pangeran', 'name' => 'Rehabilitasi Mayor Jalan | Penanganan Cantilever Jatinangor - Bts Kota Sumedang | Cadas Pangeran', 'body' => 'https://www.youtube.com/embed/E-PWNawxL4U'
            ],
            [
                'post_type_id' => $type, 'published_at' => now(), 'is_active' => true,
                'slug' => 'Fly Over Kopo Solusi Kemacetan Bandung', 'name' => 'Fly Over Kopo Solusi Kemacetan Bandung', 'body' => 'https://www.youtube.com/embed/7GaKdV1l3xw'
            ],
            [
                'post_type_id' => $type, 'published_at' => now(), 'is_active' => true,
                'slug' => 'Mars Pekerjaan Umum dan Perumahan Rakyat', 'name' => 'Mars Pekerjaan Umum dan Perumahan Rakyat', 'body' => 'https://www.youtube.com/embed/4atv9KHQH18'
            ],
        ];

        collect($collections)->each(fn ($item) => Model::create($item));
    }

    public function getType($slug)
    {
        return PostType::where('slug', $slug)->first()->id;
    }
}
