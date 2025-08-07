<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class EventContactMail extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function EventContactMail(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'city' => 'required|string',
            'cp' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            
            'message' => 'nullable|string',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es requerido',
            'email.required' => 'El correo electrónico es requerido',
            'email.email' => 'El correo electrónico no es válido',
            'phone.required' => 'El teléfono es requerido',
        ];
    }
}
