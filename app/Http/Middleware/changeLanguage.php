<?php

namespace App\Http\Middleware;

use Closure;

class changeLanguage
{
    //this is middleware will check the language come to the server from the front or apps
    public function handle($request, Closure $next)
    {
        app()->setLocale('ar');

        if(isset($request->lang) &&  $request->lang == 'en'){
            app()->setLocale('en');

        }

        return $next($request);
    }
}
