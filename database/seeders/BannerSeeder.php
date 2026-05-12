<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Banner::create([
            'title' => 'Every Crop Counts, Every Farmer Matters',
            'subtitle' => 'Membangun Ketahanan Pangan Nasional dari Kepulauan Sangihe.',
            'image' => 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?auto=format&fit=crop&q=80&w=2000',
            'link' => '#',
            'order' => 1,
        ]);

        \App\Models\Banner::create([
            'title' => 'Teknologi Pertanian Modern',
            'subtitle' => 'Meningkatkan Hasil Panen dengan Pendekatan Berkelanjutan.',
            'image' => 'https://images.unsplash.com/photo-1523348837708-15d4a09cfac2?auto=format&fit=crop&q=80&w=2000',
            'link' => '#',
            'order' => 2,
        ]);
    }
}
