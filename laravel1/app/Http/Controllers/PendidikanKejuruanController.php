<?php

namespace App\Http\Controllers;
use App\Pendidikan_kejuruan;
use Illuminate\Http\Request;

class PendidikanKejuruanController extends Controller
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
            'nama_pendidikan'=>'required',
            'kota'=>'required',
            'tahun_lulus'=>'required|int',
            'lama_bulan'=>'required',
            'is_lulus_tidak'=>'required',
        ]);
        if(empty($request->rangking)){
            $request['rangking']='0';
        }
        else{
            $request['rangking']=$request->input('rangking');
        }
        if(empty($request->keterangan)){
            $request['keterangan']='-';
        }
        else{
            $request['keterangan']=$request->input('keterangan');
        }
        // foto
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
        Pendidikan_kejuruan::create([
            'nip_nrp'=>$request->nip_nrp,
            'nama_pendidikan'=>$request->nama_pendidikan,
            'kota'=>$request->kota,
            'tahun_lulus'=>$request->tahun_lulus,
            'lama_bulan'=>$request->lama_bulan,
            'rangking'=>$request->rangking,
            'is_lulus_tidak'=>$request->is_lulus_tidak,
            'keterangan'=>$request->keterangan,
            'file' =>$nama_file,
        ]);
        return back()->with('success','Data berhasi di tambahkan');
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

        $data=Pendidikan_kejuruan::where('nip_nrp',$id)->get();
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
        $data=Pendidikan_kejuruan::findOrFail($request->id);
        $this->validate($request,[
            'nip_nrp'=>'required',
            'nama_pendidikan'=>'required',
            'kota'=>'required',
            'tahun_lulus'=>'required|int',
            'lama_bulan'=>'required',
            'is_lulus_tidak'=>'required',
        ]);
        // $data=Pendidikan_kejuruan::findOrFail($request->id);
        if(empty($request->file('file'))){
            $nama_file=$data->file;
        }
        else{
            $this->validate($request,[
                'file' =>'file|mimes:pdf|max:2048',
            ]);
            $file = $request->file('file');
            $text = str_replace(' ', '',$file->getClientOriginalName());
            $nama_file = time()."_".$text;
            if(file_exists($_SERVER['DOCUMENT_ROOT'].'/file/'.$data->file)){
                $image_path =$_SERVER['DOCUMENT_ROOT'].'/file/'.$data->file;
                unlink($image_path);
            }
            $tujuan_upload = 'file';
            $file->move($tujuan_upload,$nama_file);
        }
        $data->Update([
            'nip_nrp'=>$request->nip_nrp,
            'nama_pendidikan'=>$request->nama_pendidikan,
            'kota'=>$request->kota,
            'tahun_lulus'=>$request->tahun_lulus,
            'lama_bulan'=>$request->lama_bulan,
            'rangking'=>$request->rangking,
            'is_lulus_tidak'=>$request->is_lulus_tidak,
            'keterangan'=>$request->keterangan,
            'file' =>$nama_file,
        ]);
        // return back()->with('success','data berhasil di update');
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
        $id=$request->id;
        $data=Pendidikan_kejuruan::findOrFail($id);
        if(file_exists($_SERVER['DOCUMENT_ROOT'].'/file/'.$data->file)){
            $image_path =$_SERVER['DOCUMENT_ROOT'].'/file/'.$data->file;
            unlink($image_path);
        }
        $data->delete();
        return Response()->json($data);
    }
}
