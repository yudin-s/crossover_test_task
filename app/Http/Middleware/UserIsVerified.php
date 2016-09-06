<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;

class UserIsVerified {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (Auth::check() && Auth::user()->isVerify()) {
            return $next($request);
        } else {
            return redirect('/')->withErrors(['You need verification email. Please check inbox.']);
        }
    }

}
