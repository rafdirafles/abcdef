<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riwayat_unit_kerja extends Model
{
    //
    protected $fillable=['nip_nrp','jenis_mutasi','unit_kerja','no_sk','pejabat','tgl_sk','keterangan','tgl_masuk','tgl_keluar'];
}
