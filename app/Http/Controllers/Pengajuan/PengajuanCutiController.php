<?php

namespace App\Http\Controllers\Pengajuan;
use Redirect,Response,DB,Config;
use Mail;
use App\Absensi;
use DateTime;
use App\Cuti;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jenis_cuti;
use App\Pengajuan_cuti;
use App\User;
use DatePeriod;
use DateInterval;
class PengajuanCutiController extends Controller
{
    // 0 =pending
    // 1 =acc
    // 2 =tolak
    // 3 =selesai
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $now=date("Y-m-d");
        $tgl_selesai_c=Cuti::all();
        foreach($tgl_selesai_c as $hapus_selesai){
            if($hapus_selesai->tgl_selesai == $now){
                $selesai=Cuti::where('tgl_selesai',$now);
                $selesai->update([
                    'status'=>3
                ]);
            }
        }
        $pegawais=User::all();
        $jenis_cuti=Jenis_cuti::all();
        $data=Cuti::where('status',1)->with('jenis_cuti')->get();
        $P_cuti=Cuti::where('status','!=',1)->with('jenis_cuti')->get();
        return view('Pengajuan.cuti.index',compact('data','jenis_cuti','pegawais','P_cuti'));

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
        $this->validate($request,[
            'nip_nrp'=>'required',
            'id_jenis_cuti'=>'required',
            'tgl_mulai'=>'required',
            'tgl_selesai'=>'required',
            'file' =>'mimes:pdf|max:10000',
            'keterangan'=>'required',
        ]);
        $file = $request->file('file');
        $text = str_replace(' ', '',$file->getClientOriginalName());
        $nama_file = time()."_".$text;
        $tujuan_upload = 'file';
        $file->move($tujuan_upload,$nama_file);
        date_default_timezone_set('Asia/Jakarta');
        $now=date("Y");
        $start_date = new DateTime($request->tgl_mulai);
        $end_date = new DateTime($request->tgl_selesai);
        $interval = $start_date->diff($end_date);
        $hasil=$interval->days;
        if($request->tgl_selesai <= date("Y-m-d")){
            return redirect()->back()->with('alert', 'Maaf Salah input tanggal');
        }
        // if($request->tgl_mulai <= date("Y-m-d")){
        //     return redirect()->back()->with('alert', 'Maaf Salah input tanggal');
        // }
        $jenis_cutis=Jenis_cuti::all();
        foreach($jenis_cutis as $jenis){
            if($jenis->id == $request->id_jenis_cuti){
                $sum=Jenis_cuti::where('id',$request->id_jenis_cuti)->first();
                $lama_cuti=$sum->lama_cuti;
                if($hasil <=$lama_cuti)
                {
                    $data=Cuti::where('nip_nrp',$request->nip_nrp)->count();
                    if($data == 0){
                        $sum=$hasil;
                    }
                    else{
                        $z=0;
                        $data=Cuti::where('nip_nrp',$request->nip_nrp)->where('status','1')->where('id_jenis_cuti',$request->id_jenis_cuti)->whereYear('created_at', '=', $now)->get();
                        for($i=0;$i<count($data);$i++){
                            $z+=$data[$i]['jumlah'];
                        }
                       $sum=$hasil+$z;

                    }
                    if($sum <=$lama_cuti){
                        Cuti::create([
                            'nip_nrp'=>$request->nip_nrp,
                            'id_jenis_cuti'=>$request->id_jenis_cuti,
                            'tgl_mulai'=>$request->tgl_mulai,
                            'tgl_selesai'=>$request->tgl_selesai,
                            'status'=>'0',
                            'jumlah'=>$hasil,
                            'file'=>$nama_file,
                            'keterangan'=>$request->keterangan,
                        ]);
                    }
                    else{
                        return redirect()->back()->with('alert', 'Maaf Salah input Melebihi batas cuti');
                    }
                }
                else{
                    return redirect()->back()->with('alert', 'Maaf Salah input Melebihi batas cuti');
                }

            }
        }
        // if($request->id_jenis_cuti == '1' ){
        //     if($hasil <=$lama_cuti)
        //     {
        //         $data=Cuti::where('nip_nrp',$request->nip_nrp)->count();
        //         if($data == 0){
        //             $sum=$hasil;
        //         }
        //         else{
        //             $z=0;
        //             $data=Cuti::where('nip_nrp',$request->nip_nrp)->where('status','1')->whereYear('created_at', '=', $now)->get();
        //             for($i=0;$i<count($data);$i++){
        //                 $z+=$data[$i]['jumlah'];
        //             }
        //            $sum=$hasil+$z;

