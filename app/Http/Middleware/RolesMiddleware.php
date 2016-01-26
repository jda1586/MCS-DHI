<?php

namespace DHI\Http\Middleware;

use Closure;

class RolesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            $route = $request->route()->getName();
            $permissions = auth()->user()->role->permissions;
            $access_user = isset($permissions['user']) ? in_array($route, $permissions['user']) : false;
            $access_admin = isset($permissions['admin']) ?
                in_array($route, $permissions['admin']) :
                (strpos($route, 'admin') !== false ? true : false);
            if ($access_user || $access_admin) {
                return redirect()->route('home');
            }
        }
        return $next($request);
    }
}
