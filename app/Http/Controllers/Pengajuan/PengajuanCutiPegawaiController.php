<?php

namespace App\Http\Controllers\Pengajuan;
use DatePeriod;
use DateInterval;
use DateTime;
use App\Cuti;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jenis_cuti;
use Illuminate\Support\Facades\Auth;
class PengajuanCutiPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jenis_cuti=Jenis_cuti::all();
        // $z=[];

        $kuota=Cuti::where('nip_nrp',auth::user()->nip_nrp)->whereIn('status',[1,3])->get();
        // foreach($kuota as $kuotas){
        // //     if($kuotas->id_jenis_cuti == $jen->id)
        // //     $z+=$jen->jumlah;
        // // }
        //     foreach($jenis_cuti as $jen){
        //         $z[]=Cuti::where('id_jenis_cuti',$jen->id)->groupBy('id_jenis_cuti')->get();
        //     }
        //     return $z;


        // }

        $jenis_cuti=Jenis_cuti::all();
        $data=Cuti::where('nip_nrp',auth::user()->nip_nrp)->with('jenis_cuti')->get();

        return view('Pengajuan.Cuti_Pegawai.index',compact('data','jenis_cuti','kuota'));
        // return view('Pengajuan.Cuti_Pegawai.index');
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
        $kuota=Cuti::where('nip_nrp',auth::user()->nip_nrp)->whereIn('status',[1,3])->where('id_jenis_cuti',$id)->get();
        $jum=0;
        foreach($kuota as $kuotas){
            $jum+=$kuotas->jumlah;
        }

        return back()->with('error_code', $jum);
        // return $jum;
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
        $data=Cuti::findOrFail($id);
        $this->validate($request,[
            'nip_nrp'=>'required',
            'tgl_mulai'=>'required',
            'tgl_selesai'=>'required',
            'keterangan'=>'required',
            'file' =>'mimes:pdf|max:10000',
        ]);
        if(empty($request->file('file'))){
            $nama_file=$data->file;
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
        $start_date = new DateTime($request->tgl_mulai);
        $end_date = new DateTime($request->tgl_selesai);
        $interval = $start_date->diff($end_date);
        $hasil=$interval->days;
        $data->update([
            'nip_nrp'=>$request->nip_nrp,
            'tgl_mulai'=>$request->tgl_mulai,
            'tgl_selesai'=>$request->tgl_selesai,
            'keterangan'=>$request->keterangan,
            'status'=>0,
            'jumlah'=>$hasil,
            'file'=>$nama_file,
        ]);
        return back()->with('succes','Data berhasil di update');
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
        $data=Cuti::findOrFail($id);
        $data->delete();
        return back()->with('succes','Data berhasil di Didelete');
    }
}
