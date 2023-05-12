<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Infographic as Model;

class InfographicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collections = [
            ['slug' => 'content-1', 'name' => 'Content 1', 'thumbnail' => '/images/infografis/1.jpg'],
            ['slug' => 'content-2', 'name' => 'Content 2', 'thumbnail' => '/images/infografis/2.jpg'],
        ];

        collect($collections)->each(fn ($item) => Model::create($item));
    }
}
