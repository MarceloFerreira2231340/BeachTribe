<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassRequest extends FormRequest
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
            "title" => 'required|min:3|max:40|regex:/^[A-ZÀ-úa-z\s]+$/',
            "type" => 'required|in:A,M,B',
            "location" => 'required|min:3|max:120|regex:/^[A-ZÀ-úa-z\s]+$/',
            // "date" => 'required|date|before_or_equal:now|date_format:"Y-m-d H:i:s"',
            "duration" => 'required',
            "state" => 'required|in:A,H',
        ];
    }

    /*
    public function projects() {
        return $this->hasOne(Sport::class, 'sport_id', 'id');
    }
    */
}
