<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .font{
        font-size:30px;
        text-align:center;
        vertical-align: middle;
        border-top-style: hidden;
	border-left-style: hidden;
	border-bottom-style: solid;
	border-right-style: hidden;
    }
    .ketatas{
        font-size:10px;
        text-align:center;
        vertical-align: middle;
        border-top-style: hidden;
	border-left-style: hidden;
	border-bottom-style: solid;
        border-width: 2px;
	border-right-style: hidden;
    }
    .subfont{
        font-size:18px;
    }
    .subfont2{
        text-align:left;
        vertical-align: middle;
    }
    .ukurantddp{
            width:170px;
            vertical-align: top;
    }
    .ukurantddp_dua{
            width:420px;
            vertical-align: top;
    }
    .ukuranthnpnd{
            width:110px;
            vertical-align: top;
    }
    .ukuranthnpnd_dua{
            width:440px;
            vertical-align: top;
    }
    .ukuranrwyt{
            width:150px;
            vertical-align: top;
    }
    .ukuranpngkt{
            width:140px;
            vertical-align: top;
    }
    .ukuran_judul{
        width:50px;
    }
   .left{
        margin-left:46%;
        /* width:50px; */
   }
   .left2{
        margin-left:70%;
        /* width:50px; */
   }
    .p{
        font-weight: bold
    }
    .ttd{
        float: right;

    }
    .tengah{
        margin-top:50px;
    }
    .hidden{
        height: 20px;
    }
    /* .footer{
        margin-top: 14%
        clear: right;
        clear: left;

    } */
    .foto{
        width: 180px;
        height: 240px;
        vertical-align: top;
    }
</style>
        @php
                function tanggal_indo($tanggal)
                {
                        $bulan = array (1 =>   'Januari',
                                                'Februari',
                                                'Maret',
                                                'April',
                                                'Mei',
                                                'Juni',
                                                'Juli',
                                                'Agustus',
                                                'September',
                                                'Oktober',
                                                'November',
                                                'Desember'
                                        );
                        $split = explode('-', $tanggal);
                        return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
                }
                date_default_timezone_set('Asia/Jakarta');
        @endphp
<<<<<<< HEAD
        
=======

>>>>>>> b2094dd8410441cb8b910e813fc6c5b8347ce262
        @if (auth::user()->jenis_pegawai =="Polri" || auth::user()->jenis_pegawai =="Dosen Eksternal")

        <table  class="ketatas" align="left">
                <tr>
                        <td text-align="center"><b>AKADEMI KEPOLISIAN</b></td>
                </tr>
                <tr>
                        <td text-align="center"><b>BAG RENMIN</b></td>
                </tr>
        </table>
        <br>
        <br>
        <table  align="center">
                <tr>
                        <th class="font" colspan="3">DAFTAR RIWAYAT HIDUP</th>
                </tr>
        </table>
        <br>
        <br>

        <table align="right">
                <tr>
                        <td ><img src="https://i.ibb.co/dBKc7dj/2x3-KTA.jpg" alt="2x3-KTA" border="0" class="foto"></td>
                </tr>
