<?php

namespace App\Http\Requests;

use App\Helpers\Qs;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

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
        $store =  [
            'name' => 'required|string|min:6|max:150',
            'password' => 'nullable|string|min:3|max:50',
             
            'email' => 'sometimes|nullable|email|max:100|unique:users',
             
        ];
        $update =  [
            'name' => 'required|string|min:6|max:150',
            'gender' => 'required|string', 
            'email' => 'sometimes|nullable|email|max:100|unique:users,email,'.$this->user,
            
        ];
        
        return ($this->method() === 'POST') ? $store : $update;

    }
}
