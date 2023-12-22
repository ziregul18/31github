<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('admin.profile.show', compact('user'));
    }
    public function edit()
    {
        $user = Auth::user();
        return view('admin.profile.edit', compact('user'));
    }

    public function update(Request $request, User $user){
        $data = $request->validate([
            'name'=>'required|string',
            'email' => 'string|email',
        ]);
        $result = $user->update($data);
        if ($result) {
            return redirect()->route('admin.profile.show')->with(['notification' => 'Profile updated successfully']);
        } else {
            return redirect()->route('admin.profile.show')->with(['notification' => 'Failed to update profile']);
        }
    }

}
