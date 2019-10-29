<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImpor implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            //
            'nip_nrp'=>$row[0],
            'nama_pegawai'=>$row[1],
            'jenis_pegawai'=>$row[2],
            'nidn'=>$row[3],
            'no_kta_pegawai'=>$row[4],
            'no_kep_jabatan'=>$row[5],
            'pangkat'=>$row[6],
            'id_satker'=>$row[7],
            'jabatan'=>$row[8],
            'id_kompartemen'=>$row[9],
            'id_divisi'=>$row[10],
            'email'=>$row[11],
            'password'=>bcrypt($row[12]),
            'alamat'=>$row[13],
            'tempat_lahir'=>$row[14],
            'tanggal_lahir'=>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[15]),
            'jk'=>$row[16],
            'agama'=>$row[17],
            'no_hp'=>$row[18],
            'nik'=>$row[19],
            'tgl_masuk'=>\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[20]),
            'foto'=>$row[21],
            'is_status'=>$row[22],
            'level'=>$row[23],
        ]);
    }

}
