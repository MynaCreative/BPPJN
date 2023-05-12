<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SocialMedia as Model;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collections = [
            ['slug' => 'facebook', 'url' => '#', 'name' => 'Facebook', 'thumbnail' => '/images/social/fb.png'],
            ['slug' => 'youtube', 'url' => '#', 'name' => 'Youtube', 'thumbnail' => '/images/social/yt.png'],
            ['slug' => 'twitter', 'url' => '#', 'name' => 'Twitter', 'thumbnail' => '/images/social/twitter.png'],
            ['slug' => 'instagram', 'url' => '#', 'name' => 'Instagram', 'thumbnail' => '/images/social/ig.png'],
            ['slug' => 'whatsapp', 'url' => '#', 'name' => 'WhatsApp', 'thumbnail' => '/images/social/wa.png'],
        ];

        collect($collections)->each(fn ($item) => Model::create($item));
    }
}
