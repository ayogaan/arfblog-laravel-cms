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
        $name='required';
        $email='required|email|unique:users';
        $password =['required|
        min:6|
        regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/|
        confirmed'];
        $role='required';
        return [
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
            'role_id'=>$role,

        ];
    }
}
