<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory()->create([
            'name' => 'Iqbal farhan syuhada',
            'email' => 'iqbalfarhan1996@gmail.com',
            'password' => 'adminoke'
        ]);

        $this->call([
            UserSeeder::class,
            JenisSeeder::class,
            PaketSeeder::class,
        ]);
    }
}
