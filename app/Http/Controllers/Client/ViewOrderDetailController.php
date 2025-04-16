<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewOrderDetailController extends Controller
{
    public function show($id)
    {
        //dữ liệu đây chỉ là để test layout thôi

        $order = (object) [
            'id' => $id,
            'created_at' => now()->subDays(1),
            'status' => 'delivered',
            'payment_method' => 'Thanh toán khi nhận hàng (COD)',
            'customer' => (object) [
                'name' => 'Nguyễn Văn A',
                'phone' => '0123 456 789',
                'address' => '123 Đường Láng, Đống Đa, Hà Nội',
                'email' => 'nguyen.van.a@example.com',
            ],
            'items' => [
                (object) [
                    'name' => 'Áo thun nam',
                    'quantity' => 2,
                    'price' => 300000,
                    'total' => 600000,
                ],
                (object) [
                    'name' => 'Quần jeans',
                    'quantity' => 1,
                    'price' => 500000,
                    'total' => 500000,
                ],
            ],
            'total' => 1500000,
            'shipping_fee' => 50000,
        ];
        return view('client.view-order-detail', compact('order'));
    }
}
