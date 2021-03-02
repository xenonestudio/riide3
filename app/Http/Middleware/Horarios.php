<?php

namespace App\Http\Middleware;

use Closure;
use App\Horario;

class Horarios
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
        if( \Auth::user()->role_id == 3 && \Auth::user()->tienda()->get()[0]->id == Horario::find($request->route("id"))->tienda_id ){
            return $next($request);
        } else if(\Auth::user()->role_id == 1 || \Auth::user()->role_id == 2 ){
            return $next($request);
        } else {
            return redirect("/admin/horarios");
        }
    }
}
