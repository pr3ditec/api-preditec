<?php

namespace App\Http\Middleware;

use App\Models\Login;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyUserToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /** VERIFICA SE O TOKEN FOI PASSADO NO CABECALHO */
        if (!$request->header('Authorization')) {

            return response()->json([
                "status" => false,
                "message" => "tokenNotInformed",
            ], 401);
        }

        /** VERIFICA SE O TOKEN ESTA VINCULADO COM ALGUM USUARIO*/
        $auth = Login::where('token', '=', $request->header('Authorization'))->get();
        if ($auth->isEmpty()) {

            return response()->json([
                "status" => false,
                "message" => "tokenInvalid",
            ], 401);
        }

        return $next($request);
    }
}
