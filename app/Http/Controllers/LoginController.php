<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class loginController extends Controller
{
  function index(){
  	return view('login.index');
  }

  function validation(Request $request){
  	return redirect('/home');  
  	
  }
}
