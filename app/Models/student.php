<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    //public $table="studinfo";
    public $table="city";
    public $timestamps=false;

    //mutetors
    // function setNameAttribute($value){
    //     return $this->attributes['name']='Mr.'.$value;
    // }

    //Accessors
    function getNameAttribute($value){
        return ucFirst($value);
    }
}
