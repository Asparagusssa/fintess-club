<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class SessionRequest extends FormRequest
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
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required', Password::min(6)->max(254)->numbers()->letters()],
        ];
    }

    public function prepareForValidation() : void
    {
        $this->merge([
            'email' => $this->input('login_email'),
            'password' => $this->input('login_password'),
        ]);
    }
}
