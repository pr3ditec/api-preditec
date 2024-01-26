<?php

namespace App\Http\Requests\Refrigeracao\TipoServico;

use App\Http\Requests\Request;

class CriarTipoServicoRequest extends Request
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
            'nome' => 'required|max:150',
            'ativo' => 'boolean',
        ];
    }

    public function messages(): array
    {
        return parent::responseMessages();
    }
}
