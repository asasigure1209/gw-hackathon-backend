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
        // ログイン・ログアウト・サインアウトは素通し
        if (
            $request->is("login") && $request->isMethod("post") ||
            $request->is("kip_users") && $request->isMethod("post") ||
            $request->is("logout") && $request->isMethod("post")
        ) {
            return $next($request);
        }

        $token = request()->bearerToken();
        $user = KipUser::where("token", $token)->first();

        // 変更を加えるメソッドは本人確認をする
        if ($token && $user) {
            if ($request->isMethod("get")) {
                return $next($request);
            }

            if ($user->id == $request->user_id) {
                return $next($request);
            }
        }
            
        return abort(401);
    }
}
