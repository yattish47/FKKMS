<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\fk_technicalteam;

class fk_technicalteamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fk_technicalteam = [
            [
            'ttICNumber' => '951208101698', 
            'ttUsername' => 'Sya22',
            'ttPassword' => Hash::make('12345678'),
            'ttName' => 'Muhd Syaqim',
            'ttEmail' => 'techteamFK@gmail.com',
            'ttPhoneNumber' => '+60195392110', 
            'ttGender' => 'Male', 
            'ttNationality' => 'Malaysian',
            'ttAge' => '28',
            'ttOTP' => Null, // Hash the password
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ];

    foreach ($fk_technicalteam as $key => $fk_technicalteam) {
        fk_technicalteam::create($fk_technicalteam);
    }
    }
}
