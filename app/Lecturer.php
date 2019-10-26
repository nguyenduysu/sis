<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    protected $table = 'lecturers';

    protected $fillable = [
    	'name', 'email', 'phone', 'idInstitute'
    ];
}
