<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'brand' => 'required|numeric',
            'type' => 'required|numeric',
            'name' => 'required|max:50',
            // 'file' => 'required',
            // 'files' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'feature' => 'required|numeric',
            'discout_item' => 'required|integer|between:0,50',
        ];
    }


    // public function messages()
    // {
    //     return [
    //     ];
    // }
}
