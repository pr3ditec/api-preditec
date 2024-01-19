<?php

namespace App\Http\Requests\Refrigeracao\Servico;

use Illuminate\Foundation\Http\FormRequest;

class AlterarServicoRequest extends FormRequest
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
            'ordem_servico' => 'max:10',
            'observacao' => 'max:255',
            'data_servico' => 'date',
            'aparelho_id' => 'exists:aparelho,id',
            'status_servico_id' => 'exists:status_servico,id',
            'cliente_id' => 'exists:cliente,id',
            'usuario_id' => 'exists:usuario,id',
            'pagamento_id' => 'exists:pagamento,id',
        ];
    }

    public function messages(): array
    {
        return parent::responseMessages();
    }
}
