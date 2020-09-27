<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Login;
use App\Studentt;
use App\Teacherr;
use App\Subjectt;
use App\NoticeBoard;
use App\ClassRoutine;
use App\Library;
use\Illuminate\Support\Str;
use Validator;
use App\Http\Requests\UserRequest;
use App\Http\Requests\TeacherRequests;
use App\Http\Requests\SubjectRequests;
use App\Http\Requests\RoutineRequests;
use App\Http\Requests\NoticeRequests;


class adminHomeController extends Controller
{
  
  function index(Request $request){

    /*if ($request->session()->has('username')){
      
    }
    else{
      $request->session()->flash('msg2','You are not logged in, please log in first to execute this request ');
      return redirect('/login');}*/
       
  	return view('admin.adminHome'); 
  }

  function studentAdmitForm(Request $request){

    //$lid = DB::table('studentt')->insert([]);
    $rn = mt_rand(11, 8999);
    //$c="102";
    $lid = "S".'-'.$rn.'-'.date('Y');

    $pass = Str::random(10);
   return view('admin.admit-form')->with('pass', $pass)
                                  ->with('lid', $lid);

  }
    function storeStudent(UserRequest $request){
    


         //if($request->hasFile('myImage'))
            $file = $request->file('myImage');
            /*echo "File Name: ". $file->getClientOriginalName()."<br>";
            echo "File Extension: ". $file->getClientOriginalExtension()."<br>";
            echo "File Size: ". $file->getSize()."<br>";
            echo "File Mime Type: ". $file->getMimeType();*/

            $file->move('upload', $file->getClientOriginalName());







    $student                 = new Studentt();
    $student->sName          = $request->sName;
    $student->sid            = $request->sid;
    $student->fName          = $request->fName;
    $student->mName          = $request->mName;
    $student->gender         = $request->gender;
    $student->dob            = $request->dob;
    $student->admissionDate  = $request->admissionDate;
    $student->bGroup         = $request->bGroup;
    $student->religion       = $request->religion;
    $student->eMail          = $request->eMail;
    $student->admissionClass = $request->admissionClass;
    $student->section        = $request->section;
    $student->gPN            = $request->gPN;
    $student->address        = $request->address;
    $student->myImage        = $file->getClientOriginalName();
    $student->save();


    $login               = new Login();
    $login->user_id      = $request->sid;
    $login->userpassword = $request->password;
    $login->usertype     = "student";
    $login->save();

     return redirect('/all-student');
  }

  function allStudent(Request $request){
  	
    $students = DB::table('studentt')->get();
    return view('admin.all-student')->with('students', $students);
  }  

  function allTeacher(Request $request){
  	$teachers = DB::table('teacherr')->get();
    return view('admin.all-teacher')->with('teachers', $teachers);
  }

  function addTeacher(Request $request){
    //$c="101";
    $rn = mt_rand(02, 8999);
    $lid = "T".'-'.$rn.'-'.date('Y');
    $pass = Str::random(8);
  	return view('admin.add-teacher')->with('pass', $pass)
                                    ->with('lid', $lid);
  }

  function storeTeacher(TeacherRequests $request){
  $teacher             = new Teacherr();
  $teacher->tName      = $request->tName;
  $teacher->tid        = $request->tid;
  $teacher->gender     = $request->gender;
  $teacher->dob        = $request->dob;
  $teacher->department = $request->department;
  $teacher->email      = $request->email;
  $teacher->phone      = $request->phone;
  $teacher->address    = $request->address;
  $teacher->save();


    $login               = new Login();
    $login->user_id      = $request->tid;
    $login->userpassword = $request->password;
    $login->usertype     = "teacher";
    $login->save();
      
  return redirect('/all-teacher');
  }



  function studentDetails(Request $request){
  	return view('admin.student-details');
  }

  function allClass(Request $request){
  	return view('admin.all-class');
  }

  function addClass(Request $request){
  	return view('admin.add-class');
  }


  function noticeBoard(Request $request){
  	$datee = date("d-m-Y");
  $notices = DB::table('noticeboard')->get();
  return view('admin.notice-board')->with('notices', $notices)
                                   ->with('datee', $datee);

  }
  function postNotice(NoticeRequests $request){
  
  $notice            = new NoticeBoard();
  $notice->nTitle    = $request->nTitle;
  $notice->nDetails  = $request->nDetails;
  $notice->pBy       = "School Admin";
  $notice->date      = $request->date;
  $notice->save();
  return redirect('/notice-board');

  }

