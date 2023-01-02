<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HousesRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'house_1' => 'nullable|numeric',
            'house_2' => 'nullable|numeric',
            'house_3' => 'nullable|numeric',
            'orcamento' => 'required|numeric',
        ];
    }
}
