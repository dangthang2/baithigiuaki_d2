<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Food;
use App\Models\Category;

class FoodFactory extends Factory
{
    protected $model = Food::class;

    public function definition()
    {
        return [
            'name'        => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'price'       => $this->faker->randomFloat(2, 10, 100),
            'quantity'    => $this->faker->numberBetween(1, 50),
            'category_id' => Category::factory(), // Tự tạo category mới nếu chưa có
        ];
    }
}
