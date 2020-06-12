<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = ['name', 'position', 'salary', 'employmentType', 'status', 'photo'];
}