<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
    	'name', 'mssv', 'DateOfBirth', 'class', 'course', 'idInstitute'
    ];
}
