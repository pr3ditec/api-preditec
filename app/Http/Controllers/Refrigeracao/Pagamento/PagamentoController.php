<?php

namespace App\Http\Controllers\Refrigeracao\Pagamento;

use App\Http\Controllers\Controller;
use App\Http\Requests\Refrigeracao\Pagamento\AlterarPagamentoRequest;
use App\Http\Requests\Refrigeracao\Pagamento\CriarPagamentoRequest;
use App\Models\Refrigeracao\Pagamento;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PagamentoController extends Controller
{
    public function index()
    {

        try {

            $dados = Pagamento::all();

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

            $dados = Pagamento::where('id', $id)->firstOrFail();

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound', []);

        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'showMethodFailed');
        }

        return parent::apiResponse(200, true, 'showMethodSuccess', $dados);
    }

    public function store(CriarPagamentoRequest $request)
    {

        try {

            $dados = Pagamento::create($request->validated());

        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'storeMethodFailed');
        }

        return parent::apiResponse(200, true, 'storeMethodSuccess', $dados);
    }

    public function update(AlterarPagamentoRequest $request, int $id)
    {
        try {

            $dados = Pagamento::where("id", $id)->firstOrFail();
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

            $dados = Pagamento::where('id', $id)->firstOrFail();

            $dados->delete();

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound');
        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'destroyMethodFailed');
        }

        return parent::apiResponse(200, true, 'destroyMethodSuccess', $dados);
    }
}