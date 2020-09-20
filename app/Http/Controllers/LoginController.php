<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class loginController extends Controller
{
  function index(){
  	return view('login.index');
  }

  function validation(Request $request){

  	if($request->username == $request->password){
  		$request->session()->put('username',$request->username);
  		  	return redirect('/home');  

  	}
  	else{
  		$request->session()->flash('msg','invalid username or password');
  		return redirect('/login');
  	}
  	
  }
}
