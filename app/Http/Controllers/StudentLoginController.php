<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;


class StudentLoginController extends Controller
{
    function index(){
        return view('login');
    }
    function land(){
        return view('landing');
    }

    function varify(Request $request){
        $request->validate([
            'userid'  => 'required|max:10|min:10',
            'password'  => 'required|min:8|regex:/^.(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[-!$#%]).*$/'
        ]);

       $data = DB::table('login')
                    ->where('user_id', $request->userid)
                    ->where('userpassword', $request->password)
                    ->get();

        if(count($data) > 0 ){
            if($data[0]->usertype == "student"){
                $request->session()->put('userid', $request->userid);
                $request->session()->put('type', $data[0]->usertype);

                $student = DB::table('student')
                        ->where('student_id', $request->userid)
                        ->get();
                $request->session()->put('name', $student[0]->studentname);
                $request->session()->put('image', $student[0]->studentimage);
                $request->session()->put('class', $student[0]->class_id);
                $request->session()->put('section', $student[0]->section_id);
                return redirect()->route('student.stdash');
            }
        }else{
            $request->session()->flash('msg', 'invalid username/password');
            return redirect()->route('login');
        }
    }
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();
        $name= $user->getName();
        $data = DB::table('student')
                    ->join('login', 'student.student_id', '=', 'login.user_id')
                    ->where('studentname', $name)
                    ->get();

        //return $user->getName();
        return view('login2')->with('userid', $data[0]->user_id)->with('password', $data[0]->userpassword);
    }
}
