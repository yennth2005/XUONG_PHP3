<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrdersHistoryStatus;
use Illuminate\Database\Seeder;

class OrdersHistoryStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::all()->each(function ($order) {
            // Tạo một bản ghi lịch sử trạng thái ban đầu khi đơn hàng được tạo
            OrdersHistoryStatus::create([
                'order_id' => $order->id,
                'status' => $order->status, // Giả sử model Order có trường status
                'changed_at' => $order->created_at,
            ]);

            // Tạo thêm một số bản ghi lịch sử trạng thái ngẫu nhiên (từ 0 đến 2)
            OrdersHistoryStatus::factory(fake()->numberBetween(0, 2))->create([
                'order_id' => $order->id,
            ]);
        });
    }
}