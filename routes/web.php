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
    return view('general.index');
});
Route::get("login","GeneralController@login");
Route::get("home","GeneralController@home");
//Route::get('about','AboutController@about');
Route::get("dashboard","AdminController@dash");
Route::get("cmgmt","AdminController@contactmgmt");
Route::get("newreg","GeneralController@newreg");
Route::get("teacher","GeneralController@teacher");
Route::get("gallery","GeneralController@gallery");
Route::get("contact","GeneralController@contact");
Route::get("mission","GeneralController@mission");
Route::get("course","GeneralController@course");
Route::get("student","AdminController@student");
Route::get("upload","AdminController@upload");
Route::get("study","AdminController@study");
Route::get("sendsms","AdminController@sendsms");
Route::get("discuss","AdminController@discuss");
Route::get("loginmgmt","AdminController@loginmgmt");
Route::get("download","AdminController@download");
Route::get("enquirymgmt","AdminController@enquirymgmt");
Route::get("forgot","GeneralController@forgot");
Route::get("feedback","AdminController@feedbackmgmt");
Route::get("/useardash","StudentController@useardash");
Route::get("/ALogout","AdminController@ALogout");


Route::get("Studash","StudentController@Studash");
Route::get("slogout","StudentController@slogout");
Route::get("sfeedback","StudentController@sfeedback");
Route::get("Studybook","StudentController@Studybook");
Route::get("schangepaswd","StudentController@schangepaswd");
Route::get("Downloadtask","StudentController@Downloadtask");
Route::get("sdisscus","StudentController@sdisscus");
Route::get("/forget","GeneralController@forget");



Route::post("/SaveEnquiry","GeneralController@SaveEnquiry");
Route::post("/reg","GeneralController@reg");
Route::post("/tech","GeneralController@tech");
Route::get("/review","GeneralController@review");
Route::post("/feedback","GeneralController@feedback");
Route::get("/cpassword","GeneralController@cpassword");
Route::post("/uptask","AdminController@uptask");
Route::post("/upbook","AdminController@upbook");
Route::post("/ALogin","GeneralController@ALogin");


Route::get('delete/{id}',"AdminController@delete");
Route::get('rdelete/{id}',"AdminController@rdelete");
Route::get('bookdelete/{id}',"AdminController@bookdelete");
Route::get('taskdelete/{id}',"AdminController@taskdelete");
Route::get('feedbackdelete/{id}',"AdminController@feedbackdelete");
Route::get("/AChangepassword","AdminController@AChangepassword");
Route::post("changepass","AdminController@changepass");
Route::post('/sschangepass',"StudentController@sschangepass");


Route::get("forgot","GeneralController@forgot");
Route::get("/OPTGenerater","GeneralController@OPTGenerater");
