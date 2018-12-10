<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SigninRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'log_email' => 'required|email',
            'log_password' => 'required|min:5|max:10'
        ];
    }

}
