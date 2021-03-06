<?php

namespace App\Http\Middleware;

use Closure;

class StoreMiddleware
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
        //dd(\Auth::user());

        if( \Auth::user()->role_id == 1 || \Auth::user()->role_id == 2 ){
            return $next($request);
        } else if( \Auth::user()->tienda()->count() > 0 ){
            if( \Auth::user()->tienda()->get()[0]->id == (int)$request->route("id") ){
                return $next($request);
            }
        } else {
            return redirect("/admin/tiendas");
        }

        /*if( \Auth::user()->tienda()->get()[0]->id == (int)$request->route("id")){
            
        } else if(\Auth::user()->role_id == 1 || \Auth::user()->role_id == 2 ){
            return $next($request);
        } else {
            return redirect("/admin/tiendas");
        }*/
    }
}
