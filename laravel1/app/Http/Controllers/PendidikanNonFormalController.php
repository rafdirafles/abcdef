<?php

namespace App\Http\Controllers;

use App\Pendidikan_non_formal;
use Illuminate\Http\Request;

class PendidikanNonFormalController extends Controller
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
            'nama_pendidikan'=>'required',
            'lama_pendidikan'=>'required',
            'tahun_pendidikan'=>'required',
            'tempat_pendidikan'=>'required',

        ]);
        if(empty($request->keterangan)){
            $request['keterangan']='-';
        }else{
            $request['keterangan']=$request->keterangan;
        }
        if(empty($request->file('file'))){
            $nama_file='-';
        }
        else{
            $this->validate($request,[
                'file' =>'file|mimes:pdf|max:2048',
            ]);
            $file = $request->file('file');
            $text = str_replace(' ', '',$file->getClientOriginalName());
            $nama_file = time()."_".$text;
            $tujuan_upload = 'file';
            $file->move($tujuan_upload,$nama_file);
        }
        $data=Pendidikan_non_formal::create([
            'nip_nrp'=>$request->nip_nrp,
            'nama_pendidikan'=>$request->nama_pendidikan,
            'lama_pendidikan'=>$request->lama_pendidikan,
            'tahun_pendidikan'=>$request->tahun_pendidikan,
            'tempat_pendidikan'=>$request->tempat_pendidikan,
            'keterangan'=>$request->keterangan,
            'file' =>$nama_file,
        ]);
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
        $data=Pendidikan_non_formal::where('nip_nrp',$id)->get();
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
            'nama_pendidikan'=>'required',
            'lama_pendidikan'=>'required',
            'tahun_pendidikan'=>'required|numeric',
            'tempat_pendidikan'=>'required',
        ]);
        $id=$request->id;
        $data=Pendidikan_non_formal::findOrfail($id);
        if(empty($request->keterangan)){
            $request['keterangan']=$data->keterangan;
        }else{
            $request['keterangan']=$request->keterangan;
        }
        if(empty($request->file('file'))){
            $nama_file=$data->file;
        }
        else{
            $this->validate($request,[
                'file' =>'file|mimes:pdf|max:2048',
            ]);
            if(file_exists($_SERVER['DOCUMENT_ROOT'].'/file/'.$data->file)){
                $image_path =$_SERVER['DOCUMENT_ROOT'].'/file/'.$data->file;
                unlink($image_path);
            }
            $file = $request->file('file');
            $text = str_replace(' ', '',$file->getClientOriginalName());
            $nama_file = time()."_".$text;
            $tujuan_upload = 'file';
            $file->move($tujuan_upload,$nama_file);
        }
        $data->update([
            'nip_nrp'=>$request->nip_nrp,
            'nama_pendidikan'=>$request->nama_pendidikan,
            'lama_pendidikan'=>$request->lama_pendidikan,
            'tahun_pendidikan'=>$request->tahun_pendidikan,
            'tempat_pendidikan'=>$request->tempat_pendidikan,
            'keterangan'=>$request->keterangan,
            'file' =>$nama_file,
        ]);
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
        $request->id;
        $id=$request->id;
        $data=Pendidikan_non_formal::findOrFail($id);
        if(file_exists($_SERVER['DOCUMENT_ROOT'].'/file/'.$data->file)){
            $image_path =$_SERVER['DOCUMENT_ROOT'].'/file/'.$data->file;
            unlink($image_path);
        }
        $data->delete();
        return Response()->json($data);
    }
}
