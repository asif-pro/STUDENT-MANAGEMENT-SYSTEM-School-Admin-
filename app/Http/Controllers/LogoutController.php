<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class logoutController extends Controller
{
  function index(Request $request){
  	$request->session()->flush();
  	return redirect('/login'); 
  }

}
