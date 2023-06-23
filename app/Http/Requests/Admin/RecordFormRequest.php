<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RecordFormRequest extends FormRequest
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
        $rules= [
            'books_category' =>[
                'required',
                'string'
            ],

            
            // 'categoryy' =>[
                
            //     'string',
            //     'max:200'
            // ],

            'books_title' =>[
                'required',
                'string'
            ],

            'author' =>[
                'required',
                'string'
            ],
            'status' =>[
                'nullable',
                
            ],
            


        ];

        return $rules;
    }
}
