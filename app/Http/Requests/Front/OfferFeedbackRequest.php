<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class OfferFeedbackRequest extends FormRequest
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
            'names' => 'required|max:100',
            'hospital_names' => 'required|max:100',
            'email' => 'email:rfc,dns',
            'phone' => 'required|numeric',
            'content' => 'required'
        ];
    }
}
