<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePageRequest extends FormRequest
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
            'title'=>'required|max:255|min:3',
            'slug'=>'required|max:55|min:2',
            'meta_keywords'=>'required|max:255|min:3',
            'meta_description'=>'required|max:255|min:3',
            'layout'=>'required|max:190|min:0',
            'details'=>'required|min:3',
            'active'=>'boolean'
        ];
    }

}
$page->title = $request->title;
$page->slug = $request->slug;
$page->meta_keywords = $request->sub_title;
$page->meta_description = $request->sub_title;
$page->details = $request->details;
$page->parent = $request->parent;