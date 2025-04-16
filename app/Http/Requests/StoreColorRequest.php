<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreColorRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:50|unique:colors,name',
            'hex_code' => 'required|string|size:7|regex:/^#[A-Fa-f0-9]{6}$/|unique:colors,hex_code',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
