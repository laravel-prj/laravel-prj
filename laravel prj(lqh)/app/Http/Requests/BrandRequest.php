<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class BrandRequest extends FormRequest
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
            'name' => 'required|min:3|max:50'
        ];
    }


    public function messages()
    {
        return [
           'name.required' => 'Name is not input yet',
           'name.min' => 'name must be at least 3 characters',
           'name.max' => 'name must less than 50 characters',
        ];
    }
}
