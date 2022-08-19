<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if(auth()->user()->role == User::ADMIN){
                    return redirect()->route('admin.dashboard');
                }else if(auth()->user()->role == User::CUSTOMER){
                    return redirect()->route('dashboard');
                }else if(auth()->user()->role == User::VENDOR){
                    return redirect()->route('vendor.dashboard');
                }else{
                    abort(404);
                }
                //return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
