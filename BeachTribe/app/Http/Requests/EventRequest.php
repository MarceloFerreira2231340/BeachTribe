<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title' => 'required|min:3|max:100|regex:/^[A-ZÀ-úa-z0-9\s]+$/',
            'description' => 'required|min:3|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'type' => 'required|in:Festivais,Formações',
            'state' => 'required|in:Ativado,Desativado',
            'local' => 'required|min:3|max:50',
            'date' => 'date|after_or_equal:now|date_format:"m-d-Y h:i"',
        ];
    }
}
