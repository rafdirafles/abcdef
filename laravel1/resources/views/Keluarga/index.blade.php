@extends("layouts.admin.app")
@section('body')
@if ($succes = Session::get('success'))
<div class="alert alert-success" role="alert">
    <div class="alert-text">{{$succes}}</div>
    <button type="button" class="close" data-dismiss="alert">×</button>
</div>
@endif
		<div class="kt-portlet__body">
            <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <form class="kt-form " action="{{route('keluarga.store')}}" method="post">
                @csrf
                <div class="form-group row">
                    <label>pilih Pegawai</label>
                    <select class="form-control kt-select2" id="kt_select2_1" name="nip_nrp">
                        <option value="">select pegawai</option>
                        @foreach ($datas as $data)
                        <option value="{{$data->nip_nrp}}">{{$data->nama_pegawai}}  {{$data->nip_nrp}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group row">
                    <label>Nama Aggota</label>
                    <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Aggota" required>
                    @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label class="">Jenis Kelamin</label>
                    <select class="form-control @error('jk') is-invalid @enderror" value="{{ old('jk') }}" name="jk" id="sel1">
                        <option></option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    @error('jk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group row">
                        <label class="">Hubungan keluarga</label>
                        <select class="form-control @error('hubungan_keluarga') is-invalid @enderror" value="{{ old('hubungan_keluarga') }}" name="hubungan_keluarga" id="sel1">
                            <option></option>
                            <option value="Ayah">Ayah</option>
                            <option value="Ibu">Ibu</option>
                            <option value="Saudara kandung">Saudara Kandung</option>
                            <option value="Saudara tiri">Saudara Tiri</option>
                            <option value="Anak kandung">Anak Kandung</option>
                            <option value="Anak tiri">Anak Tiri</option>
                        </select>
                        @error('hubungan_keluarga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                </div>
                <div class="form-group row">
                    <div class="col-lg-5 col-md-9 col-sm-12">
                            <label class="">Tempat tanggal Lahir</label>
                            <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="Masukkan Kota lahir" required>
                            @error('tempat_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                    </div>

                    <div class="col-lg-5 col-md-9 col-sm-12">
                        <label class="">Tanggal Lahir</label>
                        <div class="input-group date" >
                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Select date"/>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                <i class="la la-calendar glyphicon-th"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="">Status Hidup</label>
                    <select class="form-control @error('status_hidup') is-invalid @enderror" value="{{ old('status_hidup') }}" name="status_hidup" id="sel1">
                        <option></option>
                        <option value="Hidup">Hidup</option>
                        <option value="Meninggal">Meninggal</option>
                    </select>
                    @error('status_hidup')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label>Pekerjaan</label>
                    <input type="text" name="pekerjaan" value="{{ old('pekerjaan') }}" class="form-control @error('pekerjaan') is-invalid @enderror" placeholder="exp petani,wiraswasta,pns" required>
                    @error('pekerjaan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group row">
                        <label>Keterangan</label>
                        <input type="text" name="keterangan" value="{{ old('keterangan') }}" class="form-control @error('keterangan') is-invalid @enderror" placeholder="keterangan" required>
                        @error('keterangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                </div>
                <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            {{-- <button type="submit" class="btn btn-secondary">Cancel</button> --}}

                        </div>
                </div>
            </form>
            </div>

            <div class="col-md-3"></div>
            </div>
        </div>




@endsection
@section('asset-buttom')
<script src="{{asset('template/assets/js/pages/crud/forms/widgets/select2.js')}}" type="text/javascript"></script>
{{-- <script src="{{asset('template/assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js')}}" type="text/javascript"></script> --}}
@endsection
