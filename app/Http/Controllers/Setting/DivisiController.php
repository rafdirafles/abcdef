<?php

namespace App\Http\Controllers\Setting;
use App\Divisi;
use App\Unit_kerja;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Satker;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $satker=Satker::all();
        $datas=Divisi::all();
        return view('Divisi.index',compact('datas','satker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datas=Unit_kerja::all();
        return view('Divisi.create',compact('datas'));
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
            'id_satker'=>'required|integer',
            'nama_devisi'=>'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
        ]);
        Divisi::create($request->all());
        return redirect()->route('divisi.index')->with("success","data berhasil di tambahkan");
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
        $product = Divisi::with('satker')->get();
        return response()->json($product);


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

        $unit=Unit_kerja::all();
        $datas=Divisi::findOrFail($id);
        return view('divisi.edit',compact('datas','unit'));
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
        $id=$request->id;
        $data=Divisi::findOrFail($id);
        $this->validate($request,[
            'id_satker'=>'required|integer',
            'nama_devisi'=>'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
        ]);
       $data->update($request->all());
       return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id=$request->id;
        $data=Divisi::findOrFail($id);
        $data->delete();
        return response()->json(['done']);

    }
    public function getDivisi(){
        $data=Unit_kerja::all();
        return $data;
    }
}
