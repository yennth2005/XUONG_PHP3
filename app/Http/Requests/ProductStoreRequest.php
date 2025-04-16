<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'color_id' => 'nullable|integer|exists:colors,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'sale_price' => [
                'nullable',
                'numeric',
                'min:0',
                function ($attribute, $value, $fail) {
                    $price = request()->input('price');

                    if ($value !== null && $price !== null && $value >= $price) {
                        $fail('Giá sale phải nhỏ hơn giá gốc.');
                    }

                    if ($value !== null && $price !== null && $price > 0) {
                        $discountPercentage = (($price - $value) / $price) * 100;
                        if ($discountPercentage > 10) {
                            $fail('Mức giảm giá không được vượt quá 10%. Hiện tại là ' . round($discountPercentage, 2) . '%.');
                        }
                    }
                },
            ],
            'stock' => 'required|integer|min:0',
            'status' => 'nullable|in:active,deleted',
        ];
    }
}
