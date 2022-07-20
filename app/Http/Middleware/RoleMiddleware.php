<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,...$roles)
    {
        if(in_array($request->user()->role,$roles))
        return $next($request);

        /** @var User $user */
            $user = Auth::user();
            if ( $user->hasRole('penyewa') ) {
                return redirect(route('dashboard.index'));
            }

            // allow  to proceed with request
            else if ( $user->hasRole('pemilik') ) {
                return redirect(route('dashboardadmin.index'));
            }
    }
}
