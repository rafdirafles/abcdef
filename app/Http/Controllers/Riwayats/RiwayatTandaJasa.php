<?php

namespace App\Http\Controllers\Riwayats;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tanda_jasa_Prestasi;

class RiwayatTandaJasa extends Controller
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
        //
        // $this->validate($request,[
        //     'nip_nrp'=>'required',
        //     'nama_prestasi'=>'required',
        //     'tahun'=>'required',
        // ]);
        if(empty($request->keterangan)){
            $request['keterangan']='-';
        }
        else{
            $request['keterangan']=$request->keterangan;
        }
        $data=Tanda_jasa_Prestasi::create($request->all());
        return back()->with('succes','Data berhasil ditambahkan');
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
        $data=Tanda_jasa_Prestasi::findOrFail($id);
        $this->validate($request,[
            'nip_nrp'=>'required',
            'nama_prestasi'=>'required',
            'tahun'=>'required',
        ]);
        if(empty($request->keterangan)){
            $request['keterangan']=$data->keterangan;
        }
        else{
            $request['keterangan']=$request->input('keterangan');
        }
        $data->update($request->all());
        return back()->with('succes','Data berhasil diedit');
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
        $data=Tanda_jasa_Prestasi::findOrFail($id);
        $data->delete();
        return back()->with('succes','Data berhasil diedit');
    }
}
