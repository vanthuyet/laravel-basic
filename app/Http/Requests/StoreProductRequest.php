<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {
        return [
            'ten' => 'string|max:255',
            'so_luong_ton' => 'required|integer|min:1',
            'gia_ban' => 'required',
            'mo_ta' => 'nullable|string',
            'supplier_id' => 'required|exists:suppliers,id',
        ];
    }
}
