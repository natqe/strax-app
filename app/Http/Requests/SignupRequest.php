<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'reg_name' => 'required|min:3|max:70|regex:/^[א-תa-z]+(\s[א-תa-z]+)*$/i',
            'reg_email' => 'required|email|unique:users,email',
            'reg_password' => 'required|min:5|max:10|confirmed'
        ];
    }
    public function messages() {
       return[
           'reg_name.regex'=>'The name must contain letters and spaces only.'
       ];
    }

}
