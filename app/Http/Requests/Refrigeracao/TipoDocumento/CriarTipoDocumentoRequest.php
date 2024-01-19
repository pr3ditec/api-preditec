<?php

namespace App\Http\Requests\Refrigeracao\TipoDocumento;

use App\Http\Requests\Request;

class CriarTipoDocumentoRequest extends Request
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
            'tipo' => 'required|max:50',
        ];
    }

    public function messages(): array
    {
        return parent::responseMessages();
    }
}
