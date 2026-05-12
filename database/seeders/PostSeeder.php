<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Post::create([
            'title' => 'Panen Raya Padi di Kecamatan Tabukan Utara',
            'slug' => 'panen-raya-padi-di-kecamatan-tabukan-utara',
            'content' => 'Pemerintah Kabupaten Kepulauan Sangihe melalui Dinas Pertanian menyelenggarakan panen raya padi...',
            'image' => 'https://images.unsplash.com/photo-1530507629858-e4977d30e9e0?auto=format&fit=crop&q=80&w=800',
            'category_id' => 1,
            'status' => 'published',
        ]);

        \App\Models\Post::create([
            'title' => 'Pelatihan Teknologi Pertanian Tepat Guna',
            'slug' => 'pelatihan-teknologi-pertanian-tepat-guna',
            'content' => 'Dinas Pertanian Sangihe mengadakan pelatihan bagi kelompok tani tentang penggunaan alat mesin pertanian modern...',
            'image' => 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?auto=format&fit=crop&q=80&w=800',
            'category_id' => 3,
            'status' => 'published',
        ]);
    }
}
