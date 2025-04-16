<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
        'price' => 'required|numeric|min:0',
        'sale_price' => 'nullable|numeric|min:0',
        'stock' => 'required|integer|min:0',
        'status' => 'nullable|in:active,deleted',
        // còn lại giữ nguyên
    ];
}
}