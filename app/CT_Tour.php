<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CT_Tour extends Model
{
    //
    protected $table = "ct_tour";

    public function tour(){
        return $this->belongsTo('App\Tour','idtour','id');
    }

    public function hoadon(){
        return $this->hasMany('App\HoaDon','idct_tour','id');
    }

    public function phuongtien(){
        return $this->hasMany('App\PhuongTien','idct_tour','id');
    }

    public function khuyenmai(){
        return $this->hasMany('App\KhuyenMai','idct_tour','id');
    }
}
