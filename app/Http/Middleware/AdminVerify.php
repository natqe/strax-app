<?php

namespace App\Http\Middleware;

use Closure,
    Session;

class AdminVerify {

    public function handle($request, Closure $next) {
        if (Session::has('is_admin')) {
            return $next($request);
        } else {
            return abort(404);
        }
    }

}
