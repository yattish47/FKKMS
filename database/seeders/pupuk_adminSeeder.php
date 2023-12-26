<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\pupuk_admin;

class pupuk_adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pupuk_admins = [


            [
            'pICNumber' => '900622101688', 
            'pUsername' => 'Zul44',
            'pAdminPassword' => Hash::make('12345678'),
            'pAdminName' => 'Zul Fahmi',
            'pEmail' => 'pupukadminFK@gmail.com',
            'pPhoneNumber' => '+60195392350', 
            'pGender' => 'Male', 
            'pNationality' => 'Malaysian',
            'pAge' => '30',
            'pOTP' => Null, // Hash the password
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ];

    foreach ($pupuk_admins as $key => $pupuk_admin) {
        pupuk_admin::create($pupuk_admin);
    }
}

}