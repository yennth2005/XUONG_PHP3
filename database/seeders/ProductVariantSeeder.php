<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $products = Product::all();
        $colors = Color::all();

        // Đảm bảo có sản phẩm và màu sắc trước khi tạo biến thể
        if ($products->count() === 0 || $colors->count() === 0) {
            return;
        }

        // Tạo biến thể cho từng sản phẩm với màu ngẫu nhiên
        foreach ($products as $product) {
            $randomColors = $colors->random(rand(1, 3)); // Mỗi sản phẩm có 1-3 màu

            foreach ($randomColors as $color) {
                ProductVariant::factory()->create([
                    'product_id' => $product->id,
                    'color_id' => $color->id,
                ]);
            }
        }
    }
}
