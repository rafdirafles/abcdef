<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satker extends Model
{
    //
    protected $fillable=['id_kompartemen','nama_satker'];
    protected $primarykey='id';
    public function kompartemen(){
        return $this->belongsTo('App\Kompartemen','id_kompartemen');
     }
}
