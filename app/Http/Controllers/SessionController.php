<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function store(SessionRequest $request)
    {
        $attr = $request->validated();

        if (!Auth::attempt($attr, $request->remember ?? false)) {
            throw ValidationException::withMessages([
                'login_password' => 'Неверный логин или пароль'
            ]);
        }

        $request->session()->regenerate();
        return redirect()->route('home');

    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
