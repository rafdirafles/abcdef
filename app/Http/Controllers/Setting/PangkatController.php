<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pangkat;

class PangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pangkat=Pangkat::all();
        return view('Setting.Pangkat.index',compact('pangkat'));

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
            'nama_pangkat'=>'required|string',
        ]);
        if($request->ajax()){
            $nama=$request->get('nama_pangkat');
            $datas=Pangkat::create([
                'nama_pangkat'=>$nama,
            ]);
            return response()->json($datas);
        }

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
        $data=Pangkat::all();
        // return view('Setting.Pangkat.index',compact('datas'));
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        //
        // $data=Pangkat::fi();
        // // return view('Setting.Pangkat.index',compact('datas'));
        // return response()->json($data);
        $x=$request->get($id);
        return response()->json($x);
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
        $this->validate($request,[
            'nama_pangkat'=>'required|string',
        ]);
        $id=$request->id;
        $post =Pangkat::find($id)->update([
            'nama_pangkat'=>$request->nama_pangkat,
        ]
        );
        return response()->json($post);
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
        Pangkat::find($id)->delete();
        return response()->json(['done']);
        // return response()->json($id);
    }
}