  function allSubject(Request $request){
  	
    $subjects = DB::table('subjectt')->get();
    return view('admin.all-subject')->with('subjects', $subjects);

  }
  function addSubject(SubjectRequests $request){
    
    $subject          = new Subjectt();
    $subject->sName   = $request->subjectName;
    $subject->sCode   = $request->subjectCode;
    $subject->sType   = $request->subjectType;
    $subject->sClass  = $request->subjectClass;
    $subject->save();
    return redirect('/all-subject');


  }
    function update($id, Request $request){

      $student = DB::table('Studentt')->where('sid', $id)->get();

      //$student = Studentt::find($id);
      //return view('admin.update')->with('student', $student);
      return view('admin.update')->with('student', $student);

  }
  function storeUpdate($id, Request $request){

   $student                    = array ();
   $student ['sName']          = $request->name;
   $student ['sid']            = $request->sid;
   $student ['fName']          = $request->fName;
   $student ['mName']          = $request->mName;
   $student ['gender']         = $request->gender;
   $student ['dob']            = $request->dob;
   $student ['admissionDate']  = $request->admDate;
   $student ['bGroup']         = $request->bg;
   $student ['religion']       = $request->rg;
   $student ['eMail']          = $request->email;
   $student ['admissionClass'] = $request->admClass;
   $student ['section']        = $request->section;
   $student ['gPN']            = $request->gpn;
   $student ['address']        = $request->address;
   $student ['myImage']        = $request->simg;

   DB::table('Studentt')->where('sid',$id)->update($student);
    return redirect('/all-student');
  }

  function deleteStudent($id, Request $request){

    $student = DB::table('Studentt')->where('sid', $id)->get();
    return view('admin.delete')->with('student', $student);

    //return view('admin.')-with('student', $student);

  }
  function destroyStudent($id, Request $request){
    $destroy = DB::table ('Studentt')->where('sid',$id)->delete();
    return redirect('/all-student');
  }
  /*function addBook(Request $request){

      

    return view('admin.add-book');

  }
  function storeBook(Request $request){
    $library                 = new Library();
    $library->bid          = $request->bid;
    $library->bname            = $request->bname;
    $library->author          = $request->author;
    $library->created_at = "";
    $library->updated_at = ""

    $library->save();
  }*/

public function search(Request $request){
    //$teacher_id = $_POST['teacher_id'];
    $searchk = $request->searchk;


    $studentt = new Studentt();
    $routineList = $studentt->where('sid', 'like', '%'.$searchk.'%')
                            ->get();
    $output = '';
    if(count($routineList)>0){
      foreach($routineList as $row)
      {
        $output = "{
                    <tr>
                      <th>'{$row->Photo}'</th>
                      <th>'{$row->ID}'</th>
                      <th>'{$row->Name}'</th>
                      <th>'{$row->Section}'</th>
                      <th>'{$row->Blood_Group}'</th>
                      <th>'{$row->Gender}'</th>
                      <th>'{$row->Father}'</th>
                      <th>'{$row->Mother}'</th>
                      <th>'{$row->Date_Of_Birth}'</th>
                      <th>'{$row->Phone}'</th>
                      <th>'{$row->E_mail}'</th>
                      <th>'{$row->Religion}'</th>
                      <th>'{$row->Address}'</th>
                      <th>'{$row->Admitted_in_class}'</th>
                      <th>'{$row->Admission_Date}'</th>
                    </tr>
                    }";
      }
      //echo $output;
      echo "Wrong";
    }
    else{
      $output = '
       <tr>
        <td>No Data Found</td>
       </tr>
       ';
      echo $output;
    }

  }









  function classRoutine(Request $request){
  	
    $routine = DB::table('c_routine')->get();
  return view('admin.class-routine')->with('routine', $routine);
  }
  function storeRoutine(RoutineRequests $request){

    $routine               = new ClassRoutine();
    $routine->class_id     = $request->sID;
    $routine->sec_name     = $request->sName;
    $routine->class        = $request->class;
    $routine->course_name  = $request->subName;
    $routine->t_name       = $request->tName;
    $routine->t_id         = $request->tID;
    $routine->start_time   = $request->sTime;
    $routine->finish_time  = $request->fTime;
    $routine->day          = $request->day;
            
    $routine->save();
    return redirect('/class-routine');

  }




}
