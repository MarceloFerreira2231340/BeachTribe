<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        return  [
            "name" => 'required|min:3|max:40|regex:/^[A-ZÀ-úa-z\s]+$/',
            "email"=>'required|email|unique:users,email,'.($this->user ? $this->user->id : ''),
            "tipo" => 'required|in:A,C',
            "password" => ($this->user ? 'nullable' : 'required|confirmed'),
            "phone"=>'required|min:900000000|max:999999999|integer|unique:users,phone,'.($this->user ? $this->user->id : ''),
            // "data_nasc" => 'required|date|before_or_equal:now|date_format:"Y-m-d H:i:s"',
            "address"=>'min:3|max:255',
        ];
    }
/*
    public function messages()
    {
        return[
            'phone.required' => 'Ta mal.'
        ];
    }
*/
}