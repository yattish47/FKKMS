<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\fk_bursary;

class fk_bursarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fk_bursarys = [

            [
            'bursaryICNumber' => '891123104569', 
            'bursaryUsername' => 'hazim22',
            'bursaryPassword' => Hash::make('12345678'),
            'bursaryName' => 'Muhd Hazim',
            'bursaryEmail' => 'bursaryFK@gmail.com',
            'bursaryPhoneNumber' => '+60194568023', 
            'bursaryGender' => 'Male', 
            'bursaryNationality' => 'Malaysian',
            'bursaryAge' => '30',
            'bursaryOTP' => Null, // Hash the password
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ];

    foreach ($fk_bursarys as $key => $fk_bursary) {
        fk_bursary::create($fk_bursary);
    }
    }
}
