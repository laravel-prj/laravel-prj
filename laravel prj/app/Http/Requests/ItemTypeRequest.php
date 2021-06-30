<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class ItemTypeRequest extends FormRequest
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
            'name' => 'required|min:5|max:10'
        ];
    }


    public function messages()
    {
        return [
           'name.required' => 'Chua nhap name',
           'name.min' => 'name phai co it nhat 5 ky tu',
           'name.max' => 'name phai it hon 10 ky tu',
        ];
    }

    // protected function failedValidation(Validator $validator)
    // {
    //     returnErrors($validator);
    // }
}
