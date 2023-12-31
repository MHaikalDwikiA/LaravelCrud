<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'min:3', 'string'],
            'username' => ['required', 'unique:users', 'min:3', 'max:25', 'alpha_num'],
            'email' => ['required', 'unique:users', 'email'],
            'password' => ['required', 'min:8', 'alpha_num'],
        ];
    }
}
