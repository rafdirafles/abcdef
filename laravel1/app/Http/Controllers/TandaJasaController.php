<?php

namespace App\Http\Controllers;

use App\Tanda_jasa_Prestasi;
use Illuminate\Http\Request;

class TandaJasaController extends Controller
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
            'nama_prestasi'=>'required',
            'tahun'=>'numeric',
        ]);
        if(empty($request->keterangan)){
            $request['keterangan']='-';
        }
        else{
            $request['keterangan']=$request->keterangan;
        }
        $data=Tanda_jasa_Prestasi::create($request->all());
        // return back()->with('success','Data berhasil ditambahkan');
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
        $data=Tanda_jasa_Prestasi::where('nip_nrp',$id)->get();
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
        $id=$request->id;
        $data=Tanda_jasa_Prestasi::findOrFail($id);
        $this->validate($request,[
            'nip_nrp'=>'required',
            'nama_prestasi'=>'required',
            'tahun'=>'numeric',
        ]);
        if(empty($request->keterangan)){
            $request['keterangan']=$data->keterangan;
        }
        else{
            $request['keterangan']=$request->input('keterangan');
        }
        $data->update($request->all());
        // return back()->with('success','Data berhasil diedit');
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
        $data=Tanda_jasa_Prestasi::findOrFail($id);
        $data->delete();
        return Response()->json($data);
    }
}
