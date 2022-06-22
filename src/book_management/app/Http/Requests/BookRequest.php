<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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

            'title'=>'required|max:15',
            'url'=>'required|min:10',
            
        ];

        
    }

    public function messages()
    {
        return[
            'title.required'=>'タイトルを入力してください',
            'organize.max'=>'タイトルは15文字以内で入力してください',
            'url.required'=>'URLを入力して下さい',
            'url.min'=>'URLは10文字以上で入力してください',
            
        ];


    }
}