<<<<<<< HEAD
        </table>

        <table >
                <tr>
                        <th class="subfont">DATA PRIBADI</th>
                        <td ></td>
                        <!-- <td class="foto"><img src="{{asset('template/'.$user->foto)}}" alt=""></td> -->
                </tr>
        </table>

        <table  class="left">
                <tr>
                        <td class="ukurantddp">Nama</td>
                        <td valign="top">:</td>
                        <td class="ukurantddp_dua">{{$user->nama_pegawai}}</td>
                </tr>
                <!-- <tr>
                        <td>Pangkat</td>
                        <td valign="top">:</td>
                        <td>  {{$user->agama}}</td>
                </tr> -->
                <tr>
                        <td>Pangkat / NRP </td>
                        <td valign="top">:</td>
                        <td>{{$user->Pangkat->nama_pangkat}} / {{$user->nip_nrp}}</td>
                </tr>
                <tr>
                        <td>Jabatan</td>
                        <td valign="top">:</td>
                        <td>{{$user->Jabatan->nama_jabatan}}</td>
                </tr>
                <tr>
                        <td>TMT JABATAN</td>
                        <td valign="top">:</td>
                        <td>{{$user->tgl_masuk}}</td>
                </tr>
                <tr>
                        <td>Tempat Tanggal Lahir</td>
                        <td valign="top">:</td>
                        <td>  {{$user->tempat_lahir.', '.$user->tanggal_lahir}}</td>
                </tr>
                <tr>
                        <td>Jenis Kelamin</td>
                        <td valign="top">:</td>
                        <td>   @if ($user->jk =='P')
                                Perempuan
                                @elseif($user->jk =='L')
                                Laki-Laki
                                @endif

                        </td>
                </tr>
                <tr>
                        <td >Agama</td>
                        <td valign="top">:</td>
                        <td>  {{$user->agama}}</td>
                </tr>
                <tr>
                        <td valign="top" >Alamat</td>
                        <td valign="top">:</td>
                        <td>  {{$user->alamat}}</td>
                </tr>
                <tr>
                        <td>Status Perkawinan</td>
                        <td valign="top">:</td>
                        <td>  
                        @if (!empty($biodata))
                        {{$biodata->status_menikah}}
                        @endif</td>
                </tr>
                <tr>
                        <td  >No Handphone</td>
                        <td valign="top">:</td>
                        <td>  {{$user->no_hp}}</td>
                </tr>
                <tr>
                        <td >Email</td>
                        <td valign="top">:</td>
                        <td>  {{$user->email}}</td>
                </tr>
        </table>
        <br>
        <table >
                <tr>
                        <th class="subfont">RIWAYAT PENDIDIKAN</th>
                        <td ></td>
                </tr>
        </table>

        <table  class="left">
                <tr>
                        <th class="ukuran_judul">I. Pendidikan Polri</th>
                </tr>
        </table>
        <table  class="left2">
                        
                                @for ($x=0;$x<count($p_polri);$x++)
                                @php
                                        $alpha=['1','2','3','4','5','6','7'];
                                @endphp
                        
                <tr>
                        <td class="ukuranthnpnd_dua"> {{$alpha[$x].'. '.$p_polri[$x]['nama_pendidikan']}}</td>
                        <!-- <td valign="top">:</td> -->
                        <td class="ukuranthnpnd">{{$p_umum[$x]['tahun_lulus']}}</td>
                                @endfor
                </tr>
        </table>
        <table  class="left">
                <tr>
                        <th class="ukuran_judul">II. Pendidikan Umum</th>
                </tr>
        </table>
        <table  class="left2">
                        
                                @for ($x=0;$x<count($p_umum);$x++)
                                @php
                                        $alpha=['1','2','3','4','5','6','7'];
                                @endphp
                        
                <tr>
                        <td class="ukuranthnpnd_dua"> {{$alpha[$x].'. '.$p_umum[$x]['nama_sekolah']}}</td>
                        <!-- <td valign="top">:</td> -->
                        <td class="ukuranthnpnd">{{$p_umum[$x]['tahun_lulus']}}</td>
                                @endfor
                </tr>
        </table>
    
        <table  class="left">
                <tr>
                        <th class="ukuran_judul">III. Pendidikan Kejuruan</th>
                </tr>
        </table>

        <table table  class="left2">

                                @for ($x=0;$x<count($p_kejuruan);$x++)
                                @php
                                        $alpha=['1','2','3','4','5','6','7'];
                                @endphp

                <tr>
                        <td class="ukuranthnpnd_dua">{{$alpha[$x].'. '.$p_kejuruan[$x]['nama_pendidikan']}}</td>
                        <!-- <td valign="top">:</td> -->
                        <td class="ukuranthnpnd">{{$p_kejuruan[$x]['tahun_lulus']}}</td>
                                @endfor
                </tr>
        </table>

        <table  class="left">
                <tr>
                        <th class="ukuran_judul">IV. Pendidikan Non Formal</th>
                </tr>
        </table>
        <table table  class="left2">
                       
                                @for ($x=0;$x<count($p_non_formal);$x++)
                                @php
                                        $alpha=['1','2','3','4','5','6','7'];
                                @endphp
                <tr>
                        <td class="ukuranthnpnd_dua">{{$alpha[$x].'. '.$p_non_formal[$x]['nama_pendidikan']}}</td>
                        <!-- <td valign="top">:</td> -->
                        <td class="ukuranthnpnd">{{$p_non_formal[$x]['tahun_pendidikan']}}</td>
                                @endfor 
                </tr>
        </table>

        <br>
        <table >
                <tr>
                        <th class="subfont">KECAKAPAN BAHASA</th>
                        <td ></td>
                </tr>
        </table>

        <table  class="left">
                <tr>
                        <th class="ukuran_judul">I. Bahasa Daerah</th>
                        <td ></td>
                </tr>
        </table>

        <table   class="left2">
  
                                @for ($x=0;$x<count($bahasa);$x++)
                                @if ($bahasa[$x]['jenis_bahasa'] =="Daerah")

                                @php
                                        $alpha=['1','2','3','4','5','6','7'];
                                @endphp

                <tr>
                        <td>{{'Bahasa '.$bahasa[$x]['nama_bahasa']}}</td>
                                @endif
                                @endfor
                </tr>
        </table>

        <table  class="left">
                <tr>
                        <th class="ukuran_judul">II. Bahasa Asing</th>
                        <td ></td>
                </tr>
        </table>

        <table   class="left2">
                                @for ($x=0;$x<count($bahasa);$x++)
                                @if ($bahasa[$x]['jenis_bahasa'] == "Asing")
                                @php
                                        $beta=['A','B','C','4','5','6','7'];
                                @endphp
                <tr>
                                <td>{{'Bahasa '.$bahasa[$x]['nama_bahasa']}}</td>
                        </tr>
                                @endif
                                @endfor
        </table>
        <br>
        <table >
                <tr>
                        <th class="subfont">TANDA JASA DAN PRESTASI</th>
                        <td ></td>
                </tr>
        </table>

        <table class="left">
                        @for ($x=0;$x<count($tanda_jasa);$x++)
                        @php
                                $alpha=['1','2','3','4','5','6','7'];
                        @endphp
                <tr>
                        
                        <td class="ukuranthnpnd_dua">{{$alpha[$x].'. '.$tanda_jasa[$x]['nama_prestasi']}}</td>
                        <!-- <td valign="top">:</td> -->
                        <td class="ukuranthnpnd">{{$tanda_jasa[$x]['tahun']}}</td>
                        @endfor
                </tr>

