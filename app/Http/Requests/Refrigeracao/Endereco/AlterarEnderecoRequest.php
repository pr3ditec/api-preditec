<?php

namespace App\Http\Requests\Refrigeracao\Endereco;

use App\Http\Requests\Request;

class AlterarEnderecoRequest extends Request
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
            'nome' => 'max:100',
            'rua' => 'max:150  ',
            'numero' => 'max:10',
            'bairro' => 'max:150',
            'cep' => 'max:9',
            'cidade_id' => 'exists:cidade,id',
        ];
    }

    public function messages(): array
    {
        return parent::responseMessages();
    }
}
