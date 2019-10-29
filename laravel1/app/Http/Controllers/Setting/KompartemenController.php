<?php

namespace App\Http\Controllers\Setting;

use App\Divisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kompartemen;
use App\Satker;

class KompartemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Setting.Kompartemen.index');
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
            'nama_kompartemen'=>'required',
        ]);
        $data=Kompartemen::create($request->all());
        return response()->json($data);
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
        $data=Kompartemen::all();
        return response()->json($data);
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
        $data=Kompartemen::findOrFail($id);
        $this->validate($request,[
            'nama_kompartemen'=>'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
        ]);
       $data->update([
           'nama_kompartemen'=>$request->input('nama_kompartemen'),
       ]);
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
        $data=Kompartemen::find($id)->delete();
        return response()->json($data);
    }
    public function satker(Request $request)
    {
        //
        $id=$request->id;
        $datas=Satker::where('id_kompartemen',$id)->get();
        $output="<option value=''> pilih </option>";
        foreach($datas as $data){
            $output .=
            '<option value="'.$data->id.'" '. ($request->id_selected == $data->id ? "selected":"").'>'.$data->nama_satker.'</option>';
            // echo '<option value="'.$data->id.'">'.$data->nama_devisi.'</option>';
        }
        return $output;
    }

}
