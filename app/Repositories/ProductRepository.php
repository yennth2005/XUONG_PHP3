<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function getAll()
    {
        return Product::with('category', 'color')->latest()->paginate(10);
    }

    public function store(array $data)
    {
        return Product::create($data);
    }

    public function update(Product $product, array $data)
    {
        return $product->update($data);
    }

    public function delete(Product $product)
    {
        return $product->delete();
    }

    public function forceDelete(Product $product)
    {
        return $product->forceDelete();
    }

    public function restore(Product $product)
    {
        return $product->restore();
    }

    public function getTrashed()
    {
        return Product::onlyTrashed()->with('category', 'color')->latest()->paginate(10);
    }

    public function find($id)
    {
        return Product::findOrFail($id);
    }

    public function findWithTrashed($id)
    {
        return Product::withTrashed()->findOrFail($id);
    }
}