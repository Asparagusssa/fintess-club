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
            'login_email' => ['required', 'email', 'max:254'],
            'login_password' => ['required', Password::min(6)->max(254)->numbers()->letters()],
        ];
    }

    public function validated($key = null, $default = null)
    {
        $validatedData = parent::validated($key, $default);
        $validatedData['email'] = $validatedData['login_email'];
        $validatedData['password'] = $validatedData['login_password'];
        unset($validatedData['login_email'], $validatedData['login_password']);
        return $validatedData;
    }


}
