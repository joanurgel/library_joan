<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BookFormRequest extends FormRequest
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
        $rules = [
            'name'=>[
                'required',
                'string',
                'max:200'
            ],

            'image'=>[
                'nullable',
                'mimes:jpeg,jpg,png'
            ],

            'category'=>[
                'required',
                'string',
                'max:200'
            ],
            // 'books_borrowed'=>[
            //     'required',
            //     'date',
            //     'max:200'
            // ],

            // 'books_returned'=>[
            //     'required',
            //     'date',
            //     'max:200'
            // ],

        ];
        return $rules;
    }
}
