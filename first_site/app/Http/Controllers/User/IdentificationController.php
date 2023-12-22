<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class IdentificationController extends Controller
{
    public function identification(Request $request)
    {
        $data = $request->validate([
            'device_name'=>'string|required',
            ]);

        $hash = Hash::make($data['device_name'] . Carbon::now()) . Hash::make(Hash::make($data['device_name'].Carbon::now() . round(1000000000, 9999999999)));
        User::create([
            'name' => $data['device_name'],
            'device_name' => $data['device_name'],
            'token' => $hash,
            'role' => 1,
            'is_registered' => false
        ]);
        return response(['token' => $hash]);
    }
}
