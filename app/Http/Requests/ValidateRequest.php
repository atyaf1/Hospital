<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
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
            'name' => 'required|max:100',
            'birthday' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'department_id' => 'required',
            'salary' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Doctor Name is required',
            'name.string' => 'Doctor number should be String',

            'birthday.required' => 'Birthday is required',
            'phone.required' => 'Phone number is required',
            'phone.numeric' => 'Phone number should be number',

            'address.required' => 'Address is required',
            'address.string' => 'Address should be string',

            'department_id.required' => 'Department is requered',

            'salary.required' => 'Salary is required',
        ];
    }
}
