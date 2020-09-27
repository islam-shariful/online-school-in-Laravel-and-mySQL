<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoutineRequests extends FormRequest
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


      'class_id'    => 'required',
      'sec_name'    => 'required',
      'class'       => 'required',
      'course_name' => 'required',
      't_name'      => 'required',
      't_id'        => 'required',
      'start_time'  => 'required',
      'finish_time' => 'required',
      'day'         => 'required'
    
    ];
    }
}
