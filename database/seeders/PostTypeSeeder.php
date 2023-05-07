<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\PostType as Model;
use Illuminate\Database\Seeder;

class PostTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collections = [
            ['slug' => 'publication', 'name' => 'Publication'],
            ['slug' => 'page', 'name' => 'Page'],
        ];

        collect($collections)->each(fn ($item) => Model::create($item));
    }
}
