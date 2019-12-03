<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KQ_HT extends Model
{
    protected $table = 'kq_ht';

    protected $fillable = ['id', 'Diem_QT', 'Diem_CK', 'SV_id', 'MH_id'];

    public function SinhVien() {
        return $this->belongsTo('App\SinhVien');
    }

    public function MonHoc() {
        return $this->hasMany('App\MonHoc');
    }
}
