<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        if(!$user)
        {
            return redirect()->route('login');
        }
        return redirect()->route('admin.index');
    }
}
