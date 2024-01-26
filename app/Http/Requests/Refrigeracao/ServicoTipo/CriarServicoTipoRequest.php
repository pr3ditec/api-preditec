<?php

namespace App\Http\Requests\Refrigeracao\ServicoTipo;

use App\Http\Requests\Request;

class CriarServicoTipoRequest extends Request
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
            'tipo_servico_id' => 'exists:tipo_servico,id',
            'servico_id' => 'servico,id',
        ];
    }

    public function messages(): array
    {
        return parent::responseMessages();
    }
}
