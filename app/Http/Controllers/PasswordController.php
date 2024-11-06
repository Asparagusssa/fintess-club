<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class PasswordController extends Controller
{
    public function showResetForm()
    {
        return view('user.reset-password');
    }

    public function resetPassword(ResetPasswordRequest $request)
    {
        $request->validated();

        if (!Hash::check($request->input('password'), Auth::user()->password)) {
            throw ValidationException::withMessages([
                'password' => 'Неверный пароль',
            ]);
        }

        Auth::user()->update([
            'password' => Hash::make($request->input('new-password'))
        ]);

        Auth::logoutOtherDevices($request->input('new-password'));

        return redirect()->route('user.profile');
    }
}
