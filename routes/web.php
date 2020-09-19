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
    return view('welcome');
});

Route::get('/login','LoginController@index');
Route::post('/login','LoginController@validation');
Route::get('/logout','LogoutController@index');

Route::get('/home','AdminHomeController@index');

Route::get('/student-admit-form','AdminHomeController@studentAdmitForm');

Route::get('/all-student','AdminHomeController@allStudent');

Route::get('/all-teacher','AdminHomeController@allTeacher');

Route::get('/add-teacher','AdminHomeController@addTeacher');

Route::get('/student-details','AdminHomeController@studentDetails');

Route::get('/all-class','AdminHomeController@allClass');

Route::get('/add-class','AdminHomeController@addClass');

Route::get('/notice-board','AdminHomeController@noticeBoard');

Route::get('/all-subject','AdminHomeController@allSubject');

Route::get('/class-routine','AdminHomeController@classRoutine');

