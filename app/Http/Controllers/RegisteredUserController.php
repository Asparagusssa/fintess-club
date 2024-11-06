<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisteredUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(RegisteredUserRequest $request)
    {
        $attr = $request->validated();

        $user = User::create($attr);
        Auth::login($user, $request->remember ?? false);

        Auth::user()->balance()->create();

        return redirect()->route('user.profile');
    }
}
