<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan_umum extends Model
{
    //
    protected $fillable=['nip_nrp','jenjang_pendidikan','nama_sekolah','jurusan','kota','tahun_lulus','no_ijazah','file'];
}
