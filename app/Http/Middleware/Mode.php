<?php

namespace App\Http\Middleware;

use Closure;
use App\Setting;

class Mode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Setting::hasChecked()){
            return $next($request);
        }
        
        return response()->view('errors.404', [], 404);
    }
}
