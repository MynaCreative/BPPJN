<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Bulletin as Model;

class BulletinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collections = [
            ['slug' => 'BULETIN POINT EDISI IV TAHUN 2022', 'name' => 'BULETIN POINT EDISI IV TAHUN 2022', 'thumbnail' => '/images/buletin/13.jpg', 'url' => 'https://online.fliphtml5.com/jstpy/qtav/'],
            ['slug' => 'BULETIN POINT EDISI III TAHUN 2022', 'name' => 'BULETIN POINT EDISI III TAHUN 2022', 'thumbnail' => '/images/buletin/1.jpg', 'url' => 'https://online.fliphtml5.com/jstpy/acjv/'],
            ['slug' => 'BULETIN POINT EDISI II TAHUN 2022', 'name' => 'BULETIN POINT EDISI II TAHUN 2022', 'thumbnail' => '/images/buletin/2.jpg', 'url' => 'https://online.fliphtml5.com/jstpy/qpno/'],
            ['slug' => 'BULETIN POINT EDISI I TAHUN 2022', 'name' => 'BULETIN POINT EDISI I TAHUN 2022', 'thumbnail' => '/images/buletin/3.jpg', 'url' => 'https://online.fliphtml5.com/jstpy/qpno/'],
            ['slug' => 'TRANSFORMASI UTU "FROM ZERO TO HERO"', 'name' => 'TRANSFORMASI UTU "FROM ZERO TO HERO"', 'thumbnail' => '/images/buletin/4.jpg', 'url' => 'https://online.fliphtml5.com/jstpy/ydha'],
            ['slug' => 'BULETIN POINT EDISI IV 2021', 'name' => 'BULETIN POINT EDISI IV 2021', 'thumbnail' => '/images/buletin/5.jpg', 'url' => 'https://online.fliphtml5.com/jstpy/ials'],
            ['slug' => 'BULETIN POINT EDISI III 2021', 'name' => 'BULETIN POINT EDISI III 2021', 'thumbnail' => '/images/buletin/6.jpg', 'url' => 'https://online.fliphtml5.com/jstpy/dlcf/'],
            ['slug' => 'BULETIN POINT EDISI II 2021', 'name' => 'BULETIN POINT EDISI II 2021', 'thumbnail' => '/images/buletin/7.jpg', 'url' => 'https://online.fliphtml5.com/jstpy/ostg/'],
            ['slug' => 'BULETIN POINT EDISI I TAHUN 2021', 'name' => 'BULETIN POINT EDISI I TAHUN 2021', 'thumbnail' => '/images/buletin/8.jpg', 'url' => 'https://online.fliphtml5.com/jstpy/qwka/'],
            ['slug' => 'BULETIN POINT EDISI III TAHUN 2020', 'name' => 'BULETIN POINT EDISI III TAHUN 2020', 'thumbnail' => '/images/buletin/9.jpg', 'url' => 'https://online.fliphtml5.com/jstpy/bgnl/'],
            ['slug' => 'BULETIN POINT EDISI II TAHUN 2020', 'name' => 'BULETIN POINT EDISI II TAHUN 2020', 'thumbnail' => '/images/buletin/10.jpg', 'url' => 'https://online.fliphtml5.com/jstpy/cxqe/'],
            ['slug' => 'BULETIN POINT EDISI I TAHUN 2020', 'name' => 'BULETIN POINT EDISI I TAHUN 2020', 'thumbnail' => '/images/buletin/11.jpg', 'url' => 'https://online.fliphtml5.com/jstpy/jsli/'],
            ['slug' => 'BULETIN POINT EDISI I TAHUN 2019', 'name' => 'BULETIN POINT EDISI I TAHUN 2019', 'thumbnail' => '/images/buletin/12.jpg', 'url' => 'https://online.fliphtml5.com/jstpy/uymn/'],
        ];

        collect($collections)->each(fn ($item) => Model::create($item));
    }
}
