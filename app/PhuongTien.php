<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhuongTien extends Model
{
    //
    protected $table = "phuongtien";

    public function ct_tour(){
        return $this->belongsTo('App\CT_Tour','idct_tour','id');
    }
}
