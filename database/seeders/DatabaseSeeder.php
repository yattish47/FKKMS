<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\kiosk_participant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            kiosk_participantSeeder::class
          ]);
        $this->call([
            pupuk_adminSeeder::class
          ]);
      $this->call([
        kiosksSeeder::class
      ]);
      $this->call([
        adminSeeder::class
      ]);
      $this->call([
        fk_bursarySeeder::class
      ]);
      $this->call([
        fk_technicalteamSeeder::class
      ]);
    }
}
