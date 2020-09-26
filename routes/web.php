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
Route::get('/add-book','LibraryController@index');





Route::middleware(['sess'])->group(function(){

Route::get('/home','AdminHomeController@index')->middleware('sess');

Route::get('/student-admit-form','AdminHomeController@studentAdmitForm');
Route::post('/student-admit-form','AdminHomeController@storeStudent');

Route::get('/all-student','AdminHomeController@allStudent');
Route::post('/all-student','AdminHomeController@search');


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



});

