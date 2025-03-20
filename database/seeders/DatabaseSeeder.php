<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Gọi CategorySeeder trước, sau đó FoodSeeder
        $this->call([
            CategorySeeder::class,
            FoodSeeder::class,
        ]);
    }
}
