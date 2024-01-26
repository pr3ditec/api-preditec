<?php

namespace App\Http\Requests\Refrigeracao\Pagamento;

use Illuminate\Foundation\Http\FormRequest;

class AlterarPagamentoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 'data_pagamento' => 'date',
            'status_pagamento_id' => 'exists:status_pagamento,id',
            'forma_pagamento_id' => 'exists:forma_pagamento,id',
        ];
    }

    public function messages(): array
    {
        return parent::responseMessages();
    }
}
