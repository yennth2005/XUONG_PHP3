<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::factory(5)->create()->each(function ($order) {
            // Gán ngẫu nhiên một user cho đơn hàng
            $user = User::inRandomOrder()->first();
            if ($user) {
                $order->user_id = $user->id;
                $order->save();
            }
        });
    }
}