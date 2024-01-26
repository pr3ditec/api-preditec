<?php

namespace App\Http\Controllers\Refrigeracao\Endereco;

use App\Http\Controllers\Controller;
use App\Http\Requests\Refrigeracao\Cidade\AlterarCidadeRequest;
use App\Http\Requests\Refrigeracao\Cidade\CriarCidadeRequest;
use App\Models\Refrigeracao\Cidade;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CidadeController extends Controller
{
    public function index()
    {

        try {

            $dados = Cidade::all();

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

            $dados = Cidade::where('id', $id)->firstOrFail();

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound', []);

        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'showMethodFailed');
        }

        return parent::apiResponse(200, true, 'showMethodSuccess', $dados);
    }

    public function store(CriarCidadeRequest $request)
    {

        try {

            $dados = Cidade::create($request->validated());

        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'storeMethodFailed');
        }

        return parent::apiResponse(200, true, 'storeMethodSuccess', $dados);
    }

    public function update(AlterarCidadeRequest $request, int $id)
    {
        try {

            $dados = Cidade::where("id", $id)->firstOrFail();
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

            $dados = Cidade::where('id', $id)->firstOrFail();

            $dados->delete();

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound');
        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'destroyMethodFailed');
        }

        return parent::apiResponse(200, true, 'destroyMethodSuccess', $dados);
    }
}
