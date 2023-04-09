<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [

                'name' => 'required',
                'last_name' => 'required',
                'email' => 'required|unique:users,email',
                'password' => 'required|confirmed',
                'birth_day' => 'required|date|before:'.now()->subYears(18)->format('Y-m-d')

        ];
    }

    public function messages():array{
        return [
                'name.required' => 'El campo nombre es requerido',
                'last_name.required' => 'El campo apellido es requerido',
                'email.required' => 'El campo correo electrónico es requerido',
                'email.unique' => 'Este correo electrónico ya está registrado',
                'password.required' => 'El campo contraseña es requerido',
                'password.confirmed' => 'la confirmacion no coincide',
                'birth_day.required' => 'El campo fecha de nacimiento es requerido',
                'birth_day.date' => 'El campo fecha de nacimiento debe ser una fecha válida',
                'birth_day.before' => 'Debes tener al menos 18 años para registrarte'
        ];
    }
}
