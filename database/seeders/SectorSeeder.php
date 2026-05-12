<?php

namespace Database\Seeders;

use App\Models\Sector;
use App\Models\SectorData;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SectorSeeder extends Seeder
{
    public function run(): void
    {
        $sectors = [
            ['name' => 'Perkebunan', 'icon' => 'leaf'],
            ['name' => 'Peternakan', 'icon' => 'horse'],
            ['name' => 'Pangan', 'icon' => 'utensils'],
            ['name' => 'Penyuluhan', 'icon' => 'users'],
        ];

        foreach ($sectors as $s) {
            $sector = Sector::create([
                'name' => $s['name'],
                'slug' => Str::slug($s['name']),
                'icon' => $s['icon'],
                'description' => 'Bidang ' . $s['name'] . ' Dinas Pertanian Kabupaten Kepulauan Sangihe.',
            ]);

            // Add some dummy data for charts (last 5 years)
            $label = ($s['name'] == 'Peternakan') ? 'Populasi Ternak' : 'Produksi Hasil Tani';
            $unit = ($s['name'] == 'Peternakan') ? 'Ekor' : 'Ton';
            
            for ($year = 2020; $year <= 2024; $year++) {
                SectorData::create([
                    'sector_id' => $sector->id,
                    'label' => $label,
                    'value' => rand(500, 2000),
                    'unit' => $unit,
                    'year' => $year,
                ]);
            }
        }
    }
}
