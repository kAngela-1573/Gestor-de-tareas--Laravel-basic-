<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string|min:10',
            'due_date' => 'required|date|after:today',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El título es obligatorio.',
            'title.max' => 'El título no puede superar los 255 caracteres.',
            'description.required' => 'La descripción es obligatoria.',
            'description.min' => 'La descripción debe tener al menos 10 caracteres.',
            'due_date.required' => 'La fecha límite es obligatoria.',
            'due_date.date' => 'Debe ingresar una fecha válida.',
            'due_date.after' => 'La fecha límite debe ser posterior al día de hoy.',
        ];
    }
}
