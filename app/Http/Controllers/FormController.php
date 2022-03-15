<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class FormController extends Controller
{
    
    function userLogin(Request $req){
        $data=$req->input();
        $req->session()->put('username',$data["username"]);          
        return redirect('profile');
    }
    // function userLogin(Request $req){
    //     $data=$req->input();
    //     $req->session()->flash('username',$data["username"]);         //flash session
    //     return redirect('form');
    // }

    function upload(Request $req){
        return $req->file('file')->storeAs('img',"scrrenshot.png");
    }
    function addData(Request $req){
        $student=new student;
        $student->name=$req->name;
        $student->age=$req->age;
        $student->city=$req->city;
        $student->save();
        echo "form is submitted";
    }
    function get(){
        $data=student::paginate(5);
        return view('list',["record"=>$data]);
    }
    function delete($id){
        $data=student::find($id);
        $data->delete();
        return redirect('get');
    }
    function updateForm($id){
        $data= student::find($id);
        return view('update',["data"=>$data]);
    }
    function update(Request $req){
        $data= student::find($req->id);
        $data->name=$req->name;
        $data->age=$req->age;
        $data->city=$req->city;
        $data->save();
        return redirect('get');

    }
}
