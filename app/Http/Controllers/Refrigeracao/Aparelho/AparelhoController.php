<?php

namespace App\Http\Controllers\Refrigeracao\Aparelho;

use App\Http\Controllers\Controller;
use App\Http\Requests\Refrigeracao\Aparelho\AlterarAparelhoRequest;
use App\Http\Requests\Refrigeracao\Aparelho\CriarAparelhoRequest;
use App\Models\Refrigeracao\Aparelho;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AparelhoController extends Controller
{
    public function index()
    {

        try {

            $dados = Aparelho::all();

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

            $dados = Aparelho::where('id', $id)->firstOrFail();

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound', []);

        } catch (Exception $e) {

            return parent::apiResponse(404, false, 'showMethodFailed');
        }

        return parent::apiResponse(200, true, 'showMethodSuccess', $dados);
    }

    public function store(CriarAparelhoRequest $request)
    {

        try {

            $dados = Aparelho::create($request->validated());

        } catch (Exception $e) {

            return parent::apiResponse(404, false, 'storeMethodFailed');
        }

        return parent::apiResponse(200, true, 'storeMethodSuccess', $dados);
    }

    public function update(AlterarAparelhoRequest $request, int $id)
    {
        try {

            $dados = Aparelho::where("id", $id)->firstOrFail();
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

            $dados = Aparelho::where('id', $id)->firstOrFail();

            $dados->delete();

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound');
        } catch (Exception $e) {

            return parent::apiResponse(404, false, 'updateMethodFailed');
        }

        return parent::apiResponse(200, true, 'updateMethodSuccess', $dados);
    }
}
