<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    //One To One Relation
    public $timestamps=false;
    public function company(){
        return $this->hasOne('App\Models\Company');         //we must have to use hasOne in Primary key(without Foreign key) table 
    }
    
   // One To many Relation
    // public function getCompany(){
    //     return $this->hasmany(Company::class);          //if employee is working in more than one company 
    // }





}
