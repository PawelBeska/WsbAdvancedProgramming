<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateEmployeesRequest extends FormRequest
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
            'first_name'=>['string','min:3','max:64','required'],
            'last_name'=>['string','min:3','max:64','required'],
            'birth_date'=>['date','required'],
            'phone'=>['required','digits:9']
        ];
    }
}
