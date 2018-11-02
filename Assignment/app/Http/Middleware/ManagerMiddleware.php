<?php
/**
 * Created by PhpStorm.
 * User: hillarydworkoski
 * Date: 28/9/18
 * Time: 5:36 PM
 */

namespace App\Http\Middleware;


class ManagerMiddleware
{

    public function handle($request, \Closure $next) {
        if($request->user() == null || $request->user()->role != 'manager') {
            return redirect('/');
        }

        return $next($request);
    }

}