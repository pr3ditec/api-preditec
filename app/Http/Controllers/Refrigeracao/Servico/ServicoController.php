<?php

namespace App\Http\Controllers\Refrigeracao\Servico;

use App\Http\Controllers\Controller;
use App\Http\Requests\Refrigeracao\Servico\AlterarServicoRequest;
use App\Http\Requests\Refrigeracao\Servico\CriarServicoRequest;
use App\Models\Refrigeracao\Servico;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ServicoController extends Controller
{
    public function index()
    {

        try {

            $dados = Servico::all();

            if ($dados->isEmpty()) {

                return parent::apiResponse(200, false, 'dataNotFound');
            }

        } catch (Exception $e) {

            return parent::apiResponse(404, false, "indexMethodFailed");
        }

        return parent::apiResponse(200, true, "indexMethodSuccess", $dados);
    }

    public function show(int $id)
    {

        try {

            $dados = Servico::where('id', $id)->firstOrFail();

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound', []);

        } catch (Exception $e) {

            return parent::apiResponse(404, false, 'showMethodFailed');
        }

        return parent::apiResponse(200, true, 'showMethodSuccess', $dados);
    }

    public function store(CriarServicoRequest $request)
    {

        try {

            $dados = Servico::create($request->validated());

        } catch (Exception $e) {

            return parent::apiResponse(404, false, 'storeMethodFailed');
        }

        return parent::apiResponse(200, true, 'storeMethodSuccess', $dados);
    }

    public function update(AlterarServicoRequest $request, int $id)
    {
        try {

            $dados = Servico::where('id', $id)->firstOrFail();

            $dados->update($request->validated());

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound');
        } catch (Exception $e) {

            return parent::apiResponse(404, false, 'updateMethodFailed');
        }

        return parent::apiResponse(200, true, 'updateMethodSuccess', $dados);
    }

    public function destroy(int $id)
    {
        try {

            $dados = Servico::where('id', $id)->firstOrFail();

            $dados->delete();

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound');
        } catch (Exception $e) {

            return parent::apiResponse(404, false, 'updateMethodFailed');
        }

        return parent::apiResponse(200, true, 'updateMethodSuccess', $dados);
    }

}
