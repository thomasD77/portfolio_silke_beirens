<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FAQRequest extends FormRequest
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
            //
            'questions'=>'required',
            'answers'=>'required',

        ];
    }

    public function messages(){
        return[
            'questions.required'=> 'Question is required!',
            'answers.required'=>'Answer is required',
        ];
    }
}
