<?php

namespace App\Http\Controllers\Refrigeracao\Cliente;

use App\Http\Controllers\Controller;
use App\Http\Requests\Refrigeracao\Cliente\AlterarClienteRequest;
use App\Http\Requests\Refrigeracao\Cliente\CriarClienteRequest;
use App\Models\Refrigeracao\Cliente;
use App\Models\Refrigeracao\ClienteDocumento;
use App\Models\Refrigeracao\ClienteEndereco;
use App\Models\Refrigeracao\ClienteTelefone;
use App\Models\Refrigeracao\StatusCliente;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ClienteController extends Controller
{
    /** CONTROLE GLOBAL */
    public $model = Cliente::class;
    /** CONTROLE GLOBAL */

    public function index()
    {

        try {

            $dados = $this->model::all();

            if ($dados->isEmpty()) {

                return parent::apiResponse(200, false, 'dataNotFound');
            }

        } catch (Exception $e) {

            return parent::apiResponse(400, false, "indexMethodFailed");
        }

        return parent::apiResponse(200, true, "indexMethodSuccess", $dados);
    }

    public function show(int $id)
    {

        try {

            /** BUSCANDO DADOS VINCULADOS COM MODELO DO CONTROLLER */
            $dados = $this->model::where('id', $id)->firstOrFail();
            $telefone = $dados->getManyLink(ClienteTelefone::class, "cliente_id", "telefone", "telefone.id");
            $documento = $dados->getManyLink(ClienteDocumento::class, "cliente_id", "documento", "documento.id");
            $endereco = $dados->getManyLink(ClienteEndereco::class, "cliente_id", "endereco", "endereco.id");
            /** BUSCANDO DADOS VINCULADOS COM MODELO DO CONTROLLER */

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound', []);

        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'showMethodFailed');
        }

        return parent::apiResponse(200, true, 'showMethodSuccess', [
            "cliente" => $dados,
            "status" => $dados->getDirectLink(StatusCliente::class, $dados->status_cliente_id),
            "telefone" => $telefone,
            "documento" => $documento,
            "endereco" => $endereco,
        ]);
    }

    public function store(CriarClienteRequest $request)
    {

        try {

            $dados = $this->model::create($request->validated());

        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'storeMethodFailed');
        }

        return parent::apiResponse(200, true, 'storeMethodSuccess', $dados);
    }

    public function update(AlterarClienteRequest $request, int $id)
    {
        try {

            $dados = $this->model::where("id", $id)->firstOrFail();
            $dados->update($request->validated());

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound');
        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'updateMethodFailed');
        }

        return parent::apiResponse(200, true, 'updateMethodSuccess', $dados);
    }

    public function destroy(int $id)
    {
        try {

            $dados = $this->model::where('id', $id)->firstOrFail();

            $dados->delete();

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound');
        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'deleteMethodFailed');
        }

        return parent::apiResponse(200, true, 'deleteMethodSuccess', $dados);
    }

}
