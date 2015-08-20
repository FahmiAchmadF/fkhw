<?php

namespace fkhw\Http\Requests;

use fkhw\Http\Requests\Request;

class Register extends Request
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
            'name' => 'required|min:3|max:60|string',
            'email' => 'required|min:5|max:60',
            'password' => 'required|min:6|max:20',
            'repassword' => 'required|same:password'
        ];
    }
}
