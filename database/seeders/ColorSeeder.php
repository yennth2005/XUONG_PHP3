<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Color::insert([
            ['name' => 'Đỏ', 'hex_code' => '#FF0000'],
            ['name' => 'Xanh dương', 'hex_code' => '#0000FF'],
            ['name' => 'Xanh lá', 'hex_code' => '#008000'],
            ['name' => 'Vàng', 'hex_code' => '#FFFF00'],
            ['name' => 'Cam', 'hex_code' => '#FFA500'],
            ['name' => 'Tím', 'hex_code' => '#800080'],
            ['name' => 'Hồng', 'hex_code' => '#FF69B4'],
            ['name' => 'Nâu', 'hex_code' => '#8B4513'],
            ['name' => 'Đen', 'hex_code' => '#000000'],
            ['name' => 'Trắng', 'hex_code' => '#FFFFFF'],
            ['name' => 'Xám', 'hex_code' => '#808080'],
            ['name' => 'Xanh ngọc', 'hex_code' => '#40E0D0'],
            ['name' => 'Xanh lục bảo', 'hex_code' => '#50C878'],
            ['name' => 'Xanh biển', 'hex_code' => '#1E90FF'],
            ['name' => 'Xanh rêu', 'hex_code' => '#556B2F'],
            ['name' => 'Đỏ đô', 'hex_code' => '#800000'],
            ['name' => 'Vàng nghệ', 'hex_code' => '#EAAA00'],
            ['name' => 'Be', 'hex_code' => '#F5F5DC'],
            ['name' => 'Hồng phấn', 'hex_code' => '#FFC0CB'],
            ['name' => 'Hồng đào', 'hex_code' => '#FFB6C1'],
        ]
        );    }
}
