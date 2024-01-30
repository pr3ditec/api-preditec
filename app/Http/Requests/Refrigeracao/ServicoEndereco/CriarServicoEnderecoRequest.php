<?php

namespace App\Http\Requests\Refrigeracao\ServicoEndereco;

use App\Http\Requests\Request;

class CriarServicoEnderecoRequest extends Request
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
            "endereco_id" => "required|exists:endereco,id",
            "servico_id" => "required|exists:servico,id"
        ];
    }

    public function messages()
    {
        return parent::responseMessages();
    }
}
