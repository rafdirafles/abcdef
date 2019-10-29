<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan_non_formal extends Model
{
    //
    protected $fillable=['nip_nrp','nama_pendidikan','lama_pendidikan','tahun_pendidikan','tempat_pendidikan','keterangan','file'];
}
