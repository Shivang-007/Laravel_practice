<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Events\TaskEvent;

use App\Models\student;

class UserController extends Controller
{   
  

    function show(){
        //data=["shivang","amit","tejas"];

        return view("demo",["name"=>"shivang"]);
    }


    function getData(Request $req){
        return $req->input();        //display form data which user has submitted
      }
    //   function database(){
    //       return DB::select("select * from studinfo");  
    //   }


      function database(){
          return student::all();    //For fetch Database table data using model
      }


      function ApiData(){
         $data= Http::get("https://reqres.in/api/unknown");  //for fetch an API data 
         return view('Api',["data"=>$data['data']]);
      }


      function getFormData(){
        echo "form submitted";
      }


      function validation(Request $req){
        $req->validate([
            'username'=>'required | max:7',           //validation 
            'password'=>'required |min:5' 
        ]);
        return $req->input();
      }

      function userLogin(Request $req){         
          $data=$req->input('username');  
          $req->session()->put('user',$data);          //For creating session
          echo session('username');
      }


      // For multiple Database Connection 
     function index(){
      return DB::connection('mysql2')->table('city')->get();
    }

    function task(){
      event(new TaskEvent('Hii how are you!!'));
    }
}
