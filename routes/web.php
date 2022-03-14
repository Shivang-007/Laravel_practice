<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UserController;
//use App\Http\Controllers\FormController;
use App\Http\Controllers\queryController;



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
//Route::get("/demo",[UserController::class,'show']);

// Route::get('/user/{name}', function ($name) {
//     return view('Hello',["name"=>$name]);
// });
Route::view("user","user");
Route::post("/submit",[UserController::class,'getData']);
Route::post("/validate",[UserController::class,'validation']);
Route::view('validate',"formValidate");


Route::get("/table",[UserController::class,'database']);

Route::get("/ApiData",[UserController::class,'ApiData']);

Route::get("/submitLogin",[UserController::class,'getFormData']);

Route::view("Login","login");

Route::view('noaccess','noaccess');
Route::view('home','home');

Route::post("/login",[FormController::class,'userLogin']);
 
Route::view("form","form");

Route::view("profile","profile");

Route::view("upload","Fileupload");
Route::post("/upload",[FormController::class,'upload']);

Route::view("language","language");
ROute::view('data','database');
Route::post("/send",[FormController::class,'addData']);

// Route::get('/language/{name}', function($name) {
//     App::setlocale($name);
//     return view('language');
// });

Route::get('/logout', function () {
    if (session()->has('username')){
        session()->pull('username');         //For deleting session
    }
    return redirect('form');
});

Route::view('list','list');
Route::get("/get",[FormController::class,'get']);
Route::get("delete/{id}",[FormController::class,'delete']);
Route::get("update/{id}",[FormController::class,'updateForm']);
Route::post("update",[FormController::class,'update']);


//Query Builder
Route::get("showData",[queryController::class,'operation']);

//accessors
Route::get("accessors",[queryController::class,'accessors']);
//mutetors
Route::get("mute",[queryController::class,'mutetors']);

