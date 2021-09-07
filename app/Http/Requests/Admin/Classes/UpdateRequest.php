<?php

namespace App\Http\Requests\Admin\Classes;

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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        $sector_id = $request->input('sector_id');
        $name_ar = $request->input('name_ar');
        $name_en = $request->input('name_en');
        return [
            'name_en' => [
                'required',Rule::unique('classes')->where(function ($query) use($name_en, $sector_id) {
                    return $query->where('name_en', $name_en)->where('sector_id', $sector_id);
                })->ignore($request->segment(4))],
            'name_ar' => [
                'required',Rule::unique('classes')->where(function ($query) use($name_ar, $sector_id) {
                    return $query->where('name_ar', $name_ar)->where('sector_id', $sector_id);
                })->ignore($request->segment(4))],
            'sector_id' => 'required|exists:sectors,id',
        ];
    }
}
