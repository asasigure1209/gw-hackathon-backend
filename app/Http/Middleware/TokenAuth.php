<?php

namespace App\Http\Middleware;

use Closure;
use App\KipUser;

class TokenAuth
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
        if ($request->is("login") && $request->isMethod("post") || $request->is("kip_users") && $request->isMethod("post")) {
            return $next($request);
        }

        $token = request()->bearerToken();
        $user = KipUser::where("token", $token)->first();
        if ($token && $user) {
            return $next($request);
        } else {
            abort(401);
        }
    }
}
