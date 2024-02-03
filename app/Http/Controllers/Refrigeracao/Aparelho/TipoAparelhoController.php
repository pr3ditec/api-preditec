<?php

namespace App\Http\Controllers\Refrigeracao\Aparelho;

use App\Http\Controllers\Controller;
use App\Http\Requests\TipoAparelho\AlterarTipoAparelhoRequest;
use App\Http\Requests\TipoAparelho\CriarTipoAparelhoRequest;
use App\Models\Refrigeracao\TipoAparelho;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class TipoAparelhoController extends Controller
{
        /** CONTROLE GLOBAL */
        public $model = TipoAparelho::class;
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

        public function store(CriarTipoAparelhoRequest $request)
        {

            $insertData = $request->validated();
            $insertData['usuario_id'] = parent::getUserByToken($request->header('Authorization'));

            try {

                $dados = $this->model::create($insertData);

            } catch (Exception $e) {

                return parent::apiResponse(400, false, 'storeMethodFailed');
            }

            return parent::apiResponse(200, true, 'storeMethodSuccess', $dados);
        }

        public function update(AlterarTipoAparelhoRequest $request, int $id)
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
