<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        if($this->method()=='PUT'){
            $name='required';
            $email='required|email';
            $password ='required';
            $role_id='required';
        }else{
            $name='required';
            $email='required|email|unique:users';
            $password ='required';
            $role_id='required';
        }
        return [
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
            'role_id'=>$role_id,
        ];
    }

   
}
