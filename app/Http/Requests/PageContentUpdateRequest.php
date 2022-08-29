<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageContentUpdateRequest extends FormRequest
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
            'content' => ['required', 'string'],
            'section_name' => ['required', 'string', 'max:250'],
            'link' => ['string', 'max:250'],
            'image' => ['string', 'max:250'],
        ];
    }
}
