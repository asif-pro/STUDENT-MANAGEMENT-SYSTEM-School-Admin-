<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

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

  function allStudent(Request $request){
  	return view('admin.all-student');
  }  

  function allTeacher(Request $request){
  	return view('admin.all-teacher');
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
  	return view('admin.notice-board');
  }

  function allSubject(Request $request){
  	return view('admin.all-subject');
  }

  function classRoutine(Request $request){
  	return view('admin.class-routine');
  }



}
