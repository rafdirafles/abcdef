<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data_keluarga extends Model
{
    //
    protected $table='data_keluargas';
    protected $foreignKey='nip_nrp';
    protected $fillable=['id','nip_nrp','nama','jk','hubungan_keluarga','tempat_lahir','tanggal_lahir','status_hidup','pekerjaan','keterangan'];

    public function Data_keluarga(){
        return $this->belongsTo('App\User','nip_nrp');
    }
}
