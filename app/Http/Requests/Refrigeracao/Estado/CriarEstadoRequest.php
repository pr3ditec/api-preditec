<?php

namespace App\Http\Requests\Refrigeracao\Estado;

use App\Http\Requests\Request;

class CriarEstadoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false; // DESTIVADO POIS TODOS OS ESTADOS ESTAO CRAIDOS
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|max:90',
            'uf' => 'required|max:2',
            'ativo' => 'boolean',
        ];
    }

    public function messages(): array
    {
        return parent::responseMessages();
    }
}
