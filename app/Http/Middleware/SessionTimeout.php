<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionTimeout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $lastActivity = $request->session()->get('lastActivity');

            if ($lastActivity && now()->diffInMinutes($lastActivity) > config('session.lifetime')) {
                if (!empty(Auth::user()->school_id)) {
                    Auth::logout();
                    return redirect()->route('school.login');
                }
                Auth::logout();
                return redirect()->route('login');
            }
        }

        $request->session()->put('lastActivity', now());

        return $next($request);
    }
    

}
