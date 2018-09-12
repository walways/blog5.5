<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;


class CheckAge
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

        if($request->get('age') <= 200){
            //var_dump($request->get('age'));die;
           Route::redirect('/test','/',302);

        }

        return $next($request);
    }
}
