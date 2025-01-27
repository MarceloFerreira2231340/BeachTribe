<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventSearchRequest extends FormRequest
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
            'title' => 'nullable|min:3|max:100|regex:/^[A-ZÀ-úa-z0-9\s]+$/',
            'type' => 'nullable|in:Festivais,Formações',
            'state' => 'nullable|in:Ativado,Desativado',
            'date' => 'nullable|date|date_format:"Y-m-d"',

            #'date' => 'nullable|date|after_or_equal:now|date_format:"m-d-Y h:i"',
        ];
    }
}
