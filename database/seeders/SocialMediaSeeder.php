<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\SocialMedia as Model;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collections = [
            ['slug' => 'facebook', 'name' => 'Facebook'],
            ['slug' => 'youtube', 'name' => 'Youtube'],
            ['slug' => 'twitter', 'name' => 'Twitter'],
            ['slug' => 'instagram', 'name' => 'Instagram'],
            ['slug' => 'whatsapp', 'name' => 'WhatsApp'],
        ];

        collect($collections)->each(fn ($item) => Model::create($item));
    }
}
