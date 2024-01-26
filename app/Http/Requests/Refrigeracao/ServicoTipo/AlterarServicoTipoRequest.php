<?php

namespace App\Http\Requests\Refrigeracao\ServicoTipo;

use App\Http\Requests\Request;

class AlterarServicoTipoRequest extends Request
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
            'tipo_servico_id' => 'required|exists:tipo_servico,id',
            'servico_id' => 'required|servico,id',
        ];
    }

    public function messages(): array
    {
        return parent::responseMessages();
    }
}
