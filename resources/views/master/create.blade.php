@extends("layouts.admin.app")
@section('body')

<!-- Begin Input Pegawai  -->
<div class="kt-container  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Input Pegawai
                </h3>
            </div>
        </div>
        <!--begin::Form-->
    <form class="kt-form kt-form--label-right" action="{{route('master.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="kt-portlet__body">

                <div class="form-group row"></div>
                <div class="form-group row">
                    <div class="col-lg-6">
                        <label>NIP / NRP</label>
                        <input type="text" name="nip_nrp" value="{{ old('nip_nrp') }}" class="form-control @error('nip_nrp') is-invalid @enderror" placeholder="Masukkan NIP/NRP" required>
                        @error('nip_nrp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label class="">Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" value="{{ old('nama_pegawai') }}" class="form-control @error('nama_pegawai') is-invalid @enderror" placeholder="Masukkan Nama Lengkap" required>
                        @error('nama_pegawai')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6">
                        <label class="">Jenis Pegawai</label>
                        <select class="form-control @error('jenis_pegawai') is-invalid @enderror" value="{{ old('jenis_pegawai') }}" name="jenis_pegawai" required>
                            <option></option>
                            <option value="Polri" @if (old('jenis_pegawai') == "Polri") {{ 'selected' }} @endif>Polri</option>
                            <option value="PNS" @if (old('jenis_pegawai') == "PNS") {{ 'selected' }} @endif >PNS</option>
                            <option value="Dosen Eksternal" @if (old('jenis_pegawai') == "Dosen Eksternal") {{ 'selected' }} @endif>Dosen Eksternal</option>
                        </select>
                        @error('jenis_pegawai')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror

                    </div>
                    <div class="col-lg-6">
                        <label class="">NIDN</label>
                        <input type="text" name="nidn" class="form-control @error('nidn') is-invalid @enderror" value="{{ old('nidn') }}" placeholder="Masukkan NIDN" required>
                        @error('nidn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6">
                        <label class="">No KTA Pegawai</label>
                        <input type="text"  name="no_kta_pegawai" class="form-control @error('no_kta_pegawai') is-invalid @enderror" value="{{ old('no_kta_pegawai') }}" placeholder="Masukkan No KTA Pegawai" required>
                        @error('no_kta_pegawai')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label class="">No.Kep.Jabatan</label>
                        <input type="text" name="no_kep_jabatan" class="form-control @error('no_kep_jabatan') is-invalid @enderror" value="{{ old('no_kep_jabatan') }}" placeholder="Masukkan No.Kep.Jabatan" required>
                       @error('no_kep_jabatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6">
                        <label class="">Pangkat</label>
                        <select class="form-control" name="pangkat" id="pangkat" required>
                            <option value="">pilih</option>
                            @foreach ($pangkat as $pang)
                                <option value="{{$pang->id }}" {{ (old("pangkat") == $pang->id ? "selected":"") }}>{{$pang->nama_pangkat}}</option>
                            @endforeach
                        </select>
                        @error('pangkat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label class="">Jabatan</label>
                        <select class="form-control" name="jabatan" id="jabatan" required>
                            <option value="">pilih</option>
                            @foreach ($jabatan as $jabat)
                                <option value="{{$jabat->id }}" {{ (old("jabatan") == $jabat->id ? "selected":"") }}>{{$jabat->nama_jabatan}}</option>
                            @endforeach
                        </select>
                        @error('Pangkat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                        <div class="col-lg-4">
                            <label class="">Kompartemen</label>
                            {{-- <input type="text" class="form-control" placeholder="Masukkan Unit Kerja"> --}}
                            <select class="form-control" name="id_kompartemen" id="kompartemen" required>
                                <option value="">pilih</option>
                                @foreach ($kompartemen as $u)
                                    {{-- <option value="{{$u->id}}">{{$u->nama_unit_kerja}}</option> --}}
                                    <option value="{{$u->id }}" {{ (old("id_kompartemen") == $u->id ? "selected":"") }}>{{$u->nama_kompartemen}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4">
                                <label class="">Satker</label>
                                <select class="form-control" name="id_satker" id="satker" required>
                                </select>
                        </div>
                        <div class="col-lg-4">
                                <label class="">Divisi/Unit Kerja</label>
                                {{-- <input type="text" class="form-control" placeholder="Masukkan Unit Kerja"> --}}
                                <select class="form-control @error('email') is-invalid @enderror" name="id_divisi" id="divisi" required>
                                </select>
                                @error('id_divisi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                </div>

                <div class="form-group row"></div>
                <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="">E-mail</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Masukkan Email" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        </div>
                </div>
                <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Masukkan Password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        </div>
                        <div class="col-lg-6">
                            <label class="">Retype Password</label>
                            <input type="password" name="re_password" class="form-control @error('re_password') is-invalid @enderror" value="{{ old('re_password') }}" placeholder="Masukkan Password Kembali" required>
                            @error('re_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        </div>
                </div>
                <div class="form-group row"></div>
                <div class="form-group row">
                        <label class="">Alamat</label>
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" placeholder="Masukkan Alamat " required> {{ old('alamat') }}</textarea>
                       @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                </div>
                <div class="form-group row">
                    <div class="col-lg-6">
                        <label class="">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ old('tempat_lahir') }}" placeholder="Masukkan Tempat Lahir" required>
                       @error('tempat_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label class="">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir') }}" placeholder="Masukkan Tanggal Lahir" required>
                       @error('tanggal_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-6">
                        <label class="">Jenis Kelamin</label>
                        <select class="form-control @error('jk') is-invalid @enderror" value="{{ old('jk') }}" name="jk" id="sel1" required>
                            <option value="">pilih</option>
                            <option value="L"  @if (old('jk') == "L") {{ 'selected' }} @endif>Laki-Laki</option>
                            <option value="P"   @if (old('jk') == "P") {{ 'selected' }} @endif>Perempuan</option>
                        </select>
                        @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label class="">Agama</label>
                        <select class="form-control @error('agama') is-invalid @enderror" value="{{ old('agama') }}" name="agama" required>
                                <option value="">pilih</option>
                                <option value="Islam" @if (old('agama') == "Islam") {{ 'selected' }} @endif>Islam</option>
                                <option value="Kristen" @if (old('agama') == "Kristen") {{ 'selected' }} @endif>Kristen</option>
                                <option value="Katolik" @if (old('agama') == "Katolik") {{ 'selected' }} @endif>Katolik</option>
                                <option value="Hindu" @if (old('agama') == "Hindu") {{ 'selected' }} @endif>Hindu</option>
                                <option value="Budha" @if (old('agama') == "Budha") {{ 'selected' }} @endif>Budha</option>
                                <option value="Konghucu" @if (old('agama') == "Konghucu") {{ 'selected' }} @endif>Konghucu</option>
                        </select>
                       @error('agama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row"></div>

                <div class="form-group row">
                    <div class="col-lg-6">
                        <label class="">NIK</label>
                        <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}" placeholder="Masukkan NIK" required>
                       @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                </div>
                <div class="form-group row"></div>
                <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="">No HP</label>
                            <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') }}" placeholder="Masukkan Nomer Handphone" required>
                                @error('no_hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        <div class="col-lg-6">
                            <label class="">Tanggal Masuk</label>
                            <input type="date" name="tgl_masuk" class="form-control @error('tgl_masuk') is-invalid @enderror" value="{{ old('tgl_masuk') }}" placeholder="Tanggal Masuk" required>
                            @error('tgl_masuk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                </div>
                <div class="form-group row">

                </div>
                <div class="form-group row"></div>
                {{-- <div class="form-group row">
                    <div class="col-lg-6">
                        <label class="">Tinggi Badan</label>
                        <input type="number" name="tinggi_badan" class="form-control @error('tinggi_badan') is-invalid @enderror" value="{{ old('tinggi_badan') }}" placeholder="Tinggi" required>
                       @error('tinggi_badan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label class="">Berat Badan</label>
                        <input type="number" name="berat_badan" class="form-control @error('berat_badan') is-invalid @enderror" value="{{ old('berat_badan') }}" placeholder="Berat" required>
                       @error('berat_badan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="">Warna Rambut</label>
                            <input type="text" name="warna_rambut" class="form-control @error('warna_rambut') is-invalid @enderror" value="{{ old('warna_rambut') }}" placeholder="Masukkan Warna Rambut" required>
                        @error('warna_rambut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label class="">Bentuk Muka</label>
                            <input type="text" name="bentuk_muka" class="form-control @error('bentuk_muka') is-invalid @enderror" value="{{ old('bentuk_muka') }}" placeholder="Masukkan Bentuk Muka" required>
                            @error('bentuk_muka')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="">Warna Kulit</label>
                            <input type="text" name="warna_kulit" class="form-control @error('warna_kulit') is-invalid @enderror" value="{{ old('warna_kulit') }}" placeholder="Masukkan Warna Kulit" required>
                            @error('warna_kulit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                            <label class="">Ciri Khas</label>
                            <input type="text" name="ciri_khas" class="form-control @error('ciri_khas') is-invalid @enderror" value="{{ old('ciri_khas') }}" placeholder="Masukkan Ciri Khas" required>
                            @error('ciri_khas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label class="">Cacat Tubuh</label>
                            <input type="text" name="cacat_tubuh" class="form-control @error('cacat_tubuh') is-invalid @enderror" value="{{ old('cacat_tubuh') }}" placeholder="Masukkan Cacat Tubuh" required>
                            @error('cacat_tubuh')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                                <label class="">Hobi</label>
                                <input type="text" name="hobi" class="form-control @error('hobi') is-invalid @enderror" value="{{ old('hobi') }}" placeholder="Masukkan Hobi" required>
                            @error('hobi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div> --}}
                    <label><b>Foto</b></label>
                    <div class="form-group row">
                        <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror" value="{{ old('foto') }}" col-lg-6" placeholder="Upload Foto" required>
                        @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        {{-- <div class="col-lg-4"></div> --}}
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            {{-- <button type="submit" class="btn btn-secondary">Cancel</button> --}}
                        </div>
                    </div>
                </div>
            </div>

    </form>
        <!--end::Form-->
    </div>
    </div>
</div>
</div>
<!-- End form input -->
@endsection

@section('asset-buttom')
<script>
     $(document).ready(function(){
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
})
$('#kompartemen').change(function(){
            var divisi=$(this).val();
            $.ajax({
                type:'post',
                url:'{{route('kompartemen.satker')}}',
                data:{id:divisi,_token:'{{csrf_token()}}'},
                success:function(data){
                    $('#satker').html(data);
                    console.log(data);
                }
            })
})
$('#satker').change(function(){
            var divisi=$(this).val();
            $.ajax({
                type:'post',
                url:'{{route('satker.divisi')}}',
                data:{id:divisi,_token:'{{csrf_token()}}'},
                success:function(data){
                    $('#divisi').html(data);
                    console.log(data);
                }
            })
})
var error='<?php echo old('id_divisi')?>';
var id='<?php echo old('id_kompartemen')?>';
if(error){
        $.ajax({
            type:'post',
            url:'{{route('kompartemen.satker')}}',
            data:{id:id,id_selected:error,_token:'{{csrf_token()}}'},
            success:function(data){
                $('#divisi').html(data);
                console.log(data);
            }
        })

}
var error='<?php echo old('id_kompartemen')?>';
var id='<?php echo old('id_satker')?>';
if(error){
        $.ajax({
            type:'post',
            url:'{{route('satker.divisi')}}',
            data:{id:id,id_selected:error,_token:'{{csrf_token()}}'},
            success:function(data){
                $('#satker').html(data);
                console.log(data);
            }
        })

}
</script>
@endsection

