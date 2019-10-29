<?php

namespace App\Http\Controllers\User;
use Image;
use App\biodata;
use App\Data_keluarga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jabatan;
use App\Kecakapan_bahasa;
use App\Kecakapan_brevet;
use App\Kecakapan_olahraga_dan_beladiri;
use App\Pangkat;
use App\Pendidikan_kejuruan;
use App\Pendidikan_polri;
use App\Pendidikan_umum;
use App\Riwayat_gaji_berkala;
use App\Satker;
use App\Tanda_jasa_Prestasi;
use Illuminate\Support\Facades\Auth;
use App\Unit_kerja;
use App\User;
use App\Kompartemen;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas=User::findOrFail(auth::user()->nip_nrp);
        $p_umum=Pendidikan_umum::where('nip_nrp',auth::user()->nip_nrp)->get();
        $p_umum->groupBy('nip_nrp');
        //
        $p_kejuruan=Pendidikan_kejuruan::where('nip_nrp',auth::user()->nip_nrp)->get();
        $p_kejuruan->groupBy('nip_nrp');
        //
        $keluargas=Data_keluarga::where('nip_nrp',auth::user()->nip_nrp)->get();
        $keluargas->groupBy('nip_nrp');
        //
        $k_bahasa=Kecakapan_bahasa::where('nip_nrp',auth::user()->nip_nrp)->get();
        $k_bahasa->groupBy('nip_nrp');
        //
        $k_olahraga=Kecakapan_olahraga_dan_beladiri::where('nip_nrp',auth::user()->nip_nrp)->get();
        $k_olahraga->groupBy('nip_nrp');
        //
        $k_brevet=Kecakapan_brevet::where('nip_nrp',auth::user()->nip_nrp)->get();
        $k_brevet->groupBy('nip_nrp');
        //
        $tanda_jasas=Tanda_jasa_Prestasi::where('nip_nrp',auth::user()->nip_nrp)->get();
        $tanda_jasas->groupBy('nip_nrp');
        //
        $p_polris=Pendidikan_polri::where('nip_nrp',auth::user()->nip_nrp)->get();
        $p_polris->groupBy('nip_nrp');
        //
        $r_gaji=Riwayat_gaji_berkala::where('nip_nrp',auth::user()->nip_nrp)->get();
        $r_gaji->groupBy('nip_nrp');
        //
        $jabatan=Jabatan::all();
        $unit_kerja=Unit_kerja::all();
        // pangkat
        $pangkats=Pangkat::all();
        $kompartemen=Kompartemen::all();
        $biodata=biodata::where('nip_nrp',auth::user()->nip_nrp)->first();
        return view('User.pegawai.index',compact('datas','p_umum','p_kejuruan','keluargas','k_bahasa','k_olahraga','k_brevet',
        'tanda_jasas','p_polris','r_gaji','jabatan','pangkats','unit_kerja','kompartemen','biodata'));

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
    public function update(Request $request,$id)
    {
        $data=User::findOrFail($id);
        // // menyimpan data file yang diupload ke variabel $file
        if(empty($request->file('foto'))){
            $nama_file=$data->foto;
        }
        else{
            $this->validate($request,[
                'foto' =>'file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            if (file_exists($_SERVER['DOCUMENT_ROOT'].'/img/'.$users->foto))
            {
                $image_path = $_SERVER['DOCUMENT_ROOT'].'/img/'.$users->foto;
                unlink($image_path);
            }
            $file = $request->file('foto');
            $text = str_replace(' ', '',$file->getClientOriginalName());
            $nama_file = time()."_".$text;
            $tujuan_upload = 'img';
            // $file->move($tujuan_upload,$nama_file);
            $img = Image::make($file->getRealPath());
            $img->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save($tujuan_upload.'/'.$nama_file);
        }

		$data->update([
            'foto' => $nama_file ,
            'nip_nrp'=> $request->nip_nrp,
            'nama_pegawai'=> $request->nama_pegawai,
            'no_kta_pegawai'=> $request->no_kta_pegawai,
            'jenis_pegawai'=> $request->jenis_pegawai,
            // 'email'=> $request->email,
            'nidn'=> $request->nidn,
            // 'alamat'=> $request->alamat,
            // 'tempat_lahir'=> $request->tempat_lahir,
            // 'tanggal_lahir'=> $request->tanggal_lahir,
            'jk'=> $request->jk,
            'agama'=> $request->agama,
            'no_kep_jabatan'=>$request->no_kep_jabatan,
            'nik'=> $request->nik,
            // 'no_hp'=> $request->no_hp,
            'tgl_masuk'=> $request->tgl_masuk,
            // 'id_satker'=>$request->id_satker,
            // 'id_kompartemen'=>$request->id_kompartemen,
            // 'id_divisi'=>$request->id_divisi,
            'is_status'=>$data->is_status,
            'jabatan'=>$request->jabatan,
            'pangkat'=>$request->pangkat
        ]);
        // return $data;
        // // return Response()->json($request->all());
        return back()->with('succes','Data Berhasil Di Update');
        // return $request->all();
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
    }
}
