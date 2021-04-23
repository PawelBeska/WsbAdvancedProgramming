<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateMoviesRequest extends FormRequest
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
            'title'=>['string','required','min:3','max:64'],
            'releaseDate'=>['date','required'],
            'genre'=>['string','required','min:3','max:64'],
            'rating'=>['required','integer'],
            'price'=>['required']
        ];
    }
}
