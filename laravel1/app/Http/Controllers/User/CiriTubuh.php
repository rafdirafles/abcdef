<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\biodata;
use Illuminate\Http\Request;

use App\Jabatan;
use App\Kecakapan_bahasa;
use App\Kecakapan_olahraga_dan_beladiri;
use App\Pangkat;
use App\User;

class CiriTubuh extends Controller
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
        return view('User.pegawai.ciritubuh',compact('data','pangkats','jabatan','k_bahasa','k_olahraga','datas'));
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
        $data=biodata::where('nip_nrp',$id);
        $data->update([
            'berat_badan'=>$request->berat_badan,
            'warna_rambut'=>$request->warna_rambut,
            'bentuk_muka'=>$request->bentuk_muka,
            'warna_kulit'=>$request->warna_kulit,
            'ciri_khas'=>$request->ciri_khas,
            'cacat_tubuh'=>$request->cacat_tubuh,
            'tinggi_badan'=>$request->tinggi_badan,

        ]);
        return back()->with('succes','Data Berhasil Di Update');
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
