<?php

namespace App\Http\Requests\TipoAparelho;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class CriarTipoAparelhoRequest extends Request
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
            "nome" => "required|max:100",
            "modelo" => "required|max:50",
            "ativo" => "boolean"
        ];
    }

    public function messages()
    {
        return parent::responseMessages();
    }
}
