<?php

namespace mybookstack\Http\Requests;

use mybookstack\Http\Requests\Request;

class SinUp extends Request
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
            'name' => 'required|min:6',
            'email_id'=> 'required|email|min:6',
            'username' =>'required|min:6',
            'password' => 'required|min:6',
            'password_again' => 'required|min:6|same:password'
        ];
    }
}
