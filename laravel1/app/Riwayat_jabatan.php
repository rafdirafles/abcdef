<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Riwayat_jabatan extends Model
{
    //
    protected $fillable=['nip_nrp','id_jabatan','nomor_sk','pejabat','tgl_sk','tgl_mulai_terhitung','keterangan'];


    public function Jabatan(){
        return $this->belongsTo('App\Jabatan','id_jabatan');
    }
}
