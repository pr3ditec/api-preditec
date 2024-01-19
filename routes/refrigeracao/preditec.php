<?php

use App\Http\Controllers\Refrigeracao\Aparelho\AparelhoController;
use App\Http\Controllers\Refrigeracao\Cliente\ClienteController;
use App\Http\Controllers\Refrigeracao\Documento\TipoDocumentoController;
use App\Http\Controllers\Refrigeracao\Servico\ServicoController;
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
Route::apiResource('/tipo-documento', TipoDocumentoController::class);
/** TIPO DOCUMENTO */
