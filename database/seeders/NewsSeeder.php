<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post as Model;
use App\Models\PostCategory;
use App\Models\PostType;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type = $this->getType('news');
        $collections = [
            [
                'post_type_id' => $type, 'published_at' => now(), 'is_active' => true,
                'slug' => 'Kementerian PUPR Pastikan Jalan Nasional Sepanjang 262Km di Yogyakarta Siap Sambut Momentum Mudik Lebaran 2023', 'name' => 'Kementerian PUPR Pastikan Jalan Nasional Sepanjang 262Km di Yogyakarta Siap Sambut Momentum Mudik Lebaran 2023', 'body' => '#'
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
