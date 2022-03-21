<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Dotenv\Validator as DotenvValidator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    // function getData(){
    //     return ["name"=>"shivang","email"=>"shiv@gmail.com","age"=>21];
    // }
    
    function getData(){                                     //get data from database 
            return Employee::all();
    }

    function postData(Request $req){                                     //add data in database 
        $emp=new Employee;
        $emp->name=$req->name;
        $emp->email=$req->email;
        $emp->salary=$req->salary;
        $result=$emp->save();
        if($result){
            return ['Result'=>'data has been added'];
        }else{
            return ['Result'=>'operation failed'];
        }
    }

    function updateData(Request $req){                                     //Update data in database 
        $emp=Employee::find($req->id);
        $emp->name=$req->name;
        $emp->email=$req->email;
        $emp->salary=$req->salary;
        $result=$emp->save();
        if($result){
            return ['Result'=>'data has been updated'];
        }else{
            return ['Result'=>'update operation failed'];
        }
    }

    function deleteData($id){                                     //Update data in database 
        $emp=Employee::find($id);
        $result=$emp->delete();
        if($result){
            return ['Result'=>'data has been deleted'];
        }else{
            return ['Result'=>'delete operation failed'];
        }
    }
    function searchData($name){
         $result= Employee::where("name","like",$name."%")->get();     //searching a data
        if(count($result)){
            return $result;
        }else{
            return 'no record found';
        }
    }
    function testData(Request $req){
        
        $rules=array(
            "email"=>"required|min:13"
        );
        $validator=Validator::make($req->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),401);
        }else{
            $emp=new Employee;
            $emp->name=$req->name;
            $emp->email=$req->email;
            $emp->salary=$req->salary;
            $result=$emp->save();
            if($result){
                return ['Result'=>'data has been added'];
            }else{
                return ['Result'=>'operation failed'];
        }
    }
        

    
}
}