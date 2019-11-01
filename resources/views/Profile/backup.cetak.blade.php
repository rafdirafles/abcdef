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
    }
    .subfont{
        font-size:18px;
    }
    .subfont2{
        text-align:left;
        vertical-align: middle;
    }
    .ukuran_judul{
        width:50px;
    }
   .left{
        margin-left:46%;
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
        width: 60px;
        height: 60px;
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
@if (auth::user()->jenis_pegawai =="Polri" || auth::user()->jenis_pegawai =="Dosen Eksternal")

<table border="5px" align="center">
        <tr>
                <th class="font" colspan="3">RIWAYAT HIDUP</th>
        </tr>
        <!-- <tr>
                <td></td>
                <td class="ukuran_titikdua"></td>
                <td></td>
        </tr>
        <tr>
                <td></td>
                <td class="ukuran_titikdua"></td>
                <td></td>
        </tr>
        <tr>
                <td></td>
                <td class="ukuran_titikdua"></td>
                <td></td>
        </tr> -->
        <tr>
            <th class="subfont">Data Pribadi</th>
            <td ></td>
        <!-- <td class="foto"><img src="{{asset('template/'.$user->foto)}}" alt=""></td> -->
        </tr>
        <tr>
                <td ></td>
                <td class="subfont2">Nama</td>
                <td>:  {{$user->nama_pegawai}}</td>
        </tr>
        <tr>
          <td>Jenis_kelamin</td>
            <td> :  @if ($user->jk =='P')
                Perempuan
                @elseif($user->jk =='L')
                Laki-laki
                 @endif

            </td>
        </tr>
        <tr>
          <td      class="subfont2">Tempat Tanggal Lahir</td>
         
          <td>:  {{$user->tempat_lahir.','.$user->tanggal_lahir}}</td>
        </tr>
        <tr>
                <td     class="subfont2">Status Perkawinan</td>
                <td>:  
                    @if (!empty($biodata))
                    {{$biodata->status_menikah}}
                    @endif</td>
        </tr>
        <tr>
                <td    class="subfont2">Agama</td>
               
                <td>:  {{$user->agama}}</td>
        </tr>
        <tr>
                <td   class="subfont2">Alamat</td>
                <td>:  {{$user->alamat}}</td>
        </tr>
        <tr>
                <td  class="subfont2">No Handphone</td>
                <td>:  {{$user->no_hp}}</td>
        </tr>
        <tr>
                <td class="subfont2">Email</td>
                <td>:  {{$user->email}}</td>
        </tr>
</table>
<table border="5px" class="left">
        <tr>
                <th class="subfont" colspan="2">RIWAYAT PENDIDIKAN</th>
                <td></td>
        </tr>
        <tr>
          <td class="ukuran_judul">1.Pendidikan Umum</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
                <td >
                @for ($x=0;$x<count($p_umum);$x++)
                @php
                        $alpha=['a','b','c'.'d','e','f','g'];
                @endphp
                </td>
                <td colspan"2">{{$alpha[$x].'. Tahun '.$p_umum[$x]['tahun_lulus']}}</td>
                <td>:  {{$p_umum[$x]['nama_sekolah']}}</td>
        </tr>
</table>
        <!-- MULAI RIWAYAT PENDIDIKAN -->
      <!-- <table table border="5px" align="center">
        <tr>
                <th class="subfont" >RIWAYAT PENDIDIKAN</th>
                <td></td>
                <td></td>
        </tr>
        <tr>
                <th class="ukuran_judul">1.Pendidikan Umum</th>
                <td></td>
                <td></td>
        </tr>
        
              <tr>
                    
              </tr>

              @endfor
      </table> -->
    
      <table table border="5px" class="left">
        <tr>
                <th>2.Pendidikan Non Formal</th>
                <td></td>
        </tr>
          @for ($x=0;$x<count($p_non_formal);$x++)
            @php
                    $alpha=['a','b','c'.'d','e','f','g'];
            @endphp
          <tr>
                <td>{{$alpha[$x].'. tahun '.$p_non_formal[$x]['tahun_pendidikan']}}</td>
                <td>:</td>
                <td>{{$p_non_formal[$x]['nama_pendidikan']}}</td>
          </tr>

          @endfor
      </table>

      <table table border="5px" class="left">
        <tr>
                <th>3.Pendidikan Kejuruan</th>
                <td></td>
        </tr>
          @for ($x=0;$x<count($p_kejuruan);$x++)
            @php
                    $alpha=['a','b','c'.'d','e','f','g'];
            @endphp
          <tr>
                <td>{{$alpha[$x].'. tahun '.$p_kejuruan[$x]['tahun_lulus']}}</td>
                <td>:</td>
                <td>{{$p_kejuruan[$x]['nama_pendidikan']}}</td>
          </tr>

          @endfor
      </table>

      <p class="p" >BAHASA</p>
      <table border="5px" class="left">
        <tr>
                <th>1.Daerah</th>
                <td></td>
        </tr>
        @for ($x=0;$x<count($bahasa);$x++)
        @if ($bahasa[$x]['jenis_bahasa'] =="Daerah")

            @php
                    $alpha=['a','b','c'.'d','e','f','g'];
            @endphp
            <tr>
                    <td>{{$bahasa[$x]['nama_bahasa']}}</td>
            </tr>
            @endif
        @endfor
      </table>
      <table border="5px" class="left">
        <tr>
                <th>1.Asing</th>
                <td></td>
        </tr>
        @for ($x=0;$x<count($bahasa);$x++)
        @if ($bahasa[$x]['jenis_bahasa'] == "Asing")
            @php
                    $alpha=['a','b','c'.'d','e','f','g'];
            @endphp
            <tr>
                    <td>{{$bahasa[$x]['nama_bahasa']}}</td>
            </tr>
            @endif
        @endfor
      </table>
      <p class="p" >TANDA JASA</p>
      <table border="5px"class="left">
        <tr>
                <th></th>
                <td></td>
        </tr>
          @for ($x=0;$x<count($tanda_jasa);$x++)
            @php
                    $alpha=['a','b','c'.'d','e','f','g'];
            @endphp
          <tr>
                <td>{{$alpha[$x].'. tahun '.$tanda_jasa[$x]['tahun']}}</td>
                <td>:</td>
                <td>{{$tanda_jasa[$x]['nama_prestasi']}}</td>
          </tr>

          @endfor
      </table>
        <p class="p" >Riwayat</p>
        <table border="5px" class="left">
          <tr>
                  <th >1.Riwayat Kepangkatan</th>
                  <td></td>
          </tr>
          @php

          @endphp
          @foreach($r_pangkat as $p)
              @php
                      $alpha=['a','b','c'.'d','e','f','g'];
                      $i=0;
              @endphp
            <tr>
                  <td>{{'* tahun '.$p->tmt}}</td>
                  <td>:</td>
                  <td>{{$p->Pangkat->nama_pangkat}}</td>
            </tr>
            @php
                $i++;
            @endphp

            @endforeach
    </table>
    <table border="5px" class="left">
                <tr>
                        <th>2.Riwayat Jabatan</th>
                        <td></td>
                </tr>
                @php
                @endphp
                @foreach($r_jabatan as $jabatan)
                    @php
                            $alpha=['a','b','c'.'d','e','f','g'];
                            $i=0;
                    @endphp
                  <tr>
                        <td>{{'* tahun '.$jabatan->tgl_mulai_terhitung}}</td>
                        <td>:</td>
                        <td>{{$jabatan->Jabatan->nama_jabatan}}</td>
                  </tr>
                  @php
                      $i++;
                  @endphp
                  @endforeach
    </table>
    <br>
    <br>
    <br>
    <table class="ttd">
        <tr>
            <td>semarang,</td>
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
        <td colspan="2"><center>{{auth::user()->Pangkat->nama_pangkat}} NIP {{auth::user()->nip_nrp}}</center></td>
        </tr>
    </table>
    <table class="footer">
            <tr>
                   <td>
                       <center><p>downloaded on {{tanggal_indo(date('Y-m-d'))}} ||genered by asik system||AKADEMI KEPOLISIAN</p>
                        <center>
                    </td>
            </tr>
        </table>


@else
<!-- <body>
	<center>
		<h5>DAFTAR RIWAYAT HIDUP</h4>
                asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasd
	</center>
    <table>
            <tr>
                <th>Data Pribadi</th>
                <td></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{$user->nama_pegawai}}</td>
            </tr>
            <tr>
              <td>Jenis_kelamin</td>
              <td>:</td>
                <td>@if ($user->jk =='P')
                    Perempuan
                    @elseif($user->jk =='L')
                    Laki-lakir
                     @endif

                </td>
            </tr>
            <tr>
              <td>Tempat Tanggal Lahir</td>
              <td>:</td>
              <td>{{$user->tempat_lahir.','.$user->tanggal_lahir}}</td>
            </tr>
            <tr>
                    <td>Status Perkawinan</td>
                    <td>:</td>
                    <td>
                        @if (!empty($biodata))
                        {{$biodata->status_menikah}}
                        @endif</td>
            </tr>
            <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>{{$user->agama}}</td>
            </tr>
            <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{$user->alamat}}</td>
            </tr>
            <tr>
                    <td>No Handphone</td>
                    <td>:</td>
                    <td>{{$user->no_hp}}</td>
            </tr>
            <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{$user->email}}</td>
            </tr>
          </table>
          {{--  --}}
          <p class="p" >DATA PENDIDIKAN</p>
          <table class="p_umum">
            <tr>
                    <th>1.Pendidikan Umum</th>
                    <td></td>
            </tr>
              @for ($x=0;$x<count($p_umum);$x++)
                @php
                        $alpha=['a','b','c'.'d','e','f','g'];
                @endphp
              <tr>
                    <td>{{$alpha[$x].'. tahun '.$p_umum[$x]['tahun_lulus']}}</td>
                    <td>:</td>
                    <td>{{$p_umum[$x]['nama_sekolah']}}</td>
              </tr>

              @endfor
          </table>
          {{--  --}}
          <table class="p_umum">
            <tr>
                    <th>2.Pendidikan Non Formal</th>
                    <td></td>
            </tr>
              @for ($x=0;$x<count($p_non_formal);$x++)
                @php
                        $alpha=['a','b','c'.'d','e','f','g'];
                @endphp
              <tr>
                    <td>{{$alpha[$x].'. tahun '.$p_non_formal[$x]['tahun_pendidikan']}}</td>
                    <td>:</td>
                    <td>{{$p_non_formal[$x]['nama_pendidikan']}}</td>
              </tr>

              @endfor
          </table>
          <table class="p_umum">
            <tr>
                    <th>3.Pendidikan Kejuruan</th>
                    <td></td>
            </tr>
              @for ($x=0;$x<count($p_kejuruan);$x++)
                @php
                        $alpha=['a','b','c'.'d','e','f','g'];
                @endphp
              <tr>
                    <td>{{$alpha[$x].'. tahun '.$p_kejuruan[$x]['tahun_lulus']}}</td>
                    <td>:</td>
                    <td>{{$p_kejuruan[$x]['nama_pendidikan']}}</td>
              </tr>

              @endfor
          </table>
          <table class="p_umum">
            <tr>
                    <th>4.Pendidikan Polri</th>
                    <td></td>
            </tr>
              @for ($x=0;$x<count($p_polri);$x++)
                @php
                        $alpha=['a','b','c'.'d','e','f','g'];
                @endphp
              <tr>
                    <td>{{$alpha[$x].'. tahun '.$p_polri[$x]['tahun']}}</td>
                    <td>:</td>
                    <td>{{$p_polri[$x]['nama_pendidikan']}}</td>
              </tr>

              @endfor
          </table>
          <p class="p" >BAHASA</p>
          <table class="p_umum">
            <tr>
                    <th>1.Daerah</th>
                    <td></td>
            </tr>
            @for ($x=0;$x<count($bahasa);$x++)
            @if ($bahasa[$x]['jenis_bahasa'] =="Daerah")

                @php
                        $alpha=['a','b','c'.'d','e','f','g'];
                @endphp
                <tr>
                        <td>{{$bahasa[$x]['nama_bahasa']}}</td>
                </tr>
                @endif
            @endfor
          </table>
          <table class="p_umum">
            <tr>
                    <th>1.Asing</th>
                    <td></td>
            </tr>
            @for ($x=0;$x<count($bahasa);$x++)
            @if ($bahasa[$x]['jenis_bahasa'] == "Asing")
                @php
                        $alpha=['a','b','c'.'d','e','f','g'];
                @endphp
                <tr>
                        <td>{{$bahasa[$x]['nama_bahasa']}}</td>
                </tr>
                @endif
            @endfor
          </table>
          <p class="p" >TANDA JASA</p>
          <table class="p_umum">
            <tr>
                    <th></th>
                    <td></td>
            </tr>
              @for ($x=0;$x<count($tanda_jasa);$x++)
                @php
                        $alpha=['a','b','c'.'d','e','f','g'];
                @endphp
              <tr>
                    <td>{{$alpha[$x].'. tahun '.$tanda_jasa[$x]['tahun']}}</td>
                    <td>:</td>
                    <td>{{$tanda_jasa[$x]['nama_prestasi']}}</td>
              </tr>

              @endfor
          </table>
            <p class="p" >Riwayat</p>
            <table class="p_umum">
              <tr>
                      <th>1.Riwayat Kepangkatan</th>
                      <td></td>
              </tr>
              @php

              @endphp
              @foreach($r_pangkat as $p)
                  @php
                          $alpha=['a','b','c'.'d','e','f','g'];
                          $i=0;
                  @endphp
                <tr>
                      <td>{{'* tahun '.$p->tmt}}</td>
                      <td>:</td>
                      <td>{{$p->Pangkat->nama_pangkat}}</td>
                </tr>
                @php
                    $i++;
                @endphp

                @endforeach
        </table>
        <table class="p_umum">
                    <tr>
                            <th>2.Riwayat Jabatan</th>
                            <td></td>
                    </tr>
                    @php
                    @endphp
                    @foreach($r_jabatan as $jabatan)
                        @php
                                $alpha=['a','b','c'.'d','e','f','g'];
                                $i=0;
                        @endphp
                      <tr>
                            <td>{{'* tahun '.$jabatan->tgl_mulai_terhitung}}</td>
                            <td>:</td>
                            <td>{{$jabatan->Jabatan->nama_jabatan}}</td>
                      </tr>
                      @php
                          $i++;
                      @endphp
                      @endforeach
        </table>
        <br>
        <br>
        <br>
        <table class="ttd">
            <tr>
                <td>semarang,</td>
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
            <td colspan="2"><center>{{auth::user()->Pangkat->nama_pangkat}} NRP {{auth::user()->nip_nrp}}</center></td>
            </tr>
        </table>

        <table class="footer">
                <tr>
                       <td>
                           <center><p>downloaded on {{tanggal_indo(date('Y-m-d'))}} ||generated by asik system||AKADEMI KEPOLISIAN</p>
                            <center>
                        </td>
                </tr>
            </table>
</body> -->

@endif
</html>
