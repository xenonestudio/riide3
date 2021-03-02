<?php

namespace App\Http\Middleware;

use Closure;
use App\Tienda;
use App\Producto;

class Productos
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
        //dd(Producto::find($request->route("id"))->tienda_id);
        if( \Auth::user()->role_id == 3 && \Auth::user()->tienda()->get()[0]->id == Producto::find($request->route("id"))->tienda_id ){
            return $next($request);
        } else if(\Auth::user()->role_id == 1 || \Auth::user()->role_id == 2 ){
            return $next($request);
        } else {
            return redirect("/admin/productos");
        }

        //return $next($request);
    }
}
