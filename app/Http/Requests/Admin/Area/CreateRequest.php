<?php

namespace App\Http\Requests\Admin\Area;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
    public function rules(Request $request)
    {
        $city_id = $request->input('city_id');
        $name_ar = $request->input('name_ar');
        $name_en = $request->input('name_en');
        return [
            'name_en' => [
                'required',Rule::unique('areas')->where(function ($query) use($name_en, $city_id) {
                    return $query->where('name_en', $name_en)->where('city_id', $city_id);
                })],
            'name_ar' => [
                'required',Rule::unique('areas')->where(function ($query) use($name_ar, $city_id) {
                    return $query->where('name_ar', $name_ar)->where('city_id', $city_id);
                })],
            'city_id' => "required|exists:cities,id"
        ];
    }
}
