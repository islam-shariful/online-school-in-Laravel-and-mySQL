<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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


      'sName'         => 'required',
      'fName'         => 'required',
      'mName'         => 'required',
      'gender'        => 'required',
      'dob'           => 'required',
      'admissionDate' => 'required',
      'bGroup'        => 'required',
      'religion'      => 'required',
      'eMail'         => 'required|Email',
      'admissionClass' => 'required',
      'section'        => 'required',
      'gPN'            => 'required|Numeric',
      'address'        => 'required',
      'myImage'        => 'required|File'
    
    ];

    }
    /*public function messages(){

    	return [


    	];
    }*/
}
