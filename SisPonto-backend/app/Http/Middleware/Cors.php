<?php

namespace App\Http\Middleware;
use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class Cors extends  Middleware
{

    public  function  handle($request, \Closure $next)
    {
        return $next($request)->header('Access-Control-Allow-Origin', "*")
            ->header('Access-Control-Allow-Methods', "PUT, POST, DELETE, GET, OPTIONS")
            ->header('Access-Control-Allow-Headers', "Accept, Authorization, Content-Type");
    }
}
