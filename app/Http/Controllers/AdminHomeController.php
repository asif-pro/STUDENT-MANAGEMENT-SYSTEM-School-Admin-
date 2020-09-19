<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class adminHomeController extends Controller
{
  function index(){
  	return view('admin.adminHome');
  }

  function studentAdmitForm(){
  	return view('admin.admit-form');
  }

  function allStudent(){
  	return view('admin.all-student');
  }  

  function allTeacher(){
  	return view('admin.all-teacher');
  }

  function addTeacher(){
  	return view('admin.add-teacher');
  }

  function studentDetails(){
  	return view('admin.student-details');
  }

  function allClass(){
  	return view('admin.all-class');
  }

  function addClass(){
  	return view('admin.add-class');
  }


  function noticeBoard(){
  	return view('admin.notice-board');
  }

  function allSubject(){
  	return view('admin.all-subject');
  }

  function classRoutine(){
  	return view('admin.class-routine');
  }



}
