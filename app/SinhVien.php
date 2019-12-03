<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    protected $table = 'sv';

    protected $fillable = ['id', 'ten', 'mssv', 'CTDT_id', 'Muc_canh_cao'];

    public function CTDT() {
        return $this->belongsTo('App\CTDT');
    }

    public function KQHT() {
        return $this->hasMany('App\KQ_HT');
    }
}
