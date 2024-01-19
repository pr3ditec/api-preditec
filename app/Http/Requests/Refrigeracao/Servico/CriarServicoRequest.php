<?php

namespace App\Http\Requests\Refrigeracao\Servico;

use App\Http\Requests\Request;

class CriarServicoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ordem_servico' => 'required|max:10',
            'observacao' => 'max:255',
            'data_servico' => 'required|date',
            'aparelho_id' => 'required|exists:aparelho,id',
            'status_servico_id' => 'required|exists:status_servico,id',
            'cliente_id' => 'required|exists:cliente,id',
            'usuario_id' => 'required|exists:usuario,id',
            'pagamento_id' => 'required|exists:pagamento,id',
        ];
    }

    public function messages(): array
    {
        return parent::responseMessages();
    }

}
