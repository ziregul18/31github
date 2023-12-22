<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $langPrefix = ltrim($request->route()->getPrefix(), '/');
        if($langPrefix){
            $langPrefix = explode('/', $langPrefix);
            $d = strval(array_search('tr', $langPrefix, true));

            if($d != ''){
                App::setLocale("tr");
            }
            else{
                App::setLocale('ky');
            }

        }
        else{
            App::setLocale('ky');
        }

        return $next($request);
    }
}
