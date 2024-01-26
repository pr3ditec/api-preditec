<?php

namespace App\Http\Requests\Refrigeracao\Estado;

use App\Http\Requests\Request;

class AlterarEstadoRequest extends Request
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
            // 'nome' => 'max:90',
            // 'uf' => 'max:2',
            'ativo' => 'boolean',
        ];
    }

    public function messages(): array
    {
        return parent::responseMessages();
    }
}
