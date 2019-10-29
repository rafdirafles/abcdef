<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $primaryKey ='nip_nrp';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'nip_nrp','nama_pegawai','jenis_pegawai','nidn','no_kta_pegawai','pangkat','jabatan','no_kep_jabatan','id_satker','id_kompartemen','id_divisi',
        'email','password','alamat','tempat_lahir','tanggal_lahir','jk','agama','nik',
        'no_hp','tgl_masuk','is_status','foto','level'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function unit_kerja(){
        return $this->belongsTo('App\Unit_kerja','id_unit_kerja');
    }

    public function Data_keluarga(){
        return $this->hasMany('App\Data_keluarga','nip_nrp');
    }
    // public function Unit_kerja(){
    //     return $this->hasMany('App\Unit_kerja','nip_nrp');
    // }
    public function Pangkat(){
        return $this->belongsTo('App\Pangkat','pangkat');
    }
    public function Jabatan(){
        return $this->belongsTo('App\Jabatan','jabatan');
    }
    protected $keyType = 'bigint';
}
