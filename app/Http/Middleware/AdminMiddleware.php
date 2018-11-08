<?php

namespace App\Http\Middleware;

use App\Http\Controllers\helper\UserHelper;
use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if(!UserHelper::isAmin(Auth::user())){
          //return to not access page
          return redirect('/home');
        }
        return $next($request);
    }
}
