<?php

namespace App\Http\Controllers\Pendidikan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pendidikan_umum;

class PendidikanUmum extends Controller
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
        // $this->validate($request,[
        //     'file' =>'file|max:2048',
        //     'jenjang_pendidikan'=>'required',
        //     'nama_sekolah'=>'required',
        //     'kota'=>'required',
        //     'tahun_lulus'=>'required',
        //     'no_ijazah'=>'required',
        //     'nip_nrp'=>'required',
        // ]);
        // cek inputan jurusan kosong atau tidak
        if(empty($request->jurusan)){
            $request['jurusan']='-';
        }
        else{
            $request['jurusan']=$request->input('jurusan');
        }
        // foto
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
        $data=Pendidikan_umum::create([
            'nip_nrp'=>$request->nip_nrp,
            'jenjang_pendidikan'=>$request->jenjang_pendidikan,
            'nama_sekolah'=>$request->nama_sekolah,
            'jurusan'=>$request->jurusan,
            'kota'=>$request->kota,
            'tahun_lulus'=>$request->tahun_lulus,
            'no_ijazah'=>$request->no_ijazah,
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

        // $this->validate($request,[
        //     'file' =>'file|max:2048',
        //     'jenjang_pendidikan'=>'required',
        //     'nama_sekolah'=>'required',
        //     'kota'=>'required',
        //     'tahun_lulus'=>'required',
        //     'no_ijazah'=>'required',
        //     'nip_nrp'=>'required',
        // ]);
        // foto
        $data=Pendidikan_umum::findOrFail($id);
        $file = $request->file('file');
        if(empty($request->file('file'))){
            $nama_file=$data->file;
            $file = $request->file('file');
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
            $text = str_replace(' ', '',$file->getClientOriginalName());
            $nama_file = time()."_".$text;
            $tujuan_upload = 'file';
            $file->move($tujuan_upload,$nama_file);
        }
        $data->Update([
            'nip_nrp'=>$request->nip_nrp,
            'jenjang_pendidikan'=>$request->jenjang_pendidikan,
            'nama_sekolah'=>$request->nama_sekolah,
            'jurusan'=>$request->jurusan,
            'kota'=>$request->kota,
            'tahun_lulus'=>$request->tahun_lulus,
            'no_ijazah'=>$request->no_ijazah,
            'file' =>$nama_file,
        ]);
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

        $data=Pendidikan_umum::findOrFail($id);
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
