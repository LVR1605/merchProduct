<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' => 'nullable|string',
            'photo' => 'nullable|string',
            'type' => 'nullable|string',
            'quantity' => 'nullable|integer',
            'price' => 'required|numeric',
        ];
    }
}