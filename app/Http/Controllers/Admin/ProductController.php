<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->leftJoin('product_variants', 'products.id', '=', 'product_variants.product_id')
            ->leftJoin('colors', 'product_variants.color_id', '=', 'colors.id')
            ->select(
                'products.id as product_id',
                'products.name as product_name',
                'products.description',
                'products.status',
                'categories.name as category_name',
                'product_variants.id as variant_id',
                'colors.name as color_name',
                'colors.hex_code',
                'product_variants.price',
                'product_variants.sale_price',
                'product_variants.stock'
            )
            ->orderBy('products.id', 'asc')
            ->get();
            return view('admin.products.list',compact('products'));
    }
}
