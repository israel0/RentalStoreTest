<?php

namespace App\Http\Requests;

use App\Helpers\Help;
use App\Http\Controllers\ItemController;
use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'price' => 'required|min:3|max:50',
            'description' => 'required',
            'item_id' => 'required',
            'user_id' => 'required',
            'state_id' => 'required',
            'standard_id' => 'required',
            'image' => 'sometimes|nullable|image|mimes:jpeg,gif,png,jpg|max:2048',
            'available_at' => 'required',
            'transmission' => 'required',
                            
        ];
        
        $update =  [
            'name' => 'required|string|min:6|max:150',
            'price' => 'required|min:3|max:50',
            'description' => 'required',
            'item_id' => 'required',
            'user_id' => 'required',
            'state_id' => 'required',
            'standard_id' => 'required',
            'image' => 'sometimes|nullable|image|mimes:jpeg,gif,png,jpg|max:2048',
            'available_at' => 'required',
            'transmission' => 'required',
        ];
        
        return ($this->method() === 'POST') ? $store : $update;
    }
}
