<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::all()->each(function ($order) {
            // Tạo ngẫu nhiên 1 đến 5 order detail cho mỗi order
            OrderDetail::factory(fake()->numberBetween(1, 5))->create([
                'order_id' => $order->id,
                'product_id' => Product::inRandomOrder()->first()->id ?? Product::factory()->create()->id,
            ]);
        });
    }
}