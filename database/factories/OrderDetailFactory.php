<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product = Product::inRandomOrder()->first() ?? Product::factory()->create(); // Lấy sản phẩm ngẫu nhiên hoặc tạo mới nếu chưa có
        $quantity = fake()->numberBetween(1, 5);
        $price = $product->price; // Lấy giá từ sản phẩm

        return [
            'order_id' => Order::factory(), // Tạo một order ngẫu nhiên nếu chưa có
            'product_id' => $product->id,
            'quantity' => $quantity,
            'price' => $price,
        ];
    }
}