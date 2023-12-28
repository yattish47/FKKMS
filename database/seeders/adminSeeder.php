<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\admin;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [


            [
            'admin_ID' => 001, 
            'admin_username' => 'Admin01',
            'adminPassword' => Hash::make('12345678'),
            'adminName' => 'Admin',
            'adminEmail' => 'adminFK@gmail.com',
            'adminPhoneNumber' => '+60156983015', 
            'adminGender' => 'Male', 
            'adminOTP' => Null, // Hash the password
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ];

    foreach ($admins as $key => $admin) {
        admin::create($admin);
    }
    }
}
