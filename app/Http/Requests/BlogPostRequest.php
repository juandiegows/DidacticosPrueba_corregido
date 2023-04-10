<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BlogPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:10',
            'content' => 'required|min:20'
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => "Este campo es requerido",
            "title.min" => "la cantidad minima de caracteres es 10",
            'content.required' => "Este campo es requerido",
            "content.min" => "la cantidad minima de caracteres es 20"
        ];
    }

}
