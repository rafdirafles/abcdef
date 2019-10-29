<?php

namespace App\Http\Controllers\Pendidikan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pendidikan_non_formal;

class PendidikanNonFormal extends Controller
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

                'file' =>'mimes:pdf|max:10000',
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
        return back()->with('succes','Data Berhasil Ditambah');
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

                'file' =>'mimes:pdf|max:10000',
            ]);
            if($data->file != '-'){
                $image_path = $_SERVER['DOCUMENT_ROOT'].'/file/'.$data->file;
                unlink($image_path);
            }
                if (file_exists($_SERVER['DOCUMENT_ROOT'].'/file/'.$data->file))
            {
                $image_path = $_SERVER['DOCUMENT_ROOT'].'/file/'.$data->file;
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
        return back()->with('succes','Data Berhasil Diupdate');
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
        $data=Pendidikan_non_formal::findOrFail($id);
        if($data->file != '-'){
           $image_path = $_SERVER['DOCUMENT_ROOT'].'/file/'.$data->file;
           unlink($image_path);
       }
       if (file_exists($_SERVER['DOCUMENT_ROOT'].'/file/'.$data->file))
        {
            $image_path = $_SERVER['DOCUMENT_ROOT'].'/file/'.$data->file;
            unlink($image_path);
        }
       $data->delete();
       return back()->with('succes','Data Berhasil Dihapus');
    }
}
