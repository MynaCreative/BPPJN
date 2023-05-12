<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post as Model;
use App\Models\PostCategory;
use App\Models\PostType;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
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
                'slug' => 'Bagian Umum dan Tata Usaha', 'name' => 'Bagian Umum dan Tata Usaha', 'body' => '#'
            ],
            [
                'post_type_id' => $type, 'published_at' => now(), 'is_active' => true,
                'slug' => 'Bidang Keterpaduan Pembangunan Infrastruktur Jalan', 'name' => 'Bidang Keterpaduan Pembangunan Infrastruktur Jalan', 'body' => '#'
            ],
            [
                'post_type_id' => $type, 'published_at' => now(), 'is_active' => true,
                'slug' => 'Bidang Pembangunan Jalan Jembatan', 'name' => 'Bidang Pembangunan Jalan Jembatan', 'body' => '#'
            ],
            [
                'post_type_id' => $type, 'published_at' => now(), 'is_active' => true,
                'slug' => 'Bidang Preservasi I', 'name' => 'Bidang Preservasi I', 'body' => '#'
            ],
            [
                'post_type_id' => $type, 'published_at' => now(), 'is_active' => true,
                'slug' => 'Bidang Preservasi II', 'name' => 'Bidang Preservasi II', 'body' => '#'
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
