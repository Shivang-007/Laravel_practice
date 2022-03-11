<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class queryController extends Controller
{
    //
    function operation(){
        return DB::table('crud')->get();
    }
}
