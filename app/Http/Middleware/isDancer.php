<?php

namespace App\Http\Middleware;

use Closure;

class isDancer
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
        if ($request->user()->roles()->name == 'dancer')
        {
            return redirect('dancers.list'); 
    }
}
