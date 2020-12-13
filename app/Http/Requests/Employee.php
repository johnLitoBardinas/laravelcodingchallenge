<?php

namespace App\Http\Requests;

use App\Rules\IsCompanyExist;
use Illuminate\Foundation\Http\FormRequest;

class Employee extends FormRequest
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
            'company_id' => [
                'required',
                new IsCompanyExist(),
                'bail',
            ],
            'email' => 'required|email|unique:employees,email',
            'first_name' => 'required|string|max:119',
            'last_name' => 'required|string|max:119',
            'age' => 'required|integer|min:1|max:127',
            'contact_number' => 'required|string|max:11',
            'address' => 'required|string'
        ];
    }
}
