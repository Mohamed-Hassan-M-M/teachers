<?php

namespace App\Http\Requests\Admin\Teacher;

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
            'name_ar' => 'required',
            'name_en' => 'required',
            'description_ar' => 'required',
            'description_en' => 'required',
            'position' => "required",
            'mobile' => "required|unique:users,mobile," . $request->segment(4),
            'email' => "required|unique:users,email," . $request->segment(4),
            //'image' => "nullable|mimes:jpg,jpeg,png,apng,gif,avif,svg,webp",
            'area_id.*' => "required|exists:areas,id",
            'subject_id.*' => "required|exists:subjects,id",
            'social_link.*' => "nullable|url",
        ];
    }
}
