<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    //
    protected $fillable=['id','id_satker','nama_devisi'];

    public function satker(){
        return $this->belongsTo('App\Satker','id_satker');
     }

}
