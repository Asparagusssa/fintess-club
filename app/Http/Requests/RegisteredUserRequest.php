<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisteredUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:254', 'string', 'regex:/^[а-яА-Яa-zA-Z]+$/u'],
            'surname' => ['required', 'max:254', 'string', 'regex:/^[а-яА-Яa-zA-Z]+$/u'],
            'sex' => ['required', 'string', 'in:male,female'],
            'email' => ['required', 'email', 'max:254', 'unique:users,email'],
            'password' => ['required', Password::min(6)->max(254)->numbers()->letters(), 'confirmed'],
        ];
    }
}