        //         }
        //         if($sum <=$lama_cuti){
        //             Cuti::create([
        //                 'nip_nrp'=>$request->nip_nrp,
        //                 'id_jenis_cuti'=>$request->id_jenis_cuti,
        //                 'tgl_mulai'=>$request->tgl_mulai,
        //                 'tgl_selesai'=>$request->tgl_selesai,
        //                 'status'=>'0',
        //                 'jumlah'=>$hasil,
        //                 'keterangan'=>$request->keterangan,
        //             ]);
        //         }
        //         else{
        //              return 'maaf input cuti melebihi batass';
        //         }
        //     }
        //     else{
        //         return 'maaf input cuti melebihi batass';
        //     }
        // }
        // else{
        //     $start_date = new DateTime($request->tgl_mulai);
        //     $end_date = new DateTime($request->tgl_selesai);
        //     $interval = $start_date->diff($end_date);
        //     $result=$interval->days;
        //     if($result <=90)
        //     {
        //             Cuti::create([
        //                 'nip_nrp'=>$request->nip_nrp,
        //                 'id_jenis_cuti'=>$request->id_jenis_cuti,
        //                 'tgl_mulai'=>$request->tgl_mulai,
        //                 'tgl_selesai'=>$request->tgl_selesai,
        //                 'status'=>'0',
        //                 'jumlah'=>$result,
        //                 'keterangan'=>$request->keterangan,
        //             ]);
        //     }
        //     else{
        //         return 'maaf input cuti melebihi batass';
        //     }
        // }
        return redirect()->back()->with('succes', 'Data Berhasil Ditambahkan');
        // return $request->all();
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
        date_default_timezone_set('Asia/Jakarta');
        $datas=Cuti::where('id',$request->id);
        // $z=0;
        // if($request->jenis_cuti==1){
        //     $datas=Cuti::where('nip_nrp',$id)->where('status','1')->get();
        //     for($i=0;$i<count($datas);$i++){
        //         $z+=$datas[$i]['jumlah'];
        //     }
        //     if($z<=12){
        //         $data->update([
        //             'status'=>1,
        //         ]);
        //         $absensi=Cuti::where('id',$request->id)->first();
        //         $p_email=$absensi->User->email;
        //         Mail::send('Pengajuan.send_email.index', ['tgl_mulai' => $absensi->tgl_mulai, 'tgl_selesai' => $absensi->tgl_selesai], function($message) use ($p_email) {
        //             $message->to($p_email, 'Receiver Name')
        //              ->subject('Pemberitahuan ACC cuti');
        //         });
        //         $start_date = new DateTime($absensi->tgl_mulai);
        //         $end_date = new DateTime($absensi->tgl_selesai);
        //         $interval = new DateInterval('P1D');
        //         $period   = new DatePeriod($start_date, $interval, $end_date);
        //         foreach ($period as $day) {
        //             // Do stuff with each $day...
        //             Absensi::create([
        //                 'nip_nrp'=>$id,
        //                 'status_absensi'=>'1',
        //                 'tgl_absensi'=>$day->format('Y-m-d'),
        //                 'keterangan'=>'cuti'
        //             ]);

        //         }
        //         return back();

        //     }
        //     else{
        //         return 'Maaf inputan melebihi batas';
        //     }
        // }
        // else{
        //     $data->update([
        //         'status'=>1,
        //     ]);
        //     $absensi=Cuti::where('id',$request->id)->first();
        //     $start_date = new DateTime($absensi->tgl_mulai);
        //     $end_date = new DateTime($absensi->tgl_selesai);
        //     $interval = new DateInterval('P1D');
        //     $period   = new DatePeriod($start_date, $interval, $end_date);
        //     foreach ($period as $day) {
        //         // Do stuff with each $day...
        //         Absensi::create([
        //             'nip_nrp'=>$id,
        //             'status_absensi'=>'1',
        //             'tgl_absensi'=>$day->format('Y-m-d'),
        //             'keterangan'=>'cuti Mengandung'
        //         ]);

        //     }
        //     return back();
        //     return back();
        // }
        $now=date("Y");
        // return $now;
        $dump=Cuti::where('id',$request->id)->first();
        $hasil=$dump->jumlah;

        $jenis_cutis=Jenis_cuti::all();
        foreach($jenis_cutis as $jenis){
            if($jenis->id == $request->jenis_cuti){
                $sum=Jenis_cuti::where('id',$request->jenis_cuti)->first();
                $lama_cuti=$sum->lama_cuti;
                if($hasil <=$lama_cuti)
                {
                    $data=Cuti::where('nip_nrp',$id)->count();
                    if($data == 0){
                        $sum=$hasil;

                    }
                    else{
                        $z=0;
                        $data=Cuti::where('nip_nrp',$id)->where('status','1')->where('id_jenis_cuti',$request->jenis_cuti)->whereYear('created_at',$now)->get();
                        for($i=0;$i<count($data);$i++){
                            $z+=$data[$i]['jumlah'];
                        }
                       $sum=$hasil+$z;

                    }
                    if($sum <=$lama_cuti){
                        $datas->update([
                            'status'=>1,
                        ]);
                        $absensi=Cuti::where('id',$request->id)->first();
                        $p_email=$absensi->User->email;
                        // Mail::send('Pengajuan.send_email.index', ['tgl_mulai' => $absensi->tgl_mulai, 'tgl_selesai' => $absensi->tgl_selesai], function($message) use ($p_email) {
                        //     $message->to($p_email, 'Receiver Name')
                        //         ->subject('Pemberitahuan ACC cuti');
                        // });
                        $start_date = new DateTime($absensi->tgl_mulai);
                        $end_date = new DateTime($absensi->tgl_selesai);
                        $interval = new DateInterval('P1D');
                        $period   = new DatePeriod($start_date, $interval, $end_date);
                        foreach ($period as $day) {
                            // Do stuff with each $day...
                            Absensi::create([
                                'nip_nrp'=>$id,
                                'status_absensi'=>'1',
                                'tgl_absensi'=>$day->format('Y-m-d'),
                                'keterangan'=>'cuti'
                            ]);

                        }
                        return back();
                    }
                    else{
                        return 'sory bro';
                    }
                }

            }

        }


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
        $datas=Cuti::where('id',$id);
        $absensi=Cuti::where('id',$id)->first();
        $p_email=$absensi->User->email;
        // Mail::send('Pengajuan.send_email.tolak', ['tgl_mulai' => $absensi->tgl_mulai, 'tgl_selesai' => $absensi->tgl_selesai], function($message) use ($p_email) {
        //     $message->to($p_email, 'Receiver Name')
        //         ->subject('Pemberitahuan ACC cuti');
        // });
        $datas->delete();
        return back();

    }
    public function tolak_cuti(Request $request){
        $data=Cuti::findOrFail($request->id);
        $data->update([
            'status'=>2,
        ]);
        return back()->with('succes','Cuti berhasil ditolak');
    }
}
