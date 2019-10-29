<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentSubject extends Model
{
    protected $table = 'studentsubjects';

    protected $fillable = [
        'idStudent', 'idSubject', 'scoreMid', 'scoreFinal', 'status'
    ];

    const STATUS_PASS = 1;
    const STATUS_FAIL = 0;
}
