<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan_kejuruan extends Model
{
    //
    protected $fillable=['nip_nrp','nama_pendidikan','kota','tahun_lulus','lama_bulan','rangking','is_lulus_tidak','keterangan','file'];
}
