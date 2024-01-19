<?php

namespace App\Http\Controllers\Refrigeracao\Documento;

use App\Http\Controllers\Controller;
use App\Http\Requests\Refrigeracao\TipoDocumento\AlterarTipoDocumentoRequest;
use App\Http\Requests\Refrigeracao\TipoDocumento\CriarTipoDocumentoRequest;
use App\Models\Refrigeracao\TipoDocumento;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TipoDocumentoController extends Controller
{
    public function index()
    {

        try {

            $dados = TipoDocumento::all();

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

            $dados = TipoDocumento::where('id', $id)->firstOrFail();

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound', []);

        } catch (Exception $e) {

            return parent::apiResponse(404, false, 'showMethodFailed');
        }

        return parent::apiResponse(200, true, 'showMethodSuccess', $dados);
    }

    public function store(CriarTipoDocumentoRequest $request)
    {

        try {

            $dados = TipoDocumento::create($request->validated());

        } catch (Exception $e) {

            return parent::apiResponse(404, false, 'storeMethodFailed');
        }

        return parent::apiResponse(200, true, 'storeMethodSuccess', $dados);
    }

    public function update(AlterarTipoDocumentoRequest $request, int $id)
    {
        try {

            $dados = TipoDocumento::where("id", $id)->firstOrFail();
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

            $dados = TipoDocumento::where('id', $id)->firstOrFail();

            $dados->delete();

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound');
        } catch (Exception $e) {

            return parent::apiResponse(404, false, 'updateMethodFailed');
        }

        return parent::apiResponse(200, true, 'updateMethodSuccess', $dados);
    }

}
