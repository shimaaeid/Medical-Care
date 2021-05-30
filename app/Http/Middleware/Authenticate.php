<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if(strpos($request->getRequestUri(), '/org_admin')){
            return  route('show_oa_login');
        }
        if(strpos($request->getRequestUri(), '/admin')){
            return  route('show_sa_login');
        }
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
