<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
}