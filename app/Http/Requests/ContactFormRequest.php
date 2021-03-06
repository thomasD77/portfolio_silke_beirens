<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'name'=>'required',
            'subject'=>'required',
            'email'=>'required',
            'message'=>'required',
            'GDPR'=>'required',
        ];
    }

    public function messages(){
        return[
            'email.required'=> 'Email is required!',
            'name.required'=>'Name is required',
            'message.required'=>'Message is required',
            'subject.required'=>'Subject is required',
            'GDPR.required'=>'GDPR is required',
        ];
    }
}
