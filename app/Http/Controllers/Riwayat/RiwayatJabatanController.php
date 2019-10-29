<?php
namespace App\Http\Controllers\Riwayat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jabatan;
use App\Riwayat_jabatan;

class RiwayatJabatanController extends Controller
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
        // //
        $this->validate($request,[
            'id_jabatan'=>'required',
            'nomor_sk'=>'required',
            'pejabat'=>'required',
            'tgl_sk'=>'required',
            'tgl_mulai_terhitung'=>'required',

        ]);
        if(empty($request->keterangan)){
            $request['keterangan']='-';
        }
        else{
           $data= $request['keterangan']=$request->keterangan;

        }
        $data=Riwayat_jabatan::create($request->all());
        // $data=$request->id_jabatan;
        // return back()->with('success','Data Berhasil Ditambahkan');
        return Response()->json($data);
        return $request->all();
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
        $data =Riwayat_jabatan::where('nip_nrp',$id)->with('jabatan')->get();
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
    public function updates(Request $request)
    {
        //
        $this->validate($request,[
            'id_jabatan'=>'required',
            'nomor_sk'=>'required',
            'pejabat'=>'required',
            'tgl_sk'=>'required',
            'tgl_mulai_terhitung'=>'required',

        ]);
        $id=$request->id;
        $data=Riwayat_jabatan::find($id);
        $data->update([
            'nip_nrp'=>$request->input('nip_nrp'),
            'id_jabatan'=>$request->input('id_jabatan'),
            'nomor_sk'=>$request->input('nomor_sk'),
            'pejabat'=>$request->input('pejabat'),
            'tgl_sk'=>$request->input('tgl_sk'),
            'tgl_mulai_terhitung'=>$request->input('tgl_mulai_terhitung'),
            'keterangan'=>$request->input('keterangan')
        ]);
        return Response()->json($id);
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
        $data=Riwayat_jabatan::findOrFail($id);
        $data->delete();
        return Response()->json($data);
    }
}
