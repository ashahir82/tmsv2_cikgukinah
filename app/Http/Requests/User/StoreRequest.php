<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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

    public function messages(){
        return [
            'name.required' => 'Sila masukkan nama',
            'email.required' => 'Silam masukkan email',
            'email.email' => 'Sila masukkan format yng betul'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required_if:name,aminah',
            'profile_img' => 'nullable|mimes:png,jpeg,jpg|max:2080'
        ];
    }
}
