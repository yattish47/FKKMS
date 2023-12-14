<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class kiosk_participantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $plainPassword = '12345678';
        $hashedPassword = Hash::make($plainPassword);
        foreach (range(1, 10) as $index) { // Adjust the range for the number of records you want to create
            DB::table('kiosk_participants')->insert([
                'kpICNumber' => $faker->numerify('#############'), // 13 digits
                'kpName' => $faker->name,
                'kpUsername' => $faker->userName,
                'kpEmail' => $faker->email,
                'kpType' => $faker->word,
                'kpPhoneNumber' => '+60' . $faker->numerify('#########'), // 13 digits
                'kpMatricID' => 'C' . $faker->randomLetter . $faker->numerify('#####'), // C + letter + 5 digits
                'kpNationality' => $faker->country,
                'kpAge' => $faker->numberBetween(18, 60),
                'kpPassword' => $hashedPassword, // Hash the password
                'kpOTP' => $faker->numberBetween(100000, 999999),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
