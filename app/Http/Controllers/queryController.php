<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\employee;

class queryController extends Controller
{
    //
    function operation(){

          $data= DB::table('employees')
          ->orderBy('emp_name','desc')
          ->get();
          return $data;


        
        // return DB::table('employees')
        //         ->whereColumn('emp_name','>','emp_dept')       //whereColumn checks wether two column ara equal or not
        //         ->get();
     
        // return DB::table('employees')
        // ->where('emp_dept','web')                  //where clause with two conditions here we dont use 'and' 
        // ->where('salary','>=',[30000]) 
        // ->get();

        // return DB::table('employees')
        // ->where('emp_dept','<>','web')
        // ->get();
 

        // return DB::table('employees')
        // ->where('emp_dept','web')
        // ->orWhere('emp_dept','devops')       
        // ->get();
        
        // return DB::table('employees')
        // ->whereBetween('id',[1,4])
        // ->get();
        

        // return DB::table('employees')
        // ->where('emp_dept','<>','web')
        // ->get();

        // return DB::table('studinfo')
        // ->whereExists(function ($query) {
        //     $query->select(DB::raw(1))
        //           ->from('studmarks')
        //           ->whereColumn('studinfo.id', 'studmarks.id');
        // })
        // ->get();

        //return DB::table('city')->where('name','amit')->value('city');
        //return DB::table('city')->select('name','age')->orderBy('name')->get();

       //Inner Join
        // return DB::table('studinfo')
        // ->join('studmarks','studinfo.id','=','studmarks.id')
        // ->select('studinfo.name','studmarks.subject','studmarks.smarks')                            //display full record of both table
        // ->get();

        //  return DB::table('employees')
        // ->select('emp_dept',DB::raw('SUM(salary) as total_profit'))
        // ->groupBy('emp_dept')
        // ->havingRaw('SUM(salary) > ?', [20000])
        // ->get();

        // return DB::table('studinfo')
        // ->leftJoin('studmarks','studinfo.id','=','studmarks.id')          //left Join
        // ->get();
       
        // if(DB::table('city')->where('name','dhruv')->exists()){                 //for checking whether record exists or not
        //    echo "record exists"; 
        // }

       
        //$data=DB::table('city')->get();
        // foreach($data as $data){                     //return all the names from city table
        //    echo $data->name. '<br>';
        // }


        //return DB::table('city')->where('city','ahmedabad')->count();  //it returns 2  because there is tw0 students from ahmedabad

      //return DB::table('city')->where('city','ahmedabad')->get();     //it returns 2 raw of record of where city =ahmedabad

        //return DB::table('studmarks')->count('id');
        //return DB::table('studmarks')->avg('id');


        //return DB::table('studmarks')->max('smarks');
        //return DB::table('studmarks')->min('smarks');
        //return DB::table('studmarks')->sum('smarks');
        //return DB::table('studmarks')->select(DB::raw("min(smarks) as min_marks,max(smarks) as max_marks"))->get();

        // ->where('id',5)->delete();             //For deleting Record 


        // ->update([                           //For Updating record using query builder
        //      "name"=>"harry",    
        //      "age"=>"21",
        //      "city"=>"tokyo"
        // ]);

        // ->insert([                           //For inserting record using query builder
        //      "name"=>"parth",    
        //      "age"=>"23",
        //      "city"=>"nadiad"
        // ]);


        // ->where('id',4)                       //return 4th id record
        //->get();
    }
}
