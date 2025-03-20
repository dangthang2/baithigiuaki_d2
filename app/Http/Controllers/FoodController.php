<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function showBanhMi()
    {
        // Giả sử bạn đã có Category tên "Bánh mì"
        // Lấy danh mục "Bánh mì" (nếu Category có cột 'name' là 'Bánh mì')
        $banhMiCategory = Category::where('name', 'Bánh mì')->first();

        // Nếu chưa có, bạn có thể tạo:
        // if (!$banhMiCategory) {
        //     $banhMiCategory = Category::create(['name' => 'Bánh mì']);
        // }

        // Lấy danh sách món ăn thuộc Category "Bánh mì"
        $foods = $banhMiCategory ? $banhMiCategory->foods : collect();

        // Trả về view, truyền biến $foods
        return view('layout.banhmi', compact('foods'));
    }
}
