<?php

namespace App\Http\Middleware;

use Closure;

class checkPassword
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
        if($request->api_password != env('API_PASSWORD', 'cbdscvsdvcdff')){
            return response()->json([
                'message' => 'unauthanticated'
            ]);
        }

        return $next($request);
    }
}
