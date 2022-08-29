<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'firstname' => ['required', 'string', 'max:250'],
            'lastname' => ['required', 'string', 'max:250'],
            'password' => ['required', 'password', 'max:250'],
            'email' => ['required', 'email', 'max:250'],
            'lastname' => ['required', 'string', 'max:250'],
            'password' => ['required', 'password', 'max:250'],
            'email' => ['required', 'email', 'max:250'],
        ];
    }
}
