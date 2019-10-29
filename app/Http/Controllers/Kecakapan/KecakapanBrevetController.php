<?php

namespace App\Http\Controllers\Kecakapan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kecakapan_brevet;

class KecakapanBrevetController extends Controller
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

        $this->validate($request,[
            'nip_nrp'=>'required',
            'nama_brevet'=>'required',
            'asal_perolehan'=>'required',
        ]);
        Kecakapan_brevet::create($request->all());
        return back()->with('success','Data berhasil ditambahkan');
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
        $data=Kecakapan_brevet::where('nip_nrp',$id)->get();
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
        $this->validate($request,[
            'nip_nrp'=>'required',
            'nama_brevet'=>'required',
            'asal_perolehan'=>'required',
        ]);
        $data=Kecakapan_brevet::findOrFail($id);
        $data->update($request->all());
        return Response()->json($data);
        // return back()->with('success','Data berhasil edit');
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
        $data=Kecakapan_brevet::findOrFail($id);
        $data->delete();
        return Response()->json($data);
    }
}
