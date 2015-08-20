<?php

namespace fkhw\Http\Requests;

use fkhw\Http\Requests\Request;

class Artikel extends Request
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
            'Judul' => 'required|min:3|max:60',
            'Penulis' => 'required|min:3|max:40|string',
            'Isi' => 'required|min:3'
        ];
    }
}
