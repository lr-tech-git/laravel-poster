<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfile extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'avatar' => ['file', 'nullable'],
            'email' => ['email'],
            'first_name' => ['string', 'nullable'],
            'last_name' => ['string', 'nullable'],
            'phone_number' => ['string', 'nullable'],
            'address' => ['string', 'nullable'],
        ];
    }
}
