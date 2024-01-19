<?php

use App\Http\Controllers\Refrigeracao\Aparelho\AparelhoController;
use App\Http\Controllers\Refrigeracao\Cliente\ClienteController;
use App\Http\Controllers\Refrigeracao\Servico\ServicoController;
use App\Http\Controllers\ResourceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ROTAS PREDITEC
|--------------------------------------------------------------------------
|
|
 */

/** CLIENTES */
Route::apiResource('/cliente', ClienteController::class);
/** CLIENTES */

/** SERVICO */
Route::apiResource('/servico', ServicoController::class);
/** SERVICO */

/** APARELHO */
Route::apiResource('/aparelho', AparelhoController::class);
/** APARELHO */

/** TIPO DOCUMENTO */
// Route::apiResource('/tipo-documento', ResourceController::class);
RouteResource::apiResource('tipo-documento', ResourceController::class, 'sss');
/** TIPO DOCUMENTO */

class RouteResource
{

    public static $data;

    public static function apiResource(string $route, $controller, $model)
    {
        self::$data = $model;
        return Route::apiResource($route, $controller);
    }
}
