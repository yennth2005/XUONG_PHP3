<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    protected $productRepo;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function store($data)
    {
        if (isset($data['image'])) {
            $data['image'] = $data['image']->store('products', 'public');
        }

        return $this->productRepo->store($data);
    }

    public function update($product, $data)
    {
        if (isset($data['image'])) {
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }
            $data['image'] = $data['image']->store('products', 'public');
        }

        return $this->productRepo->update($product, $data);
    }

    public function delete($product)
    {
        return $this->productRepo->delete($product);
    }

    public function forceDelete($product)
    {
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        return $this->productRepo->forceDelete($product);
    }

    public function restore($product)
    {
        return $this->productRepo->restore($product);
    }
}

