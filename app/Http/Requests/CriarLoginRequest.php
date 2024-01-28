<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CriarLoginRequest extends Request
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
            'email' => 'required|max:50',
            'senha' => 'required|min:8',
        ];
    }

    public function messages(): array
    {
        return parent::responseMessages();
    }
}
