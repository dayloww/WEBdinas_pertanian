<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Berita Utama', 'slug' => 'berita-utama'],
            ['name' => 'Pengumuman', 'slug' => 'pengumuman'],
            ['name' => 'Program Dinas', 'slug' => 'program-dinas'],
            ['name' => 'Artikel Pertanian', 'slug' => 'artikel-pertanian'],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
