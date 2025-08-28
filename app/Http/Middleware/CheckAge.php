<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    
    public function handle(Request $request, Closure $next): Response
    {
        if($request->age <= 200) {
            return redirect('home');
        }
        return $next($request);
    }
}
