<?php

namespace App\Http\Requests\Refrigeracao\Aparelho;

use App\Http\Requests\Request;

class AlterarAparelhoRequest extends Request
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
            'nome' => 'max:150',
            'descricao' => 'max:200',
            'tipo_aparelho_id' => 'exists:tipo_aparelho,id',
            'ativo' => 'boolean',
        ];
    }

    public function messages(): array
    {
        return parent::responseMessages();
    }
}
