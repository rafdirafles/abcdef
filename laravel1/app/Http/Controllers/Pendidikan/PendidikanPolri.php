<?php

namespace App\Http\Controllers\Pendidikan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pendidikan_polri;

class PendidikanPolri extends Controller
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
        // $this->validate($request,[
        //     'nip_nrp'=>'required',
        //     'nama_pendidikan'=>'required',
        //     'tahun'=>'required',
        //     'lama_bulan'=>'required',
        //     'rangking'=>'required',
        //     'lulus_tidak'=>'required',
        //     'file' =>'file|max:2048|',
        // ]);
        if(empty($request->rangking)){
            $request['rangking']=0;
        }
        else{
            $request['rangking']=$request->input('rangking');
        }
        if(empty($request->file('file'))){
            $nama_file='-';
        }
        else{
            $this->validate($request,[

                'file' =>'mimes:pdf|max:2048',
            ]);
            $file = $request->file('file');
            $text = str_replace(' ', '',$file->getClientOriginalName());
            $nama_file = time()."_".$text;
            $tujuan_upload = 'file';
            $file->move($tujuan_upload,$nama_file);
        }
        Pendidikan_polri::create([
            'nip_nrp'=>$request->nip_nrp,
            'nama_pendidikan'=>$request->nama_pendidikan,
            'tahun'=>$request->tahun,
            'lama_bulan'=>$request->lama_bulan,
            'lulus_tidak'=>$request->lulus_tidak,
            'rangking'=>$request->rangking,
            'file' =>$nama_file,
        ]);
        return back()->with('succes','Data Berhasil Ditambahkan');
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

        $data=Pendidikan_polri::findOrFail($id);

        // $this->validate($request,[
        //     'nip_nrp'=>'required',
        //     'nama_pendidikan'=>'required',
        //     'tahun'=>'required',
        //     'lama_bulan'=>'required',
        //     'rangking'=>'required',
        //     'lulus_tidak'=>'required',
        //     'file' =>'file|max:2048|mimes:pdf',
        // ]);
        if(empty($request->rangking)){
            $request['rangking']=0;
        }
        else{
            $request['rangking']=$request->input('rangking');
        }
        if(empty($request->file('file'))){
            $nama_file=$data->file;
        }
        else{
            $this->validate($request,[
                'file' =>'file|max:2048|mimes:pdf',
            ]);
            $file = $request->file('file');
            if($data->file != '-'){
                $image_path = $_SERVER['DOCUMENT_ROOT'].'/file/'.$data->file;
                unlink($image_path);
            }
            if (file_exists($_SERVER['DOCUMENT_ROOT'].'/file/'.$data->file))
            {
                $image_path = $_SERVER['DOCUMENT_ROOT'].'/file/'.$data->file;
                unlink($image_path);
            }
            $text = str_replace(' ', '',$file->getClientOriginalName());
            $nama_file = time()."_".$text;
            $tujuan_upload = 'file';
            $file->move($tujuan_upload,$nama_file);
        }
        $data->update([
            'nip_nrp'=>$request->nip_nrp,
            'nama_pendidikan'=>$request->nama_pendidikan,
            'tahun'=>$request->tahun,
            'lama_bulan'=>$request->lama_bulan,
            'rangking'=>$request->rangking,
            'lulus_tidak'=>$request->lulus_tidak,
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
        $data=Pendidikan_polri::findOrFail($id);
         if($data->file != '-'){
            $image_path =$_SERVER['DOCUMENT_ROOT'].'/file/'.$data->file;
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
