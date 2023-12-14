<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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

        $role = [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            "feature_id"    => "required|array",
            "feature_id.*"  => "required|integer|exists:features,id",
        ];

        if ($this->method() == 'PUT' || $this->method() == 'PATCH') {
            $role['image'] = 'sometimes|image:mime,png,jpg,jpeg,gif,svg:max:2048';
        } else {
            $role['image'] = 'required|image:mime,png,jpg,jpeg,gif,svg:max:2048';
        }

        return $role;
    }
}
