<?php

namespace App\Http\Controllers\Refrigeracao\Servico;

use App\Http\Controllers\Controller;
use App\Http\Requests\Refrigeracao\TipoServico\AlterarTipoServicoRequest;
use App\Http\Requests\Refrigeracao\TipoServico\CriarTipoServicoRequest;
use App\Models\Refrigeracao\TipoServico;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TipoServicoController extends Controller
{
    public function index()
    {

        try {

            $dados = TipoServico::all();

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

            $dados = TipoServico::where('id', $id)->firstOrFail();

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound', []);

        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'showMethodFailed');
        }

        return parent::apiResponse(200, true, 'showMethodSuccess', $dados);
    }

    public function store(CriarTipoServicoRequest $request)
    {

        try {

            $dados = TipoServico::create($request->validated());

        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'storeMethodFailed');
        }

        return parent::apiResponse(200, true, 'storeMethodSuccess', $dados);
    }

    public function update(AlterarTipoServicoRequest $request, int $id)
    {
        try {

            $dados = TipoServico::where('id', $id)->firstOrFail();

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

            $dados = TipoServico::where('id', $id)->firstOrFail();

            $dados->delete();

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound');
        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'deleteMethodFailed');
        }

        return parent::apiResponse(200, true, 'deleteMethodSuccess', $dados);
    }
}
