<?php

namespace App\Http\Requests\Refrigeracao\Cliente;

use App\Http\Requests\Request;

class CriarClienteRequest extends Request
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
            'nome' => 'required|max:100|unique:cliente,nome',
            'status_cliente_id' => 'required|exists:status_cliente,id',
            'usuario_id' => 'required|exists:usuario,id',
        ];
    }

    public function messages(): array
    {
        return parent::responseMessages();
    }
}
