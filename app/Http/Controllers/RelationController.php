<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;
class RelationController extends Controller
{
    //
    function index(){
        //for hasOne relation
       //return Employee::find(2)->company;

       //For belongsTo relation             must have to use belongsto in forengnkey table
    //    $result=Company::get();
    //    dd($result[0]->employee);

       return Company::find(2)->employee;      //belongsTo is inverse of hasOne relation
    }
}
