<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;

use Illuminate\Http\Request;

class cacheController extends Controller
{
    //
    function cache(){

      //************* Cache Facades*************
     
      //Storing an item

       // Cache::put('email','amit@gmail.com',10);
       // dd(Cache::get('email'));

       //Cache::put('roll',101);
       //Cache::put('state','gujarat',now()->addMinutes(1));

    //    Cache::remember('state',1,function(){
    //        return 'bihar';
    //    });
       //dd(Cache::get('state'));

       dd(Cache::add('roll',101,4)); 

       //for checking Cache Item is exist or not
    //    if(Cache::has('email')){
    //        dd("yes");
    //    }

       //Removing Item
    //    Cache::forget('roll');
    //    Cache::put('roll',101,0);
    //    Cache::put('roll',101,-1);

       //clear cache
       //Cache::flush();
        //return view('cache');

        //retriving and delete item
       // Cache::pull('state');


 //*************Global  Cache Helper *************
      //Store Item
    //    cache(['email'=>'admin@gmail.com'],10);
    //    dd(cache('email'));

     //for checking Cache Item is exist or not
    //    if(cache()->has('email')){
    //        dd("yes");
    //    }


    //Removing Item
    //    cache()->forget('roll');
    //    cache()->put('roll',101,0);
    //    cache()->put('roll',101,-1);

       //clear cache
       //cache()->flush();
        //return view('cache');

        //retriving and delete item
       // cache()->pull('state');

    }
}
