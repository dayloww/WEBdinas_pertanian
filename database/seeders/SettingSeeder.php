<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'site_name', 'value' => 'Dinas Pertanian Sangihe'],
            ['key' => 'site_tagline', 'value' => 'Membangun Pertanian Berkelanjutan di Kepulauan Sangihe'],
            ['key' => 'phone', 'value' => '+62 812 3456 7890'],
            ['key' => 'email', 'value' => 'dinaspertanian@sangihe.go.id'],
            ['key' => 'address', 'value' => 'Jl. Pertanian No. 1, Tahuna, Kepulauan Sangihe'],
            ['key' => 'working_hours', 'value' => 'Senin - Jumat: 08:00 - 16:00'],
            ['key' => 'facebook', 'value' => '#'],
            ['key' => 'instagram', 'value' => '#'],
            ['key' => 'youtube', 'value' => '#'],
            ['key' => 'twitter', 'value' => '#'],
            ['key' => 'about_short', 'value' => 'Dinas Pertanian Kabupaten Kepulauan Sangihe bertugas menyelenggarakan urusan pemerintahan di bidang pertanian.'],
            ['key' => 'vision', 'value' => 'Mewujudkan masyarakat Sangihe yang sejahtera melalui pertanian yang tangguh dan berkelanjutan.'],
            ['key' => 'mission', 'value' => 'Meningkatkan produktivitas hasil tani; Memperkuat kelembagaan petani; Mengembangkan teknologi pertanian tepat guna.'],
        ];

        foreach ($settings as $setting) {
            \App\Models\Setting::create($setting);
        }
    }
}
