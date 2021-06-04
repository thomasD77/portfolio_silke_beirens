<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'=>'required',
            'body'=>'required',
            'postcategories' => 'required'
        ];
    }

    public function messages(){
        return[
            'title.required'=> 'Title is required!',
            'body.required'=>'Description is required',
            'postcategories.required' => 'Please make a category for this post first'
        ];
    }
}
