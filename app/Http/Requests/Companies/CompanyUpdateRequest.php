<?php

namespace App\Http\Requests\Companies;

use App\Abstracts\FormRequest;

class CompanyUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:191',
            'email' => 'nullable|email|min:5|max:191',
            'website' => 'nullable|min:5|max:191'
        ];
    }
}
