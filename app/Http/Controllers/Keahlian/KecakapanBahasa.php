<?php

namespace App\Http\Controllers\Keahlian;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kecakapan_bahasa;

class KecakapanBahasa extends Controller
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
            'nip_nrp'=>'required',
            'jenis_bahasa'=>'required',
            'nama_bahasa'=>'required',
            'kemampuan_bahasa'=>'required',
        ]);
        $data=Kecakapan_bahasa::create([
            'nip_nrp'=>$request->nip_nrp,
            'jenis_bahasa'=>$request->jenis_bahasa,
            'nama_bahasa'=>$request->nama_bahasa,
            'kemampuan_bahasa'=>$request->kemampuan_bahasa,
        ]);
        return back()->with('succes','Data Berhasil Ditambah');
        // return $request->all();
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

        $data=Kecakapan_bahasa::findOrFail($id);
        $this->validate($request,[
            'nip_nrp'=>'required',
            'jenis_bahasa'=>'required',
            'nama_bahasa'=>'required',
            'kemampuan_bahasa'=>'required',
        ]);
        $data->update($request->all());
        return back()->with('succes','Data Berhasil Diedit');

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
        $data=Kecakapan_bahasa::findOrFail($id);
        $data->delete();
        return back()->with('succes','Data berhasil Dihapus');
    }
}
