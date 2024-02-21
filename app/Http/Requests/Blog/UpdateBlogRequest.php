<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'second_title' => 'nullable',
            'second_description' => 'nullable',
            'third_title' => 'nullable',
            'third_description' => 'nullable',
            'forth_title' => 'nullable',
            'forth_description' => 'nullable',
            'fifth_title' => 'nullable',
            'fifth_description' => 'nullable',
        ];
    }
}
