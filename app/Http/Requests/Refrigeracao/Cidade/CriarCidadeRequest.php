<?php

namespace App\Http\Requests\Refrigeracao\Cidade;

use App\Http\Requests\Request;

class CriarCidadeRequest extends Request
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
            'estado_id' => 'required|exists:estado,id',
            'ativo' => 'boolean',
        ];
    }

    public function messages(): array
    {
        return parent::responseMessages();
    }

}
