<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $adminId = Role::where('name', 'admin')->first()->id;
        if (Auth::user()->role_id !== $adminId) {
            return redirect()->route('/');
        }
        return $next($request);
    }
}