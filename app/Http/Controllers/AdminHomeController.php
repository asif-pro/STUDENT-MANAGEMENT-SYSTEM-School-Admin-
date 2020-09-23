<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
   return view('admin.admit-form');
  }
    /*function storeStudent(Request $request){
    return view('admin.admit-form');
  }*/

  function allStudent(Request $request){
  	
    $students = DB::table('studentt')->get();
    return view('admin.all-student')->with('students', $students);
  }  

  function allTeacher(Request $request){
  	
    $teachers = DB::table('teacherr')->get();
    return view('admin.all-teacher')->with('teachers', $teachers);
  }

  function addTeacher(Request $request){
  	return view('admin.add-teacher');
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

  function allSubject(Request $request){
  	
    $subjects = DB::table('subjectt')->get();
    return view('admin.all-subject')->with('subjects', $subjects);

  }

  function classRoutine(Request $request){
  	
    $routine = DB::table('c_routine')->get();
  return view('admin.class-routine')->with('routine', $routine);
  }



}
