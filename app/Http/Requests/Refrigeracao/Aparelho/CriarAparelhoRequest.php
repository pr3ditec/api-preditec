<?php

namespace App\Http\Requests\Refrigeracao\Aparelho;

use App\Http\Requests\Request;

class CriarAparelhoRequest extends Request
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
            'modelo' => 'required|max:50',
            'usuario_id' => 'required|exists:usuario,id',
            'ativo' => 'boolean',
        ];
    }

    public function messages(): array
    {
        return parent::responseMessages();
    }
}
