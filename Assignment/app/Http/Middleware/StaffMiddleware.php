<?php
/**
 * Created by PhpStorm.
 * User: hillarydworkoski
 * Date: 28/9/18
 * Time: 5:35 PM
 */

namespace App\Http\Middleware;


class StaffMiddleware
{

    public function handle($request, \Closure $next) {
        if($request->user() == null || $request->user()->role != 'staff') {
            return redirect('home');
        }

        return $next($request);
    }

}