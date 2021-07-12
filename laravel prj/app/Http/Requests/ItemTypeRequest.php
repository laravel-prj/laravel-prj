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
           'name.required' => 'Name is not input yet',
           'name.max' => 'Name cannot more than 10 characters',
           'brand_id.required' => 'You have not choose any brand',
           'brand_id.numeric' => 'Brand must be number',
        ];
    }
}
