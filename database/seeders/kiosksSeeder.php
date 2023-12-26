<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kiosks;
class kiosksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kiosks = [
            [
            'kioskID' => 'K0001', 
            'kApplicationID' => Null,
            'kpICNumber' => Null,
            'kioskLocation' => 'Ground Floor, Left Wing',
            'kioskStatus' => 'Not Active', 
            'kioskCondition' => 'Great', 
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'kioskID' => 'K0002', 
            'kApplicationID' => Null,
            'kpICNumber' => Null,
            'kioskLocation' => 'Ground Floor, Right Wing',
            'kioskStatus' => 'Not Active', 
            'kioskCondition' => 'Great', 
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'kioskID' => 'K0003', 
            'kApplicationID' => Null,
            'kpICNumber' => Null,
            'kioskLocation' => 'Ground Floor, Right Wing',
            'kioskStatus' => 'Not Active', 
            'kioskCondition' => 'Great', 
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'kioskID' => 'K0004', 
            'kApplicationID' => Null,
            'kpICNumber' => Null,
            'kioskLocation' => 'Ground Floor, Right Wing',
            'kioskStatus' => 'Not Active', 
            'kioskCondition' => 'Great', 
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'kioskID' => 'K0005', 
            'kApplicationID' => Null,
            'kpICNumber' => Null,
            'kioskLocation' => 'Ground Floor, Left Wing',
            'kioskStatus' => 'Not Active', 
            'kioskCondition' => 'Great', 
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ];

    foreach ($kiosks as  $kiosk) {
        kiosks::create($kiosk);
    }
    }
}
