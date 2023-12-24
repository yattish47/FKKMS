<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\kiosk_participant;
use App\Models\User;

class kiosk_participantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $kiosk_participants = [


            [
            'kpICNumber' => '010512101689', 
            'kpName' => 'Yattish',
            'kpUsername' => 'yattish47',
            'kpEmail' => 'yattish@gmail.com',
            'kpType' => 'Kiosk Participant',
            'kpPhoneNumber' => '+601654654646', 
            'kpMatricID' => 'CB21134', 
            'kpNationality' => 'Malaysian',
            'kpAge' => '22',
            'kpPassword' => Hash::make('12345678'), // Hash the password
            'kpOTP' => Null,
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'kpICNumber' => '010612101644', 
            'kpName' => 'Aiman',
            'kpUsername' => 'aiman88',
            'kpEmail' => 'aiman@gmail.com',
            'kpType' => 'Vendor',
            'kpPhoneNumber' => '+6016565452', 
            'kpMatricID' => Null, 
            'kpNationality' => 'Malaysian',
            'kpAge' => '29',
            'kpPassword' => Hash::make('12345678'), // Hash the password
            'kpOTP' => Null,
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'kpICNumber' => '020603161259', 
            'kpName' => 'John',
            'kpUsername' => 'johncena',
            'kpEmail' => 'johncena@gmail.com',
            'kpType' => 'Kiosk Participant',
            'kpPhoneNumber' => '+60163945361', 
            'kpMatricID' => 'CA21055', 
            'kpNationality' => 'Malaysian',
            'kpAge' => '20',
            'kpPassword' => Hash::make('12345678'), // Hash the password
            'kpOTP' => Null,
            'created_at' => now(),
            'updated_at' => now(),
        ],
            
        ];
        

        foreach ($kiosk_participants as $key => $kiosk_participant) {
			kiosk_participant::create($kiosk_participant);
        }
    }
}
