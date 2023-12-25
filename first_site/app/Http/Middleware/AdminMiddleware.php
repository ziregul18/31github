<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->user()){
            return redirect()->route('auth.login');
        }
        if (auth()->user()->role !== User::ADMIN){
            abort(404);
        }
        return $next($request);
    }
}
