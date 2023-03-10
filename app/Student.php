<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table="students";
    protected $fillable=['username','password','email','description','gender','date','age','phone','Active','color','Ba_status','notification'];



}



