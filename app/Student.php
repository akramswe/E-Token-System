<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['std_id','std_name','department','batch','semester','status'];
}
