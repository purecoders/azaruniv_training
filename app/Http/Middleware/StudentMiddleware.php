<?php

namespace App\Http\Middleware;

use App\Http\Controllers\helper\UserHelper;
use Closure;
use Illuminate\Support\Facades\Auth;

class StudentMiddleware
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
      if(!UserHelper::isStudent(Auth::user())){
        return redirect('/home');
      }

      return $next($request);
    }
}
