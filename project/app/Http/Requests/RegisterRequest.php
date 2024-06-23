<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:30',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => [
                'required',
                'string',
                'min:8', 
                'regex:/[a-z]/', 
                'regex:/[A-Z]/', 
                'regex:/[0-9]/', 
                'confirmed', 
            ],
        ];
    }
}
