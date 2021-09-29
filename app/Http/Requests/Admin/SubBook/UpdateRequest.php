<?php

namespace App\Http\Requests\Admin\SubBook;

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
            'name_ar' => 'required|unique:book_subjects,name_ar,' . $request->segment(4),
            'name_en' => 'required|unique:book_subjects,name_en,' . $request->segment(4),
        ];
    }
}
