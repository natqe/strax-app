<?php

namespace App\Http\Middleware;

use Closure,
    Session;

class UserSigned {

    public function handle($request, Closure $next) {
        if (Session::has('user_id')) {
            return redirect('');
        } else {
            return $next($request);
        }
    }

}
