<?php

namespace App\Http\Controllers\Setting;

use App\Divisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kompartemen;
use App\Satker;

class SatkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kompartemen=Kompartemen::all();
        $datas=Satker::all();
        return view('Setting.Satker.index',compact('datas','kompartemen'));
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
            'id_kompartemen'=>'required|integer',
            'nama_satker'=>'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
        ]);
       $data= Satker::create($request->all());
        // return redirect()->route('divisi.index')->with("success","data berhasil di tambahkan");
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
        $product = Satker::with('kompartemen')->get();
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
        $data=Satker::findOrFail($id);
        $this->validate($request,[
            'id_kompartemen'=>'required|integer',
            'nama_satker'=>'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
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
        //
        $id=$request->id;
        $data=Satker::findOrFail($id);
        $data->delete();
        return response()->json(['done']);
        // return $data;
    }

    public function Divisi(Request $request)
    {
        //
        $id=$request->id;

        $datas=Divisi::where('id_satker',$id)->get();
        $output="<option value='' > pilih </option>";
        foreach($datas as $data){
            $output .=
            '<option value="'.$data->id.'" '. ($request->id_selected == $data->id ? "selected":"").'>'.$data->nama_devisi.'</option>';
            // echo '<option value="'.$data->id.'">'.$data->nama_devisi.'</option>';
        }
        return $output;
    }
}
