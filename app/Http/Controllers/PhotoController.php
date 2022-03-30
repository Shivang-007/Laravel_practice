<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


use App\Models\Image;
class PhotoController extends Controller
{
    //
    public function create(){
        $images=Image::all();
        return view('ImageUpload',compact('images'));
    }
    public function store(Request $req){
       
       $name=$req->file('image')->getClientOriginalName();
       $size=$req->file('image')->getSize();
       $req->image->move('Images',$name);
       $photo=new Image;
       $photo->name=$name;
       $photo->size=$size;
       $photo->save();
       return redirect()->back();
    }

    public function download($id){
          $image=Image::find($id);
          $image_path=public_path('Images/'.$image->name);
          return response()->download($image_path);
    }
}
