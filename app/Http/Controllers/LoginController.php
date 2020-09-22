<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Login;


class loginController extends Controller
{
  function index(){
  	return view('login.index');
  }

  function validation(Request $request){

      $user = new Login();
      $data = $user->where('user_id', $request->username)
                   ->where('userpassword', $request->password)
                   ->get();

        if (count($data) > 0){
          $request->session()->put('username', $request->username);
          return redirect('/home');
        }
          else{
      $request->session()->flash('msg','invalid username or password');
      return redirect('/login');
    }
/*if($request->username == $request->password){
  		$request->session()->put('username',$request->username);
  		  	return redirect('/home');  

  	}
  	else{
  		$request->session()->flash('msg','invalid username or password');
  		return redirect('/login');
  	}*/
  	
  }
}
