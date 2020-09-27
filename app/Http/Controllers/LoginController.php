<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Teacher;
use App\Login;
use App\Student;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    // '/login' 'GET'
    public function index(Request $request){
        return view('login');
    }
    // '/login' 'POST'
    public function validation(Request $request){
      $login = new Login();
      $userInfo = $login->where('user_id', $request->username)
                        ->get();
      if($userInfo[0]->userpassword == $request->password){
        // session set
        $request->session()->put('username', $request->username);
        $request->session()->put('type', $userInfo[0]->usertype);
        
        if($userInfo[0]->usertype == 'teacher' || $userInfo[0]->usertype == 'adminTeacher'){
          return redirect('teacher1');
        }
        elseif($userInfo[0]->usertype == 'student'){
          if(count($userInfo) > 0 ){
                $request->session()->put('userid', $request->userid);
                $request->session()->put('type', $userInfo[0]->usertype);

                
                $student = DB::table('student')
                        ->where('student_id', $request->username)
                        ->get();
                $request->session()->put('name', $student[0]->studentname);
                $request->session()->put('image', $student[0]->studentimage);
                $request->session()->put('class', $student[0]->class_id);
                $request->session()->put('section', $student[0]->section_id);
                return redirect()->route('student.stdash');
        }
        
      }
      elseif($userInfo[0]->usertype == 'parent'){
        $request->session()->put('parentid', $request->username);
        $request->session()->put('type', $userInfo[0]->usertype);
        $student = DB::table('parent')
                ->join('student', 'parent.student_id', '=', 'student.student_id')
                ->where('parent.parent_id', $request->username)
                ->get();
        $request->session()->put('name', $student[0]->parentname);
        $request->session()->put('userid', $student[0]->student_id);
        $request->session()->put('class', $student[0]->class_id);
        $request->session()->put('section', $student[0]->section_id);
        return redirect()->route('parent.parentdash');
        //return view('/parent/parentdash');

      }
      elseif($userInfo[0]->usertype == 'superadmin'){
        $request->session()->put('userid', $request->username);
        $request->session()->put('type', $userInfo[0]->usertype);
        $superadmin = DB::table('superadmin')
                ->where('superadmin_id', $request->username)
                ->get();
        $request->session()->put('name', $superadmin[0]->superadminname);
        return redirect()->route('superadmin.index');
      }
      elseif($userInfo[0]->usertype == 'schooladmin'){
        //echo $userInfo[0]->usertype;
        return redirect('home');
      }
      else{
        return 'wrong username/pass';
      }
    }}
    //Socialite Start
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
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

        $randomNumber = mt_rand(8000, 8999);
        $id = '20-'.$randomNumber.'-03';
        $pass = 'teacher#'.$randomNumber;

        //teacher table
        $teacher = new Teacher();
        $teacher->teacher_id = $id;
        $teacher->teachername = $user->name;
        $teacher->teacheremail = $user->email;
        $teacher->teacherdesignation = 'teacher';
        $teacher->teacherdepartment = 'nil';
        $teacher->teacheraddress = 'nil';
        $teacher->teacherdob = 'nil';
        $teacher->teachergender = 'nil';
        $teacher->teacherreligion = 'nil';
        $teacher->teacherjoiningdate = date("Y-m-d");
        $teacher->teacherfathername = 'nil';
        $teacher->teachermothername = 'nil';
        $teacher->subject_id = 00;
        $teacher->save();

        //login table
        $login = new Login();
        $login->user_id = $id;
        $login->userpassword = $pass;
        $login->usertype = 'teacher';
        $login->save();


        //return '<h3>Your User_ID: '.$id.' and Password: '.$id. ' <a href="http://localhost:8000/login">Login</a></h3>';
        return view('loginAfterSignUp')->with('username', $id)->with('password', $pass);
    }
    //google
    public function redirectToProvider_google()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback_google()
    {
        $user = Socialite::driver('google')->user();

        $randomNumber = mt_rand(8000, 8999);
        $id = '20-'.$randomNumber.'-03';
        $pass = 'teacher#'.$randomNumber;

        //teacher table
        $teacher = new Teacher();
        $teacher->teacher_id = $id;
        $teacher->teachername = $user->name;
        $teacher->teacheremail = $user->email;
        $teacher->teacherdesignation = 'teacher';
        $teacher->teacherdepartment = 'nil';
        $teacher->teacheraddress = 'nil';
        $teacher->teacherdob = 'nil';
        $teacher->teachergender = 'nil';
        $teacher->teacherreligion = 'nil';
        $teacher->teacherjoiningdate = date("Y-m-d");
        $teacher->teacherfathername = 'nil';
        $teacher->teachermothername = 'nil';
        $teacher->subject_id = 00;
        $teacher->save();

        //login table
        $login = new Login();
        $login->user_id = $id;
        $login->userpassword = $pass;
        $login->usertype = 'teacher';
        $login->save();


        //return '<h3>Your User_ID: '.$id.' and Password: '.$id. ' <a href="http://localhost:8000/login">Login</a></h3>';
        return view('loginAfterSignUp')->with('username', $id)->with('password', $pass);
    }

    //Socialite End
}
