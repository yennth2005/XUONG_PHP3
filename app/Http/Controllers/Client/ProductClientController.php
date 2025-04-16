<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductClientController extends Controller
{
    public function show($id)
    {
        $product = Product::find($id);

        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $id)
            ->get();

        return view('client.product-details', compact('product', 'relatedProducts'));
    }
}
