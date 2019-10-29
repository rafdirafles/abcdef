<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutasi_internal extends Model
{
    //
    protected $fillable=[ 'nip_nrp',
    'id_unit_kerja',
    'id_divisi',
    'nomor_sk',
    'pejabat',
    'tanggal_sk',
    'tmt',
    'keterangan',];
    public function unit_kerja(){
        return $this->belongsTo('App\Unit_kerja','id_unit_kerja');
    }
    public function divisi(){
        return $this->belongsTo('App\Divisi','id_divisi');
    }
}
