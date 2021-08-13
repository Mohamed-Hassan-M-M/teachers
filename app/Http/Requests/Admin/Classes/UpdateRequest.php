<?php

namespace App\Http\Requests\Admin\Classes;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            'name_ar' => 'required|unique:classes,name_ar,' . $request->segment(4),
            'name_en' => 'required|unique:classes,name_en,' . $request->segment(4),
            'city_id' => "required|exists:sectors,id"
        ];
    }
}
