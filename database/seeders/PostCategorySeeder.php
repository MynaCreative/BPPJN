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
        $collections = [
            ['slug' => 'category-1', 'name' => 'Category 1'],
            ['slug' => 'category-2', 'name' => 'Category 2'],
            ['slug' => 'category-3', 'name' => 'Category 3'],
            ['slug' => 'category-4', 'name' => 'Category 4'],
            ['slug' => 'category-5', 'name' => 'Category 5'],
        ];

        collect($collections)->each(fn ($item) => Model::create($item));
    }
}
