<?php

namespace App\Http\Requests\Refrigeracao\ClienteTelefone;

use App\Http\Requests\Request;

class CriarClienteTelefoneRequest extends Request
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
            'telefone_id' => 'required|exists:telefone,id',
        ];
    }

    public function messages(): array
    {
        return parent::responseMessages();
    }
}
