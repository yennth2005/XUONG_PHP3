<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cart_items')->truncate(); // Xóa dữ liệu cũ (nếu có)

        Cart::all()->each(function ($cart) {
            // Lấy ngẫu nhiên một số sản phẩm
            $products = Product::inRandomOrder()->take(fake()->numberBetween(1, 3))->get();

            foreach ($products as $product) {
                CartItem::create([
                    'cart_id' => $cart->id,
                    'product_id' => $product->id,
                    'quantity' => fake()->numberBetween(1, 5),
                ]);
            }
        });
    }
}