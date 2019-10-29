<?php

namespace App\Http\Controllers\User;

use App\biodata;
use App\Data_keluarga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jabatan;
use App\Kecakapan_bahasa;
use App\Kecakapan_olahraga_dan_beladiri;
use App\Pangkat;
use App\User;
use Illuminate\Support\Facades\Auth;

class KeluargaHubungan extends Controller
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
        $datas=biodata::where('nip_nrp',auth::user()->nip_nrp)->first();
        $pangkats=Pangkat::all();
        $jabatan=Jabatan::all();
        $k_bahasa=Kecakapan_bahasa::where('nip_nrp',auth::user()->nip_nrp)->get();
        $k_olahraga=Kecakapan_olahraga_dan_beladiri::where('nip_nrp',auth::user()->nip_nrp)->get();
        $keluargas=Data_keluarga::where('nip_nrp',auth::user()->nip_nrp)->get();
        return view('User.pegawai.keluargahubungan',compact('data','pangkats','jabatan','k_bahasa','k_olahraga','datas','keluargas'));
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
        $this->validate($request,[
            'nip_nrp'=>'required',
            'nama'=>'required',
            'jk'=>'required',
            'hubungan_keluarga'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'status_hidup'=>'required',
            'pekerjaan'=>'required',

        ]);
        if(empty($request->keterangan)){
            $request['keterangan']='-';
        }
        else{
            $request['keterangan']=$request->input('keterangan');
        }
        $data=Data_keluarga::create($request->all());
        return back()->with('succes','Data berhasil di tambahkan');
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
    public function updates(Request $request)
    {
         $id=$request->id;
        $this->validate($request,[
            'nip_nrp'=>'required',
            'nama'=>'required',
            'jk'=>'required',
            'no_kk'=>'required',
            'hubungan_keluarga'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'status_hidup'=>'required',
            'pekerjaan'=>'required',

        ]);
        $data=Data_keluarga::findOrfail($id);
        if(empty($request->keterangan)){
            $request['keterangan']=$data->keterangan;
        }
        else{
            $request['keterangan']=$request->keterangan;
        }
        $data->update($request->all());
        return back()->with('succes','Data berhasil di tambahkan');
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
        $this->validate($request,[
            'nik'=>'required',
            'no_kk'=>'required',
            'status_menikah'=>'required',
        ]);
        $data=User::findOrFail($id);
        $datas=biodata::where('nip_nrp',$id);
        $data->update([
            'nik'=>$request->nik,
        ]);
        $datas->update([
            'status_menikah'=>$request->status_menikah,
            'no_kk'=>$request->no_kk,
        ]);
        return back()->with('succes','Data berhasil di update');
        // return ;
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
        $data=Data_keluarga::findOrFail($id);
        $data->delete();
        return back()->with('succes','Data berhasil di hapus');
    }
}
