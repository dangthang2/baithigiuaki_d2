<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Seed 3 danh mục cố định
        Category::create(['name' => 'Bánh mì']);
        Category::create(['name' => 'Cơm dĩa']);
        Category::create(['name' => 'Bún phở']);
    }
}
