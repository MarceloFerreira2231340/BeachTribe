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
        'title' => 'required|string|max:120',
        'type' => 'required|in:A,M,B',
        'state' => 'required|in:A,H',
        'location' => 'required|string|max:120',
        'date' => 'required|date',
        'bgtime' => 'required|date_format:H:i', 
        'endtime' => 'required|date_format:H:i|after:bgtime', 
        'price' => 'required|numeric|min:0',
        'duration' => 'required|integer|min:1',
    ];
}


    /*
    public function projects() {
        return $this->hasOne(Sport::class, 'sport_id', 'id');
    }
    */
}