=======
        </table>

        <table >
                <tr>
                        <th class="subfont">DATA PRIBADI</th>
                        <td ></td>
                        <!-- <td class="foto"><img src="{{asset('template/'.$user->foto)}}" alt=""></td> -->
                </tr>
        </table>

        <table  class="left">
                <tr>
                        <td class="ukurantddp">Nama</td>
                        <td valign="top">:</td>
                        <td class="ukurantddp_dua">{{$user->nama_pegawai}}</td>
                </tr>
                <!-- <tr>
                        <td>Pangkat</td>
                        <td valign="top">:</td>
                        <td>  {{$user->agama}}</td>
                </tr> -->
                <tr>
                        <td>Pangkat / NRP </td>
                        <td valign="top">:</td>
                        <td>{{$user->Pangkat->nama_pangkat}} / {{$user->nip_nrp}}</td>
                </tr>
                <tr>
                        <td>Jabatan</td>
                        <td valign="top">:</td>
                        <td>{{$user->Jabatan->nama_jabatan}}</td>
                </tr>
                <tr>
                        <td>TMT JABATAN</td>
                        <td valign="top">:</td>
                        <td>{{$user->tgl_masuk}}</td>
                </tr>
                <tr>
                        <td>Tempat Tanggal Lahir</td>
                        <td valign="top">:</td>
                        <td>  {{$user->tempat_lahir.', '.$user->tanggal_lahir}}</td>
                </tr>
                <tr>
                        <td>Jenis Kelamin</td>
                        <td valign="top">:</td>
                        <td>   @if ($user->jk =='P')
                                Perempuan
                                @elseif($user->jk =='L')
                                Laki-Laki
                                @endif

                        </td>
                </tr>
                <tr>
                        <td >Agama</td>
                        <td valign="top">:</td>
                        <td>  {{$user->agama}}</td>
                </tr>
                <tr>
                        <td valign="top" >Alamat</td>
                        <td valign="top">:</td>
                        <td>  {{$user->alamat}}</td>
                </tr>
                <tr>
                        <td>Status Perkawinan</td>
                        <td valign="top">:</td>
                        <td>
                        @if (!empty($biodata))
                        {{$biodata->status_menikah}}
                        @endif</td>
                </tr>
                <tr>
                        <td  >No Handphone</td>
                        <td valign="top">:</td>
                        <td>  {{$user->no_hp}}</td>
                </tr>
                <tr>
                        <td >Email</td>
                        <td valign="top">:</td>
                        <td>  {{$user->email}}</td>
                </tr>
>>>>>>> b2094dd8410441cb8b910e813fc6c5b8347ce262
        </table>
        <br>
        <table >
                <tr>
<<<<<<< HEAD
                        <th class="subfont">RIWAYAT KEPANGKATAN DAN PEKERJAAN</th>
                        <td ></td>
                </tr>
        </table>

        <table  class="left">
                <tr>
                        <th class="ukuran_judul">I. RIWAYAT KEPANGKATAN</th>
