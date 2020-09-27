<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::GET('/login', 'LoginController@index');
Route::POST('/login', 'LoginController@validation');
Route::GET('/logout', 'LogoutController@index');
//github
Route::get('login/github', 'LoginController@redirectToProvider');
Route::get('login/github/callback', 'LoginController@handleProviderCallback');
//google
Route::get('login/google', 'LoginController@redirectToProvider_google');
Route::get('login/google/callback', 'LoginController@handleProviderCallback_google');

Route::middleware(['sess'])->group(function(){
  ##middleware->(session)##
  Route::GET('/teacher1', 'TeacherController@index');
  Route::GET('/teacher/index5', 'TeacherController@index');
  Route::GET('/teacher/teacher-profile', 'TeacherController@teacherProfile');
  Route::GET('/teacher/teacher-profilePDF', 'TeacherController@teacherProfilePDF');
  Route::GET('/teacher/class-routine', 'TeacherController@routine');
  Route::POST('/teacher/class-routine', 'TeacherController@routineSearch');
  Route::GET('/teacher/all-student', 'TeacherController@allStudent');
  Route::POST('/teacher/all-student', 'TeacherController@studentDetails');
  Route::GET('/teacher/student-attendence', 'TeacherController@studentAttendence');
  Route::GET('/teacher/exam-grade', 'TeacherController@examGrade');
  Route::POST('/teacher/exam-grade', 'TeacherController@examGradeAdd');
  Route::POST('/teacher/exam-gradeSearch', 'TeacherController@examGradeSearch');
  ##middleware->(typeCheck)##
  Route::middleware(['type'])->group(function(){
  Route::GET('/teacher/exam-grade/edit/{result_id}', 'TeacherController@examGradeEdit');
  Route::POST('/teacher/exam-grade/edit/{result_id}', 'TeacherController@examGradeModify');
  });
  Route::GET('/teacher/grade-sheet', 'TeacherController@gradeSheet');
  Route::POST('/teacher/grade-sheet', 'TeacherController@gradeSheetSearch');
  Route::GET('/teacher/grade-sheetPDF', 'TeacherController@gradeSheetPDF');
  Route::GET('/teacher/notice-board', 'TeacherController@noticeBoard');
  Route::POST('/teacher/notice-board', 'TeacherController@noticeBoardAdd');
  Route::POST('/teacher/notice-boardSearch', 'TeacherController@noticeBoardSearch');
  Route::GET('/teacher/messaging', 'TeacherController@messaging');
  Route::POST('/teacher/messaging', 'TeacherController@messagingAdd');
  Route::POST('/teacher/lost-found', 'TeacherController@lostFound');
  Route::GET('/teacher/map', 'TeacherController@map');
  Route::GET('/teacher/note-upload', 'TeacherController@noteUpload');
  Route::POST('/teacher/note-upload', 'TeacherController@noteUploadedFile');
  Route::POST('/teacher/searchAssignment', 'TeacherController@searchAssignment');
  Route::POST('/teacher/searchNote', 'TeacherController@searchNote');
  //Live Chat
  Route::GET('/teacher/live-chat', 'ChatController@index');
  Route::POST('/teacher/live-chat', 'ChatController@send');
  Route::POST('/teacher/live-chatPOST', 'ChatController@chatPOST');

  Route::GET('/teacher/chat', 'ChatController@chatView');
  //Teacher routes end here
});
  
//Student Routes Start@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
Route::get('/student','StudentLoginController@land')->name('landing');
//Route::get('/login','StudentLoginController@index')->name('login');
Route::get('/student/login','StudentLoginController@index')->name('login');
Route::post('/student/login',['uses'=>'StudentLoginController@varify'] );
Route::get('/logout','LogoutController@index');

Route::get('/studentlogin/github', 'StudentLoginController@redirectToProvider');
Route::get('/student/login/github/callback', 'StudentLoginController@handleProviderCallback');


Route::middleware(['sess'])->group(function(){
	Route::group(['middleware'=>['studenttype']], function(){
		Route::get('/student/stdash','StudentController@stdash')->name('student.stdash');
		Route::get('/student/teacher','StudentController@teacher')->name('student.teacher');
		Route::post('/student/teachersearch', 'StudentController@teachersearch')->name('student.search');
		Route::get('/student/routine','StudentController@routine')->name('student.routine');
		Route::get('/student/subject','StudentController@subject')->name('student.subject');
		Route::get('/student/syllabus','StudentController@syllabus')->name('student.syllabus');
		Route::get('/student/notes','StudentController@notes')->name('student.notes');
		Route::get('/student/assignment','StudentController@assignment')->name('student.assignment');
		Route::post('/student/upload/{id}', 'StudentController@upload');
		Route::get('/student/grade','StudentController@grade')->name('student.grade');
		Route::get('/student/mark_pdf/pdf', 'StudentGradePdfController@markpdf')->name('studentmark.pdf');
		Route::get('/student/grade_pdf/pdf', 'StudentGradePdfController@gradepdf')->name('studentgrade.pdf');
		Route::get('/student/found','StudentController@found')->name('student.found');
		Route::post('/student/lostfound/search', 'StudentController@lostfoundsearch')->name('student.lostfoundsearch');
		Route::get('/student/stprofile','StudentController@stprofile')->name('student.stprofile');
		Route::get('/student/updateprofile','StudentController@updateprofile')->name('student.updateprofile');
		Route::post('/student/updateprofile',['uses'=>'StudentController@saveprofile'] );
    });
});
//Student Routes End@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

