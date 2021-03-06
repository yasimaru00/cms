<?php

namespace Database\Seeders;

use App\Models\Flower;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([FlowerSeeder::class]);
        $this->call([ListBungaSeeder::class]);
        $this->call([UserSeeder::class]);
    }
}
