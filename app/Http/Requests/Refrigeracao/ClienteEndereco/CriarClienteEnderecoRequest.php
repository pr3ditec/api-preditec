<?php

namespace App\Http\Requests\Refrigeracao\ClienteEndereco;

use App\Http\Requests\Request;

class CriarClienteEnderecoRequest extends Request
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
            'cliente_id' => 'required|exists:cliente,id',
            'endereco_id' => 'required|exists:endereco,id',
        ];
    }

    public function messages(): array
    {
        return parent::responseMessages();
    }
}
