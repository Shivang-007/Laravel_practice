<?php

use App\Http\Controllers\cacheController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\queryController;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CollectionController;

use Illuminate\Support\Str;





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
// Fluet String
 
// $data="Hii, lets learn laravel";
// $data=Str::ucfirst($data);
// $data=Str::replaceFirst('Hii', 'Hello', $data);
// echo $data;

Route::get('/', function () {
    return view('welcome');
});
//Route::get("/demo",[UserController::class,'show']);

// Route::get('/user/{name}', function ($name) {
//     return view('Hello',["name"=>$name]);
// });
Route::view("user", "user");
Route::post("/submit", [UserController::class, 'getData']);
Route::post("/validate", [UserController::class, 'validation']);
Route::view('validate', "formValidate");


Route::get("/table", [UserController::class, 'database']);

Route::get("/ApiData", [UserController::class, 'ApiData']);

Route::get("/submitLogin", [UserController::class, 'getFormData']);

Route::view("Login", "login");

Route::view('noaccess', 'noaccess');
Route::view('home', 'home');

Route::post("/login", [FormController::class, 'userLogin']);

Route::view("form", "form");

Route::view("profile", "profile");

Route::view("upload", "Fileupload");
Route::post("/upload", [FormController::class, 'upload']);

Route::view("language", "language");
ROute::view('data', 'database');
Route::post("/send", [FormController::class, 'addData']);

// Route::get('/language/{name}', function($name) {
//     App::setlocale($name);
//     return view('language');
// });

Route::get('/logout', function () {
    if (session()->has('username')) {
        session()->pull('username');         //For deleting session
    }
    return redirect('form');
});

//crud operation
Route::view('list', 'list');
Route::get("/get", [FormController::class, 'get']);
Route::get("delete/{id}", [FormController::class, 'delete']);
Route::get("update/{id}", [FormController::class, 'updateForm']);
Route::post("update", [FormController::class, 'update']);


//Query Builder
Route::get("showData", [queryController::class, 'operation']);

//accessors
Route::get("accessors", [queryController::class, 'accessors']);
//mutetors
Route::get("mute", [queryController::class, 'mutetors']);

Route::get('relation', [RelationController::class, 'index']);

//Ploymorphic Relation
Route::get('comment', [RelationController::class, 'comment']);
Route::get('user', [RelationController::class, 'user']);
Route::get('post', [RelationController::class, 'post']);

//Route Model Binding
Route::get('bind/{key:name}', [RelationController::class, 'bind']);

//Multiple Database connection
Route::get("index", [UserController::class, 'index']);

//cache 
Route::get("cache",[cacheController::class,'cache']);

//email
// Route::get('/mail',function(){
//     $to_name="shivang";
//     $to_email="shivangrathod007@gmail.com";
//     $data=array('name'=>'elice','body'=>'testing an email using laravel');
//     Mail::send('mail',$data,function ($message) use ($to_name,$to_email){
//         $message->to($to_email)
//         ->subject('web testing email');
//     });
//     echo "Email has been sent";
// });

//event
Route::get("event",[UserController::class,'task']);



//collections
Route::get("/collect", [CollectionController::class, 'index']);


//URl generation
Route::get('/Contact',[UserController::class,'url_generation'])->name('Contact');
Route::get('/About',[UserController::class,'url_generation'])->name('About');
Route::get('/post/{post}/comment/{comment}',function($post,$comment){
    return "post";
})->name('post.comment');

// Route::get('secret',function(Request $request){           in this we have to import Illuminate\Http\Request
//     if(! $request->hasValidSignature()){
//             abort(401);
//     }else{
//     return "this is secret message";
//     }
// })->name('secret');

Route::get('secret',function(){                      //using middleware
    return "this is secret message";
})->name('secret')->middleware('signed');