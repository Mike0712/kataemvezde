<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $partner_id = \Route::current()->parameters()['partner_id']; //получаем partner_id
        if(!$partner_id) $partner_id = 1;
        
        if (!Auth::check()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('iframe/'.$partner_id.'/login');
            }
        }
        
        return $next($request);
    }
}
