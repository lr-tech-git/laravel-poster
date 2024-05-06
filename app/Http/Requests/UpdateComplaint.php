<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComplaint extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => ['nullable', 'integer'],
            'title' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'integer'],
            'address' => ['required', 'string'],
            'about' => ['required'],
            'tags' => ['required'],
            'files' => ['string'],
            'location' => ['string'],
        ];
    }
}
