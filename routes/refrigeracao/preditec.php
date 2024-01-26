<?php

use App\Http\Controllers\Refrigeracao\Aparelho\AparelhoController;
use App\Http\Controllers\Refrigeracao\Cliente\ClienteController;
use App\Http\Controllers\Refrigeracao\Documento\TipoDocumentoController;
use App\Http\Controllers\Refrigeracao\Endereco\CidadeController;
use App\Http\Controllers\Refrigeracao\Endereco\EstadoController;
use App\Http\Controllers\Refrigeracao\Endereco\PaisController;
use App\Http\Controllers\Refrigeracao\Pagamento\FormaPagamentoController;
use App\Http\Controllers\Refrigeracao\Pagamento\PagamentoController;
use App\Http\Controllers\Refrigeracao\Pagamento\StatusPagamentoController;
use App\Http\Controllers\Refrigeracao\Servico\ServicoController;
use App\Http\Controllers\Refrigeracao\Servico\ServicoTipoController;
use App\Http\Controllers\Refrigeracao\Servico\StatusServicoController;
use App\Http\Controllers\Refrigeracao\Servico\TipoServicoController;
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
Route::apiResource('/servico-tipo', ServicoTipoController::class);
Route::apiResource('/tipo-servico', TipoServicoController::class);
Route::apiResource('/status-servico', StatusServicoController::class);
/** SERVICO */

/** APARELHO */
Route::apiResource('/aparelho', AparelhoController::class);
/** APARELHO */

/** TIPO DOCUMENTO */
Route::apiResource('/tipo-documento', TipoDocumentoController::class);
/** TIPO DOCUMENTO */

/** LOCALIDADES */
Route::apiResource('/cidade', CidadeController::class);
Route::apiResource('/estado', EstadoController::class);
Route::apiResource('/pais', PaisController::class);
/** LOCALIDADES */

/** PAGAMENTO */
Route::apiResource('/pagamento', PagamentoController::class);
Route::apiResource('/forma-pagamento', FormaPagamentoController::class);
Route::apiResource('/status-pagamento', StatusPagamentoController::class);
/** PAGAMENTO */
