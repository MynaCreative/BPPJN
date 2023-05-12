<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post as Model;
use App\Models\PostCategory;
use App\Models\PostType;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type = $this->getType('page');
        $collections = [
            [
                'post_type_id' => $type, 'published_at' => now(), 'is_active' => true,
                'slug' => 'Tugas dan Fungsi', 'name' => 'Tugas dan Fungsi', 'body' => '#'
            ],
            [
                'post_type_id' => $type, 'published_at' => now(), 'is_active' => true,
                'slug' => 'Struktur Organisasi', 'name' => 'Struktur Organisasi', 'body' => '#'
            ],
            [
                'post_type_id' => $type, 'published_at' => now(), 'is_active' => true,
                'slug' => 'Informasi Pejabat', 'name' => 'Informasi Pejabat', 'body' => '#'
            ],
            [
                'post_type_id' => $type, 'published_at' => now(), 'is_active' => true,
                'slug' => 'Lokasi Kantor', 'name' => 'Lokasi Kantor', 'body' => '#'
            ],
        ];

        collect($collections)->each(fn ($item) => Model::create($item));
    }

    public function getType($slug)
    {
        return PostType::where('slug', $slug)->first()->id;
    }

    public function getCategory($slug)
    {
        return PostCategory::where('slug', $slug)->first()->id;
    }
}
