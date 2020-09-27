<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequests extends FormRequest
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


      'tName'      => 'required',
      'tid'        => 'required',
      'gender'     => 'required',
      'dob'        => 'required|Date',
      'department' => 'required',
      'email'      => 'required|Email',
      'phone'      => 'required',
      'address'    => 'required'
      
    ];
    }
}
