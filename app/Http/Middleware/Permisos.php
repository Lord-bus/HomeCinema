<?php

namespace App\Http\Middleware;
use Closure;
// use App\Http\Controllers\Auth;
// use App\User;
use Auth;
class Permisos
{
    public function handle($request, Closure $next)
    {
      if(Auth::user()->role==1)
      {
          return $next($request);
      }
      return redirect('/home')->with('error','<br><br><br><br><p class="text-center pt-3">No tiene Permiso de Administrador');
    }
}
