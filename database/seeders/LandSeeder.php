<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\District;
use App\Models\Land;
use App\Models\Sector;

class LandSeeder extends Seeder
{
    public function run(): void
    {
        $districts = ['Tahuna', 'Tahuna Timur', 'Tahuna Barat', 'Manganitu', 'Tamako', 'Kendahe'];
        
        foreach ($districts as $name) {
            District::create(['name' => $name]);
        }

        $sectors = Sector::all();
        $districtModels = District::all();

        // Create some sample lands
        foreach ($districtModels as $district) {
            foreach ($sectors->random(2) as $sector) {
                Land::create([
                    'district_id' => $district->id,
                    'sector_id' => $sector->id,
                    'area' => rand(1, 20),
                    'lat' => 3.516666 + (rand(-100, 100) / 1000),
                    'lng' => 125.422770 + (rand(-100, 100) / 1000),
                ]);
            }
        }
    }
}
