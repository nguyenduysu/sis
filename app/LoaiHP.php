<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiHP extends Model
{
    protected $table = 'loai_hp';

    protected $fillable = ['id', 'ten', 'so_TC'];

    public function CTDT() {
        return $this->belongsToMany('App\CTDT');
    }

    public function MonHoc() {
        return $this->hasMany('App\MonHoc');
    }
}
