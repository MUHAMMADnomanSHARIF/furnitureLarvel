<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateSettingRequest extends FormRequest
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
            'application_name' => 'required',
            'email' => 'required',
            'short_description' => 'required',
            'color_one'  => 'required',
            'color_two'  => 'required',
            'color_three'  => 'required',
            'color_four'  => 'required',
            'facebook_link' => 'required',
            'instagram_link' => 'required',
            'gsc' => 'required',
            'site_index' => 'nullable',
    ];
    }
}
