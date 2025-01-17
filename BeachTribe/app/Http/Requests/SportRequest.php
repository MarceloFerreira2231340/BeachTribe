<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SportRequest extends FormRequest
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'difficulty' => 'required|in:Easy,Medium,Hard',
            
        ];
    }
}
