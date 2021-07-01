<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

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
           'name.required' => 'Chưa nhập Name',
           'name.min' => 'Name phải có ít nhất 5 ký tự',
           'name.max' => 'Name không được quá 10 ký tự',
        ];
    }
}
