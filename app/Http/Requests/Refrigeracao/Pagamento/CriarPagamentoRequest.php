<?php

namespace App\Http\Requests\Refrigeracao\Pagamento;

use App\Http\Requests\Request;

class CriarPagamentoRequest extends Request
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
            'data_pagamento' => 'required|date',
            'status_pagamento_id' => 'required|exists:status_pagamento,id',
            'forma_pagamento_id' => 'required|exists:forma_pagamento,id',
        ];
    }

    public function messages(): array
    {
        return parent::responseMessages();
    }
}
