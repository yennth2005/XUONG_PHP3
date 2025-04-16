<?php

namespace Database\Factories;

use App\Models\Color;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductVariant>
 */
class ProductVariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ProductVariant::class;

    public function definition()
    {
        return [
            'product_id' => Product::factory(), // Tạo product nếu chưa có
            'color_id' => Color::factory(), // Tạo color nếu chưa có
            'price' => $this->faker->randomFloat(2, 100, 500),
            'sale_price' => $this->faker->randomFloat(2, 50, 400),
            'stock' => rand(10, 100),
        ];
    }
}
