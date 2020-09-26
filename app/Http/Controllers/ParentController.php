<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ParentRequests;
use Illuminate\Support\Facades\DB;
use App\Teacher;
use PDF;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class ParentController extends Controller
{
    function parentdash(Request $request){
        $class = $request->session()->get('class');
        $section = $request->session()->get('section');

        $event = DB::table('event')->get();

        $notice = DB::table('notice')
                        ->join('subject', 'notice.subject_id', '=', 'subject.subject_id')
                        ->where('notice.class_id', $class)
                        ->where('notice.section_id', $section)
                        ->orderBy('notice.noticedate', 'desc')
                        ->limit(10)
                        ->get();
        return view('parent.parentdash')->with('notice', $notice)->with('event', $event);
    }

    function teacher(Request $request){
        $class = $request->session()->get('class');

        $teacher = DB::table('teacher')
                        ->join('subject', 'teacher.subject_id', '=', 'subject.subject_id')
                        ->where('subject.class_id', $class)
                        ->get();

        return view('parent.teacher')->with('teacher', $teacher);
    }

    function upload($id,Request $request){
        $sid = $request->session()->get('userid');

        if($request->hasfile('uploadfile') ){
            $request->validate([
                'uploadfile' => 'required|max:1024',
            ]);
            $UploadFile =  $request->file('uploadfile');
            $filename = $UploadFile->getClientOriginalName();
            $date = date("Y-m-d");
            DB::table('parentupload')->insert(
                ['teacher_id' => $id,
                'uploadfiledirectory' => $filename,
                'parentuploaddate' => $date,
                'student_id' => $sid]);
            if($UploadFile->move('parent/file', $UploadFile->getClientOriginalName()) ){
                return redirect()->route('parent.teacher');
            }else{
                return send('not uploaded');
            }
        }
    }

    function routine(Request $request){

        $class = $request->session()->get('class');
        $section = $request->session()->get('section');

        $saturday = DB::table('routine')
                        ->where('class_id', $class)
                        ->where('section_id', $section)
                        ->where('day', 'Saturday')
                        ->orderBy('startingtime', 'asc')
                        ->get();

        $sunday = DB::table('routine')
                        ->where('class_id', $class)
                        ->where('section_id', $section)
                        ->where('day', 'Sunday')
                        ->orderBy('startingtime', 'asc')
                        ->get();

        $monday = DB::table('routine')
                        ->where('class_id', $class)
                        ->where('section_id', $section)
                        ->where('day', 'Monday')
                        ->orderBy('startingtime', 'asc')
                        ->get();

        $tuesday = DB::table('routine')
                        ->where('class_id', $class)
                        ->where('section_id', $section)
                        ->where('day', 'Tuesday')
                        ->orderBy('startingtime', 'asc')
                        ->get();

        $wednesday = DB::table('routine')
                        ->where('class_id', $class)
                        ->where('section_id', $section)
                        ->where('day', 'Wednessday')
                        ->orderBy('startingtime', 'asc')
                        ->get();

        $thursday = DB::table('routine')
                        ->where('class_id', $class)
                        ->where('section_id', $section)
                        ->where('day', 'Thursday')
                        ->orderBy('startingtime', 'asc')
                        ->get();

        return view('parent.routine')->with('saturday', $saturday)
                                      ->with('sunday', $sunday)
                                      ->with('monday', $monday)
                                      ->with('tuesday', $tuesday)
                                      ->with('wednesday', $wednesday)
                                      ->with('thursday', $thursday);
    }

    function subject(Request $request){
        $class = $request->session()->get('class');
        
        $client = new Client(['base_uri' => 'http://localhost:4444']);

        $res = $client->request('GET', '/parent/subject/'.$class);
        $subject = json_decode($res->getBody());
        
        return view('parent.subject')->with('subject', $subject);
    }

    function syllabus(Request $request){

        $class = $request->session()->get('class');
        $section = $request->session()->get('section');

        $syllabus = DB::table('syllabus')
                        ->join('subject', 'syllabus.subject_id', '=', 'subject.subject_id')
                        ->where('syllabus.class_id', $class)
                        ->where('syllabus.section_id', $section)
                        ->get();

        return view('parent.syllabus')->with('syllabus', $syllabus);
    }
    function grade(Request $request){
        $id = $request->session()->get('userid');
        $class = $request->session()->get('class');
        $section = $request->session()->get('section');

        $grade = DB::table('result')
        ->join('subject', 'result.subject_id', '=', 'subject.subject_id')
        ->where('result.class_id', $class)
        ->where('result.section_id', $section)
        ->where('result.student_id', $id)
        ->get();
        return view('parent.grade')->with('grade', $grade);
    }

    function lostfound(){

        $client = new Client(['base_uri' => 'http://localhost:4444']);
          
        $response = $client->request('GET', '/parent/lostfound');
        
        $found = json_decode($response->getBody());

        return view('parent.found')->with('found', $found);
    }

    public function lostfoundsearch(Request $request)
    {
        $client = new Client(['base_uri' => 'http://localhost:4444']);
        $lostfound=$request->get('lostfound');
        $response = $client->request('GET', '/parent/lostfoundsearch/'.$lostfound);
            
        $body = $response->getBody();
        $searchvalue = json_decode($body);
        return json_encode($searchvalue->result);
    }

    function parentprofile(Request $request){

        $value = $request->session()->get('parentid');

        $parent = DB::table('parent')->where('parent_id', $value)->first();

        return view('parent.parentprofile')->with('parent', $parent);
    }

    function updateprofile(Request $request){

        $value = $request->session()->get('parentid');

        $parent = DB::table('parent')->where('parent_id', $value)->first();

        return view('parent.updateprofile')->with('parent', $parent);
    }

    function saveprofile(ParentRequests $request){
        $id = $request->session()->get('parentid');

        DB::table('parent')
              ->where('parent_id', $id)
              ->update(['parentname'      => $request->name,
                        'parentemail'     => $request->email,
                        'parentrelation'=> $request->parentrelation,
                        'parentphone'   => $request->phone]);
        return redirect()->route('parent.parentprofile');
    }
}
