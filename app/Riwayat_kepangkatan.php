<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riwayat_kepangkatan extends Model
{
    //
    protected $fillable=['nip_nrp','id_pangkat','tmt','nomor_sk','pejabat','tanggal_sk','dasar_peraturan'];

    public function Pangkat(){
        return $this->belongsTo('App\Pangkat','id_pangkat');
     }
}
