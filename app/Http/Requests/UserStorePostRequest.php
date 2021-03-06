<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStorePostRequest extends FormRequest
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
            'title'=>['string',"min:3",'max:255','required'],
            'poster'=>['file','required','mimes:jpeg,bmp,png','max:10240'],
            'description'=>['string','required']
        ];
    }
}
