<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\PostCategory as Model;
use Illuminate\Database\Seeder;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profile = Model::create(['name' => 'Profile', 'slug' => 'profile']);

        $profile->children()->createMany([
            ['name' => 'About', 'slug' => 'about'],
            ['name' => 'Organization', 'slug' => 'organization'],
        ]);
    }
}