=======
                        <th class="subfont">RIWAYAT PENDIDIKAN</th>
>>>>>>> b2094dd8410441cb8b910e813fc6c5b8347ce262
                        <td ></td>
                </tr>
        </table>

<<<<<<< HEAD
        <table  class="left2">
                <tr>
                        <td class="ukuranpngkt"><b>PANGKAT</b></td>
                        <td class="ukuranrwyt"><b>TMT PANGKAT</b></td>
                </tr>
        </table>
=======
        <table  class="left">
                <tr>
                        <th class="ukuran_judul">I. Pendidikan Polri</th>
                </tr>
        </table>
        <table  class="left2">

                                @for ($x=0;$x<count($p_polri);$x++)
                                @php
                                        $alpha=['1','2','3','4','5','6','7'];
                                @endphp

                <tr>
                        <td class="ukuranthnpnd_dua"> {{$alpha[$x].'. '.$p_polri[$x]['nama_pendidikan']}}</td>
                        <!-- <td valign="top">:</td> -->
                        <td class="ukuranthnpnd">{{$p_umum[$x]['tahun_lulus']}}</td>
                                @endfor
                </tr>
        </table>
        <table  class="left">
                <tr>
                        <th class="ukuran_judul">II. Pendidikan Umum</th>
                </tr>
        </table>
        <table  class="left2">

                                @for ($x=0;$x<count($p_umum);$x++)
                                @php
                                        $alpha=['1','2','3','4','5','6','7'];
                                @endphp

                <tr>
                        <td class="ukuranthnpnd_dua"> {{$alpha[$x].'. '.$p_umum[$x]['nama_sekolah']}}</td>
                        <!-- <td valign="top">:</td> -->
                        <td class="ukuranthnpnd">{{$p_umum[$x]['tahun_lulus']}}</td>
                                @endfor
                </tr>
        </table>

        <table  class="left">
                <tr>
                        <th class="ukuran_judul">III. Pendidikan Kejuruan</th>
                </tr>
        </table>

        <table table  class="left2">

                                @for ($x=0;$x<count($p_kejuruan);$x++)
                                @php
                                        $alpha=['1','2','3','4','5','6','7'];
                                @endphp

                <tr>
                        <td class="ukuranthnpnd_dua">{{$alpha[$x].'. '.$p_kejuruan[$x]['nama_pendidikan']}}</td>
                        <!-- <td valign="top">:</td> -->
                        <td class="ukuranthnpnd">{{$p_kejuruan[$x]['tahun_lulus']}}</td>
                                @endfor
                </tr>
        </table>

        <table  class="left">
                <tr>
                        <th class="ukuran_judul">IV. Pendidikan Non Formal</th>
                </tr>
        </table>
        <table table  class="left2">

                                @for ($x=0;$x<count($p_non_formal);$x++)
                                @php
                                        $alpha=['1','2','3','4','5','6','7'];
                                @endphp
                <tr>
                        <td class="ukuranthnpnd_dua">{{$alpha[$x].'. '.$p_non_formal[$x]['nama_pendidikan']}}</td>
                        <!-- <td valign="top">:</td> -->
                        <td class="ukuranthnpnd">{{$p_non_formal[$x]['tahun_pendidikan']}}</td>
                                @endfor
                </tr>
        </table>

        <br>
        <table >
                <tr>
                        <th class="subfont">KECAKAPAN BAHASA</th>
                        <td ></td>
                </tr>
        </table>

        <table  class="left">
                <tr>
                        <th class="ukuran_judul">I. Bahasa Daerah</th>
                        <td ></td>
                </tr>
        </table>

        <table   class="left2">

                                @for ($x=0;$x<count($bahasa);$x++)
                                @if ($bahasa[$x]['jenis_bahasa'] =="Daerah")

                                @php
                                        $alpha=['1','2','3','4','5','6','7'];
                                @endphp

                <tr>
                        <td>{{'Bahasa '.$bahasa[$x]['nama_bahasa']}}</td>
                                @endif
                                @endfor
                </tr>
        </table>

        <table  class="left">
                <tr>
                        <th class="ukuran_judul">II. Bahasa Asing</th>
                        <td ></td>
                </tr>
        </table>

        <table   class="left2">
                                @for ($x=0;$x<count($bahasa);$x++)
                                @if ($bahasa[$x]['jenis_bahasa'] == "Asing")
                                @php
                                        $beta=['A','B','C','4','5','6','7'];
                                @endphp
                <tr>
                                <td>{{'Bahasa '.$bahasa[$x]['nama_bahasa']}}</td>
                        </tr>
                                @endif
                                @endfor
        </table>
        <br>
        <table >
                <tr>
                        <th class="subfont">TANDA JASA DAN PRESTASI</th>
                        <td ></td>
                </tr>
        </table>

        <table class="left">
                        @for ($x=0;$x<count($tanda_jasa);$x++)
                        @php
                                $alpha=['1','2','3','4','5','6','7'];
                        @endphp
                <tr>

                        <td class="ukuranthnpnd_dua">{{$alpha[$x].'. '.$tanda_jasa[$x]['nama_prestasi']}}</td>
                        <!-- <td valign="top">:</td> -->
                        <td class="ukuranthnpnd">{{$tanda_jasa[$x]['tahun']}}</td>
                        @endfor
                </tr>

        </table>
        <br>
        <table >
                <tr>
                        <th class="subfont">RIWAYAT KEPANGKATAN DAN PEKERJAAN</th>
                        <td ></td>
                </tr>
        </table>

        <table  class="left">
                <tr>
                        <th class="ukuran_judul">I. RIWAYAT KEPANGKATAN</th>
                        <td ></td>
                </tr>
        </table>

        <table  class="left2">
                <tr>
                        <td class="ukuranpngkt"><b>PANGKAT</b></td>
                        <td class="ukuranrwyt"><b>TMT PANGKAT</b></td>
                </tr>
        </table>
