<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class PermissionCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next,$permission)
    {
        if (!Auth::guard('admin')->user()->hasPermissionTo($permission,'admin')) {
            abort(403, 'Unauthorized action.');
        }
        return $next($request);
    }
}
