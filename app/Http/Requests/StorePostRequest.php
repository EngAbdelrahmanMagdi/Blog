<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            
                'title'=> ['required', 'min:3', "unique:posts"], 
                'description'=> ['required','min:7'],
              
            
        ];
    }

    public function messages()
    {
        return [
            
            'title.required'=> 'overrieded required message',
            'title.min'=>'min character for title are 3',
            'title.unique'=>'title must be unique'
              
            
        ];
    }
}
