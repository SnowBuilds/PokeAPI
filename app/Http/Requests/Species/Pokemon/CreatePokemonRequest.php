<?php

namespace App\Http\Requests\Species\Pokemon;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Unique;


class CreatePokemonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', new Unique('pokemon', 'name')],
            'weight' => ['required'],
            'height' => ['required'],
            'is_default' => ['required'],
        ];
    }
}
