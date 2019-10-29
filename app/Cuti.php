<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    //
    protected $fillable=[ 'nip_nrp',
    'id_jenis_cuti',
    'tgl_mulai',
    'tgl_selesai',
    'status',
    'jumlah',
    'keterangan',];
    public function jenis_cuti(){
        return $this->belongsTo('App\Jenis_cuti','id_jenis_cuti');

    }
    public function User(){
        return $this->belongsTo('App\User','nip_nrp');

    }
}
