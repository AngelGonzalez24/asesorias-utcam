<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AsesoriaRequest extends FormRequest
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
			'carrera' => 'required|string',
			'grupo' => 'required|string',
			'cuatrimestre' => 'required|string',
			'materia' => 'required|string',
			'maestro' => 'required|string',
			'fecha_hora' => 'required',
			'observaciones' => 'string',
        ];
    }
}
