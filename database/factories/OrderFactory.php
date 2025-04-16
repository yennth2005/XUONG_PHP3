<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = fake()->randomElement(['pending', 'processing', 'shipped', 'delivered', 'canceled']);

        return [
            'user_id' => User::factory(), // Giả sử bạn có model User và factory tương ứng
            'total_price' => fake()->randomFloat(2, 50, 5000),
            'status' => $status,
        ];
    }
}