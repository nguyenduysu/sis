<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CTDT extends Model
{
    protected $table = 'ctdt';

    protected $fillable = ['id', 'ten'];

    public function LoaiHP() {
        return $this->belongsToMany('App\LoaiHP');
    }

    public function SV() {
        return $this->hasMany('App\SinhVien');
    }
}
