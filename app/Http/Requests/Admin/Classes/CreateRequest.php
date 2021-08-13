<?php

namespace App\Http\Requests\Admin\Classes;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'name_ar' => 'required|unique:classes,name_ar',
            'name_en' => 'required|unique:classes,name_en',
            'sector_id' => "required|exists:sectors,id"
        ];
    }
}
