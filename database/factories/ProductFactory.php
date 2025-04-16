<?php

namespace Database\Factories;

use App\Http\Controllers\admin\CategoryController;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;

    public function definition()
    {
        // Lấy ngẫu nhiên một ID từ bảng `categories`
        $categoryId = DB::table('categories')->inRandomOrder()->value('id');

        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'category_id' => $categoryId ?? 1, // Nếu không có category thì đặt mặc định là 1
            'status' => 'active',
        ];
    }
}
