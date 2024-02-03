<?php

namespace App\Http\Requests\TipoAparelho;

use App\Http\Requests\Request;

class AlterarTipoAparelhoRequest extends Request
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
            "nome" => "max:100",
            "modelo" => "max:50",
            "ativo" => "boolean"
        ];
    }

    public function messages()
    {
        return parent::responseMessages();
    }
}
