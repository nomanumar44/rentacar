<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountersRequest extends FormRequest
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
        $rules = [];

        foreach ($this->input('data', []) as $key => $value) {
            $rules["data.$key.id"] = 'required|integer';
            $rules["data.$key.counter_no"] = 'required|string';
            $rules["data.$key.name"] = 'required|string';
            $rules["data.$key.email"] = 'required|email';
        }
        return $rules;
    }
}
