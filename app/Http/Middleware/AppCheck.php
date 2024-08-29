<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class AppCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(URL::current() === "http://127.0.0.1:8000/about" && $request->age >= 18) {
            echo "<h1>This route is authorized!</h1>";
            return $next($request);
        } else if(URL::current()) {
            return $next($request);
        }
        die("Your are not allowed to access this page.");
    }
}
