<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCareerRequest extends FormRequest
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
            'location'=>'required|max:255|min:3',
            'position'=>'required|max:255|min:3',
            'department'=>'required|max:255|min:3',
            'deadline'=>'required|max:255|min:3',
            'active'=>'boolean',
            'details'=>'required|min:3'
        ];
    }
}
$career->title = $request->title;
$career->slug = $request->slug;
$career->location = $request->location;
$career->position = $request->position;
$career->department = $request->department;
$career->deadline = $request->deadline;
$career->details = $request->details;