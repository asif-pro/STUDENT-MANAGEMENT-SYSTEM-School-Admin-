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
use\Illuminate\Support\Str;


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
    $c="102";
    $lid = "S".'-'.$c.'-'.date('Y');

    $pass = Str::random(10);
   return view('admin.admit-form')->with('pass', $pass)
                                  ->with('lid', $lid);

  }
    function storeStudent(Request $request){
    
    $student = new Studentt();
    $student->sName = $request->sName;
    $student->sid = $request->sid;
    $student->fName = $request->fName;
    $student->mName = $request->mName;
    $student->gender = $request->gender;
    $student->dob = $request->dob;
    $student->admissionDate = $request->admissionDate;
    $student->bGroup = $request->bGroup;
    $student->religion = $request->religion;
    $student->eMail = $request->eMail;
    $student->admissionClass = $request->admissionClass;
    $student->section = $request->section;
    $student->gPN = $request->gPN;
    $student->address = $request->address;
    $student->myImage = $request->myImage;
    $student->save();


    $login = new Login();
    $login->user_id = $request->sid;
    $login->userpassword = $request->password;
    $login->usertype = "student";
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
    $c="101";
    $lid = "T".'-'.$c.'-'.date('Y');
    $pass = Str::random(8);
  	return view('admin.add-teacher')->with('pass', $pass)
                                    ->with('lid', $lid);
  }

  function storeTeacher(Request $request){
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
  	
  $notices = DB::table('noticeboard')->get();
  return view('admin.notice-board')->with('notices', $notices);

  }
  function postNotice(Request $request){
  
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
  function addSubject(Request $request){
    
    $subject          = new Subjectt();
    $subject->sName   = $request->subjectName;
    $subject->sCode   = $request->subjectCode;
    $subject->sType   = $request->subjectType;
    $subject->sClass  = $request->subjectClass;
    $subject->save();
    return redirect('/all-subject');


  }

  function classRoutine(Request $request){
  	
    $routine = DB::table('c_routine')->get();
  return view('admin.class-routine')->with('routine', $routine);
  }
  function storeRoutine(Request $request){

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
