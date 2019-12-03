<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonHoc extends Model
{
    protected $table = 'monhoc';

    protected $fillable = ['id', 'ten', 'tc', 'ky_hoc_chuan', 'LoaiHP_id'];

    public function LoaiHP() {
        return $this->belongsTo('App\LoaiHP');
    }

    public function KQHT() {
        return $this->hasMany('App\KQ_HT');
    }
}
