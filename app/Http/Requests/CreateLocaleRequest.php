<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLocaleRequest extends FormRequest
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
            'lang_code'=>'required|unique:locale,lang_code|max:5|min:1',
            'lang_name'=>'required|unique:locale,lang_name|max:10|min:1',
            'active'=>'boolean',
            'default'=>'boolean',
        ];
    }
}
