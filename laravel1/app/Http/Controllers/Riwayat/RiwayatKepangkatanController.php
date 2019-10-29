<?php

namespace App\Http\Controllers\Riwayat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Riwayat_kepangkatan;

class RiwayatKepangkatanController extends Controller
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
        $this->validate($request,[
            'id_pangkat'=>'required',
            'tmt'=>'required',
            'nomor_sk'=>'required',
            'pejabat'=>'required',
            'tanggal_sk'=>'required',
            'dasar_peraturan'=>'required',
        ]);
        $data=Riwayat_kepangkatan::create($request->all());
        return Response()->json($data);
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
        $data=Riwayat_kepangkatan::where('nip_nrp',$id)->with('pangkat')->get();
        return Response()->json($data);
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
    public function update(Request $request)
    {
        //
        $this->validate($request,[
            'id_pangkat'=>'required',
            'tmt'=>'required',
            'nomor_sk'=>'required',
            'pejabat'=>'required',
            'tanggal_sk'=>'required',
            'dasar_peraturan'=>'required',
        ]);
        $id=$request->id;
        $data=Riwayat_kepangkatan::findOrFail($id);
        $data->update($request->all());
        return Response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //

        $id=$request->id;
        $data=Riwayat_kepangkatan::findOrFail($id);
        $data->delete();
        return Response()->json($data);
    }
}
