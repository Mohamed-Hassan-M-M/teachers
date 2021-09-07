<?php

namespace App\Http\Requests\Admin\Subject;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        $class_id = $request->input('class_id');
        $name_ar = $request->input('name_ar');
        $name_en = $request->input('name_en');
        return [
            'name_en' => [
                'required',Rule::unique('subjects')->where(function ($query) use($name_en, $class_id) {
                    return $query->where('name_en', $name_en)->where('class_id', $class_id);
                })->ignore($request->segment(4))],
            'name_ar' => [
                'required',Rule::unique('subjects')->where(function ($query) use($name_ar, $class_id) {
                    return $query->where('name_ar', $name_ar)->where('class_id', $class_id);
                })->ignore($request->segment(4))],
            'class_id' => 'required|exists:classes,id',
        ];
    }
}
