<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteInfoUpdateRequest extends FormRequest
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
            'description' => ['required', 'string', 'max:160'],
            'title' => ['required', 'string', 'max:250'],
            'phone' => ['required', 'string', 'max:250'],
            'address' => ['required', 'string', 'max:250'],
            'email' => ['required', 'email', 'max:250'],
            'facebook' => ['nullable', 'string'],
            'pinterest' => ['nullable', 'string'],
            'linkedin' => ['nullable', 'string'],
            'instagram' => ['nullable', 'string'],
            'iframe_map' => ['required', 'string']
        ];
    }
}
