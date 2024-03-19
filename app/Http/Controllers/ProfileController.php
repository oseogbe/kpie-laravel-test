<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function viewProfile(Request $request)
    {
        $user = auth()->user();

        return view('profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = $request->user();

        $request->validate([
            'name' => 'nullable|string',
            'email' => [
                'required',
                'string',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
            'password' => 'nullable|string|confirmed',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->hasFile('picture')) {
            $picture = $request->file('picture')->store('pictures', 'public');
            $user->picture = $picture;
        }

        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }
}
