<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobOfferStoreRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:250'],
            'description' => ['required', 'string'],
            'salary' => ['string', 'max:250'],
            'skills' => ['required', 'string'],
            'iframe_map' => ['required', 'string'],
            'city' => ['string', 'max:250'],
        ];
    }
}
