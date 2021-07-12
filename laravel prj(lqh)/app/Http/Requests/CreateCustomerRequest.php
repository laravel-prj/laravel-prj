<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerRequest extends FormRequest
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
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|unique:customers|max:255',
            'address' => 'required|max:255',
            'birthday' => 'required',
            'city' => 'required|max:255',
            'password' => 'required|max:255:min:6',
            'tel' => 'required|max:10:min:3',
            'gender' => 'required',
        ];
    }
}
