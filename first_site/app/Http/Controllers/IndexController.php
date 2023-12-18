<?php
namespace App\Http\Controllers;
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
