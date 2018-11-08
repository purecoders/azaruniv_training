<?php

namespace App\Http\Middleware;

use App\Http\Controllers\helper\UserHelper;
use Closure;
use Illuminate\Support\Facades\Auth;

class MasterMiddleware
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
        if(!UserHelper::isMaster(Auth::user())){
          //return to not access page
          return redirect('/home');
        }
        return $next($request);
    }
}
