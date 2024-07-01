<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'username' => 'required|string|min:3|max:16|unique:users,username',
            'password' => 'required|string|min:8|max:128|confirmed',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
