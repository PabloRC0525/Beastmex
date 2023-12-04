<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class GusuarioRequest extends FormRequest
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
            'nombre' => 'required|string|max:255',
            'AP' => 'required|string|max:255',
            'AM' => 'required|string|max:255',
            'correo' => 'required|email|unique:usuarios',
            'puesto' => 'required|string|max:255',
            'contraseña' => 'required|string|min:8',
        ];
    }
}
