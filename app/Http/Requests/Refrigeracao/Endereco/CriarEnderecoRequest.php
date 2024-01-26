<?php

namespace App\Http\Requests\Refrigeracao\Endereco;

use App\Http\Requests\Request;

class CriarEnderecoRequest extends Request
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
            'nome' => 'required|max:100',
            'rua' => 'required|max:150  ',
            'numero' => 'required|max:10',
            'bairro' => 'required|max:150',
            'cep' => 'required|max:9',
            'cidade_id' => 'required|exists:cidade,id',
        ];
    }

    public function messages(): array
    {
        return parent::responseMessages();
    }
}
