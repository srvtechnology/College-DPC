<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionMiddlewire
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if ($user) {
            $school = getSchoolInfoByUsername($user->username);

            // $checkSession = Session::where('school_id', $school->id)
            //     ->where('is_deleted', '0')
            //     ->where('is_active', '1')
            //     ->first();

            // if ($checkSession) {
            //     $current_date = date("Y-m-d");
            //     if ($current_date > $checkSession->end_date) {
            //         return to_route("school.view-all-session")
            //             ->with('error', 'Kindly Check your Session First');
            //     }
            // }
            // else
            // {
            //     return to_route("school.view-all-session")
            //             ->with('error', 'Kindly Add Session First');
            // }
        }

        return $next($request);
    }

}
