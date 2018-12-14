<?php

namespace App\Http\Request\Master;
use Auth;
use App\Http\Request\Request;

class Validator extends Request
{
    public function rules()
    {

        if ($this->has('_method')) {
            $rules = [
              'name'       => 'required',
              'email'      => 'required|unique:users,email,'.$this->get('id_user')
            ];

            return $rules;
        }

        return [
            'name'       => 'required',
            'email'      => 'required|unique:users,email',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.unique' => 'Email sudah di pakai'
        ];
    }
}
