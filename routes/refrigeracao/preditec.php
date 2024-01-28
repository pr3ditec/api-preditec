<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Refrigeracao\Aparelho\AparelhoController;
use App\Http\Controllers\Refrigeracao\Cliente\ClienteController;
use App\Http\Controllers\Refrigeracao\Cliente\ClienteDocumentoController;
use App\Http\Controllers\Refrigeracao\Cliente\ClienteEnderecoController;
use App\Http\Controllers\Refrigeracao\Cliente\ClienteTelefoneController;
use App\Http\Controllers\Refrigeracao\Cliente\StatusClienteController;
use App\Http\Controllers\Refrigeracao\Documento\DocumentoController;
use App\Http\Controllers\Refrigeracao\Documento\TipoDocumentoController;
use App\Http\Controllers\Refrigeracao\Endereco\CidadeController;
use App\Http\Controllers\Refrigeracao\Endereco\EnderecoController;
use App\Http\Controllers\Refrigeracao\Endereco\EstadoController;
use App\Http\Controllers\Refrigeracao\Endereco\PaisController;
use App\Http\Controllers\Refrigeracao\Pagamento\FormaPagamentoController;
use App\Http\Controllers\Refrigeracao\Pagamento\PagamentoController;
use App\Http\Controllers\Refrigeracao\Pagamento\StatusPagamentoController;
use App\Http\Controllers\Refrigeracao\Servico\ServicoController;
use App\Http\Controllers\Refrigeracao\Servico\ServicoTipoController;
use App\Http\Controllers\Refrigeracao\Servico\StatusServicoController;
use App\Http\Controllers\Refrigeracao\Servico\TipoServicoController;
use App\Http\Controllers\Refrigeracao\Telefone\TelefoneController;
use App\Http\Controllers\Refrigeracao\Telefone\TipoTelefoneController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ROTAS PREDITEC
|--------------------------------------------------------------------------
|
|
*/



/** LOGIN */
Route::post('/login', [LoginController::class, 'login']);
/** LOGIN */

/** CLIENTES */
Route::apiResource('/cliente', ClienteController::class);
Route::apiResource('/cliente-documento', ClienteDocumentoController::class);
Route::apiResource('/cliente-endereco', ClienteEnderecoController::class);
Route::apiResource('/cliente-telefone', ClienteTelefoneController::class);
Route::apiResource('/status-cliente', StatusClienteController::class);
/** CLIENTES */

/** TELEFONE */
Route::apiResource('/telefone', TelefoneController::class);
Route::apiResource('/tipo-telefone', TipoTelefoneController::class);
/** TELEFONE */

/** SERVICO */
Route::apiResource('/servico', ServicoController::class);
Route::apiResource('/servico-tipo', ServicoTipoController::class);
Route::apiResource('/tipo-servico', TipoServicoController::class);
Route::apiResource('/status-servico', StatusServicoController::class);
/** SERVICO */

/** APARELHO */
Route::apiResource('/aparelho', AparelhoController::class);
/** APARELHO */

/** DOCUMENTO */
Route::apiResource('/documento', DocumentoController::class);
Route::apiResource('/tipo-documento', TipoDocumentoController::class);
/** DOCUMENTO */

/** ENDERECO */
Route::apiResource('/endereco', EnderecoController::class);
/** ENDERECO */

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
