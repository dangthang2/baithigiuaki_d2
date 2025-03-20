<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Food;
use App\Models\Category;

class FoodSeeder extends Seeder
{
    public function run()
    {
        // Lấy danh mục "Bánh mì"
        $banhMi = Category::where('name', 'Bánh mì')->first();
        if (!$banhMi) {
            $banhMi = Category::create(['name' => 'Bánh mì']);
        }

        Food::create([
            'name'        => 'Bánh Mì Heo Quay',
            'price'       => 69000,
            'description' => 'Bánh mì kẹp thịt heo quay Việt Nam',
            'quantity'    => 10,
            'image'       => 'https://example.com/banh-mi-heo-quay.jpg',
            'category_id' => $banhMi->id,
        ]);

        Food::create([
            'name'        => 'Bánh Mì Gà Xả',
            'price'       => 69000,
            'description' => 'Bánh mì kẹp thịt gà xả Việt Nam',
            'quantity'    => 8,
            'image'       => 'https://example.com/banh-mi-ga-xa.jpg',
            'category_id' => $banhMi->id,
        ]);

        // Thêm các món khác nếu cần...
    }
}
