<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeatureRequest extends FormRequest
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

        $role['name']='required|string|max:255|unique:features,name';

        if($this->method()=="PUT"){
            $role['name']='required|string|max:255|unique:features,name,'.$this->feature->id;
  
        }
        return  $role;
    
    }
}
