<?php

namespace App\Http\Controllers\Refrigeracao\Cliente;

use App\Http\Controllers\Controller;
use App\Http\Requests\Refrigeracao\ClienteEndereco\AlterarClienteEnderecoRequest;
use App\Http\Requests\Refrigeracao\ClienteEndereco\CriarClienteEnderecoRequest;
use App\Models\Refrigeracao\ClienteEndereco;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ClienteEnderecoController extends Controller
{
    public function index()
    {

        try {

            $dados = ClienteEndereco::all();

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

            $dados = ClienteEndereco::where('id', $id)->firstOrFail();

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound', []);

        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'showMethodFailed');
        }

        return parent::apiResponse(200, true, 'showMethodSuccess', $dados);
    }

    public function store(CriarClienteEnderecoRequest $request)
    {

        try {

            $dados = ClienteEndereco::create($request->validated());

        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'storeMethodFailed');
        }

        return parent::apiResponse(200, true, 'storeMethodSuccess', $dados);
    }

    public function update(AlterarClienteEnderecoRequest $request, int $id)
    {
        try {

            $dados = ClienteEndereco::where("id", $id)->firstOrFail();
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

            $dados = ClienteEndereco::where('id', $id)->firstOrFail();

            $dados->delete();

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound');
        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'deleteMethodFailed');
        }

        return parent::apiResponse(200, true, 'deleteMethodSuccess', $dados);
    }
}
