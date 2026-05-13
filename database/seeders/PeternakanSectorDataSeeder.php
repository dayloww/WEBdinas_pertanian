<?php

namespace Database\Seeders;

use App\Models\Sector;
use App\Models\SectorData;
use Illuminate\Database\Seeder;

class PeternakanSectorDataSeeder extends Seeder
{
    public function run(): void
    {
        $sectorId = Sector::query()->where('slug', 'peternakan')->value('id');

        if (! $sectorId) {
            $this->command?->warn('Sector peternakan tidak ditemukan.');

            return;
        }

        $source = 'Dinas Pertanian Daerah Kabupaten Kepulauan Sangihe, 2025';

        $unggas = [
            ['Manganitu Selatan', 'Ayam Ras Petelur', 4],
            ['Manganitu Selatan', 'Ayam Ras Pedaging', 21],
            ['Manganitu Selatan', 'Ayam Buras', 4085],
            ['Manganitu Selatan', 'Itik/Itik Manila', 228],
            ['Tatoareng', 'Ayam Ras Petelur', 0],
            ['Tatoareng', 'Ayam Ras Pedaging', 0],
            ['Tatoareng', 'Ayam Buras', 1412],
            ['Tatoareng', 'Itik/Itik Manila', 180],
            ['Tamako', 'Ayam Ras Petelur', 14],
            ['Tamako', 'Ayam Ras Pedaging', 52],
            ['Tamako', 'Ayam Buras', 6444],
            ['Tamako', 'Itik/Itik Manila', 189],
            ['Tabukan Selatan', 'Ayam Ras Petelur', 0],
            ['Tabukan Selatan', 'Ayam Ras Pedaging', 31],
            ['Tabukan Selatan', 'Ayam Buras', 2962],
            ['Tabukan Selatan', 'Itik/Itik Manila', 158],
            ['Tabukan Selatan Tengah', 'Ayam Ras Petelur', 0],
            ['Tabukan Selatan Tengah', 'Ayam Ras Pedaging', 21],
            ['Tabukan Selatan Tengah', 'Ayam Buras', 4041],
            ['Tabukan Selatan Tengah', 'Itik/Itik Manila', 141],
            ['Tabukan Selatan Tenggara', 'Ayam Ras Petelur', 0],
            ['Tabukan Selatan Tenggara', 'Ayam Ras Pedaging', 75],
            ['Tabukan Selatan Tenggara', 'Ayam Buras', 2483],
            ['Tabukan Selatan Tenggara', 'Itik/Itik Manila', 111],
            ['Tabukan Tengah', 'Ayam Ras Petelur', 0],
            ['Tabukan Tengah', 'Ayam Ras Pedaging', 1475],
            ['Tabukan Tengah', 'Ayam Buras', 4968],
            ['Tabukan Tengah', 'Itik/Itik Manila', 206],
            ['Manganitu', 'Ayam Ras Petelur', 1214],
            ['Manganitu', 'Ayam Ras Pedaging', 49],
            ['Manganitu', 'Ayam Buras', 6329],
            ['Manganitu', 'Itik/Itik Manila', 173],
            ['Tahuna', 'Ayam Ras Petelur', 3090],
            ['Tahuna', 'Ayam Ras Pedaging', 62],
            ['Tahuna', 'Ayam Buras', 7054],
            ['Tahuna', 'Itik/Itik Manila', 192],
            ['Tahuna Timur', 'Ayam Ras Petelur', 0],
            ['Tahuna Timur', 'Ayam Ras Pedaging', 0],
            ['Tahuna Timur', 'Ayam Buras', 4555],
            ['Tahuna Timur', 'Itik/Itik Manila', 84],
            ['Tahuna Barat', 'Ayam Ras Petelur', 7],
            ['Tahuna Barat', 'Ayam Ras Pedaging', 103],
            ['Tahuna Barat', 'Ayam Buras', 6634],
            ['Tahuna Barat', 'Itik/Itik Manila', 170],
            ['Tabukan Utara', 'Ayam Ras Petelur', 47],
            ['Tabukan Utara', 'Ayam Ras Pedaging', 124],
            ['Tabukan Utara', 'Ayam Buras', 6930],
            ['Tabukan Utara', 'Itik/Itik Manila', 186],
            ['Nusa Tabukan', 'Ayam Ras Petelur', 0],
            ['Nusa Tabukan', 'Ayam Ras Pedaging', 0],
            ['Nusa Tabukan', 'Ayam Buras', 2187],
            ['Nusa Tabukan', 'Itik/Itik Manila', 81],
            ['Kepulauan Marore', 'Ayam Ras Petelur', 0],
            ['Kepulauan Marore', 'Ayam Ras Pedaging', 0],
            ['Kepulauan Marore', 'Ayam Buras', 844],
            ['Kepulauan Marore', 'Itik/Itik Manila', 83],
            ['Kendahe', 'Ayam Ras Petelur', 515],
            ['Kendahe', 'Ayam Ras Pedaging', 21],
            ['Kendahe', 'Ayam Buras', 1432],
            ['Kendahe', 'Itik/Itik Manila', 152],
        ];

        $ternak = [
            ['Manganitu Selatan', 'Sapi Potong', 0],
            ['Manganitu Selatan', 'Kambing', 0],
            ['Manganitu Selatan', 'Babi', 188],
            ['Tatoareng', 'Sapi Potong', 0],
            ['Tatoareng', 'Kambing', 0],
            ['Tatoareng', 'Babi', 35],
            ['Tamako', 'Sapi Potong', 0],
            ['Tamako', 'Kambing', 0],
            ['Tamako', 'Babi', 1404],
            ['Tabukan Selatan', 'Sapi Potong', 5],
            ['Tabukan Selatan', 'Kambing', 15],
            ['Tabukan Selatan', 'Babi', 250],
            ['Tabukan Selatan Tengah', 'Sapi Potong', 0],
            ['Tabukan Selatan Tengah', 'Kambing', 0],
            ['Tabukan Selatan Tengah', 'Babi', 97],
            ['Tabukan Selatan Tenggara', 'Sapi Potong', 0],
            ['Tabukan Selatan Tenggara', 'Kambing', 3],
            ['Tabukan Selatan Tenggara', 'Babi', 221],
            ['Tabukan Tengah', 'Sapi Potong', 20],
            ['Tabukan Tengah', 'Kambing', 62],
            ['Tabukan Tengah', 'Babi', 510],
            ['Manganitu', 'Sapi Potong', 0],
            ['Manganitu', 'Kambing', 9],
            ['Manganitu', 'Babi', 481],
            ['Tahuna', 'Sapi Potong', 13],
            ['Tahuna', 'Kambing', 11],
            ['Tahuna', 'Babi', 1315],
            ['Tahuna Timur', 'Sapi Potong', 0],
            ['Tahuna Timur', 'Kambing', 17],
            ['Tahuna Timur', 'Babi', 176],
            ['Tahuna Barat', 'Sapi Potong', 44],
            ['Tahuna Barat', 'Kambing', 22],
            ['Tahuna Barat', 'Babi', 1252],
            ['Tabukan Utara', 'Sapi Potong', 558],
            ['Tabukan Utara', 'Kambing', 131],
            ['Tabukan Utara', 'Babi', 694],
            ['Nusa Tabukan', 'Sapi Potong', 0],
            ['Nusa Tabukan', 'Kambing', 29],
            ['Nusa Tabukan', 'Babi', 58],
            ['Kepulauan Marore', 'Sapi Potong', 0],
            ['Kepulauan Marore', 'Kambing', 0],
            ['Kepulauan Marore', 'Babi', 51],
            ['Kendahe', 'Sapi Potong', 11],
            ['Kendahe', 'Kambing', 100],
            ['Kendahe', 'Babi', 240],
        ];

        $daging = [
            ['Sapi Potong', 2023, 22620],
            ['Sapi Potong', 2024, 22620],
            ['Sapi Potong', 2025, 23081],
            ['Kambing', 2023, 953],
            ['Kambing', 2024, 953],
            ['Kambing', 2025, 975],
            ['Babi', 2023, 117632],
            ['Babi', 2024, 116456],
            ['Babi', 2025, 128127],
            ['Ayam Ras Petelur', 2023, 2755],
            ['Ayam Ras Petelur', 2024, 2612],
            ['Ayam Ras Petelur', 2025, 2690],
            ['Ayam Ras Pedaging', 2023, 5593],
            ['Ayam Ras Pedaging', 2024, 32860],
            ['Ayam Ras Pedaging', 2025, 1783],
            ['Ayam Buras', 2023, 60620],
            ['Ayam Buras', 2024, 60660],
            ['Ayam Buras', 2025, 65726],
            ['Itik', 2023, 1704],
            ['Itik', 2024, 1704],
            ['Itik', 2025, 1749],
        ];

        foreach ($unggas as [$district, $animal, $value]) {
            SectorData::updateOrCreate(
                [
                    'sector_id' => $sectorId,
                    'dataset_type' => SectorData::TYPE_UNGGAS,
                    'animal_name' => $animal,
                    'district_name' => $district,
                    'year' => 2025,
                ],
                [
                    'label' => $animal,
                    'value' => $value,
                    'unit' => 'Ekor',
                    'month' => null,
                    'source' => $source,
                    'show_on_admin_dashboard' => true,
                    'show_on_front' => false,
                    'front_order' => 0,
                ]
            );
        }

        foreach ($ternak as [$district, $animal, $value]) {
            SectorData::updateOrCreate(
                [
                    'sector_id' => $sectorId,
                    'dataset_type' => SectorData::TYPE_TERNAK,
                    'animal_name' => $animal,
                    'district_name' => $district,
                    'year' => 2025,
                ],
                [
                    'label' => $animal,
                    'value' => $value,
                    'unit' => 'Ekor',
                    'month' => null,
                    'source' => $source,
                    'show_on_admin_dashboard' => true,
                    'show_on_front' => false,
                    'front_order' => 0,
                ]
            );
        }

        foreach ($daging as [$animal, $year, $value]) {
            SectorData::updateOrCreate(
                [
                    'sector_id' => $sectorId,
                    'dataset_type' => SectorData::TYPE_DAGING,
                    'animal_name' => $animal,
                    'district_name' => null,
                    'year' => $year,
                ],
                [
                    'label' => $animal,
                    'value' => $value,
                    'unit' => 'Kg',
                    'month' => null,
                    'source' => $source,
                    'show_on_admin_dashboard' => true,
                    'show_on_front' => false,
                    'front_order' => 0,
                ]
            );
        }
    }
}
