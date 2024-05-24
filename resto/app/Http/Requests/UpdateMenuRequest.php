<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMenuRequest extends FormRequest
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
            "nom" => "required|min:3|max:100|string",
            "description" => "required|max:250|string",
            "prix" => "required|numeric|min:0|decimal:0,2|max:200",
            "estVege" => "boolean",
            "image" => "image|max:5000|nullable"
        ];
    }
}
