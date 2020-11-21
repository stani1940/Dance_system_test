<?php

namespace App\Http\Middleware;

use Closure;

class isArbiter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user()->roles()->name == 'arbiter')
        {
            return redirect('admin.users.show'); 
        }
    }
}
