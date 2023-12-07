<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'website_name'=>'required',
            'description'=>'required',
            'footer_desc'=>'required',
            'seo_title'=>'required',
            'seo_desc'=>'required',
            'logo'=>'sometimes:image|mimes:png,jpg,jpeg,gif,svg|max:2048'
        ];
    }
}
