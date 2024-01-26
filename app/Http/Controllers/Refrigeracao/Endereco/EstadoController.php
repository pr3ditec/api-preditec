<?php

namespace App\Http\Controllers\Refrigeracao\Endereco;

use App\Http\Controllers\Controller;
use App\Http\Requests\Refrigeracao\Estado\AlterarEstadoRequest;
use App\Http\Requests\Refrigeracao\Estado\CriarEstadoRequest;
use App\Models\Refrigeracao\Estado;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class EstadoController extends Controller
{

    /** CONTROLE GLOBAL */
    public $model = Estado::class;
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

            $dados = $this->model::where('id', $id)->firstOrFail();

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound', []);

        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'showMethodFailed');
        }

        return parent::apiResponse(200, true, 'showMethodSuccess', $dados);
    }

    public function store(CriarEstadoRequest $request)
    {

        try {

            $dados = $this->model::create($request->validated());

        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'storeMethodFailed');
        }

        return parent::apiResponse(200, true, 'storeMethodSuccess', $dados);
    }

    public function update(AlterarEstadoRequest $request, int $id)
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

}