//SuperAdmin Routes Start $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
//Route::get('/','LoginController@land')->name('landing');
//Route::get('/login','LoginController@index')->name('login');
//Route::post('/login',['uses'=>'LoginController@varify'] );
//Route::get('/logout','LogoutController@index');


//Route::middleware(['sess'])->group(function(){

	//Route::group(['middleware'=>['parenttype']], function(){
		Route::get('/parent/parentdash','ParentController@parentdash')->name('parent.parentdash');
		Route::get('/parent/teacher','ParentController@teacher')->name('parent.teacher');
		Route::post('/parent/upload/{id}', 'ParentController@upload');
		Route::get('/parent/routine','ParentController@routine')->name('parent.routine');
		Route::get('/parent/subject','ParentController@subject')->name('parent.subject');
		Route::get('/parent/syllabus','ParentController@syllabus')->name('parent.syllabus');
		Route::get('/parent/grade','ParentController@grade')->name('parent.grade');
		Route::get('/parentstudent/mark_pdf/pdf', 'ParentStudentGradePdfController@markpdf')->name('parentstudentmark.pdf');
		Route::get('/parentstudent/grade_pdf/pdf', 'ParentStudentGradePdfController@gradepdf')->name('parentstudentgrade.pdf');
		Route::get('/parent/found','ParentController@lostfound')->name('parent.lostfound');
		Route::post('/parent/lostfoundsearch', 'ParentController@lostfoundsearch')->name('parent.lostfoundsearch');
		Route::get('/parent/parentprofile','ParentController@parentprofile')->name('parent.parentprofile');
		Route::get('/parent/updateprofile','ParentController@updateprofile')->name('parent.updateprofile');
		Route::post('/parent/updateprofile',['uses'=>'ParentController@saveprofile'] );
		Route::post('/parent/teachersearch', 'ParentController@teachersearch')->name('parent.search');
			
	//});

	//Route::group(['middleware'=>['supertype']], function(){
		Route::get('/superadmin/index','SuperAdminController@index')->name('superadmin.index');
		Route::get('/superadmin/createadmin','SuperAdminController@createadmin')->name('superadmin.createadmin');
		Route::post('/superadmin/createadmin','SuperAdminController@store');
		Route::get('/superadmin/updateadmin/{id}','SuperAdminController@edit')->name('superadmin.updateadmin');
		Route::post('/superadmin/updateadmin/{id}','SuperAdminController@update')->name('superadmin.updateadmin');
		Route::get('/superadmin/deleteadmin/{id}','SuperAdminController@destroy')->name('superadmin.deleteadmin');
	//});
//});
//SuperAdmin Routes End $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

//SuperAdmin Routes End !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

//Route::get('/login','LoginController@index');
//Route::post('/login','LoginController@validation');
Route::get('/logout','LogoutController@index');
//Route::get('/add-book','LibraryController@index');



//Route::middleware(['sess'])->group(function(){

//Route::get('/home','AdminHomeController@index')->middleware('sess');
Route::get('/home','AdminHomeController@index');

Route::get('/student-admit-form','AdminHomeController@studentAdmitForm');
Route::post('/student-admit-form','AdminHomeController@storeStudent');

Route::get('/all-student','AdminHomeController@allStudent');
Route::post('/all-student','AdminHomeController@search');

Route::get('/add-book','LibraryController@index');
Route::post('/add-book','LibraryController@store');
Route::get('/library','LibraryController@show');

Route::get('/all-teacher','AdminHomeController@allTeacher');

Route::get('/add-teacher','AdminHomeController@addTeacher');
Route::post('/add-teacher','AdminHomeController@storeTeacher');

Route::get('/student-details','AdminHomeController@studentDetails');

Route::get('/all-class','AdminHomeController@allClass');

Route::get('/add-class','AdminHomeController@addClass');

Route::get('/notice-board','AdminHomeController@noticeBoard');
Route::post('/notice-board','AdminHomeController@postNotice');

Route::get('/all-subject','AdminHomeController@allSubject');
Route::post('/all-subject','AdminHomeController@addSubject');

Route::get('/class-routine','AdminHomeController@classRoutine');
Route::post('/class-routine','AdminHomeController@storeRoutine');

Route::get('/update-student/{id}','AdminHomeController@update');
Route::post('/update-student/{id}','AdminHomeController@storeUpdate');

Route::get('/delete-student/{id}','AdminHomeController@deleteStudent');
Route::post('/delete-student/{id}','AdminHomeController@destroyStudent');

//Route::get('/add-book','AdminHomeController@addBook');
//Route::post('/add-book','AdminHomeController@storeBook');
