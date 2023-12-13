<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNationalNumberRequest extends FormRequest
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
            'national_number' =>'required|unique:clients|size:10'
        ];
    }
    public function messages()
    {
        return [
            'national_number.required' =>'برجاء ادخال الرقم القومى' ,
            'national_number.unique' => 'الرقم القومى مسجل من قبل',
            'national_number.size'=> 'الرقم القومى مكون من 10 ارقام'
        ];
    }
}
