<?php

namespace App\Http\Requests\Admin\Sector;

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
        $type = $request->input('type');
        $name_ar = $request->input('name_ar');
        $name_en = $request->input('name_en');
        return [
            'name_en' => [
                'required',Rule::unique('sectors')->where(function ($query) use($name_en, $type) {
                    return $query->where('name_en', $name_en)->where('type', $type);
                })],
            'name_ar' => [
                'required',Rule::unique('sectors')->where(function ($query) use($name_ar, $type) {
                    return $query->where('name_ar', $name_ar)->where('type', $type);
                })],
            'type' => 'required',
        ];
    }
}
