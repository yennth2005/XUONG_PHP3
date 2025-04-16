<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateColorRequest extends FormRequest
{
    public function rules(): array
    {
        $id = $this->route('id');
        return [
            'name' => 'required|string|max:50|unique:colors,name,' . $id,
            'hex_code' => 'required|string|size:7|regex:/^#[A-Fa-f0-9]{6}$/|unique:colors,hex_code,' . $id,
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
