<?php

// app/Http/Middleware/IsAdmin.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

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
        // Check if the authenticated user is an admin
        if (auth()->check() && auth()->user()->role !== 'admin') {
            // If not an admin, redirect to home or any other page
            return redirect('/');
        }

        // Proceed with the request if the user is an admin
        return $next($request);
    }
}
