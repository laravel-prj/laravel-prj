<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'files' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'feature' => 'required|numeric',
            'discout_item' => 'required|integer|between:1,10',
        ];
    }


    // public function messages()
    // {
    //     return [
    //     ];
    // }
}
