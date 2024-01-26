<?php

namespace App\Http\Controllers\Refrigeracao\Servico;

use App\Http\Controllers\Controller;
use App\Http\Requests\Refrigeracao\Servico\AlterarServicoRequest;
use App\Http\Requests\Refrigeracao\Servico\CriarServicoRequest;
use App\Models\Refrigeracao\Aparelho;
use App\Models\Refrigeracao\Cliente;
use App\Models\Refrigeracao\Pagamento;
use App\Models\Refrigeracao\Servico;
use App\Models\Refrigeracao\ServicoTipo;
use App\Models\Refrigeracao\StatusServico;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ServicoController extends Controller
{

    /** CONTROLE GLOBAL */
    public $model = Servico::class;
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
            $tipo = $dados->getManyLink(ServicoTipo::class, "servico_id", "tipo_servico", "tipo_servico.id");

        } catch (ModelNotFoundException $e) {

            return parent::apiResponse(200, false, 'dataNotFound', []);

        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'showMethodFailed');
        }

        return parent::apiResponse(200, true, 'showMethodSuccess', [
            "dados" => $dados,
            "cliente" => $dados->getDirectLink(Cliente::class, $dados->cliente_id),
            "aparelho" => $dados->getDirectLink(Aparelho::class, $dados->aparelho_id),
            "tipo" => $tipo,
            "status" => $dados->getDirectLink(StatusServico::class, $dados->status_servico_id),
            "pagamento" => $dados->getDirectLink(Pagamento::class, $dados->pagamento_id),
        ]);
    }

    public function store(CriarServicoRequest $request)
    {

        try {

            $dados = $this->model::create($request->validated());

        } catch (Exception $e) {

            return parent::apiResponse(400, false, 'storeMethodFailed');
        }

        return parent::apiResponse(200, true, 'storeMethodSuccess', $dados);
    }

    public function update(AlterarServicoRequest $request, int $id)
    {
        try {

            $dados = $this->model::where('id', $id)->firstOrFail();

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
