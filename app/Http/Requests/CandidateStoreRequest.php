<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidateStoreRequest extends FormRequest
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
            'email' => ['required', 'email', 'max:250'],
            'message' => ['nullable', 'string'],
            'phone' => ['nullable', 'string', 'max:10'],
            'firstname' => ['required', 'string', 'max:250'],
            'lastname' => ['required', 'string', 'max:250'],
            'job_offer_id' => ['required', 'exists:job_offers,id'],
        ];
    }
}
