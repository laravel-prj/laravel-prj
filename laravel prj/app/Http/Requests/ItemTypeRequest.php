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
            'name' => 'required|max:50',
            'brand_id' => 'required|numeric'
        ];
    }


    public function messages()
    {
        return [
           'name.required' => 'Chưa nhập Name',
           'name.max' => 'Name không được quá 10 ký tự',
           'brand_id.required' => 'Bạn chưa chọn Brand',
           'brand_id.max' => 'Brand phải có dạng number',
        ];
    }
}
