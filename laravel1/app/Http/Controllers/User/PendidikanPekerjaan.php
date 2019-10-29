<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\biodata;
use App\Data_keluarga;
use App\Jabatan;
use App\Kecakapan_bahasa;
use App\Kecakapan_brevet;
use App\Kecakapan_olahraga_dan_beladiri;
use App\Pangkat;
use App\Pendidikan_kejuruan;
use App\Pendidikan_kejuruan as AppPendidikan_kejuruan;
use App\Pendidikan_non_formal;
use App\Pendidikan_polri;
use App\Pendidikan_umum;
use App\Riwayat_gaji_berkala;
use App\Riwayat_jabatan;
use App\Riwayat_kepangkatan;
use App\Satker;
use App\Tanda_jasa_Prestasi;
use Illuminate\Support\Facades\Auth;
use App\Unit_kerja;
use App\User;
class PendidikanPekerjaan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=User::where('nip_nrp',auth::user()->nip_nrp)->first();
        $pangkats=Pangkat::all();
        $jabatan=Jabatan::all();
        $datas=biodata::where('nip_nrp',auth::user()->nip_nrp)->first();
        $k_bahasa=Kecakapan_bahasa::where('nip_nrp',auth::user()->nip_nrp)->get();
        $k_olahraga=Kecakapan_olahraga_dan_beladiri::where('nip_nrp',auth::user()->nip_nrp)->get();
        $p_polris=Pendidikan_polri::where('nip_nrp',auth::user()->nip_nrp)->get();
        $p_umum=Pendidikan_umum::where('nip_nrp',auth::user()->nip_nrp)->get();
        $p_kejuruan=Pendidikan_kejuruan::where('nip_nrp',auth::user()->nip_nrp)->get();
        $p_non_formal=Pendidikan_non_formal::where('nip_nrp',auth::user()->nip_nrp)->get();
        $r_gaji=Riwayat_gaji_berkala::where('nip_nrp',auth::user()->nip_nrp)->get();
        $prestasi=Tanda_jasa_Prestasi::where('nip_nrp',auth::user()->nip_nrp)->get();
        $r_jabatan=Riwayat_jabatan::where('nip_nrp',auth::user()->nip_nrp)->get();
        $r_pangkat=Riwayat_kepangkatan::where('nip_nrp',auth::user()->nip_nrp)->get();
        return view('User.pegawai.pekerjaan_pendidikan',compact('data','pangkats','jabatan','k_bahasa',
        'k_olahraga','datas','p_polris','p_umum','p_kejuruan','p_non_formal','r_gaji','prestasi','r_jabatan',
        'r_pangkat'
    ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
