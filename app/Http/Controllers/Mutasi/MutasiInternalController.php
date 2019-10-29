<?php

namespace App\Http\Controllers\Mutasi;

use App\Divisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mutasi_internal;
use App\User;

class MutasiInternalController extends Controller
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
    public function divisi(Request $request)
    {
        //
        $id=$request->id;
        $datas=Divisi::where('id_unit_kerja',$id)->get();
        $output="<option > pilih </option>";

        foreach($datas as $data){
            $output .=
            '<option value="'.$data->id.'">'.$data->nama_devisi.'</option>';
            // echo '<option value="'.$data->id.'">'.$data->nama_devisi.'</option>';
        }
        return $output;
    }
    public function editDivisi(Request $request)
    {
        $id=$request->id;
        $datas=Divisi::where('id_unit_kerja',$id)->get();
        $output="";
        foreach($datas as $data){
            if($data->id==$request->selected){
                $output .=
                '<option selected value="'.$data->id.'">'.$data->nama_devisi.'</option>';
            }
            else{
                $output .=
                '<option value="'.$data->id.'">'.$data->nama_devisi.'</option>';
            }

            // echo '<option value="'.$data->id.'">'.$data->nama_devisi.'</option>';
        }
        return $output;
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
        $user=User::findOrFail($request->nip_nrp);
        $user->update([
            'id_divisi'=>$request->id_divisi,
            'id_unit_kerja'=>$request->id_unit_kerja,

        ]);
        $this->validate($request,[
            'nip_nrp'=>'required',
            'id_unit_kerja'=>'required',
            'id_divisi'=>'required',
            'nomor_sk'=>'required',
            'pejabat'=>'required',
            'tanggal_sk'=>'required',
            'tmt'=>'required',
        ]);
        if(empty($request->keterangan)){
            $request['keterangan']='-';
        }
        else{
            $request['keterangan']=$request->keterangan;
        }
        $data=Mutasi_internal::create([
            'nip_nrp'=>$request->nip_nrp,
            'id_unit_kerja'=>$request->id_unit_kerja,
            'id_divisi'=>$request->id_divisi,
            'nomor_sk'=>$request->nomor_sk,
            'pejabat'=>$request->pejabat,
            'tanggal_sk'=>$request->tanggal_sk,
            'tmt'=>$request->tmt,
            'keterangan'=>$request->keterangan,
        ]);

        return $data;
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
        $data=Mutasi_internal::with('unit_kerja','divisi')->where('nip_nrp',$id)->get();
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
        $getall=Mutasi_internal::all();
        $temp=0;
        foreach($getall as $x){
            $temp=$x->id;
        }
        $id=$request->id;
        if($temp == $id ){
            $user=User::findOrFail($request->nip_nrp);
            $user->update([
                'id_divisi'=>$request->id_divisi,
                'id_unit_kerja'=>$request->id_unit_kerja,
            ]);
        }
        $data=Mutasi_internal::findOrFail($id);

        $this->validate($request,[
            'nip_nrp'=>'required',
            'id_unit_kerja'=>'required',
            'id_divisi'=>'required',
            'nomor_sk'=>'required',
            'pejabat'=>'required',
            'tanggal_sk'=>'required',
            'tmt'=>'required',
        ]);
        if(empty($request->keterangan)){
            $request['keterangan']=$data->keterangan;
        }
        else{
            $request['keterangan']=$request->keterangan;
        }
        $data->update([
            'nip_nrp'=>$request->nip_nrp,
            'id_unit_kerja'=>$request->id_unit_kerja,
            'id_divisi'=>$request->id_divisi,
            'nomor_sk'=>$request->nomor_sk,
            'pejabat'=>$request->pejabat,
            'tanggal_sk'=>$request->tanggal_sk,
            'tmt'=>$request->tmt,
            'keterangan'=>$request->keterangan,
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
        $error="";
        $i=0;
        $unit=0;
        $divisi=0;
        $getall=Mutasi_internal::where('nip_nrp',$request->nip_nrp)->get();
        $count=Mutasi_internal::where('nip_nrp',$request->nip_nrp)->count();
        for($i = 0; $i < count($getall)-1; $i++)
        {
            $unit=$getall[$i]['id_unit_kerja'];
            $divisi=$getall[$i]['id_divisi'];
        }
        $temp=0;
        foreach($getall as $x){
            $temp=$x->id;
        }
        if($count ==1){
            return 'data tidak bisa didelete';
        }else{
            $id=$request->id;
            if($temp == $id ){
                $data=Mutasi_internal::findOrFail($id);
                $data->delete();
                $user=User::findOrFail($request->nip_nrp);
                $user->update([
                    'id_divisi'=>$divisi,
                    'id_unit_kerja'=>$unit,
                ]);
                // $error ="true";
            }
            else {
                return 'Maaf Data Terakhir Yang Bisa Di Hapus';
                // $error ="false";
            }
        }

        return Response()->json($data);
    }
}
