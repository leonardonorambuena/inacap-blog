<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'user_name' => 'min:3|max:100|alpha|required|unique:users,user_name',
            'first_name' => 'min:3|max:100|alpha|required',
            'last_name' => 'min:3|max:100|alpha|required',
            'email' => 'min:5|max:150|email|required|unique:users,email',
            'password' => '|required|min:3|confirmed'
        ];
    }
}
