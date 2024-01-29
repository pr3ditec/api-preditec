<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function apiResponse($code, $status, $message, $content = [])
    {
        return response()->json([
            "status" => $status,
            "message" => $message,
            "content" => $content,
        ], $code);
    }

    public function getUserByToken($token)
    {
        $login = Login::where("token", "=", $token)->get();
        return $login[0]->usuario_id;
    }

}