>>>>>>> b2094dd8410441cb8b910e813fc6c5b8347ce262

        <table  class="left2">
                @foreach($r_pangkat as $p)
                        @php
                                $alpha=['1','2','3','4','5','6','7'];
                                $i=0;
                        @endphp
                <tr>
                        <td class="ukuranpngkt">{{$p->Pangkat->nama_pangkat}}</td>
                        <td class="ukuranrwyt">{{$p->tmt}}</td>
                </tr>
                        @php
                                $i++;
                        @endphp
                @endforeach
<<<<<<< HEAD
        </table>

        <table  class="left">
                <tr>
                        <th class="ukuran_judul">II. RIWAYAT JABATAN</th>
                        <td ></td>
                </tr>
        </table>


        <table  class="left2">

                        @foreach($r_jabatan as $jabatan)
                                @php
                                        $alpha=['1','2','3','4','5','6','7'];
                                        $i=0;
                                @endphp
                        <tr>
                                <td class="ukuranrwyt">{{$jabatan->tgl_mulai_terhitung}}</td>
                                <!-- <td valign="top">:</td> -->
                                <td class="ukuranpngkt"> {{$jabatan->Jabatan->nama_jabatan}}</td>
                        </tr>
                                @php
                                        $i++;
                                @endphp
                        @endforeach
        </table>

=======
        </table>

        <table  class="left">
                <tr>
                        <th class="ukuran_judul">II. RIWAYAT JABATAN</th>
                        <td ></td>
                </tr>
        </table>


        <table  class="left2">

                        @foreach($r_jabatan as $jabatan)
                                @php
                                        $alpha=['1','2','3','4','5','6','7'];
                                        $i=0;
                                @endphp
                        <tr>
                                <td class="ukuranrwyt">{{$jabatan->tgl_mulai_terhitung}}</td>
                                <!-- <td valign="top">:</td> -->
                                <td class="ukuranpngkt"> {{$jabatan->Jabatan->nama_jabatan}}</td>
                        </tr>
                                @php
                                        $i++;
                                @endphp
                        @endforeach
        </table>

>>>>>>> b2094dd8410441cb8b910e813fc6c5b8347ce262
        <br>
        <br>
        <br>
        <br>

        <table class="ttd">
                <tr>
                        <td>Semarang,</td>
                        <td>{{tanggal_indo(date('Y-m-d'))}}</td>
                </tr>
                <tr>
                        <td class="tengah" colspan="2"><center>Yang Membuat</center></td>
                </tr>
                <tr>
                        <td class="hidden"  colspan="2"></td>
                </tr>
                <tr>
                        <td class="hidden"   colspan="2"></td>
                </tr>
                <tr>
                        <td colspan="2"><center>{{auth::user()->nama_pegawai}}</center></td>
                </tr>
                <tr>
                        <td colspan="2"><center>{{auth::user()->Pangkat->nama_pangkat}} NRP. {{auth::user()->nip_nrp}}</center></td>
                </tr>
        </table>
        @endif
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> b2094dd8410441cb8b910e813fc6c5b8347ce262
