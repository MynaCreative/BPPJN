<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::transaction(function () {
            $this->call(UserSeeder::class);
            $this->call(PostTypeSeeder::class);
            $this->call(PostCategorySeeder::class);
            $this->call(SlideshowSeeder::class);
            $this->call(SocialMediaSeeder::class);
        });
    }
}
