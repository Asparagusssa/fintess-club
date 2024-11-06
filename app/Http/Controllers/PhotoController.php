<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'photo' => ['required', 'image', 'mimes:jpeg,png,jpg,svg', 'max:2048']
        ]);

        $path = $request->file('photo')->store('user-photos', 'public');

        if (Auth::user()->photo) {
            File::delete(storage_path('app/public/' . Auth::user()->photo));
        }

        Auth::user()->update([
            'photo' => $path
        ]);

        return redirect()->route('user.profile');
    }
}
