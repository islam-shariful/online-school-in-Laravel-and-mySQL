<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class LoginController extends Controller
{
    function index(){
        return view('login');
    }
    function land(){
        return view('landing');
    }

    function example(){

        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://localhost:3333',
        ]);
          
        $response = $client->request('GET', '/student/teachersearch/Bangla');
         
        $body = $response->getBody();
        $arr_body = json_decode($body);
        print_r($arr_body);
    }

    function varify(Request $request){
        $request->validate([
            'userid'  => 'required|max:10|min:10',
            'password'  => 'required'
        ]);

       $data = DB::table('login')
                    ->where('user_id', $request->userid)
                    ->where('userpassword', $request->password)
                    ->get();

        if(count($data) > 0 ){
            $type= explode("-",$request->userid);
            if($type[2] == "01"){
                $request->session()->put('userid', $request->userid);
                $request->session()->put('type', $data[0]->usertype);

                $superadmin = DB::table('superadmin')
                        ->where('superadmin_id', $request->userid)
                        ->get();
                $request->session()->put('name', $superadmin[0]->superadminname);
                return redirect()->route('superadmin.index');
            }
            // $type= explode("-",$request->userid);
            // if($type[2] == "04"){
            //     $request->session()->put('userid', $request->userid);
            //     $request->session()->put('type', $data[0]->usertype);

            //     $student = DB::table('student')
            //             ->where('student_id', $request->userid)
            //             ->get();
            //     $request->session()->put('name', $student[0]->studentname);
            //     $request->session()->put('image', $student[0]->studentimage);
            //     $request->session()->put('class', $student[0]->class_id);
            //     $request->session()->put('section', $student[0]->section_id);
            //     return redirect()->route('student.stdash');
            // }
            elseif($type[2] == "05"){
                $request->session()->put('parentid', $request->userid);
                $request->session()->put('type', $data[0]->usertype);

                $student = DB::table('parent')
                        ->join('student', 'parent.student_id', '=', 'student.student_id')
                        ->where('parent.parent_id', $request->userid)
                        ->get();
                $request->session()->put('name', $student[0]->parentname);
                $request->session()->put('userid', $student[0]->student_id);
                $request->session()->put('class', $student[0]->class_id);
                $request->session()->put('section', $student[0]->section_id);
                return redirect()->route('parent.parentdash');
            }
        }else{
            $request->session()->flash('msg', 'invalid username/password');
            return redirect()->route('login');
        }
    }
}
