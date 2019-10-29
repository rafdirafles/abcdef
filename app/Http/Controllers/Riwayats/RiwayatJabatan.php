<?php

namespace App\Http\Controllers\Riwayats;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Riwayat_jabatan;

class RiwayatJabatan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
       // $this->validate($request,[
        //     'nip_nrp'=>'required',
        //     'id_pangkat'=>'required',
        //     'tmt'=>'required',
        //     'nomor_sk'=>'required',
        //     'pejabat'=>'required',
        //     'tanggal_sk'=>'required',
        //     'dasar_peraturan'=>'required',
        // ]);
        if(empty($request->keterangan)){
            $request['keterangan']='-';
        }
        else{
           $data= $request['keterangan']=$request->keterangan;
        }
        $data=Riwayat_jabatan::create($request->all());
        // // $data=$request->id_jabatan;
        return back()->with('succes','Data Berhasil Ditambahkan');
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
        $data=Riwayat_jabatan::find($id);
        $data->update([
            'nip_nrp'=>$request->input('nip_nrp'),
            'id_jabatan'=>$request->input('id_jabatan'),
            'nomor_sk'=>$request->input('nomor_sk'),
            'pejabat'=>$request->input('pejabat'),
            'tgl_sk'=>$request->input('tgl_sk'),
            'tgl_mulai_terhitung'=>$request->input('tgl_mulai_terhitung'),
            'keterangan'=>$request->input('keterangan')
        ]);
        return back()->with('succes','Data Berhasil Update');
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
        $data=Riwayat_jabatan::findOrFail($id);
        $data->delete();
        return back()->with('succes','Data Berhasil Dihapus');
    }
}
