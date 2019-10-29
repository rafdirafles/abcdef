@extends('layouts.admin.app')
@section('asset-top')
<style>

    table{
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }
    th, td {
      text-align: left;
      padding: 8px;
    }
    tr:nth-child(even){background-color: #f2f2f2}
    .help-block {
        color: red;
    }

}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
@endsection
@section('body')
<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                                   PEGAWAI
            </h3>

            <span class="kt-subheader__separator kt-subheader__separator--v"></span>

            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                                           Edit Data                                    </span>

                            </div>
                </div>

    </div>
</div>
<!-- end:: Content Head -->
<!-- begin:: Content -->
	<div class="kt-container  kt-grid__item kt-grid__item--fluid">
		<div class="kt-portlet kt-portlet--tabs">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-toolbar">
            <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1" role="tab">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"/>
        <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg>                        Detail
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_2" role="tab">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg>                        Data Keluarga
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_5" role="tab">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg>                        Riwayat Pekerjaan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_3" role="tab">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"/>
        <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"/>
        <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg>                        Riwayat Pendidikan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_4" role="tab">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3"/>
        <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000"/>
    </g>
</svg>                        Riwayat Kecakapan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_6" role="tab">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3"/>
        <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000"/>
    </g>
</svg>                        Riwayat Mutasi
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="kt-portlet__body pegawai ">

            <div class="tab-content">
                <div class="tab-pane active" id="kt_user_edit_tab_1" role="tabpanel">
                    <div class="kt-form kt-form--label-right">
                        <div class="kt-form__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                        <div class="kt-portlet__head">
                                                <div class="kt-portlet__head-label">
                                                    <h3 class="kt-portlet__head-title">
                                                        Edit Data Pegawai
                                                    </h3>
                                                </div>
                                        </div>
                                    <div class="kt-portlet__body ">
                                        <form enctype="multipart/form-data" id="contactform" method="post" action="javascript:void(0)">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label>NIP / NRP</label>
                                            <input type="text" name="nip_nrp" class="form-control" value="{{$datas->nip_nrp}}" readonly>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="">Nama Pegawai</label>
                                                <input type="text" name="nama_pegawai" class="form-control " placeholder="Masukkan Nama Lengkap">

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
                                            <select class="form-control" id="p_pangkat" name="pangkat">
                                                <option value="">pilih</option>
                                                @foreach ($pangkats as $pangs)
                                                    <option value="{{$pangs->id }}">{{$pangs->nama_pangkat}}</option>
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
                                                <select class="form-control" name="jabatan" id="p_jabatan" required>
                                                    <option value="">pilih</option>
                                                    @foreach ($jabatan as $jabat)
                                                        <option value="{{$jabat->id }}">{{$jabat->nama_jabatan}}</option>
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
                                                    <select class="form-control validate[required]" name="id_satker" id="satker" required>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                        <label class="">Divisi</label>
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
                                        <div class="form-group row">
                                                <label class="">Alamat</label>
                                                <textarea name="alamat" id="p_alamat" class="form-control " placeholder="Masukkan Alamat " required></textarea>

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
                                            <input type="hidden" name="level" value="{{$datas->level}}">
                                            <input type="hidden" name="is_status" value="{{$datas->is_status}}">

                                        </div>
                                        <label><b>Foto</b></label>
                                        <div class="kt-widget kt-widget--user-profile-1">
                                            <div class="kt-widget__head">
                                                    <img id="foto" src="assets/media/users/100_1.jpg" width="200px" height="200px" alt="image">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <input type="file" name="foto" class="form-control col-lg-4">
                                        </div>
                                        <div class="kt-portlet__foot">
                                            <div class="kt-form__actions">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <button type="submit" class="btn btn-primary kirim ">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="kt_user_edit_tab_2" role="tabpanel">
                    <div class="kt-form kt-form--label-right">
                        <div class="kt-form__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <!-- row tabel KELUARGA  -->
                    <div class="row">
                            <div class="col-lg-12">
                                <h5>Data Keluarga</h5>
                                <div style="overflow-x:auto;">
                                <table class="table table-striped- table-bordered table-hover table-checkable" id="tabelku">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Hubungan Keluarga</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Status Hidup</th>
                                        <th>Pekerjaan</th>
                                        <th>Keterangan</th>
                                        <th width="7%">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody class="show_keluarga">
                                    </tbody>
                                    <tr>
                                        <td colspan="10" class="text-right add-keluarga"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-keluarga"><i class="la la-plus">Tambah</a></td>
                                    </tr>
                                </table>
                                </div>
                                <!--end: datatable -->
                            </div>
                        </div>
                        <!-- akhir row tabel  -->
                                </div>
                            </div>

                            <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="kt_user_edit_tab_3" role="tabpanel">
                    <div class="kt-form kt-form--label-right">
                        <div class="kt-form__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    @if ($datas->jenis_pegawai=="Polri")
                                    <!-- row tabel PENDIDIKAN POLRI -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Pendidikan Polri</h5>
                                            <div style="overflow-x:auto;">
                                                <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                                    <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Pendidikan</th>
                                                        <th>Tahun</th>
                                                        <th>Lulus / Tidak</th>
                                                        <th>Lama (Bulan)</th>
                                                        <th>Ranking</th>
                                                        <th>File</th>
                                                        <th width="7%">Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="show_pendidikan_polri">
                                                    </tbody>
                                                    <tr>
                                                        <td colspan="9" class="text-right add-p-polri"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-pendidikan-polri"><i class="la la-plus">Tambah</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--end: datatable -->
                                        </div>
                                    </div>
                                    <!-- akhir row tabel  -->
                                    @endif
                                    <br><br>
                                    <!-- row tabel PENDIDIKN UMUM -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Pendidikan Umum</h5>
                                            <div style="overflow-x:auto;">
                                                <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                                    <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Jenjang Pendidikan</th>
                                                        <th>Nama Sekolah</th>
                                                        <th>Jurusan</th>
                                                        <th>Kota</th>
                                                        <th>Tahun Lulus</th>
                                                        <th>No. Ijazah</th>
                                                        <th>File</th>
                                                        <th width="7%">Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="show_pendidikan_umum">
                                                    </tbody>
                                                    <tr>
                                                        <td colspan="9" class="text-right add-p-umum"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-pendidikan-umum"><i class="la la-plus">Tambah</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--end: datatable -->
                                        </div>
                                    </div>
                                    <!-- akhir row tabel  -->
                                    <br><br>
                                    <!-- row tabel PENDIDIKAN KEJURUAN -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Pendidikan Kejuruan</h5>
                                            <div style="overflow-x:auto;">
                                                <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                                    <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Pendidikan Kejuruan</th>
                                                        <th>Kota</th>
                                                        <th>Tahun Lulus</th>
                                                        <th>Lama (Bulan)</th>
                                                        <th>Ranking</th>
                                                        <th>Lulus / Tidak</th>
                                                        <td>Keterangan</td>
                                                        <th>File</th>
                                                        <th width="7%">Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="show_pendidikan_kejuruan">
                                                    </tbody>
                                                    <tr>
                                                        <td colspan="10" class="text-right add-p-kejuruan"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-pendidikan-kejuruan"><i class="la la-plus">Tambah</a></td>
                                                    </tr>

                                                </table>
                                            </div>
                                            <!--end: datatable -->
                                        </div>
                                    </div>
                                    <!-- akhir row tabel  -->
                                    <br><br>
                                    <!-- row tabel PENDIDIKAN NON FORMAL -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Pendidikan Non Formal</h5>
                                            <div style="overflow-x:auto;">
                                                <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                                    <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Pendidikan</th>
                                                        <th>Lama Pendidikan (Bulan)</th>
                                                        <th>Tahun Pendidikan</th>
                                                        <th>Tempat Pendidikan</th>
                                                        <th>Keterangan</th>
                                                        <th>File</th>
                                                        <th width="7%">Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="show_pendidikan_non_formal">
                                                    </tbody>
                                                    <tr>
                                                        <td colspan="9" class="text-right add-p-non-formal"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-pendidikan-non-formal"><i class="la la-plus">Tambah</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--end: datatable -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="tab-pane" id="kt_user_edit_tab_4" role="tabpanel">
                    <div class="kt-form kt-form--label-right">
                        <div class="kt-form__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <!-- row tabel  BAHASA-->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Kecakapan Bahasa</h5>
                                            <div style="overflow-x:auto;">
                                                <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                                    <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Jenis Bahasa</th>
                                                        <th>Bahasa</th>
                                                        <th>Kemampuan Bahasa</th>
                                                        <th width="7%">Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="show_kecakapan_bahasa">
                                                    </tbody>
                                                    <tr>
                                                        <td colspan="10" class="text-right k-bahasa"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-kecakapan-bahasa"><i class="la la-plus">Tambah</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--end: datatable -->
                                        </div>
                                    </div>
                                    <!-- akhir row tabel  -->
                                    <br><br>
                                    <!-- row tabel OLAHRAGA  -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Kecakapan Olah Raga dan Bela Diri</h5>
                                            <div style="overflow-x:auto;">
                                                <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                                    <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Olahraga</th>
                                                        <th>Keterangan</th>
                                                        <th width="7%">Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="show_kecakapan_olahraga">
                                                    </tbody>
                                                    <tr>
                                                        <td colspan="9" class="text-right k-olahraga"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-kecakapan-olahraga"><i class="la la-plus">Tambah</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--end: datatable -->
                                        </div>
                                    </div>
                                    <!-- akhir row tabel  -->
                                    <br><br>
                                    @if ($datas->jenis_pegawai=="Polri")
                                      <!-- row tabel  BREVET-->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h5>Kecakapan Brevet</h5>
                                                <div style="overflow-x:auto;">
                                                    <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                                        <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Brevet</th>
                                                            <th>Asal Perolehan</th>
                                                            <th width="7%">Aksi</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="show_kecakapan_brevet">
                                                        </tbody>
                                                        <tr>
                                                            <td colspan="9" class="text-right k-brevet"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-kecakapan-brevet"><i class="la la-plus">Tambah</a></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!--end: datatable -->
                                            </div>
                                        </div>
                                    <!-- akhir row tabel  -->
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="kt_user_edit_tab_5" role="tabpanel">
                    <div class="kt-form kt-form--label-right">
                        <div class="kt-form__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                    <br><br>
                    <!-- row tabel PANGKAT -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>Riwayat Kepangkatan </h5>
                            <div style="overflow-x:auto;">
                                <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pangkat</th>
                                        <th>TMT</th>
                                        <th>Pejabat</th>
                                        <th>Nomor</th>
                                        <th>Tanggal</th>
                                        <th>Dasar Peraturan</th>
                                        <th width="7%">Aksi</th>
                                    </tr>
                                    </thead>

                                    <tbody class="show_r_kepangkatan">
                                    </tbody>
                                    <tr>
                                        <td colspan="9" class="text-right add-kepangkatan"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-r-kepangkatan"><i class="la la-plus">Tambah</a></td>
                                    </tr>
                                </table>
                            </div>
                            <!--end: datatable -->
                        </div>
                    </div>
                    <!-- akhir row tabel  -->
                    <br><br>
                    <!-- row tabel GAJI -->

                    <div class="row">
                        <div class="col-lg-12">
                            <h5>Riwayat Kenaikan Gaji Berkala</h5>
                            <div style="overflow-x:auto;">
                                <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                    <thead>
                                        <th>No</th>
                                        <th>Gaji</th>
                                        <th>Tanggal Mulai Terhitung</th>
                                        <th>Nomor SK</th>
                                        <th>Pejabat</th>
                                        <th>Tanggal SK</th>
                                        <th>Dasar Peraturan</th>
                                        <th width="7%">Aksi</th>
                                    </thead>
                                    <tbody class="show_r_gaji">
                                    </tbody>
                                    <tr>
                                        <td colspan="9" class="text-right add-gaji"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-r-gaji"><i class="la la-plus">Tambah</a></td>
                                    </tr>
                                </table>
                            </div>
                            <!--end: Datatable -->
                        </div>
                    </div>
                    <!-- akhir row tabel  -->
                    <br><br>
                    <!-- row tabel JABATAAN -->

                    <div class="row">
                        <div class="col-lg-12">
                            <h5>Riwayat Jabatan</h5>
                            <div style="overflow-x:auto;">
                                <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                    <thead>
                                        <th>No</th>
                                        <th>Nama Jabatan</th>
                                        <th>Nomor SK</th>
                                        <th>Pejabat</th>
                                        <th>Tanggal SK</th>
                                        <th>Tanggal Mulai Terhitung</th>
                                        <th>Keterangan</th>
                                        <th width="7%">Aksi</th>
                                    </thead>
                                        <tbody class="show_r_jabatan">
                                        </tbody>
                                        <tr>
                                            <td colspan="9" class="text-right add-jabatans"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-r-jabatan"><i class="la la-plus">Tambah</a></td>
                                        </tr>
                                </table>
                            </div>
                            <!--end: Datatable -->
                        </div>
                    </div>
                    <!-- akhir row tabel  -->
                    <br><br>
                    <!-- row tabel jASA -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>Tanda Jasa / Prestasi</h5>
                            <div style="overflow-x:auto;">
                                <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Prestasi</th>
                                        <th>Tahun</th>
                                        <th>Keterangan</th>
                                        <th width="7%">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody class="show_tanda_jasa">
                                    </tbody>
                                    <tr>
                                        <td colspan="9" class="text-right add-tanda-jasa"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-tanda-jasa"><i class="la la-plus">Tambah</a></td>
                                    </tr>
                                </table>
                            </div>
                            <!--end: Datatable -->
                        </div>
                    </div>
                    <!-- akhir row tabel  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>{{-- endi tab 5 --}}
                <div class="tab-pane" id="kt_user_edit_tab_6" role="tabpanel">
                    <div class="kt-form kt-form--label-right">
                        <div class="kt-form__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <!-- row tabel MUTASI -->
                                    <div class="row">
                                            <div class="col-lg-12">
                                                <h5>Mutasi Keluar</h5>
                                                <div style="overflow-x:auto;">
                                                    <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                                        <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Tempat Tujuan</th>
                                                            <th>No SK</th>
                                                            <th>Pejabat</th>
                                                            <th>Tanggal SK</th>
                                                            <th>TMT</th>
                                                            <th>Keterangan</th>
                                                            <th width="7%">Aksi</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="show_mutasi_keluar">
                                                        </tbody>
                                                        <tr>
                                                            <td colspan="9" class="text-right mutasi-keluar"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-mutasi-keluar"><i class="la la-plus">Tambah</a></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!--end: datatable -->
                                            </div>
                                    </div>
                                    <!-- akhir row tabel  -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5>Mutasi Internal</h5>
                                            <div style="overflow-x:auto;">
                                                <table class="table table-striped- table-bordered table-hover table-checkable" id="datatable">
                                                    <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Unit Kerja</th>
                                                        <th>Divisi </th>
                                                        <th>Nomor Sk</th>
                                                        <th>Pejabat</th>
                                                        <th>Tanggal SK</th>
                                                        <th>TMT</th>
                                                        <th>Keterangan</th>
                                                        <th width="7%">Aksi</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="show_mutasi_internal">
                                                    </tbody>
                                                    <tr>
                                                        <td colspan="9" class="text-right"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-add-mutasi-internal"><i class="la la-plus">Tambah</a></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--end: datatable -->
                                        </div>
                                </div>  {{-- akhir row --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>{{-- endi tab 5 --}}
            </div>
        </form>
    </div>
</div>
</div>

<!----------------------------------------------modal riwayat gaji---------------------------------------------------------------->
<!-- MODAL ADD -->
<div class="modal fade" id="modal-add-r-gaji" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Tambah Riwayat Gaji</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- form -->
            <form class="form-horizontal" >
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <form  method="post">
                        <input type="hidden" name="nip_nrp_r_jabatan" value="{{$datas->nip_nrp}}" >
                        <div class="form-group">
                            <label class="control-label" for="title">Gaji *</label>
                            <input type="number" name="gaji" class="form-control" data-error="Please enter gaji." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal Mulai Terhitung *</label>
                            <input type="date" name="tmt" class="form-control" data-error="Please enter tmt." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Nomor SK *</label>
                            <input type="text" name="nomor_sk" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Pejabat *</label>
                            <input type="text" name="pejabat" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal SK *</label>
                            <input type="date" name="tanggal_sk" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="title">Dasar peraturan *</label>
                            <input type="text" name="dasar_peraturan" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="btn_simpan_r_jabatan">Simpan</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-r-gaji" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Edit Riwayat Gaji Berkala</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form  method="post">
                        <input type="hidden" name="nip_nrp" value="" >
                        <input type="hidden" name="id_r_gaji" value="">
                        <div class="form-group">
                            <label class="control-label" for="title">Gaji *</label>
                            <input type="number" name="gaji" class="form-control" data-error="Please enter gaji." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal Mulai Terhitung *</label>
                            <input type="date" name="tmt" class="form-control" data-error="Please enter tmt." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Nomor SK *</label>
                            <input type="text" name="nomor_sk" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Pejabat *</label>
                            <input type="text" name="pejabat" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal SK *</label>
                            <input type="date" name="tanggal_sk" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="title">Dasar peraturan</label>
                            <input type="text" name="dasar_peraturan" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                         <div class="modal-footer">
                            <button class="btn btn-primary btn-edit-r-gaji">Simpan</button>
                        </div>
                    </form>
            </div>
            <!-- body modal -->
        </div>
    </div>
</div>
<!--end MODAL-->
<!------modal Hapus ---->
<div class="modal fade" id="hapus-r-gaji">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <form method="post">
            {{csrf_field()}}
            <input type="hidden" name="id_hapus">
            <div class="modal-body">
                <strong>Apakah Anda Yakin Menghapus Data ?</strong>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-hapus-r-gaji">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-------end hapus------>
<!---------------------------------------------akhir modal riwayat gaji ----------------------------------------------------------->

<!---------------------------------------------awal modal riwayat jabatan---------------------------------------------------------->
<!--add MODAL -->
<div class="modal fade " id="modal-add-r-jabatan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Tambah Jabatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- form -->
            <form class="form-horizontal" >
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                        <input type="hidden" name="nip_nrp_r_jabatan" value="{{$datas->nip_nrp}}" >
                        <div class="form-group">
                            <label class="control-label" for="title">Nama Jabatan *</label><br>
                            <select name="id_jabatan" id="id_jabatan" class="form-control"  required>
                                <option value="">Pilih Jabatan</option>
                                @foreach ($jabatan as $jabat)
                                        <option value="{{$jabat->id}}">{{$jabat->nama_jabatan}}</option>
                                @endforeach
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Nomor SK *</label>
                            <input type="text" name="nomor_sk" class="form-control"  required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Pejabat *</label>
                            <input type="text" name="pejabat" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal SK *</label>
                            <input type="date" name="tgl_sk" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal Mulai Terhitung *</label>
                            <input type="date" name="tgl_mulai_terhitung" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Keterangan </label>
                            <input type="text" name="keterangan" class="form-control"  />
                            {{-- <div class="help-block with-errors"></div> --}}
                        </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="btn_simpan_jabatan">Simpan</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-r-jabatan" tabindex="-1" role="dialog" aria-labelledby="jdl-edit-jabatan" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdl-edit-jabatan">Edit Riwayat Jabatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form  method="post">
                        <input type="hidden" name="nip_nrp_r_jabatan" value="" >
                        <input type="hidden" name="id_r_jabatan" value="">
                        <div class="form-group">
                            <label class="control-label" for="title">Nama Jabatan *</label><br>
                            <select name="id_jabatan" id="id_jabatans" class="form-control" required>
                            <option value="">Pilih Jabatan</option>
                                @foreach ($jabatan as $jabat)
                                    <option value="{{$jabat->id}}">{{$jabat->nama_jabatan}}</option>
                                @endforeach
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Nomor SK *</label>
                            <input type="text" name="nomor_sk" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Pejabat *</label>
                            <input type="text" name="pejabat" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal SK *</label>
                            <input type="text" name="tgl_sk" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal Mulai Terhitung *</label>
                            <input type="date" name="tgl_mulai_terhitung" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Keterangan </label>
                            <input type="text" name="keterangan" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary btn-edit-r-jabatan">Edit</button>
                        </div>
                    </form>
            </div>
                <!-- body modal -->
        </div>
    </div>
</div>
<!--end edit MODAL-->
<!------modal Hapus ---->
<div class="modal fade" id="hapus-r-jabatan">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <form method="post">
            {{csrf_field()}}
            <input type="hidden" name="id_hapus">
            <div class="modal-body">
                <strong>Apakah Anda Yakin Menghapus Data ?</strong>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" id="btn-hapus-r-jabatan">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-------end hapus------>
<!---------------------------------------------akhir modal riwayat jabatan------------------------------------------------------------>

<!--------------------------------------------------awal modal tanda jasa------------------------------------------------------------>
<!--add MODAL -->
<div class="modal fade " id="modal-add-tanda-jasa" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Tambah Tanda Jasa / Prestasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                </button>
            </div>
            <!-- form -->
        <form class="form-horizontal"  method="post" action="{{route('tanda_jasa.store')}}">
            @csrf
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <input type="hidden" name="nip_nrp" value="{{$datas->nip_nrp}}" >
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Nama Prestasi *</label>
                        <input type="text" class="form-control" name="nama_prestasi"required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Tahun *</label>
                        <input class="form-control" type="number" name="tahun" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Keterangan </label>
                        <input class="form-control" name="keterangan" type="text" >
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary simpan" id="btn_simpan_tanda_jasa">Simpan</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-tanda-jasa" tabindex="-1" role="dialog" aria-labelledby="jdl-edit-jabatan" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdl-edit-jabatan">Edit Tanda Jasa / Prestasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form  method="post">
                        <input type="hidden" name="nip_nrp" value="" >
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Nama Prestasi *</label>
                            <input type="text" class="form-control" name="nama_prestasi" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Tahun *</label>
                            <input class="form-control" type="number" name="tahun" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Keterangan</label>
                            <input class="form-control" name="keterangan" type="text">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary btn-edit-tanda-jasa">Edit</button>
                        </div>
                    </form>
            </div>
                <!-- body modal -->
        </div>
    </div>
</div>
<!--end edit MODAL-->
<!------modal Hapus ---->
<div class="modal fade" id="hapus-tanda-jasa">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <form method="post">
            {{csrf_field()}}
            <input type="hidden" name="id_hapus">
            <div class="modal-body">
                <strong>Apakah Anda Yakin Menghapus Data ?</strong>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary" id="btn-hapus-tanda-jasa">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-------end hapus------>
<!--------------------------------------------------akhir modal tanda jasa------------------------------------------------------------>

<!----------------------------------------------awal modal riwayat kepangkatan------------------------------------------------------------>
<!--add MODAL -->
<div class="modal fade " id="modal-add-r-kepangkatan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Tambah Kepangkatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- form -->
        <form class="form-horizontal" method="post" action="{{route('riwayat_kepangkatan.store')}}">
            @csrf
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <input type="hidden" name="nip_nrp" value="{{$datas->nip_nrp}}" >
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Nama pangkat *</label>
                        <br>
                        <select name="id_pangkat" id=""class="form-control">
                            <option value="">Pilih Pangkat</option>
                            @foreach ($pangkats as $pang)
                                <option value="{{$pang->id}}">{{$pang->nama_pangkat}}</option>
                            @endforeach
                        </select>
                        <!-- <select class="form-control" id="p_pangkat" >
                            <option value="">Pilih Pangkat</option>
                            @foreach ($pangkats as $pang)
                                <option value="{{$pang->id}}">{{$pang->nama_pangkat}}</option>
                            @endforeach
                        </select> -->
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">TMT *</label>
                        <input class="form-control" type="date" name="tmt" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Nomor SK *</label>
                        <input class="form-control"name="nomor_sk" type="text" >
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Pejabat *</label>
                        <input class="form-control"name="pejabat" type="text" >
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Tanggal SK *</label>
                        <input class="form-control"name="tanggal_sk" type="date" >
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Dasar Peraturan * </label>
                        <input class="form-control"name="dasar_peraturan" type="text" >
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary " id="btn-simpan-r-kepangkatan">Simpan</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-r-kepangkatan" tabindex="-1" role="dialog" aria-labelledby="jdl-edit-jabatan" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdl-edit-jabatan">Edit Riwayat Kepangkatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form  method="post">
                        <input type="hidden" name="nip_nrp" value="" >
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name="nip_nrp" value="{{$datas->nip_nrp}}" >


                            <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="">Pangkat</label>
                                        <select name="id_pangkat" id="id_pangkat_r_kepangkatan" class="form-control">
                                            <option value="">Pilih Pangkat</option>
                                            @foreach ($pangkats as $pang)
                                                <option value="{{$pang->id}}">{{$pang->nama_pangkat}}</option>
                                            @endforeach
                                        </select>
                                        @error('pangkat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="form-control-label">TMT *</label>
                            <input class="form-control" type="date" name="tmt" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Nomor SK *</label>
                            <input class="form-control"name="nomor_sk" type="text" >
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Pejabat *</label>
                            <input class="form-control" name="pejabat" type="text" >
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Tanggal SK *</label>
                            <input class="form-control"name="tanggal_sk" type="date" >
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Dasar Peraturan * </label>
                            <input class="form-control"name="dasar_peraturan" type="text" >
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary btn-edit-r-kepangkatan">Simpan</button>
                        </div>
                    </form>
            </div>
                <!-- body modal -->
        </div>
    </div>
</div>
<!--end edit MODAL-->
<!------modal Hapus ---->
<div class="modal fade" id="hapus-r-kepangkatan">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <form method="post">
            {{csrf_field()}}
            <input type="hidden" name="id_hapus">
            <div class="modal-body">
                <strong>Apakah Anda Yakin Menghapus Data ? </strong>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-hapus-r-kepangkatan">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-------end hapus------>
<!-------------------------------------------------akhir modal riwayat kepagkatan------------------------------------------------------------>

<!----------------------------------------------------awal modal keluarga------------------------------------------------------------>
<!--add MODAL -->
<div class="modal fade " id="modal-add-keluarga" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Tambah Data Keluarga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- form -->
        <form class="form-horizontal" method="post" action="{{route('keluarga.store')}}">
            @csrf
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <input type="hidden" name="nip_nrp" value="{{$datas->nip_nrp}}" >
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Nama *</label>
                        <input class="form-control" name="nama" type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Jenis Kelamin *</label>
                        <select class="form-control" required name="jk">
                            <option value="">pilih jenis kelamin</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Hubungan Keluarga *</label>
                        <select class="form-control" required name="hubungan_keluarga">
                            <option value="">Pilih Hubungan Keluarga</option>
                            <option value="Ayah">Ayah</option>
                            <option value="Ibu">Ibu</option>
                            <option value="Saudara kandung">Saudara Kandung</option>
                            <option value="Saudara tiri">Saudara Tiri</option>
                            <option value="Anak kandung">Anak Kandung</option>
                            <option value="Anak tiri">Anak Tiri</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Tempat Lahir *</label>
                        <input type="text" class="form-control" name="tempat_lahir" required >
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Tanggal Lahir * </label>
                        <input type="date" class="form-control" name="tanggal_lahir" required >
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Status Hidup *</label>
                        <select class="form-control" required name="status_hidup">
                            <option value="">pilih jenis status hidup</option>
                            <option value="Hidup">Hidup</option>
                            <option value="Meninggal">Meninggal</option>
                        </select>
                    </div>
                    <div class="form-group">
                            <label for="message-text" class="form-control-label">Pekerjaan * </label>
                            <input type="text" class="form-control" name="pekerjaan" required >
                    </div>
                    <div class="form-group">
                            <label for="message-text" class="form-control-label">Keterangan </label>
                            <input type="text" class="form-control" name="keterangan">
                    </div>
                </div> <!-- tutup body modal -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btn-simpan-keluarga">Simpan</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-keluarga" tabindex="-1" role="dialog" aria-labelledby="jdl-edit-jabatan" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdl-edit-jabatan">Edit Data Keluarga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form  method="post">
                        <input type="hidden" name="nip_nrp" value="" >
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name="nip_nrp" value="{{$datas->nip_nrp}}" >
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Nama *</label>
                            <input class="form-control" name="nama" type="text" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Jenis Kelamin *</label>
                            <select class="form-control" required name="jk" id="jk_keluarga">
                                <option value="">pilih jenis kelamin</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Hubungan Keluarga *</label>
                            <select class="form-control" required name="hubungan_keluarga">
                                <option value="">Pilih Hubungan Keluarga</option>
                                <option value="Ayah">Ayah</option>
                                <option value="Ibu">Ibu</option>
                                <option value="Saudara kandung">Saudara Kandung</option>
                                <option value="Saudara tiri">Saudara Tiri</option>
                                <option value="Anak kandung">Anak Kandung</option>
                                <option value="Anak tiri">Anak Tiri</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Tempat Lahir *</label>
                            <input type="text" class="form-control" name="tempat_lahir" required >
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Tanggal Lahir * </label>
                            <input type="date" class="form-control" name="tanggal_lahir" required >
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Status Hidup *</label>
                            <select class="form-control" required name="status_hidup" id="edit_status_hidup">
                                <option value="">pilih jenis status hidup</option>
                                <option value="Hidup">Hidup</option>
                                <option value="Meninggal">Meninggal</option>
                            </select>
                        </div>
                        <div class="form-group">
                                <label for="message-text" class="form-control-label">Pekerjaan * </label>
                                <input type="text" class="form-control" name="pekerjaan" required >
                        </div>
                        <div class="form-group">
                                <label for="message-text" class="form-control-label">Keterangan </label>
                                <input type="text" class="form-control" name="keterangan">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary btn-edit-keluarga">Simpan</button>
                        </div>
                    </form>
            </div><!-- tutup body modal -->

        </div>
    </div>
</div>
<!--end edit MODAL-->
<!------modal Hapus ---->
<div class="modal fade" id="hapus-keluarga">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <form method="post">
            {{csrf_field()}}
            <input type="hidden" name="id_hapus">
            <div class="modal-body">
                <strong>Apakah Anda Yakin Menghapus Data ?</strong>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-hapus-keluarga">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-------end hapus------>
<!------------------------------------------------------akhir keluarga------------------------------------------------------------>

<!-------------------------------------------------awal modal kecakapan bahasa------------------------------------------------------------>
<!--add MODAL -->
<div class="modal fade " id="modal-add-kecakapan-bahasa" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Tambah Kecakapan Bahasa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- form -->
        <form class="form-horizontal"  method="post" action="{{route('kecakapan_bahasa.store')}}">
            @csrf
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <input type="hidden" name="nip_nrp" value="{{$datas->nip_nrp}}" >
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Jenis Bahasa*</label>
                        <select class="form-control" required name="jenis_bahasa">
                            <option value="">pilih jenis bahasa</option>
                            <option value="Daerah">Daerah</option>
                            <option value="Asing">Asing</option>
                        </select>
                    </div>
                    <div class="form-group">
                            <label for="message-text" class="form-control-label">Nama Bahasa *</label>
                            <input type="text" class="form-control" name="nama_bahasa" required>
                    </div>
                    <div class="form-group">
                            <label for="message-text" class="form-control-label">Kemampuan Bahasa *</label>
                            <select class="form-control" required name="kemampuan_bahasa">
                                <option value="">pilih</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Pasif">Pasif</option>
                            </select>
                    </div>
                </div> <!-- tutup body modal-->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary " id="btn-simpan-kecakapan-bahasa">Simpan</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-kecakapan-bahasa" tabindex="-1" role="dialog" aria-labelledby="jdl-edit-jabatan" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdl-edit-jabatan">Edit Kecakapan Bahasa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form  method="post">
                        <input type="hidden" name="nip_nrp" value="" >
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Jenis Bahasa *</label>
                            <select class="form-control" required name="jenis_bahasa">
                                <option value="">pilih jenis bahasa</option>
                                <option value="Daerah">Daerah</option>
                                <option value="Asing">Asing</option>
                            </select>
                        </div>
                        <div class="form-group">
                                <label for="message-text" class="form-control-label">Nama Bahasa*</label>
                                <input type="text" class="form-control" name="nama_bahasa" required>
                        </div>
                        <div class="form-group">
                                <label for="message-text" class="form-control-label">Kemampuan Bahasa *</label>
                                <select class="form-control" required name="kemampuan_bahasa">
                                    <option value="">pilih</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Pasif">Pasif</option>
                                </select>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary btn-edit-kecakapan-bahasa">Simpan</button>
                        </div>
                    </form>
            </div><!-- body modal -->

        </div>
    </div>
</div>
<!--end edit MODAL-->
<!------modal Hapus ---->
<div class="modal fade" id="hapus-kecakapan-bahasa">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <form method="post">
            {{csrf_field()}}
            <input type="hidden" name="id_hapus">
            <div class="modal-body">
                <strong>Apakah Anda Yakin Menghapus Data ?</strong>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-hapus-kecakapan-bahasa">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-------end hapus------>
<!-------------------------------------------------akhir modal kecakapan bahasa---------------------------------------------------------->

<!--------------------------------------------------awal modal kecakapan olahraga------------------------------------------------------------>
<!--add MODAL -->
<div class="modal fade " id="modal-add-kecakapan-olahraga" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Tambah Data Olahraha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- form -->
        <form class="form-horizontal"  method="post" action="{{route('kecakapan_olahraga.store')}}">
            @csrf
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <input type="hidden" name="nip_nrp" value="{{$datas->nip_nrp}}" >
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Nama Olahraga *</label>
                        <input type="text" class="form-control" name="nama_olahraga" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Keterangan</label>
                        <input class="form-control" name="keterangan" type="text">
                    </div>
                </div> <!-- tutup body modal -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btn-simpan-kecakapan-olahraga">Simpan</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-kecakapan-olahraga" tabindex="-1" role="dialog" aria-labelledby="jdl-edit-jabatan" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdl-edit-jabatan">Edit Data Kecakapan Olahraga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form  method="post">
                        <input type="hidden" name="nip_nrp" value="" >
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Nama Olahraga *</label>
                            <input type="text" class="form-control" name="nama_olahraga" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Keterangan</label>
                            <input class="form-control" name="keterangan" type="text">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary btn-edit-kecakapan-olahraga">Simpan</button>
                        </div>
                    </form>
            </div><!-- tutup body modal -->

        </div>
    </div>
</div>
<!--end edit MODAL-->
<!------modal Hapus ---->
<div class="modal fade" id="hapus-kecakapan-olahraga">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <form method="post">
            {{csrf_field()}}
            <input type="hidden" name="id_hapus">
            <div class="modal-body">
                <strong>Apakah Anda Yakin Menghapus Data ?</strong>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-hapus-kecakapan-olahraga">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-------end hapus------>
<!--------------------------------------------------akhir modal kecakapan olahraga------------------------------------------------------------>

<!--------------------------------------------------awal modal kecakapan brevet------------------------------------------------------------>
<!--add MODAL -->
<div class="modal fade " id="modal-add-kecakapan-brevet" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Tambah Data Brevet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- form -->
        <form class="form-horizontal"  method="post" action="{{route('kecakapan_brevet.store')}}">
            @csrf
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <input type="hidden" name="nip_nrp" value="{{$datas->nip_nrp}}" >
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Nama Brevet *</label>
                        <input type="text" class="form-control" name="nama_brevet" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Asal Perolehan *</label>
                        <input class="form-control" name="asal_perolehan" type="text">
                    </div>
                </div> <!-- tutup body modal -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btn-simpan-kecakapan-brevet">Simpan</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-kecakapan-brevet" tabindex="-1" role="dialog" aria-labelledby="jdl-edit-jabatan" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdl-edit-jabatan">Edit Data Brevet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form  method="post">
                        <input type="hidden" name="nip_nrp" value="" >
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Nama Brevet *</label>
                            <input type="text" class="form-control" name="nama_brevet" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Asal Perolehan *</label>
                            <input class="form-control" name="asal_perolehan" type="text">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary btn-edit-kecakapan-brevet">Simpan</button>
                        </div>
                    </form>
            </div><!-- tutup body modal -->

        </div>
    </div>
</div>
<!--end edit MODAL-->
<!------modal Hapus ---->
<div class="modal fade" id="hapus-kecakapan-brevet">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <form method="post">
            {{csrf_field()}}
            <input type="hidden" name="id_hapus">
            <div class="modal-body">
                <strong>Apakah Anda Yakin Menghapus Data ?</strong>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-hapus-kecakapan-brevet">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-------end hapus------>
<!--------------------------------------------------akhir modal kecakapan brevet------------------------------------------------------------>

<!--------------------------------------------------awal modal pendidikan polri------------------------------------------------------------>
<!--add MODAL -->
<div class="modal fade " id="modal-add-pendidikan-polri" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Tambah Data Pendidikan Polri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- form -->
            <form class="form-horizontal"  method="post" enctype="multipart/form-data" action="{{route('pendidikan_polri.store')}}">
                @csrf
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <div class="modal-body">
                        <input type="hidden" name="nip_nrp" value="{{$datas->nip_nrp}}" >
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Nama Pendidikan *</label>
                            <input class="form-control" required name="nama_pendidikan" type="text">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Tahun Pendidikan *</label>
                        <input type="number" class="form-control" required name="tahun">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Lulus / Tidak * </label>
                        <select class="form-control kt-select2" required  name="lulus_tidak">
                                <option value="">-----pilih------</option>
                                <option value="Lulus">Lulus</option>
                                <option value="Tidak">Tidak</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Lama Bulan *</label>
                    <input type="number" name="lama_bulan" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Ranking *</label>
                        <input class="form-control"  name="rangking" type="number">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">file</label>
                        <input class="form-control" type="file" name="file">
                    </div>
                </div> <!-- tutup body modal -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btn-simpan-pendidikan-polri">Simpan</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-pendidikan-polri" tabindex="-1" role="dialog" aria-labelledby="jdl-edit-jabatan" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdl-edit-jabatan">Edit Data Pendidikan Polri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form  method="post">
                        <input type="hidden" name="nip_nrp" value="" >
                        <input type="hidden" name="id" value="">
                        <input type="hidden" name="file_lama" value="">

                            <input type="hidden" name="nip_nrp" value="{{$datas->nip_nrp}}" >
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Nama Pendidikan *</label>
                                <input class="form-control" required name="nama_pendidikan" type="text">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Tahun Pendidikan *</label>
                            <input type="number" class="form-control" required name="tahun">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Lulus / Tidak * </label>
                            <select class="form-control kt-select2" required  name="lulus_tidak">
                                    <option value="">-----pilih------</option>
                                    <option value="Lulus">Lulus</option>
                                    <option value="Tidak">Tidak</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Lama Bulan *</label>
                        <input type="number" name="lama_bulan" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Ranking *</label>
                            <input class="form-control"  name="rangking" type="number">
                        </div>
                        {{-- file --}}
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Prev File</label>
                            <a href="" class="file_prev"><p id="file_prev"></p></a>
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="form-control-label">file </label>
                            <input class="form-control" type="file" name="file">
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-primary btn-edit-pendidikan-polri">Simpan</button>
                        </div>
                    </form>
            </div><!-- tutup body modal -->

        </div>
    </div>
</div>
<!--end edit MODAL-->
<!------modal Hapus ---->
<div class="modal fade" id="hapus-pendidikan-polri">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <form method="post">
            {{csrf_field()}}
            <input type="hidden" name="id_hapus">
            <div class="modal-body">
                <strong>Apakah Anda Yakin Menghapus Data ?</strong>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-hapus-pendidikan-polri">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-------end hapus------>
<!--------------------------------------------------akhir modal pendidikan polri------------------------------------------------------------>

<!--------------------------------------------------awal modal pendidikan  umum------------------------------------------------------------>
<!--add MODAL -->
<div class="modal fade " id="modal-add-pendidikan-umum" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Tambah Data Pendidikan Umum</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- form -->
            <form class="form-horizontal"  method="post" enctype="multipart/form-data" action="{{route('pendidikan_umum.store')}}">
                @csrf
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Jenjang Pendidikan *</label>
                        <select name="jenjang_pendidikan" id="" class="form-control" required>
                            <option value="">Pilih jenjang pendidikan</option>
                            <option value="SD">SD</option>
                            <option value="SLTP">SLTP</option>
                            <option value="SLTA">SLTA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Nama Sekolah *</label>
                        <input class="form-control" name="nama_sekolah" type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Jurusan </label>
                        <input class="form-control" name="jurusan" type="text">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Kota *</label>
                        <input class="form-control" name="kota" type="text" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Tahun Lulus *</label>
                        <input type="number" class="form-control" name="tahun_lulus" required placeholder="exp:2019">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Nomer Ijazah * </label>
                        <input type="text" class="form-control" name="no_ijazah" required >
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">file </label>
                        <input class="form-control" type="file" name="file">
                    </div>
                </div> <!-- tutup body modal -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btn-simpan-pendidikan-umum">Simpan</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-pendidikan-umum" tabindex="-1" role="dialog" aria-labelledby="jdl-edit-jabatan" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdl-edit-jabatan">Edit Data Pendidikan Umum</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form  method="post">
                        <input type="hidden" name="nip_nrp" value="" >
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Jenjang Pendidikan *</label>
                            <select name="jenjang_pendidikan" id="" class="form-control" required>
                                <option value="">Pilih jenjang pendidikan</option>
                                <option value="SD">SD</option>
                                <option value="SLTP">SLTP</option>
                                <option value="SLTA">SLTA</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Nama Sekolah *</label>
                            <input class="form-control" name="nama_sekolah" type="text" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Jurusan </label>
                            <input class="form-control" name="jurusan" type="text">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Kota *</label>
                            <input class="form-control" name="kota" type="text" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Tahun Lulus *</label>
                            <input type="number" class="form-control" name="tahun_lulus" required placeholder="exp:2019">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Nomer Ijazah * </label>
                            <input type="text" class="form-control" name="no_ijazah" required >
                        </div>
                        {{-- file --}}
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Prev File</label>
                            <a href="" class="file_prev"><p id="file_prev"></p></a>
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="form-control-label">file </label>
                            <input class="form-control" type="file" name="file">
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-primary btn-edit-pendidikan-umum">Simpan</button>
                        </div>
                    </form>
            </div><!-- tutup body modal -->
        </div>
    </div>
</div>
<!--end edit MODAL-->
<!------modal Hapus ---->
<div class="modal fade" id="hapus-pendidikan-umum">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <form method="post">
            {{csrf_field()}}
            <input type="hidden" name="id_hapus">
            <div class="modal-body">
                <strong>Apakah Anda Yakin Menghapus Data ?</strong>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-hapus-pendidikan-umum">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-------end hapus------>
<!--------------------------------------------------akhir modal pendidikan polri------------------------------------------------------------>

<!--------------------------------------------------awal modal pendidikan kejuruan------------------------------------------------------------>
<!--add MODAL -->
<div class="modal fade " id="modal-add-pendidikan-kejuruan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="jdlbrevet">Tambah Data Pendidikan Kejuruan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <!-- form -->
                <form class="form-horizontal"  method="post" enctype="multipart/form-data" action="{{route('pendidikan_kejuruan.store')}}">
                    @csrf
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Nama Pendidikan *</label>
                            <input class="form-control" name="nama_pendidikan" type="text" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Kota *</label>
                            <input class="form-control" name="kota" type="text" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Tahun Lulus *</label>
                            <input class="form-control" name="tahun_lulus" type="number">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Lama Studi *</label>
                            <input class="form-control" name="lama_bulan" type="number" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Ranking *</label>
                            <input class="form-control" name="rangking" type="number">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Lulus/Tidak *</label>
                            <select  class="form-control" name="is_lulus_tidak"  required>
                                <option value="">select</option>
                                <option value="Lulus">Lulus</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Keterangan</label>
                            <input class="form-control" name="keterangan" type="text">
                        </div>
                        <div class="form-group">
                            <img src="" alt="img/file" width="40%"><br>
                            <label for="message-text" class="form-control-label">file </label>
                            <input class="form-control" type="file" name="file">
                        </div>
                    </div> <!-- tutup body modal -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="btn-simpan-pendidikan-kejuruan">Simpan</button>
                    </div>
                </form>
                <!-- form -->
            </div>
        </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-pendidikan-kejuruan" tabindex="-1" role="dialog" aria-labelledby="jdl-edit-jabatan" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdl-edit-jabatan">Edit Data Pendidikan Kejuruan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form  method="post">
                        <input type="hidden" name="nip_nrp" value="" >
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                                <label for="message-text" class="form-control-label">Nama Pendidikan *</label>
                                <input class="form-control" name="nama_pendidikan" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Kota *</label>
                                <input class="form-control" name="kota" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Tahun Lulus *</label>
                                <input class="form-control" name="tahun_lulus" type="number">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Lama Studi *</label>
                                <input class="form-control" name="lama_bulan" type="number" required>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Ranking *</label>
                                <input class="form-control" name="rangking" type="number">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Lulus/Tidak *</label>
                                <select  class="form-control" name="is_lulus_tidak" id="lulustidak" required>
                                    <option value="">select</option>
                                    <option value="Lulus">Lulus</option>
                                    <option value="Tidak">Tidak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Keterangan</label>
                                <input class="form-control" name="keterangan" type="text">
                            </div>

                        {{-- file --}}
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Prev File</label>
                            <a href="" class="file_prev"><p id="file_prev"></p></a>
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="form-control-label">file </label>
                            <input class="form-control" type="file" name="file">
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-primary btn-edit-pendidikan-kejuruan">Simpan</button>
                        </div>
                    </form>
            </div><!-- tutup body modal -->
        </div>
    </div>
</div>
<!--end edit MODAL-->
<!------modal Hapus ---->
<div class="modal fade" id="hapus-pendidikan-kejuruan">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <form method="post">
            {{csrf_field()}}
            <input type="hidden" name="id_hapus">
            <div class="modal-body">
                <strong>Apakah Anda Yakin Menghapus Data ?</strong>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-hapus-pendidikan-kejuruan">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-------end hapus------>
<!--------------------------------------------------akhir modal pendidikan kejuruan------------------------------------------------------------>

<!-------------------------------------------------awal modal pendidikan non formal------------------------------------------------------------>
<!--add MODAL -->
<div class="modal fade " id="modal-add-pendidikan-non-formal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="jdlbrevet">Tambah Data Pendidikan Non Formal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <!-- form -->
                <form class="form-horizontal"  method="post" enctype="multipart/form-data" action="{{route('pendidikan_non_formal.store')}}">
                    @csrf
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Nama Pendidikan *</label>
                            <input class="form-control" name="nama_pendidikan" type="text" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Lama Pendidikan *</label>
                            <input class="form-control" name="lama_pendidikan" type="number" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Tahun Pendidikan *</label>
                            <input class="form-control" name="tahun_pendidikan" type="number">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Tempat Pendidikan *</label>
                            <input class="form-control" name="tempat_pendidikan" type="text" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Keterangan </label>
                            <input class="form-control" name="keterangan" type="text">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">file </label>
                            <input class="form-control" type="file" name="file">
                        </div>
                    </div> <!-- tutup body modal -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="btn-simpan-pendidikan-non-formal">Simpan</button>
                    </div>
                </form>
                <!-- form -->
            </div>
        </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-pendidikan-non-formal" tabindex="-1" role="dialog" aria-labelledby="jdl-edit-jabatan" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdl-edit-jabatan">Edit Data Pendidikan Non Formal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form  method="post">
                        <input type="hidden" name="nip_nrp" value="" >
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Nama Pendidikan *</label>
                            <input class="form-control" name="nama_pendidikan" type="text" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Lama Pendidikan *</label>
                            <input class="form-control" name="lama_pendidikan" type="number" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Tahun Pendidikan *</label>
                            <input class="form-control" name="tahun_pendidikan" type="number">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Tempat Pendidikan *</label>
                            <input class="form-control" name="tempat_pendidikan" type="text" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Keterangan </label>
                            <input class="form-control" name="keterangan" type="text">
                        </div>
                        {{-- file --}}
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Prev File</label>
                            <a href="" class="file_prev"><p id="file_prev"></p></a>
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="form-control-label">file </label>
                            <input class="form-control" type="file" name="file">
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-primary btn-edit-pendidikan-non-formal">Simpan</button>
                        </div>
                    </form>
            </div><!-- tutup body modal -->
        </div>
    </div>
</div>
<!--end edit MODAL-->
<!------modal Hapus ---->
<div class="modal fade" id="hapus-pendidikan-non-formal">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <form method="post">
            {{csrf_field()}}
            <input type="hidden" name="id_hapus">
            <div class="modal-body">
                <strong>Apakah Anda Yakin Menghapus Data ?</strong>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-hapus-pendidikan-non-formal">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-------end hapus------>
<!--------------------------------------------------akhir modal pendidikan non formal------------------------------------------------------------>

<!---------------------------------------------------modal mutasi keluar---------------------------------------------------------------->
<!-- MODAL ADD -->
<div class="modal fade" id="modal-add-mutasi-keluar" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Tambah Mutasi</h5>
            </div>
            <!-- form -->
            <form class="form-horizontal" >
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <form  method="post">
                        <input type="hidden" name="nip_nrp" value="{{$datas->nip_nrp}}" >
                        <div class="form-group">
                            <label class="control-label" for="title">Tempat Tujuan *</label>
                            <input type="text" name="tempat_tujuan" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Nomor SK *</label>
                            <input type="text" name="nomor_sk" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Pejabat *</label>
                            <input type="text" name="pejabat" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal SK *</label>
                            <input type="date" name="tanggal_sk" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal Mulai Terhitung *</label>
                            <input type="date" name="tmt" class="form-control" data-error="Please enter tmt." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Keterangan </label>
                            <input type="text" name="keterangan" class="form-control"  required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="btn_simpan_mutasi_keluar">Simpan</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-mutasi-keluar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Mutasi Keluar</h4>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form  method="post">
                        <input type="hidden" name="nip_nrp" value="" >
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <label class="control-label" for="title">Tempat Tujuan *</label>
                            <input type="text" name="tempat_tujuan" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Nomor SK *</label>
                            <input type="text" name="nomor_sk" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Pejabat *</label>
                            <input type="text" name="pejabat" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal SK *</label>
                            <input type="date" name="tanggal_sk" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal Mulai Terhitung *</label>
                            <input type="date" name="tmt" class="form-control" data-error="Please enter tmt." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Keterangan </label>
                            <input type="text" name="keterangan" class="form-control"  required />
                            <div class="help-block with-errors"></div>
                        </div>
                         <div class="modal-footer">
                            <button class="btn btn-primary btn-edit-mutasi-keluar">Simpan</button>
                        </div>
                    </form>
            </div>
            <!-- body modal -->
        </div>
    </div>
</div>
<!--end MODAL-->
<!------modal Hapus ---->
<div class="modal fade" id="hapus-mutasi-keluar">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <form method="post">
            {{csrf_field()}}
            <input type="hidden" name="id_hapus">
            <input type="hidden" name="nip_nrp">
            <div class="modal-body">
                <strong>Apakah Anda Yakin Menghapus Data ?</strong>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-hapus-mutasi-keluar">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-------end hapus------>
<!---------------------------------------------akhir modal mutasi keluar ----------------------------------------------------------->

<!---------------------------------------------------modal mutasi internal---------------------------------------------------------------->
<!-- MODAL ADD -->
<div class="modal fade" id="modal-add-mutasi-internal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Tambah Mutasi Internal</h5>
            </div>
            <!-- form -->
            <form class="form-horizontal" >
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <form  method="post">
                        <input type="hidden" name="nip_nrp" value="{{$datas->nip_nrp}}" >
                        <div class="form-group">
                            <label class="control-label" for="title">Tempat unit kerja *</label>
                            <select name="id_unit_kerja" id="add_id_unit_kerja"  class="form-control">
                                <option value="">pilih </option>
                                @foreach ($unit_kerja as $u)
                                    <option value="{{$u->id}}">{{$u->nama_unit_kerja}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Divisi *</label>
                            <select name="id_divisi" id="add_id_divisi"  class="form-control">
                               {{-- <option value="">pilih divisi</option> --}}
                               <option></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Nomor SK *</label>
                            <input type="text" name="nomor_sk" class="form-control"  required />

                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Pejabat *</label>
                            <input type="text" name="pejabat" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal SK *</label>
                            <input type="date" name="tanggal_sk" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal Mulai Terhitung *</label>
                            <input type="date" name="tmt" class="form-control" data-error="Please enter tmt." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Keterangan </label>
                            <input type="text" name="keterangan" class="form-control"  required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="btn_simpan_mutasi_internal">Simpan</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-mutasi-internal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Data </h4>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form  method="post">
                        <input type="hidden" name="nip_nrp" value="" >
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                                <label class="control-label" for="title">Tempat unit kerja *</label>
                                <select name="id_unit_kerja" id="id_unit_kerja"  class="form-control">
                                    <option value="">pilih </option>
                                    @foreach ($unit_kerja as $u)
                                        <option value="{{$u->id}}">{{$u->nama_unit_kerja}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Divisi *</label>
                            <select name="id_divisi" id="id_divisi"  class="form-control">
                                {{-- <option value="">pilih divisi</option> --}}
                                <option></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Nomor SK *</label>
                            <input type="text" name="nomor_sk" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Pejabat *</label>
                            <input type="text" name="pejabat" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal SK *</label>
                            <input type="date" name="tanggal_sk" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal Mulai Terhitung *</label>
                            <input type="date" name="tmt" class="form-control" data-error="Please enter tmt." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Keterangan </label>
                            <input type="text" name="keterangan" class="form-control"  required />
                            <div class="help-block with-errors"></div>
                        </div>
                         <div class="modal-footer">
                            <button class="btn btn-primary btn-edit-mutasi-internal">Simpan</button>
                        </div>
                    </form>
            </div>
            <!-- body modal -->
        </div>
    </div>
</div>
<!--end MODAL-->
<!------modal Hapus ---->
<div class="modal fade" id="hapus-mutasi-internal">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Hapus Data</h4>
            <button type="button" class="close" data-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <form method="post">
            {{csrf_field()}}
            <input type="hidden" name="id_hapus">
            <input type="hidden" name="nip_nrp">
            <div class="modal-body">
                <strong>Apakah Anda Yakin Menghapus Data ?</strong>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-primary" id="btn-hapus-mutasi-internal">Hapus</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-------end hapus------>
<!---------------------------------------------akhir modal mutasi internal ----------------------------------------------------------->
@endsection
{{-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ --}}
{{-- ################################################################################################################################### --}}
@section('asset-buttom')
<script>
 var nrp='<?php echo $datas->nip_nrp?>';
</script>
<!-----------------------------------------------------------------awal data pegawai--------------------------------------------->
<script>
        $(document).ready(function(){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

        })//end ready
</script>
<script>
 $(document).ready(function () {
    $("body").on("click","#kt_user_edit_tab_1",function(){
        var form=$("body");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
        })
    tampil_data_pegawai();  //pemanggilan fungsi
        //fungsi tampil
            $('#kompartemen').change(function(){
                var divisi=$(this).val();
                $.ajax({
                    type:'POST',
                    url:'{{route('kompartemen.satker')}}',
                    data:{id:divisi},
                    success:function(data){
                        $('#satker').html(data);
                        console.log(data);
                    }
                })
            })
            $('#satker').change(function(){
                var divisi=$(this).val();
                $.ajax({
                    type:'POST',
                    url:'{{route('satker.divisi')}}',
                    data:{id:divisi},
                    success:function(data){
                        $('#divisi').html(data);
                        console.log(data);
                    }
                })
            })
            function tampil_data_pegawai(){
                $.ajax({
                    type  : 'GET',
                    beforeSend: function(){
                        $('.ajax-loader').css("visibility", "visible");
                    },
                    url   : '/master/'+nrp+'/edit',
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        // console.log(data.unit_kerja.nama_unit_kerja);
                        $(".pegawai").find("input[name='nip_nrp']").val(data.nip_nrp);
                        $(".pegawai").find("input[name='alamat']").val(data.alamat);
                        $(".pegawai").find("input[name='nama_pegawai']").val(data.nama_pegawai);
                        $(".pegawai").find("input[name='email']").val(data.email);
                        $(".pegawai").find("input[name='no_kta_pegawai']").val(data.no_kta_pegawai);
                        // jenis p
                        if(data.jenis_pegawai =='Polri'){
                            $(".pegawai").find("select[name=jenis_pegawai]").val('Polri');
                        }
                        if(data.jenis_pegawai =='PNS'){
                            $(".pegawai").find("select[name=jenis_pegawai]").val('PNS');
                        }
                        if(data.jenis_pegawai =='Dosen Eksternal'){
                            $(".pegawai").find("select[name=jenis_pegawai]").val('Dosen Eksternal');
                        }
                        $(".pegawai").find("input[name='nidn']").val(data.nidn);

                        $("#p_alamat").val(data.alamat);
                        $(".pegawai").find("input[name='tempat_lahir']").val(data.tempat_lahir);
                        $(".pegawai").find("input[name='tanggal_lahir']").val(data.tanggal_lahir);
                        // jk
                        if(data.jk =='L'){
                            $(".pegawai").find("select[name=jk]").val('L');
                        }
                        if(data.jk =='P'){
                            $(".pegawai").find("select[name=jk]").val('P');
                        }
                        // agama
                        if(data.agama =='Islam'){
                            $(".pegawai").find("select[name=agama]").val('Islam');
                        }
                        if(data.agama =='Kristen'){
                            $(".pegawai").find("select[name=agama]").val('Kristen');
                        }
                        if(data.agama =='Katolik'){
                            $(".pegawai").find("select[name=agama]").val('Katolik');
                        }
                        if(data.agama =='Hindu'){
                            $(".pegawai").find("select[name=agama]").val('Hindu');
                        }
                        if(data.agama =='Budha'){
                            $(".pegawai").find("select[name=agama]").val('Budha');
                        }
                        if(data.agama =='Konghucu'){
                            $(".pegawai").find("select[name=agama]").val('Konghucu');
                        }
                        // pangkat

                        // var i;
                        // var ok=0;
                        // var z=document.getElementById("p_pangkat");
                        // for(i=0; i<z.options.length;i++){
                        //     if(z.options[i].value == data.pangkat){
                        //        ok= $("pegawai").find("select[name=pangkat]").val(data.pangkat);
                        //     }
                        //     else{
                        //         $(".pegawai").find("select[name=pangkat]").val();

                        //     }
                        // }
                        $("#p_pangkat").select2().val(data.pangkat).trigger('change.select2');
                        // jabatan
                        // var i;
                        // var z= document.getElementById("p_jabatan");
                        // for(i=0; i<z.options.length;i++){
                        //     if(z.options[i].value == data.jabatan){
                        //         $(".pegawai").find("select[name=jabatan]").val(data.jabatan);
                        //     }
                        //     else{
                        //         $(".pegawai").find("select[name=jabatan]").val();

                        //     }
                        // }
                        $("#p_jabatan").select2().val(data.jabatan).trigger('change.select2');
                        $(".pegawai").find("input[name='no_kep_jabatan']").val(data.no_kep_jabatan);
                        $(".pegawai").find("input[name='nik']").val(data.nik);
                        $(".pegawai").find("input[name='no_hp']").val(data.no_hp);
                        $(".pegawai").find("input[name='tgl_masuk']").val(data.tgl_masuk);
                        // foto
                        $("#foto").attr("src",'{{ URL::asset('img/')}}'+'/'+data.foto);
                        $(".pegawai").find("input[name='is_status']").val(data.is_status);
                        // unit kerja
                        var i;
                        var x= document.getElementById("kompartemen");
                        for(i=0; i<x.options.length;i++){
                            if(x.options[i].value == data.id_kompartemen){
                                $(".pegawai").find("select[name=id_kompartemen]").val(data.id_kompartemen);
                            }
                            else{
                                $(".pegawai").find("select[name=id_kompartemen]").val();

                            }
                        }
                        // divisi
                        $.ajax({
                                type:'POST',
                                url:'{{route('kompartemen.satker')}}',
                                data:{id:data.id_kompartemen,id_selected:data.id_satker},
                                success:function(data){
                                    $('#satker').html(data);

                                }
                            })
                        console.log(data.id_kompartemen);
                        $.ajax({
                            type:'POST',
                            url:'{{route('satker.divisi')}}',
                            data:{id:data.id_satker,id_selected:data.id_divisi},
                            success:function(data){
                                $('#divisi').html(data);
                                // console.log(data);
                            }
                        })

                    } //ss
                });
            } //tutup akhir tampil
    //  akhir tampil
    $("#contactform").validate({
        invalidHandler: function(form, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                validator.errorList[0].element.focus();
            }
        },
        rules: {
            nama_pegawai: { required: true,},
            jenis_pegawai: { required: true,},
            nama_pegawai: { required: true,},
            no_kta_pegawai: { required: true,},
            no_kep_jabatan: { required: true,},
            pangkat: { required: true,},
            jabatan: { required: true,},
            id_satker: { required: true,},
            id_kompartemen: { required: true,},
            id_divisi: { required: true,},
            level: { required: true,},
            tgl_masuk: { required: true,},
            tempat_lahir: { required: true,},
            tanggal_lahir: { required: true,},
            jk: { required: true,},
            nik: { required: true,},
            alamat: { required: true,},
            no_hp: { required: true,},
            email: { required: true,},
        },
        submitHandler: function (form) {
            var form=$("body");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
            $('.kirim').html('Sending..');
            var nip_nrp= $(".pegawai").find("input[name='nip_nrp']").val();
            var nama_pegawai =$(".pegawai").find("input[name='nama_pegawai']").val();
            var email =$(".pegawai").find("input[name='email']").val();
            var no_kta_pegawai= $(".pegawai").find("input[name='no_kta_pegawai']").val();
            var agama= $(".pegawai").find("select[name='agama']").val();
            // jenis p
            var jenis_pegawai =$(".pegawai").find("select[name=jenis_pegawai]").val();
            var nidn= $(".pegawai").find("input[name='nidn']").val();
            var alamat= $(".pegawai").find("textarea[name='alamat']").val();
            var tempat_lahir= $(".pegawai").find("input[name='tempat_lahir']").val();
            var tanggal_lahir= $(".pegawai").find("input[name='tanggal_lahir']").val();
            var is_status= $(".pegawai").find("input[name='is_status']").val();
            // jk
            var jk= $(".pegawai").find("select[name=jk]").val();
            var no_kep_jabatan =$(".pegawai").find("input[name='no_kep_jabatan']").val();
            var nik =$(".pegawai").find("input[name='nik']").val();
            // s menikah
            var nik= $(".pegawai").find("input[name='nik']").val();
            var no_hp =$(".pegawai").find("input[name='no_hp']").val();
            var tgl_masuk =$(".pegawai").find("input[name='tgl_masuk']").val();
            var password =$(".pegawai").find("input[name='password']").val();
            // foto
            var level= $(".pegawai").find("input[name=level]").val();
            var id_pangkat= $(".pegawai").find("select[name=pangkat]").val();
            var id_jabatan= $(".pegawai").find("select[name=jabatan]").val();
            var satker= $(".pegawai").find("select[name=id_satker]").val();
            var kompartemen= $(".pegawai").find("select[name=id_kompartemen]").val();
            var id_divisi= $(".pegawai").find("select[name=id_divisi]").val();
            var foto =$(".pegawai").find("input[name=foto]")[0].files[0];
            //
            var form = new FormData();
            form.append('nip_nrp', nip_nrp);
            form.append('nama_pegawai', nama_pegawai);
            form.append('email', email);
            form.append('no_kta_pegawai',no_kta_pegawai );
            form.append('jenis_pegawai', jenis_pegawai);
            form.append('nidn', nidn);
            form.append('tgl_masuk', tgl_masuk);
            form.append('agama', agama);
            form.append('alamat', alamat);
            form.append('tempat_lahir', tempat_lahir);
            form.append('tanggal_lahir', tanggal_lahir);
            form.append('jk', jk);
            form.append('no_kep_jabatan', no_kep_jabatan);
            form.append('nik', nik);
            form.append('no_hp', no_hp);
            form.append('pangkat', id_pangkat);
            form.append('jabatan', id_jabatan);
            form.append('id_satker', satker);
            form.append('id_kompartemen', kompartemen);
            form.append('id_divisi', id_divisi);
            form.append('level', level);
            form.append('is_status', is_status);
            form.append('foto', foto);
            form.append('_token', '{{csrf_token()}}' );
            event.preventDefault();
            $.ajax({
                dataType: 'json',
                type:'post',
                url: '{{route('master.update')}}',
                cache: false,
                contentType: false,
                processData: false,
                data:form,
                success: function(data){
                    console.log(data);
                    // toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
                },
                error: function(xhr){
                        var res=xhr.responseJSON;
                        if($.isEmptyObject(res)==false){
                            $.each(res.errors,function(key,value){
                                $("input[name="+key+"]")
                                    .closest('.form-group')
                                    .addClass('has-error')
                                    .append('<span class="help-block"><strong>'+value+'</strong></span>');
                            })
                        }
                },
            }).done(function(data){
                $('.kirim').html('Submit');
                tampil_data_pegawai();
                $(".modal").modal('hide');
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })
        }
    });
});
</script>
<!-----------------------------------------------------------------akhir data pegawai--------------------------------------------->

<!----------------------------------------------------------------------riwayat gaji------------------------------------------------->
<script>
    tampil_data_riwayat_gaji();   //pemanggilan fungsi gaji.
            //fungsi tampil barang
    function tampil_data_riwayat_gaji(){
        $.ajax({
            type  : 'GET',
            beforeSend: function(){
                $('.ajax-loader').css("visibility", "visible");
            },
            url   : '/riwayat_gaji/'+nrp,
            async : true,
            dataType : 'json',
            success : function(data){
                console.log(data);
                var i;
                var no=1;
                var rows ='';
                $.each( data, function( key, value ) {
                    rows = rows + '<tr>';
                    rows = rows + '<td>'+ no++ +'</td>';
                      rows = rows +'<td style="display:none" >'+value.nip_nrp+'</td>';
                    rows = rows + '<td >'+value.gaji+'</td>';
                    rows = rows + '<td>'+value.tmt+'</td>';
                    rows = rows + '<td>'+value.nomor_sk+'</td>';
                    rows = rows + '<td>'+value.pejabat+'</td>';
                    rows = rows + '<td>'+value.tanggal_sk+'</td>';
                    rows = rows + '<td>'+value.dasar_peraturan+'</td>';
                    rows = rows + '<td class="text-center" data-id="'+value.id+'">';
                    rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-r-gaji" class="badge badge-success edit-item-r-gaji"><span class="fas fa-fw fa-edit " ></a> ';
                    rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-r-gaji" class="badge badge-danger delete-r-gaji"><span class="fas fa-fw fa-trash"></button>';
                    rows = rows + '</td>';
                    rows = rows + '</tr>';
                });
                $('.show_r_gaji').html(rows);
            },
            error: function(xhr, ajaxOptions, thrownError){
                        alert("Mohon Data Masukkan Dengan Tepat");
                    },
            complete: function(){
                $('.ajax-loader').css("visibility", "hidden");
            }
        });
    } //tutup akhir tampil
    //Simpan
     $('#btn_simpan_r_jabatan').click(function(){
        var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
        var nip_nrp=$("input[name=nip_nrp_r_jabatan]").val();
        var gaji=$("input[name=gaji]").val();
        var tmt=$("input[name=tmt]").val();
        var nomor_sk=$("input[name=nomor_sk]").val();
        var pejabat=$("input[name=pejabat]").val();
        var tanggal_sk=$("input[name=tanggal_sk]").val();
        var dasar_peraturan=$("input[name=dasar_peraturan]").val();
        event.preventDefault();
            $.ajax({
                type : "POST",
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url  : '{{route('riwayat_gaji.store')}}',
                datatype:"json",
                data : {nip_nrp:nip_nrp,gaji:gaji,tmt:tmt,nomor_sk:nomor_sk,pejabat:pejabat,tanggal_sk:tanggal_sk,dasar_peraturan:dasar_peraturan,_token: '{{csrf_token()}}' },
                success: function(data){

                    $("input[name=gaji]").val("");
                    $("input[name=tmt]").val("");
                    $("input[name=nomor_sk]").val("");
                    $("input[name=pejabat]").val("");
                    $("input[name=tanggal_sk]").val("");
                    $("input[name=dasar_peraturan]").val("");
                   tampil_data_riwayat_gaji();
                    $('.modal').modal('hide');
                console.log(data);
                },
                error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            }).done(function(data){
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })

        });
        // edit
        /* Edit Post */
        $("body").on("click",".edit-item-r-gaji",function(){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
            var id = $(this).parent("td").data('id');
            var nip_nrp = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var gaji = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var tmt = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var nomor_sk =  $(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
            var pejabat = $(this).parent("td").prev("td").prev("td").prev("td").text();
            var tanggal_sk =  $(this).parent("td").prev("td").prev("td").text();
            var dasar_peraturan = $(this).parent("td").prev("td").text();
            //
            $("#edit-r-gaji").find("input[name='nip_nrp']").val(nip_nrp);
            $("#edit-r-gaji").find("input[name='gaji']").val(gaji);
            $("#edit-r-gaji").find("input[name='tmt']").val(tmt);
            $("#edit-r-gaji").find("input[name='nomor_sk']").val(nomor_sk);
            $("#edit-r-gaji").find("input[name='pejabat']").val(pejabat);
            $("#edit-r-gaji").find("input[name='tanggal_sk']").val(tanggal_sk);
            $("#edit-r-gaji").find("input[name='dasar_peraturan']").val(dasar_peraturan);
            $("#edit-r-gaji").find("input[name='id_r_gaji']").val(id);
        });
        /* Updated  Post baru (Updated new Post) */
        $(".btn-edit-r-gaji").click(function(e){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
            e.preventDefault();
            var id =   $("#edit-r-gaji").find("input[name='id_r_gaji']").val();
            var nip_nrp =   $("#edit-r-gaji").find("input[name='nip_nrp']").val();
            var gaji =   $("#edit-r-gaji").find("input[name='gaji']").val();
            var nomor_sk =   $("#edit-r-gaji").find("input[name='nomor_sk']").val();
            var pejabat =   $("#edit-r-gaji").find("input[name='pejabat']").val();
            var tanggal_sk =   $("#edit-r-gaji").find("input[name='tanggal_sk']").val();
            var dasar_peraturan = $("#edit-r-gaji").find("input[name='dasar_peraturan']").val();
            var tmt = $("#edit-r-gaji").find("input[name='tmt']").val();
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: '{{route('riwayat_gaji.update')}}',
                data:{id:id,nip_nrp:nip_nrp,gaji:gaji,nomor_sk:nomor_sk,pejabat:pejabat,tanggal_sk:tanggal_sk,dasar_peraturan:dasar_peraturan,tmt,_token: '{{csrf_token()}}'},
                 success: function(data){
                     console.log(data);
                 },
                 error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
            }).done(function(data){
                tampil_data_riwayat_gaji()
                $(".modal").modal('hide');
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })
            // console.log(unit_kerja);
        })
            // klik delete
            $("body").on("click",".delete-r-gaji",function(){
                var id = $(this).parent("td").data('id');
                $("#hapus-r-gaji").find("input[name='id_hapus']").val(id);
                console.log(id);
            });
            /* Remove Post (Hapus) */
            $("#btn-hapus-r-gaji").click(function(e){
            event.preventDefault();
            var id = $("#hapus-r-gaji").find("input[name='id_hapus']").val();
            var c_obj = $(this).parents("tr");
            $.ajax({
                dataType: 'json',
                type:'post',
                data:{id:id,_token: '{{csrf_token()}}'},
                url: '{{route('riwayat_gaji.delete')}}',

            }).done(function(data){
                c_obj.remove();
                toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                 tampil_data_riwayat_gaji();
                  $(".modal").modal('hide');
            });
            });
            $("body").on("click",".add-gaji",function(){
        var form=$("body");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
        })
</script>
<!-------------------------------------------------------------------akhir riwayat gaji----------------------------------------------->

<!--------------------------------------------------------------------riwayat jabatan------------------------------------------------->
<script>
    tampil_data_riwayat_jabatan();   //pemanggilan fungsi tampil barang.
    $("body").on("click",".add-jabatans",function(){
        var form=$("body");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
        })
    //fungsi tampil barang
    function tampil_data_riwayat_jabatan(){
        $.ajax({
            type  : 'GET',
            beforeSend: function(){
                $('.ajax-loader').css("visibility", "visible");
            },
            url   : '/riwayat_jabatan/'+nrp,
            async : true,
            dataType : 'json',
            success : function(data){
                console.log(data);
                var i;
                var no=1;
                var rows ='';
                $.each( data, function( key, value ) {
                    rows = rows + '<tr>';
                    rows = rows + '<td>'+ no++ +'</td>';
                    rows = rows + '<td style="display:none" >'+value.nip_nrp+'</td>';
                    rows = rows + '<td style="display:none" >'+value.id_jabatan+'</td>';
                    rows = rows + '<td>'+value.jabatan.nama_jabatan+'</td>';
                    rows = rows + '<td>'+value.nomor_sk+'</td>';
                    rows = rows + '<td>'+value.pejabat+'</td>';
                    rows = rows + '<td>'+value.tgl_sk+'</td>';
                    rows = rows + '<td>'+value.tgl_mulai_terhitung+'</td>';
                    rows = rows + '<td>'+value.keterangan+'</td>';
                    rows = rows + '<td  class="text-center" data-id="'+value.id+'">';
                    rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-r-jabatan" class="badge badge-success edit-item-r-jabatan"><span class="fas fa-fw fa-edit " ></a> ';
                    rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-r-jabatan" class="badge badge-danger delete-r-jabatan"><span class="fas fa-fw fa-trash"></button>';
                    rows = rows + '</td>';
                    rows = rows + '</tr>';
                });
                $('.show_r_jabatan').html(rows);
            },
            error: function(xhr, ajaxOptions, thrownError){
                        alert("Mohon Data Masukkan Dengan Tepat");
                    },
            complete: function(){
                $('.ajax-loader').css("visibility", "hidden");
            }
        });
    } //tutup akhir tampil
    //Simpan Barang
    $('#btn_simpan_jabatan').click(function(){
        var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
        var nomor_sk=$("#modal-add-r-jabatan").find("input[name='nomor_sk']").val();
        var pejabat= $("#modal-add-r-jabatan").find("input[name='pejabat']").val();
        var tgl_sk =$("#modal-add-r-jabatan").find("input[name='tgl_sk']").val();
        var tgl_mulai_terhitung =$("#modal-add-r-jabatan").find("input[name='tgl_mulai_terhitung']").val();
        var keterangan =$("#modal-add-r-jabatan").find("input[name='keterangan']").val();
        var nip_nrp_r_jabatan =$("#modal-add-r-jabatan").find("input[name='nip_nrp_r_jabatan']").val();
        var id_jabatan =$("#modal-add-r-jabatan").find("select[name=id_jabatan]").val();
        event.preventDefault();

            $.ajax({
                type : "POST",
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url  : '{{route('riwayat_jabatan.store')}}',
                datatype:"html",
                data :{
                    nip_nrp:nip_nrp_r_jabatan,
                    id_jabatan:id_jabatan,
                    nomor_sk:nomor_sk,
                    pejabat:pejabat,
                    tgl_sk:tgl_sk,
                    tgl_mulai_terhitung:tgl_mulai_terhitung,
                    keterangan:keterangan,
                    _token: '{{csrf_token()}}',
                },
                success: function(data){
                    $("#modal-add-r-jabatan").find("input[name='nomor_sk']").val("");
                    $("#modal-add-r-jabatan").find("input[name='pejabat']").val("");
                    $("#modal-add-r-jabatan").find("input[name='tgl_sk']").val("");
                    $("#modal-add-r-jabatan").find("input[name='tgl_mulai_terhitung']").val("");
                    $("#modal-add-r-jabatan").find("input[name='keterangan']").val("");

                    $("#modal-add-r-jabatan").find("select[name=id_jabatan]").val("");
                    tampil_data_riwayat_jabatan();
                    $('#modal-add-r-jabatan').modal('hide');
                },
                    error: function(xhr){
                                var res=xhr.responseJSON;
                                if($.isEmptyObject(res)==false){
                                    $.each(res.errors,function(key,value){
                                        $("input[name="+key+"]")
                                            .closest('.form-group')
                                            .addClass('has-error')
                                            .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                            $("select[name="+key+"]")
                                            .closest('.form-group')
                                            .addClass('has-error')
                                            .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                    })
                                }

                    },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            }).done(function(data){
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })
    });
    /* Edit Post */
    $("body").on("click",".edit-item-r-jabatan",function(){
        var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
        var id = $(this).parent("td").data('id');
        var nip_nrp =$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
        var id_jabatan = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
        var nomor_sk =$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
        var pejabat = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
        var tgl_sk = $(this).parent("td").prev("td").prev("td").prev("td").text();
        var tgl_mulai_terhitung =$(this).parent("td").prev("td").prev("td").text();
        var keterangan =$(this).parent("td").prev("td").text();
        // set value ke form
        // var i;
        // var x= document.getElementById("id_jabatan");
        //     for(i=0; i<x.options.length;i++){
        //         if(x.options[i].value == id_jabatan){
        //             $("#edit-r-jabatan").find("select[name=id_jabatan]").val(id_jabatan);
        //         }
        //         else{
        //             $("#edit-r-jabatan").find("select[name=id_jabatan]").val();
        //         }
        //     }
        $("#id_jabatans").select2().val(id_jabatan).trigger('change.select2');
        $("#edit-r-jabatan").find("input[name='nomor_sk']").val(nomor_sk);
        $("#edit-r-jabatan").find("input[name='pejabat']").val(pejabat);
        $("#edit-r-jabatan").find("input[name='tgl_sk']").val(tgl_sk);
        $("#edit-r-jabatan").find("input[name='tgl_mulai_terhitung']").val(tgl_mulai_terhitung);
        $("#edit-r-jabatan").find("input[name='keterangan']").val(keterangan);
        $("#edit-r-jabatan").find("input[name='nip_nrp_r_jabatan']").val(nip_nrp);
        $("#edit-r-jabatan").find("input[name='id_r_jabatan']").val(id);
        // console.log(tgl_mulai_terhitung);

    });
    /* Updated  Post baru (Updated new Post) */
    $(".btn-edit-r-jabatan").click(function(e){
        var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
        e.preventDefault();
        // get value from form
        var nomor_sk=$("#edit-r-jabatan").find("input[name='nomor_sk']").val();
        var pejabat= $("#edit-r-jabatan").find("input[name='pejabat']").val();
        var tgl_sk =$("#edit-r-jabatan").find("input[name='tgl_sk']").val();
        var tgl_mulai_terhitung =$("#edit-r-jabatan").find("input[name='tgl_mulai_terhitung']").val();
        var keterangan =$("#edit-r-jabatan").find("input[name='keterangan']").val();
        var nip_nrp_r_jabatan =$("#edit-r-jabatan").find("input[name='nip_nrp_r_jabatan']").val();
        var id_jabatan =$("#edit-r-jabatan").find("select[name=id_jabatan]").val();
        var id_r_jabatan =$("#edit-r-jabatan").find("input[name='id_r_jabatan']").val();
        $.ajax({
            type:'POST',
            dataType: 'json',
            url: '{{route('riwayat_jabatan.update')}}',
            data:{
                id:id_r_jabatan,
                nip_nrp:nip_nrp_r_jabatan,
                id_jabatan:id_jabatan,
                nomor_sk:nomor_sk,
                pejabat:pejabat,
                tgl_sk:tgl_sk,
                tgl_mulai_terhitung:tgl_mulai_terhitung,
                keterangan:keterangan,
                _token: '{{csrf_token()}}',
            },
            success : function(data){
                console.log(data);
            },
            error: function(xhr){
                                var res=xhr.responseJSON;
                                if($.isEmptyObject(res)==false){
                                    $.each(res.errors,function(key,value){
                                        $("input[name="+key+"]")
                                            .closest('.form-group')
                                            .addClass('has-error')
                                            .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                            $("select[name="+key+"]")
                                            .closest('.form-group')
                                            .addClass('has-error')
                                            .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                    })
                                }

                    },
        }).done(function(data){
            tampil_data_riwayat_jabatan();
            $(".modal").modal('hide');
            toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
        })
    })
    // klik delete
        $("body").on("click",".delete-r-jabatan",function(){
        var id = $(this).parent("td").data('id');
        $("#hapus-r-jabatan").find("input[name='id_hapus']").val(id);

    });
    /* Remove Post (Hapus) */
        $("#btn-hapus-r-jabatan").click(function(e){
        e.preventDefault();
        var id =  $("#hapus-r-jabatan").find("input[name='id_hapus']").val();
        var c_obj = $(this).parents("tr");
        confirm
        $.ajax({
            dataType: 'json',
            type:'post',
            data:{id:id,_token: '{{csrf_token()}}'},
            url: '{{route('riwayat_jabatan.delete')}}',
        }).done(function(data){
            c_obj.remove();
            toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
            tampil_data_riwayat_jabatan();
                $(".modal").modal('hide');
        });
        // console.log(id);


    })

</script>
<!------------------------------------------------------------------akhir riwayat jabatan-------------------------------------------->

<!--------------------------------------------------------------------awal tanda jasa----------------------------------------------->
<script>
  $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    tampil_data_tanda_jasa();  //pemanggilan fungsi gaji.
            //fungsi tampil barang
    function tampil_data_tanda_jasa(){
        $.ajax({
            type  : 'GET',
            beforeSend: function(){
                $('.ajax-loader').css("visibility", "visible");
            },
            url   : '/tanda_jasa/'+nrp,
            async : true,
            dataType : 'json',
            success : function(data){
                console.log(data);
                var i;
                var no=1;
                var rows ='';
                $.each( data, function( key, value ) {
                    rows = rows + '<tr>';
                    rows = rows + '<td>'+ no++ +'</td>';
                    rows = rows +'<td style="display:none" >'+value.nip_nrp+'</td>';
                    rows = rows + '<td >'+value.nama_prestasi+'</td>';
                    rows = rows + '<td>'+value.tahun+'</td>';
                    rows = rows + '<td>'+value.keterangan+'</td>';
                    rows = rows + '<td class="text-center" data-id="'+value.id+'">';
                    rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-tanda-jasa" class="badge badge-success edit-item-tanda-jasa"><span class="fas fa-fw fa-edit " ></a> ';
                    rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-tanda-jasa" class="badge badge-danger delete-tanda-jasa"><span class="fas fa-fw fa-trash"></button>';
                    rows = rows + '</td>';
                    rows = rows + '</tr>';
                });
                $('.show_tanda_jasa').html(rows);
            },
            error: function(xhr, ajaxOptions, thrownError){
                        alert("Mohon Data Masukkan Dengan Tepat");
                    },
            complete: function(){
                $('.ajax-loader').css("visibility", "hidden");
            }
        });
    } //tutup akhir tampil
    //Simpan
     $('.simpan').click(function(e){
        var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
        e.preventDefault();
        var nip_nrp=$("#modal-add-tanda-jasa").find("input[name=nip_nrp]").val();
        var nama_prestasi=$("#modal-add-tanda-jasa").find("input[name=nama_prestasi]").val();
        var tahun=$("#modal-add-tanda-jasa").find("input[name=tahun]").val();
        var keterangan=$("#modal-add-tanda-jasa").find("input[name=keterangan]").val();
        event.preventDefault();
            $.ajax({
                type : "POST",
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url  : '{{route('tanda_jasa.store')}}',
                datatype:"html",
                data : {nip_nrp:nip_nrp,nama_prestasi:nama_prestasi,tahun:tahun,keterangan:keterangan},
                success: function(data){

                    $("input[name=nama_prestasi]").val("");
                    $("input[name=tahun]").val("");
                    $("input[name=keterangan]").val("");
                    tampil_data_tanda_jasa();
                    $('.modal').modal('hide');
                },
                error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            }).done(function(data){
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })

        });
        // edit
        /* Edit Post */
        $("body").on("click",".edit-item-tanda-jasa",function(){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
            var id = $(this).parent("td").data('id');
            var nip_nrp = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
            var nama_prestasi = $(this).parent("td").prev("td").prev("td").prev("td").text();
            var tahun = $(this).parent("td").prev("td").prev("td").text();
            var keterangan =  $(this).parent("td").prev("td").text();
            $("#edit-tanda-jasa").find("input[name='nip_nrp']").val(nip_nrp);
            $("#edit-tanda-jasa").find("input[name='nama_prestasi']").val(nama_prestasi);
            $("#edit-tanda-jasa").find("input[name='tahun']").val(tahun);
            $("#edit-tanda-jasa").find("input[name='keterangan']").val(keterangan);
            $("#edit-tanda-jasa").find("input[name='id']").val(id);
            // console.log(nip_nrp)
        });
        /* Updated  Post baru (Updated new Post) */
        $(".btn-edit-tanda-jasa").click(function(e){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
            e.preventDefault();
            var id = $("#edit-tanda-jasa").find("input[name='id']").val();
            var nip_nrp =  $("#edit-tanda-jasa").find("input[name='nip_nrp']").val();
            var nama_prestasi =  $("#edit-tanda-jasa").find("input[name='nama_prestasi']").val();
            var tahun =   $("#edit-tanda-jasa").find("input[name='tahun']").val();
            var keterangan =  $("#edit-tanda-jasa").find("input[name='keterangan']").val();
            $.ajax({
                dataType: 'json',
                type:'post',
                url: '{{route('tanda_jasa.update')}}',
                data:{id:id,nip_nrp,nama_prestasi:nama_prestasi,tahun:tahun,keterangan:keterangan,_token: '{{csrf_token()}}'},
                 success: function(data){
                     console.log(data);
                 },
                 error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
            }).done(function(data){
            tampil_data_tanda_jasa();
            $(".modal").modal('hide');
            toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
        })

        })
            // klik delete
            $("body").on("click",".delete-tanda-jasa",function(){
                var id = $(this).parent("td").data('id');
                $("#hapus-tanda-jasa").find("input[name='id_hapus']").val(id);
                console.log(id);
            });
            /* Remove Post (Hapus) */
            $("#btn-hapus-tanda-jasa").click(function(e){
            event.preventDefault();
            var id = $("#hapus-tanda-jasa").find("input[name='id_hapus']").val();
            var c_obj = $(this).parents("tr");
            $.ajax({
                dataType: 'json',
                type:'post',
                data:{id:id,_token: '{{csrf_token()}}'},
                url: '{{route('tanda_jasa.delete')}}',

            }).done(function(data){
                c_obj.remove();
                toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                 tampil_data_tanda_jasa();
                  $(".modal").modal('hide');
            });
            });
            $("body").on("click",".add-tanda-jasa",function(){
        var form=$("body");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
        })

  })//end ready
</script>
<!---------------------------------------------------------------------akhir tanda jasa---------------------------------------------->

<!-----------------------------------------------------------------awal riwayat kepangkatan--------------------------------------------->
<script>

    $(document).ready(function(){
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
      tampil_data_r_kepangkatan();  //pemanggilan fungsi
    //fungsi tampil
      function tampil_data_r_kepangkatan(){
          $.ajax({
              type  : 'GET',
              beforeSend: function(){
                  $('.ajax-loader').css("visibility", "visible");
              },
              url   : '/riwayat_kepangkatan/'+nrp,
              async : true,
              dataType : 'json',
              success : function(data){
                  console.log(data);
                  var i;
                  var no=1;
                  var rows ='';
                  $.each( data, function( key, value ) {
                      rows = rows + '<tr>';
                      rows = rows + '<td>'+ no++ +'</td>';
                      rows = rows +'<td style="display:none" >'+value.nip_nrp+'</td>';
                      rows = rows + '<td style="display:none">'+value.id_pangkat+'</td>';
                      rows = rows + '<td>'+value.pangkat.nama_pangkat+'</td>';
                      rows = rows + '<td>'+value.tmt+'</td>';
                      rows = rows + '<td>'+value.nomor_sk+'</td>';
                      rows = rows + '<td>'+value.pejabat+'</td>';
                      rows = rows + '<td>'+value.tanggal_sk+'</td>';
                      rows = rows + '<td>'+value.dasar_peraturan+'</td>';
                      rows = rows + '<td class="text-center" data-id="'+value.id+'">';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-r-kepangkatan" class="badge badge-success edit-item-r-kepangkatan"><span class="fas fa-fw fa-edit " ></a> ';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-r-kepangkatan" class="badge badge-danger delete-r-kepangkatan"><span class="fas fa-fw fa-trash"></button>';
                      rows = rows + '</td>';
                      rows = rows + '</tr>';
                  });
                  $('.show_r_kepangkatan').html(rows);
              },
              error: function(xhr, ajaxOptions, thrownError){
                          alert("Mohon Data Masukkan Dengan Tepat");
                      },
              complete: function(){
                  $('.ajax-loader').css("visibility", "hidden");
              }
          });
      } //tutup akhir tampil
      //Simpan
    $('#btn-simpan-r-kepangkatan').click(function(e){
        e.preventDefault();
        var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
        var nip_nrp=$("#modal-add-r-kepangkatan").find("input[name=nip_nrp]").val();
        var id_pangkat=$("#modal-add-r-kepangkatan").find("select[name=id_pangkat]").val();
        var tmt=$("#modal-add-r-kepangkatan").find("input[name=tmt]").val();
        var nomor_sk=$("#modal-add-r-kepangkatan").find("input[name=nomor_sk]").val();
        var pejabat=$("#modal-add-r-kepangkatan").find("input[name=pejabat]").val();
        var tanggal_sk=$("#modal-add-r-kepangkatan").find("input[name=tanggal_sk]").val();
        var dasar_peraturan=$("#modal-add-r-kepangkatan").find("input[name=dasar_peraturan]").val();
        event.preventDefault();
            $.ajax({
                type : "POST",
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url  : '{{route('riwayat_kepangkatan.store')}}',
                datatype:"html",
                data : {nip_nrp:nip_nrp,id_pangkat:id_pangkat,tmt:tmt,nomor_sk:nomor_sk,pejabat:pejabat,tanggal_sk:tanggal_sk,dasar_peraturan:dasar_peraturan},
                success: function(data){
                $("#modal-add-r-kepangkatan").find("input[name=id_pangkat]").val("");
                $("#modal-add-r-kepangkatan").find("input[name=tmt]").val("");
                $("#modal-add-r-kepangkatan").find("input[name=nomor_sk]").val("");
                $("#modal-add-r-kepangkatan").find("input[name=pejabat]").val("");
                $("#modal-add-r-kepangkatan").find("input[name=tanggal_sk]").val("");
                $("#modal-add-r-kepangkatan").find("input[name=dasar_peraturan]").val("");
                tampil_data_r_kepangkatan();
                $('.modal').modal('hide');
                },
                error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                    $("select[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            }).done(function(data){
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })

    });
          // edit
          /* Edit Post */
          $("body").on("click",".edit-item-r-kepangkatan",function(){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
            var id = $(this).parent("td").data('id');
            var nip_nrp = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var id_pangkat=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var nama_pangkat=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var tmt=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var nomor_sk=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
            var pejabat=$(this).parent("td").prev("td").prev("td").prev("td").text();
            var tanggal_sk=$(this).parent("td").prev("td").prev("td").text();
            var dasar_peraturan=$(this).parent("td").prev("td").text();
            // set
            $("#edit-r-kepangkatan").find("input[name='id']").val(id);
            $("#edit-r-kepangkatan").find("input[name='nip_nrp']").val(nip_nrp);
            $("#edit-r-kepangkatan").find("input[name='tmt']").val(tmt);
            $("#edit-r-kepangkatan").find("input[name='nomor_sk']").val(nomor_sk);
            $("#edit-r-kepangkatan").find("input[name='pejabat']").val(pejabat);
            $("#edit-r-kepangkatan").find("input[name='tanggal_sk']").val(tanggal_sk);
            $("#edit-r-kepangkatan").find("input[name='dasar_peraturan']").val(dasar_peraturan);
            var i;
            var x= document.getElementById("id_pangkat_r_kepangkatan");
            for(i=0; i<x.options.length;i++){
                if(x.options[i].value == id_pangkat){
                    $("#edit-r-kepangkatan").find("select[name=id_pangkat]").val(id_pangkat);
                }
                else{
                    $("#edit-r-kepangkatan").find("select[name=id_pangkat]").val();

                }
            }
            // $("#id_pangkat_r_kepangkatans").select2().val(id_pangkat).trigger('change.select2');
          });
          /* Updated  Post baru (Updated new Post) */
          $(".btn-edit-r-kepangkatan").click(function(e){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
              e.preventDefault();
              var id = $("#edit-r-kepangkatan").find("input[name='id']").val();
              var nip_nrp =  $("#edit-r-kepangkatan").find("input[name='nip_nrp']").val();
              var id_pangkat =  $("#edit-r-kepangkatan").find("select[name='id_pangkat']").val();
              var tmt =   $("#edit-r-kepangkatan").find("input[name='tmt']").val();
              var pejabat =  $("#edit-r-kepangkatan").find("input[name='pejabat']").val();
              var nomor_sk =  $("#edit-r-kepangkatan").find("input[name='nomor_sk']").val();
              var tanggal_sk =  $("#edit-r-kepangkatan").find("input[name='tanggal_sk']").val();
              var dasar_peraturan =  $("#edit-r-kepangkatan").find("input[name='dasar_peraturan']").val();
              $.ajax({
                  dataType: 'json',
                  type:'post',
                  url: '{{route('riwayat_kepangkatan.update')}}',
                  data:{id:id,nip_nrp,id_pangkat:id_pangkat,tmt:tmt,pejabat:pejabat,nomor_sk:nomor_sk,tanggal_sk:tanggal_sk,dasar_peraturan:dasar_peraturan,_token: '{{csrf_token()}}'},
                   success: function(data){
                       console.log(data);
                   },
                   error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                    $("select[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
              }).done(function(data){
              tampil_data_r_kepangkatan();
              $(".modal").modal('hide');
              toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
          })

          })
        // klik delete
        $("body").on("click",".delete-r-kepangkatan",function(){
            var id = $(this).parent("td").data('id');
            $("#hapus-r-kepangkatan").find("input[name='id_hapus']").val(id);

        });
        /* Remove Post (Hapus) */
        $("#btn-hapus-r-kepangkatan").click(function(e){
        event.preventDefault();
        var id = $("#hapus-r-kepangkatan").find("input[name='id_hapus']").val();
        var c_obj = $(this).parents("tr");
        $.ajax({
            dataType: 'json',
            type:'POST',
            data:{id:id,_token: '{{csrf_token()}}'},
            url: '{{route('riwayat_kepangkatan.delete')}}',

        }).done(function(data){
            c_obj.remove();
            toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
            tampil_data_r_kepangkatan();
            $(".modal").modal('hide');
        });
        });
        $("body").on("click",".add-kepangkatan",function(){
        var form=$("body");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
        })

    })//end ready
</script>
<!----------------------------------------------------------------akhir riwayat kepangkatan-------------------------------------------->

<!--------------------------------------------------------------------awal Keluarga----------------------------------------------->
<script>
    $(document).ready(function(){
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
      tampil_data_keluarga();  //pemanggilan fungsi.
              //fungsi tampil
      function tampil_data_keluarga(){
          $.ajax({
              type  : 'GET',
              beforeSend: function(){
                  $('.ajax-loader').css("visibility", "visible");
              },
              url   : '/keluarga/'+nrp,
              async : true,
              dataType : 'json',
              success : function(data){
                  console.log(data);
                  var i;
                  var no=1;
                  var rows ='';
                  $.each( data, function( key, value ) {
                      rows = rows + '<tr>';
                      rows = rows + '<td>'+ no++ +'</td>';
                      rows = rows +'<td style="display:none" >'+value.nip_nrp+'</td>';
                      rows = rows + '<td >'+value.nama+'</td>';
                      rows = rows + '<td>'+value.hubungan_keluarga+'</td>';
                      rows = rows + '<td>'+value.jk+'</td>';
                      rows = rows + '<td>'+value.tempat_lahir+'</td>';
                      rows = rows + '<td>'+value.tanggal_lahir+'</td>';
                      rows = rows + '<td>'+value.status_hidup+'</td>';
                      rows = rows + '<td>'+value.pekerjaan+'</td>';
                      rows = rows + '<td>'+value.keterangan+'</td>';
                      rows = rows + '<td class="text-center" data-id="'+value.id+'">';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-keluarga" class="badge badge-success edit-item-keluarga"><span class="fas fa-fw fa-edit " ></a> ';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-keluarga" class="badge badge-danger delete-keluarga"><span class="fas fa-fw fa-trash"></button>';
                      rows = rows + '</td>';
                      rows = rows + '</tr>';
                  });
                  $('.show_keluarga').html(rows);
              },
              error: function(xhr, ajaxOptions, thrownError){
                          alert("Mohon Data Masukkan Dengan Tepat");
                      },
              complete: function(){
                  $('.ajax-loader').css("visibility", "hidden");
              }
          });
      } //tutup akhir tampil
      //Simpan
        $('#btn-simpan-keluarga').click(function(e){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
            e.preventDefault();
            var nip_nrp=$("#modal-add-keluarga").find("input[name=nip_nrp]").val();
            var nama=$("#modal-add-keluarga").find("input[name=nama]").val();
            var hubungan_keluarga=$("#modal-add-keluarga").find("select[name=hubungan_keluarga]").val();
            var jk=$("#modal-add-keluarga").find("select[name=jk]").val();
            var tempat_lahir=$("#modal-add-keluarga").find("input[name=tempat_lahir]").val();
            var tanggal_lahir=$("#modal-add-keluarga").find("input[name=tanggal_lahir]").val();
            var status_hidup=$("#modal-add-keluarga").find("select[name=status_hidup]").val();
            var pekerjaan=$("#modal-add-keluarga").find("input[name=pekerjaan]").val();
            var keterangan=$("#modal-add-keluarga").find("input[name=keterangan]").val();
            event.preventDefault();
                $.ajax({
                    type : "POST",
                    beforeSend: function(){
                        $('.ajax-loader').css("visibility", "visible");
                    },
                    url  : '{{route('keluarga.store')}}',
                    datatype:"html",
                    data : {nip_nrp:nip_nrp,nama:nama,hubungan_keluarga:hubungan_keluarga,jk:jk,tempat_lahir:tempat_lahir,tanggal_lahir:tanggal_lahir,status_hidup:status_hidup,pekerjaan:pekerjaan,keterangan:keterangan},
                    success: function(data){
                    $("#modal-add-keluarga").find("input[name=nama]").val("");
                    $("#modal-add-keluarga").find("select[name=hubungan_keluarga]").val("");
                    $("#modal-add-keluarga").find("select[name=jk]").val("");
                    $("#modal-add-keluarga").find("input[name=tempat_lahir]").val("");
                    $("#modal-add-keluarga").find("input[name=tanggal_lahir]").val("");
                    $("#modal-add-keluarga").find("select[name=pekerjaan]").val("");
                    $("#modal-add-keluarga").find("input[name=keterangan]").val("");
                    $("#modal-add-keluarga").find("input[name=status_hidup]").val("");
                    tampil_data_keluarga();
                    $('.modal').modal('hide');
                    },
                    error: function(xhr, ajaxOptions, thrownError){
                        var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                    $("select[name="+key+"]")
                                    .closest('.form-group')
                                    .addClass('has-error')
                                    .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                        },
                    complete: function(){
                        $('.ajax-loader').css("visibility", "hidden");
                    }
                }).done(function(data){
                    toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
                })
        });
          // edit
          /* Edit Post */
          $("body").on("click",".edit-item-keluarga",function(){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
            var id = $(this).parent("td").data('id');
            var nip_nrp = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var nama = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var hubungan_keluarga = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var jk = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var tempat_lahir = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var tanggal_lahir = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
            var status_hidup = $(this).parent("td").prev("td").prev("td").prev("td").text();
            var pekerjaan = $(this).parent("td").prev("td").prev("td").text();
            var keterangan =  $(this).parent("td").prev("td").text();
            //
            $("#edit-keluarga").find("input[name=id]").val(id);
            $("#edit-keluarga").find("input[name=nip_nrp]").val(nip_nrp);
            $("#edit-keluarga").find("input[name=nama]").val(nama);
            //
            if(jk== "L" ){
                $("#edit-keluarga").find("select[name=jk]").val('L');
            }
            if(jk== "P" ){
                $("#edit-keluarga").find("select[name=jk]").val('P');
            }
            else{
                $("#edit-keluarga").find("select[name=jk]").val();
            }
            //
            if(status_hidup== "Hidup" ){
                $("#edit-keluarga").find("select[name=status_hidup]").val('Hidup');
            }
            if(hubungan_keluarga== "Meninggal" ){
                $("#edit-keluarga").find("select[name=hubungan_keluarga]").val('Meninggal');
            }
            //
            if(hubungan_keluarga== "Ibu" ){
                $("#edit-keluarga").find("select[name=hubungan_keluarga]").val('Ibu');
            }
            if(hubungan_keluarga== "Ayah" ){
                $("#edit-keluarga").find("select[name=hubungan_keluarga]").val('Ayah');
            }
            if(hubungan_keluarga== "Anak kandung" ){
                $("#edit-keluarga").find("select[name=hubungan_keluarga]").val('Anak kandung');
            }
            if(hubungan_keluarga== "Anak tiri" ){
                $("#edit-keluarga").find("select[name=hubungan_keluarga]").val('Anak tiri');
            }
            if(hubungan_keluarga== "Saudara kandung" ){
                $("#edit-keluarga").find("select[name=hubungan_keluarga]").val('Saudara kandung');
            }
            if(hubungan_keluarga== "Saudara Tiri" ){
                $("#edit-keluarga").find("select[name=hubungan_keluarga]").val('Saudara Tiri');
            }
            $("#edit-keluarga").find("input[name=tempat_lahir]").val(tempat_lahir);
            $("#edit-keluarga").find("input[name=tanggal_lahir]").val(tanggal_lahir);
            $("#edit-keluarga").find("input[name=status_hidup]").val(status_hidup);
            $("#edit-keluarga").find("input[name=pekerjaan]").val(pekerjaan);
            $("#edit-keluarga").find("input[name=keterangan]").val(keterangan);
          });
          /* Updated  Post baru (Updated new Post) */
        $(".btn-edit-keluarga").click(function(e){
            e.preventDefault();
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
            var id =$("#edit-keluarga").find("input[name='id']").val();
            var nip_nrp =$("#edit-keluarga").find("input[name='nip_nrp']").val();
            var nama=$("#edit-keluarga").find("input[name=nama]").val();
            var hubungan_keluarga=$("#edit-keluarga").find("select[name=hubungan_keluarga]").val();
            var jk=$("#edit-keluarga").find("select[name=jk]").val();
            var tempat_lahir=$("#edit-keluarga").find("input[name=tempat_lahir]").val();
            var tanggal_lahir=$("#edit-keluarga").find("input[name=tanggal_lahir]").val();
            var status_hidup=$("#edit-keluarga").find("select[name=status_hidup]").val();
            var pekerjaan=$("#edit-keluarga").find("input[name=pekerjaan]").val();
            var keterangan=$("#edit-keluarga").find("input[name=keterangan]").val();
            $.ajax({
                dataType: 'json',
                type:'post',
                url: '{{route('keluarga.update')}}',
                data:{id:id,nip_nrp,nama:nama,hubungan_keluarga:hubungan_keluarga,jk:jk,tempat_lahir:tempat_lahir,
                        tanggal_lahir:tanggal_lahir,status_hidup:status_hidup,pekerjaan:pekerjaan,keterangan:keterangan,_token: '{{csrf_token()}}'},
                success: function(data){
                    console.log(data);
                },
                error: function(xhr, ajaxOptions, thrownError){
                        var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                    $("select[name="+key+"]")
                                    .closest('.form-group')
                                    .addClass('has-error')
                                    .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                },
            }).done(function(data){
                tampil_data_keluarga();
                $(".modal").modal('hide');
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })
        })
            // klik delete
            $("body").on("click",".delete-keluarga",function(){
                var id = $(this).parent("td").data('id');
                $("#hapus-keluarga").find("input[name='id_hapus']").val(id);

            });
            /* Remove Post (Hapus) */
            $("#btn-hapus-keluarga").click(function(e){
            event.preventDefault();
            var id = $("#hapus-keluarga").find("input[name='id_hapus']").val();
            var c_obj = $(this).parents("tr");
            $.ajax({
                dataType: 'json',
                type:'post',
                data:{id:id,_token: '{{csrf_token()}}'},
                url: '{{route('keluarga.delete')}}',

            }).done(function(data){
                c_obj.remove();
                toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                tampil_data_keluarga();
                    $(".modal").modal('hide');
            });
            });
            $("body").on("click",".add-keluarga",function(){
        var form=$("body");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
        })
    })//end ready
</script>
<!---------------------------------------------------------------------akhir keluarga----------------------------------------------->

<!-----------------------------------------------------------------awal kecakapan bahasa--------------------------------------------->
<script>

    $(document).ready(function(){
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
      tampil_data_kecakapan_bahasa();  //pemanggilan fungsi
    //fungsi tampil
      function tampil_data_kecakapan_bahasa(){
          $.ajax({
              type  : 'GET',
              beforeSend: function(){
                  $('.ajax-loader').css("visibility", "visible");
              },
              url   : '/kecakapan_bahasa/'+nrp,
              async : true,
              dataType : 'json',
              success : function(data){
                  console.log(data);
                  var i;
                  var no=1;
                  var rows ='';
                  $.each( data, function( key, value ) {
                      rows = rows + '<tr>';
                      rows = rows + '<td>'+ no++ +'</td>';
                      rows = rows +'<td style="display:none" >'+value.nip_nrp+'</td>';
                      rows = rows + '<td>'+value.jenis_bahasa+'</td>';
                      rows = rows + '<td>'+value.nama_bahasa+'</td>';
                      rows = rows + '<td>'+value.kemampuan_bahasa+'</td>';
                      rows = rows + '<td class="text-center" data-id="'+value.id+'">';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-kecakapan-bahasa" class="badge badge-success edit-item-kecakapan-bahasa"><span class="fas fa-fw fa-edit " ></a> ';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-kecakapan-bahasa" class="badge badge-danger delete-kecakapan-bahasa"><span class="fas fa-fw fa-trash"></button>';
                      rows = rows + '</td>';
                      rows = rows + '</tr>';
                  });
                  $('.show_kecakapan_bahasa').html(rows);
              },
              error: function(xhr, ajaxOptions, thrownError){
                          alert("Mohon Data Masukkan Dengan Tepat");
                      },
              complete: function(){
                  $('.ajax-loader').css("visibility", "hidden");
              }
          });
      } //tutup akhir tampil
      //Simpan
    $('#btn-simpan-kecakapan-bahasa').click(function(e){
        var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
        e.preventDefault();
        var nip_nrp=$("#modal-add-kecakapan-bahasa").find("input[name=nip_nrp]").val();
        var nama_bahasa=$("#modal-add-kecakapan-bahasa").find("input[name=nama_bahasa]").val();
        var jenis_bahasa=$("#modal-add-kecakapan-bahasa").find("select[name=jenis_bahasa]").val();
        var kemampuan_bahasa=$("#modal-add-kecakapan-bahasa").find("select[name=kemampuan_bahasa]").val();
        event.preventDefault();
            $.ajax({
                type : "POST",
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url  : '{{route('kecakapan_bahasa.store')}}',
                datatype:"html",
                data : {nip_nrp:nip_nrp,nama_bahasa:nama_bahasa,jenis_bahasa:jenis_bahasa,kemampuan_bahasa:kemampuan_bahasa},
                success: function(data){
                    $("#modal-add-keluarga").find("input[name=nama_bahasa]").val();
                    $("#modal-add-keluarga").find("select[name=jenis_bahasa]").val();
                    $("#modal-add-keluarga").find("input[name=kemampuan_bahasa]").val();
                    tampil_data_kecakapan_bahasa();
                    $('.modal').modal('hide');
                },
                error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("#modal-add-keluarga").find("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                        $("#modal-add-keluarga").find("select[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            }).done(function(data){
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })

    });
          // edit
          /* Edit Post */
          $("body").on("click",".edit-item-kecakapan-bahasa",function(){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
            var id = $(this).parent("td").data('id');
            var nip_nrp=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
            var jenis_bahasa=$(this).parent("td").prev("td").prev("td").prev("td").text();
            var nama_bahasa=$(this).parent("td").prev("td").prev("td").text();
            var kemampuan_bahasa=$(this).parent("td").prev("td").text();
            // set
            $("#edit-kecakapan-bahasa").find("input[name='id']").val(id);
            $("#edit-kecakapan-bahasa").find("input[name='nip_nrp']").val(nip_nrp);
            $("#edit-kecakapan-bahasa").find("input[name='nama_bahasa']").val(nama_bahasa);
            if(jenis_bahasa =='Daerah'){
                $("#edit-kecakapan-bahasa").find("select[name=jenis_bahasa]").val('Daerah');
            }
            if(jenis_bahasa =='Asing'){
                $("#edit-kecakapan-bahasa").find("select[name=jenis_bahasa]").val('Asing');
            }
            if(kemampuan_bahasa =='Aktif'){
                $("#edit-kecakapan-bahasa").find("select[name=kemampuan_bahasa]").val('Aktif');
            }
            if(kemampuan_bahasa =='Pasif'){
                $("#edit-kecakapan-bahasa").find("select[name=kemampuan_bahasa]").val('Pasif');
            }
          });
          /* Updated  Post baru (Updated new Post) */
          $(".btn-edit-kecakapan-bahasa").click(function(e){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
              e.preventDefault();
              var id = $("#edit-kecakapan-bahasa").find("input[name='id']").val();
              var nip_nrp =  $("#edit-kecakapan-bahasa").find("input[name='nip_nrp']").val();
              var nama_bahasa= $("#edit-kecakapan-bahasa").find("input[name='nama_bahasa']").val();
              var jenis_bahasa= $("#edit-kecakapan-bahasa").find("select[name='jenis_bahasa']").val();
              var kemampuan_bahasa= $("#edit-kecakapan-bahasa").find("select[name='kemampuan_bahasa']").val();
              $.ajax({
                  dataType: 'json',
                  type:'post',
                  url: '{{route('kecakapan_bahasa.update')}}',
                  data:{id:id,nip_nrp,nama_bahasa:nama_bahasa,jenis_bahasa:jenis_bahasa,kemampuan_bahasa:kemampuan_bahasa,_token: '{{csrf_token()}}'},
                   success: function(data){
                       console.log(data);
                   },
                   error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                    $("select[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
              }).done(function(data){
                    tampil_data_kecakapan_bahasa();
                    $(".modal").modal('hide');
                    toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
                })

          })
        // klik delete
        $("body").on("click",".delete-kecakapan-bahasa",function(){
            var id = $(this).parent("td").data('id');
            $("#hapus-kecakapan-bahasa").find("input[name='id_hapus']").val(id);

        });
        /* Remove Post (Hapus) */
        $("#btn-hapus-kecakapan-bahasa").click(function(e){
        event.preventDefault();
        var id = $("#hapus-kecakapan-bahasa").find("input[name='id_hapus']").val();
        var c_obj = $(this).parents("tr");
        $.ajax({
            dataType: 'json',
            type:'POST',
            data:{id:id,_token: '{{csrf_token()}}'},
            url: '{{route('kecakapan_bahasa.delete')}}',

        }).done(function(data){
            c_obj.remove();
            toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
            tampil_data_kecakapan_bahasa();
            $(".modal").modal('hide');
        });
        });
        $("body").on("click",".k-bahasa",function(){
        var form=$("body");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
        })
    })//end ready
</script>
<!----------------------------------------------------------------akhir kecakapan bahasa-------------------------------------------->

<!-----------------------------------------------------------------awal kecakapan olahraga--------------------------------------------->
<script>

    $(document).ready(function(){
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
      tampil_data_kecakapan_olahraga();  //pemanggilan fungsi
    //fungsi tampil
      function tampil_data_kecakapan_olahraga(){
          $.ajax({
              type  : 'GET',
              beforeSend: function(){
                  $('.ajax-loader').css("visibility", "visible");
              },
              url   : '/kecakapan_olahraga/'+nrp,
              async : true,
              dataType : 'json',
              success : function(data){
                  console.log(data);
                  var i;
                  var no=1;
                  var rows ='';
                  $.each( data, function( key, value ) {
                      rows = rows + '<tr>';
                      rows = rows + '<td>'+ no++ +'</td>';
                      rows = rows +'<td style="display:none" >'+value.nip_nrp+'</td>';
                      rows = rows + '<td>'+value.nama_olahraga+'</td>';
                      rows = rows + '<td>'+value.keterangan+'</td>';
                      rows = rows + '<td class="text-center" data-id="'+value.id+'">';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-kecakapan-olahraga" class="badge badge-success edit-item-kecakapan-olahraga"><span class="fas fa-fw fa-edit " ></a> ';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-kecakapan-olahraga" class="badge badge-danger delete-kecakapan-olahraga"><span class="fas fa-fw fa-trash"></button>';
                      rows = rows + '</td>';
                      rows = rows + '</tr>';
                  });
                  $('.show_kecakapan_olahraga').html(rows);
              },
              error: function(xhr, ajaxOptions, thrownError){
                          alert("Mohon Data Masukkan Dengan Tepat");
                      },
              complete: function(){
                  $('.ajax-loader').css("visibility", "hidden");
              }
          });
      } //tutup akhir tampil
      //Simpan
    $('#btn-simpan-kecakapan-olahraga').click(function(e){
        var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
        e.preventDefault();
        var nip_nrp=$("#modal-add-kecakapan-olahraga").find("input[name=nip_nrp]").val();
        var nama_olahraga=$("#modal-add-kecakapan-olahraga").find("input[name=nama_olahraga]").val();
        var keterangan=$("#modal-add-kecakapan-olahraga").find("input[name=keterangan]").val();

        event.preventDefault();
            $.ajax({
                type : "POST",
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url  : '{{route('kecakapan_olahraga.store')}}',
                datatype:"html",
                data : {nip_nrp:nip_nrp,nama_olahraga:nama_olahraga,keterangan:keterangan},
                success: function(data){
                    $("#modal-add-kecakapan-olahraga").find("input[name=nama_olahraga]").val("");
                    $("#modal-add-kecakapan-olahraga").find("input[name=keterangan]").val("");
                    tampil_data_kecakapan_olahraga();
                    $('.modal').modal('hide');
                },
                error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            }).done(function(data){
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })

    });
          // edit
          /* Edit Post */
          $("body").on("click",".edit-item-kecakapan-olahraga",function(){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
            var id = $(this).parent("td").data('id');
            var nip_nrp=$(this).parent("td").prev("td").prev("td").prev("td").text();
            var nama_olahraga=$(this).parent("td").prev("td").prev("td").text();
            var keterangan=$(this).parent("td").prev("td").text();

            // set
            $("#edit-kecakapan-olahraga").find("input[name='id']").val(id);
            $("#edit-kecakapan-olahraga").find("input[name='nip_nrp']").val(nip_nrp);
            $("#edit-kecakapan-olahraga").find("input[name='nama_olahraga']").val(nama_olahraga);
            $("#edit-kecakapan-olahraga").find("input[name='keterangan']").val(keterangan);
          });
          /* Updated  Post baru (Updated new Post) */
          $(".btn-edit-kecakapan-olahraga").click(function(e){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
              e.preventDefault();
              var id = $("#edit-kecakapan-olahraga").find("input[name='id']").val();
              var nip_nrp = $("#edit-kecakapan-olahraga").find("input[name='nip_nrp']").val();
              var nama_olahraga= $("#edit-kecakapan-olahraga").find("input[name='nama_olahraga']").val();
              var keterangan= $("#edit-kecakapan-olahraga").find("input[name='keterangan']").val();
              $.ajax({
                  dataType: 'json',
                  type:'post',
                  url: '{{route('kecakapan_olahraga.update')}}',
                  data:{id:id,nip_nrp,nama_olahraga:nama_olahraga,keterangan:keterangan,_token: '{{csrf_token()}}'},
                   success: function(data){

                   },
                   error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
              }).done(function(data){
                    tampil_data_kecakapan_olahraga();
                    $(".modal").modal('hide');
                    toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
                })

          })
        // klik delete
        $("body").on("click",".delete-kecakapan-olahraga",function(){
            var id = $(this).parent("td").data('id');
            $("#hapus-kecakapan-olahraga").find("input[name='id_hapus']").val(id);

        });
        /* Remove Post (Hapus) */
        $("#btn-hapus-kecakapan-olahraga").click(function(e){
        event.preventDefault();
        var id = $("#hapus-kecakapan-olahraga").find("input[name='id_hapus']").val();
        var c_obj = $(this).parents("tr");
        $.ajax({
            dataType: 'json',
            type:'POST',
            data:{id:id,_token: '{{csrf_token()}}'},
            url: '{{route('kecakapan_olahraga.delete')}}',


        }).done(function(data){
            c_obj.remove();
            toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
            tampil_data_kecakapan_olahraga();
            $(".modal").modal('hide');
        });
        });
        $("body").on("click",".k-olahraga",function(){
        var form=$("body");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
        })
    })//end ready
</script>
<!----------------------------------------------------------------akhir kecakapan olahrga-------------------------------------------->

<!-----------------------------------------------------------------awal kecakapan brevet--------------------------------------------->
<script>
    $(document).ready(function(){
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
      tampil_data_kecakapan_brevet();  //pemanggilan fungsi
    //fungsi tampil
      function tampil_data_kecakapan_brevet(){
          $.ajax({
              type  : 'GET',
              beforeSend: function(){
                  $('.ajax-loader').css("visibility", "visible");
              },
              url   : '/kecakapan_brevet/'+nrp,
              async : true,
              dataType : 'json',
              success : function(data){
                  console.log(data);
                  var i;
                  var no=1;
                  var rows ='';
                  $.each( data, function( key, value ) {
                      rows = rows + '<tr>';
                      rows = rows + '<td>'+ no++ +'</td>';
                      rows = rows +'<td style="display:none">'+value.nip_nrp+'</td>';
                      rows = rows +'<td >'+value.nama_brevet+'</td>';
                      rows = rows + '<td>'+value.asal_perolehan+'</td>';
                      rows = rows + '<td class="text-center" data-id="'+value.id+'">';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-kecakapan-brevet" class="badge badge-success edit-item-kecakapan-brevet"><span class="fas fa-fw fa-edit " ></a> ';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-kecakapan-brevet" class="badge badge-danger delete-kecakapan-brevet"><span class="fas fa-fw fa-trash"></button>';
                      rows = rows + '</td>';
                      rows = rows + '</tr>';
                  });
                  $('.show_kecakapan_brevet').html(rows);
              },
              error: function(xhr, ajaxOptions, thrownError){
                          alert("Mohon Data Masukkan Dengan Tepat");
                      },
              complete: function(){
                  $('.ajax-loader').css("visibility", "hidden");
              }
          });
      } //tutup akhir tampil
      //Simpan
    $('#btn-simpan-kecakapan-brevet').click(function(e){
        var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
        e.preventDefault();
        var nip_nrp=$("#modal-add-kecakapan-brevet").find("input[name=nip_nrp]").val();
        var nama_brevet=$("#modal-add-kecakapan-brevet").find("input[name=nama_brevet]").val();
        var asal_perolehan=$("#modal-add-kecakapan-brevet").find("input[name=asal_perolehan]").val();
        event.preventDefault();
            $.ajax({
                type : "POST",
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url  : '{{route('kecakapan_brevet.store')}}',
                datatype:"html",
                data : {nip_nrp:nip_nrp,nama_brevet:nama_brevet,asal_perolehan:asal_perolehan},
                success: function(data){
                    $("#modal-add-kecakapan-brevet").find("input[name=nama_brevet]").val("");
                    $("#modal-add-kecakapan-brevet").find("input[name=asal_perolehan]").val("");
                    tampil_data_kecakapan_brevet();
                    $('.modal').modal('hide');
                },
                error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            }).done(function(data){
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })
        });
        /* Edit Post */
        $("body").on("click",".edit-item-kecakapan-brevet",function(){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
            var id = $(this).parent("td").data('id');
            var nip_nrp=$(this).parent("td").prev("td").prev("td").prev("td").text();
            var nama_brevet=$(this).parent("td").prev("td").prev("td").text();
            var asal_perolehan=$(this).parent("td").prev("td").text();

            // set
            $("#edit-kecakapan-brevet").find("input[name='id']").val(id);
            $("#edit-kecakapan-brevet").find("input[name='nip_nrp']").val(nip_nrp);
            $("#edit-kecakapan-brevet").find("input[name='nama_brevet']").val(nama_brevet);
            $("#edit-kecakapan-brevet").find("input[name='asal_perolehan']").val(asal_perolehan);
            console.log(nip_nrp);
          });
          /* Updated  Post baru (Updated new Post) */
          $(".btn-edit-kecakapan-brevet").click(function(e){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
              e.preventDefault();
              var id = $("#edit-kecakapan-brevet").find("input[name='id']").val();
              var nip_nrp = $("#edit-kecakapan-brevet").find("input[name='nip_nrp']").val();
              var nama_brevet= $("#edit-kecakapan-brevet").find("input[name='nama_brevet']").val();
              var asal_perolehan= $("#edit-kecakapan-brevet").find("input[name='asal_perolehan']").val();
              $.ajax({
                  dataType: 'json',
                  type:'post',
                  url: '{{route('kecakapan_brevet.update')}}',
                  data:{id:id,nip_nrp:nip_nrp,nama_brevet:nama_brevet,asal_perolehan:asal_perolehan,_token: '{{csrf_token()}}'},
                   success: function(data){
                    console.log(data);
                   },
                   error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
              }).done(function(data){
                    tampil_data_kecakapan_brevet();
                    $(".modal").modal('hide');
                    toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
                })

          })
        // klik delete
        $("body").on("click",".delete-kecakapan-brevet",function(){
            var id = $(this).parent("td").data('id');
            $("#hapus-kecakapan-brevet").find("input[name='id_hapus']").val(id);

        });
        /* Remove Post (Hapus) */
        $("#btn-hapus-kecakapan-brevet").click(function(e){
            event.preventDefault();
            var id = $("#hapus-kecakapan-brevet").find("input[name='id_hapus']").val();
            var c_obj = $(this).parents("tr");
            $.ajax({
                dataType: 'json',
                type:'POST',
                data:{id:id,_token: '{{csrf_token()}}'},
                url: '{{route('kecakapan_brevet.delete')}}',
            }).done(function(data){
                c_obj.remove();
                toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                tampil_data_kecakapan_brevet();
                $(".modal").modal('hide');
            });
        })
        $("body").on("click",".k-brevet",function(){
        var form=$("body");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
        })
    })//end ready
</script>
<!----------------------------------------------------------------akhir kecakapan brevet-------------------------------------------->

<!-----------------------------------------------------------------awal pendidikan polri--------------------------------------------->
<script>
    $(document).ready(function(){
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
      tampil_data_pendidikan_polri();  //pemanggilan fungsi
    //fungsi tampil
      function tampil_data_pendidikan_polri(){
          $.ajax({
              type  : 'GET',
              beforeSend: function(){
                  $('.ajax-loader').css("visibility", "visible");
              },
              url   : '/pendidikan_polri/'+nrp,
              async : true,
              dataType : 'json',
              success : function(data){
                  console.log(data);
                  var i;
                  var no=1;
                  var rows ='';
                  $.each( data, function( key, value ) {

                      rows = rows + '<tr>';
                      rows = rows + '<td>'+ no++ +'</td>';
                      rows = rows +'<td style="display:none">'+value.nip_nrp+'</td>';
                      rows = rows +'<td >'+value.nama_pendidikan+'</td>';
                      rows = rows +'<td >'+value.tahun+'</td>';
                      rows = rows + '<td>'+value.lulus_tidak+'</td>';
                      rows = rows + '<td>'+value.lama_bulan+'</td>';
                      rows = rows + '<td>'+value.rangking+'</td>';
                      rows = rows + '<td>'+'<a href=' +'{{ URL::asset('file/') }}'+'/'+value.file+'>'+value.file+'</a>'+'</td>';
                      rows = rows + '<td class="text-center" data-id="'+value.id+'">';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-pendidikan-polri" class="badge badge-success edit-item-pendidikan-polri"><span class="fas fa-fw fa-edit " ></a> ';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-pendidikan-polri" class="badge badge-danger delete-pendidikan-polri"><span class="fas fa-fw fa-trash"></button>';
                      rows = rows + '</td>';
                      rows = rows + '</tr>';
                  });
                  $('.show_pendidikan_polri').html(rows);
              },
              error: function(xhr, ajaxOptions, thrownError){
                          alert("Mohon Data Masukkan Dengan Tepat");
                      },
              complete: function(){
                  $('.ajax-loader').css("visibility", "hidden");
              }
          });
      } //tutup akhir tampil
      //Simpan
    $('#btn-simpan-pendidikan-polri').click(function(e){
        var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
        e.preventDefault();
        var nip_nrp = $("#modal-add-pendidikan-polri").find("input[name=nip_nrp]").val();
        var nama_pendidikan = $("#modal-add-pendidikan-polri").find("input[name=nama_pendidikan]").val();
        var tahun = $("#modal-add-pendidikan-polri").find("input[name=tahun]").val();
        var lulus_tidak = $("#modal-add-pendidikan-polri").find("select[name=lulus_tidak]").val();
        var lama_bulan = $("#modal-add-pendidikan-polri").find("input[name=lama_bulan]").val();
        var rangking = $("#modal-add-pendidikan-polri").find("input[name=rangking]").val();
        var file =$("#modal-add-pendidikan-polri").find("input[name=file]")[0].files[0];
        var form = new FormData();
        form.append('nip_nrp', nip_nrp);
        form.append('nama_pendidikan', nama_pendidikan);
        form.append('tahun', tahun);
        form.append('lulus_tidak', lulus_tidak);
        form.append('lama_bulan', lama_bulan);
        form.append('rangking', rangking);
        form.append('file', file);
        event.preventDefault();
            $.ajax({
                type : "POST",
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url  : '{{route('pendidikan_polri.store')}}',
                cache: false,
                contentType: false,
                processData: false,

                data : form,
                success: function(data){
                    console.log(data);
                    $("#modal-add-pendidikan-polri").find("input[name=nama_pendidikan]").val("");
                    $("#modal-add-pendidikan-polri").find("input[name=tahun]").val("");
                    $("#modal-add-pendidikan-polri").find("select[name=lulus_tidak]").val("");
                    $("#modal-add-pendidikan-polri").find("input[name=lama_bulan]").val("");
                    $("#modal-add-pendidikan-polri").find("input[name=rangking]").val("");
                    $("#modal-add-pendidikan-polri").find("input[name=file]").val("");
                    tampil_data_pendidikan_polri();
                    $('.modal').modal('hide');

                },
                error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                    $("select[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            }).done(function(data){
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })
    });
        /* Edit Post */
        $("body").on("click",".edit-item-pendidikan-polri",function(){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
            var id = $(this).parent("td").data('id');
            var nip_nrp=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var nama_pendidikan=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var tahun=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var lulus_tidak=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
            var lama_bulan=$(this).parent("td").prev("td").prev("td").prev("td").text();
            var rangking=$(this).parent("td").prev("td").prev("td").text();
            var file=$(this).parent("td").prev("td").text();
            console.log(rangking);
            // set
            $("#edit-pendidikan-polri").find("input[name='id']").val(id);
            $("#edit-pendidikan-polri").find("input[name='nip_nrp']").val(nip_nrp);
            $("#edit-pendidikan-polri").find("input[name='nama_pendidikan']").val(nama_pendidikan);
            $("#edit-pendidikan-polri").find("input[name='tahun']").val(tahun);
            (lulus_tidak == "Lulus" ?  $("#edit-pendidikan-polri").find("select[name=lulus_tidak]").val('Lulus') :  $("#edit-pendidikan-polri").find("select[name=lulus_tidak]").val('Tidak'));
            // $("#edit-pendidikan-polri").find("input[name='lulus_tidak']").val(lulus_tidak);
            $("#edit-pendidikan-polri").find("input[name='lama_bulan']").val(lama_bulan);
            $("#edit-pendidikan-polri").find("input[name='rangking']").val(rangking);
            $("#edit-pendidikan-polri").find("input[name='file_lama']").val(file);
            // current file
            $("#edit-pendidikan-polri #file_prev").html(file);
            $("#edit-pendidikan-polri .file_prev").attr("href",'{{ URL::asset('file/')}}'+'/'+file);
        });
          /* Updated  Post baru (Updated new Post) */
          $(".btn-edit-pendidikan-polri").click(function(e){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
              e.preventDefault();
              var id = $("#edit-pendidikan-polri").find("input[name='id']").val();
              var nip_nrp = $("#edit-pendidikan-polri").find("input[name='nip_nrp']").val();
              var nama_pendidikan= $("#edit-pendidikan-polri").find("input[name='nama_pendidikan']").val();
              var tahun= $("#edit-pendidikan-polri").find("input[name='tahun']").val();
              var lulus_tidak= $("#edit-pendidikan-polri").find("select[name='lulus_tidak']").val();
              var lama_bulan= $("#edit-pendidikan-polri").find("input[name='lama_bulan']").val();
              var rangking= $("#edit-pendidikan-polri").find("input[name='rangking']").val();
              var file =$("#edit-pendidikan-polri").find("input[name=file]")[0].files[0];
              var form = new FormData();
            form.append('id',id);
            form.append('nip_nrp', nip_nrp);
            form.append('nama_pendidikan', nama_pendidikan);
            form.append('tahun', tahun);
            form.append('lulus_tidak', lulus_tidak);
            form.append('lama_bulan', lama_bulan);
            form.append('rangking', rangking);
            form.append('file', file);
              $.ajax({
                cache: false,
                contentType: false,
                processData: false,
                  dataType: 'json',
                  type:'post',
                  url: '{{route('pendidikan_polri.update')}}',
                  data:form,
                   success: function(data){
                        $("#edit-pendidikan-polri").find("input[name=file]").val("");
                   },
                   error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                    $("select[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
              }).done(function(data){
                    tampil_data_pendidikan_polri();
                    $(".modal").modal('hide');
                    toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
                })

          })
        // klik delete
        $("body").on("click",".delete-pendidikan-polri",function(){
            var id = $(this).parent("td").data('id');
            $("#hapus-pendidikan-polri").find("input[name='id_hapus']").val(id);
        });
        /* Remove Post (Hapus) */
        $("#btn-hapus-pendidikan-polri").click(function(e){
            event.preventDefault();
            var id = $("#hapus-pendidikan-polri").find("input[name='id_hapus']").val();
            var c_obj = $(this).parents("tr");
            $.ajax({
                dataType: 'json',
                type:'POST',
                data:{id:id,_token: '{{csrf_token()}}'},
                url: '{{route('pendidikan_polri.delete')}}',
            }).done(function(data){
                c_obj.remove();
                toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                tampil_data_pendidikan_polri();
                $(".modal").modal('hide');
            });
        })
        $("body").on("click",".add-p-polri",function(){
        var form=$("body");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
        })
    })//end ready
</script>
<!----------------------------------------------------------------akhir pendidikan polri-------------------------------------------->

<!-----------------------------------------------------------------awal pendidikan umum--------------------------------------------->
<script>
    $(document).ready(function(){
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
      tampil_data_pendidikan_umum();  //pemanggilan fungsi
    //fungsi tampil
      function tampil_data_pendidikan_umum(){
          $.ajax({
              type  : 'GET',
              beforeSend: function(){
                  $('.ajax-loader').css("visibility", "visible");
              },
              url   : '/pendidikan_umum/'+nrp,
              async : true,
              dataType : 'json',
              success : function(data){
                  console.log(data);
                  var i;
                  var no=1;
                  var rows ='';
                  $.each( data, function( key, value ) {

                      rows = rows + '<tr>';
                      rows = rows + '<td>'+ no++ +'</td>';
                      rows = rows +'<td style="display:none">'+value.nip_nrp+'</td>';
                      rows = rows +'<td >'+value.jenjang_pendidikan+'</td>';
                      rows = rows +'<td >'+value.nama_sekolah+'</td>';
                      rows = rows + '<td>'+value.jurusan+'</td>';
                      rows = rows + '<td>'+value.kota+'</td>';
                      rows = rows + '<td>'+value.tahun_lulus+'</td>';
                      rows = rows + '<td>'+value.no_ijazah+'</td>';
                      rows = rows + '<td>'+'<a href=' +'{{ URL::asset('file/') }}'+'/'+value.file+'>'+value.file+'</a>'+'</td>';
                      rows = rows + '<td class="text-center" data-id="'+value.id+'">';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-pendidikan-umum" class="badge badge-success edit-item-pendidikan-umum"><span class="fas fa-fw fa-edit " ></a> ';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-pendidikan-umum" class="badge badge-danger delete-pendidikan-umum"><span class="fas fa-fw fa-trash"></button>';
                      rows = rows + '</td>';
                      rows = rows + '</tr>';
                  });
                  $('.show_pendidikan_umum').html(rows);
              },
              error: function(xhr, ajaxOptions, thrownError){
                          alert("Mohon Data Masukkan Dengan Tepat");
                      },
              complete: function(){
                  $('.ajax-loader').css("visibility", "hidden");
              }
          });
      } //tutup akhir tampil
      //Simpan
    $('#btn-simpan-pendidikan-umum').click(function(e){
        var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
        e.preventDefault();
        var nip_nrp = $("#modal-add-pendidikan-umum").find("input[name=nip_nrp]").val();
        var jenjang_pendidikan = $("#modal-add-pendidikan-umum").find("select[name=jenjang_pendidikan]").val();
        var nama_sekolah = $("#modal-add-pendidikan-umum").find("input[name=nama_sekolah]").val();
        var jurusan = $("#modal-add-pendidikan-umum").find("input[name=jurusan]").val();
        var kota = $("#modal-add-pendidikan-umum").find("input[name=kota]").val();
        var tahun_lulus = $("#modal-add-pendidikan-umum").find("input[name=tahun_lulus]").val();
        var no_ijazah = $("#modal-add-pendidikan-umum").find("input[name=no_ijazah]").val();
        var file =$("#modal-add-pendidikan-umum").find("input[name=file]")[0].files[0];

        var form = new FormData();
        form.append('nip_nrp', nip_nrp);
        form.append('jenjang_pendidikan', jenjang_pendidikan);
        form.append('nama_sekolah', nama_sekolah);
        form.append('jurusan', jurusan);
        form.append('kota', kota);
        form.append('tahun_lulus', tahun_lulus);
        form.append('no_ijazah', no_ijazah);
        form.append('file', file);
        event.preventDefault();
            $.ajax({
                type : "POST",
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url  : '{{route('pendidikan_umum.store')}}',
                cache: false,
                contentType: false,
                processData: false,
                data : form,
                success: function(data){
                    console.log(data);
                    $("#modal-add-pendidikan-umum").find("select[name=jenjang_pendidikan]").val("");
                    $("#modal-add-pendidikan-umum").find("input[name=nama_sekolah]").val("");
                    $("#modal-add-pendidikan-umum").find("input[name=jurusan]").val("");
                    $("#modal-add-pendidikan-umum").find("input[name=kota]").val("");
                    $("#modal-add-pendidikan-umum").find("input[name=tahun_lulus]").val("");
                    $("#modal-add-pendidikan-umum").find("input[name=no_ijazah]").val("");
                    $("#modal-add-pendidikan-umum").find("input[name=file]").val("");
                    tampil_data_pendidikan_umum();
                    $('.modal').modal('hide');

                },
                error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                        $("select[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            }).done(function(data){
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })
    });
        /* Edit Post */
        $("body").on("click",".edit-item-pendidikan-umum",function(){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
            var id = $(this).parent("td").data('id');
            var nip_nrp=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var jenjang_pendidikan=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var nama_sekolah=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var jurusan=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var kota=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
            var tahun_lulus=$(this).parent("td").prev("td").prev("td").prev("td").text();
            var no_ijazah=$(this).parent("td").prev("td").prev("td").text();
            var file=$(this).parent("td").prev("td").text();
            console.log(no_ijazah);
            // set
            $("#edit-pendidikan-umum").find("input[name='id']").val(id);
            $("#edit-pendidikan-umum").find("input[name='nip_nrp']").val(nip_nrp);

            if(jenjang_pendidikan =="SD"){
                $("#edit-pendidikan-umum").find("select[name=jenjang_pendidikan]").val('SD')
            }
            if(jenjang_pendidikan =="SLTP"){
                $("#edit-pendidikan-umum").find("select[name=jenjang_pendidikan]").val('SLTP')
            }
            if(jenjang_pendidikan =="SLTA"){
                $("#edit-pendidikan-umum").find("select[name=jenjang_pendidikan]").val('SLTA')
            }
            if(jenjang_pendidikan =="S1"){
                $("#edit-pendidikan-umum").find("select[name=jenjang_pendidikan]").val('S1')
            }
            if(jenjang_pendidikan =="S2"){
                $("#edit-pendidikan-umum").find("select[name=jenjang_pendidikan]").val('S2')
            }
            if(jenjang_pendidikan =="S3"){
                $("#edit-pendidikan-umum").find("select[name=jenjang_pendidikan]").val('S3')
            }
            $("#edit-pendidikan-umum").find("input[name='nama_sekolah']").val(nama_sekolah);
            $("#edit-pendidikan-umum").find("input[name='jurusan']").val(jurusan);
            $("#edit-pendidikan-umum").find("input[name='kota']").val(kota);
            $("#edit-pendidikan-umum").find("input[name='tahun_lulus']").val(tahun_lulus);
            $("#edit-pendidikan-umum").find("input[name='no_ijazah']").val(no_ijazah);
            $("#edit-pendidikan-umum").find("input[name='file_lama']").val(file);
            // current file
            $("#edit-pendidikan-umum #file_prev").html(file);
            $("#edit-pendidikan-umum .file_prev").attr("href",'{{ URL::asset('file/')}}'+'/'+file);
        });
          /* Updated  Post baru (Updated new Post) */
          $(".btn-edit-pendidikan-umum").click(function(e){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
              e.preventDefault();
              var id = $("#edit-pendidikan-umum").find("input[name='id']").val();
              var nip_nrp = $("#edit-pendidikan-umum").find("input[name='nip_nrp']").val();
              var jenjang_pendidikan= $("#edit-pendidikan-umum").find("select[name='jenjang_pendidikan']").val();
              var nama_sekolah= $("#edit-pendidikan-umum").find("input[name='nama_sekolah']").val();
              var jurusan= $("#edit-pendidikan-umum").find("input[name='jurusan']").val();
              var kota= $("#edit-pendidikan-umum").find("input[name='kota']").val();
              var tahun_lulus= $("#edit-pendidikan-umum").find("input[name='tahun_lulus']").val();
              var no_ijazah= $("#edit-pendidikan-umum").find("input[name='no_ijazah']").val();
              var file =$("#edit-pendidikan-umum").find("input[name=file]")[0].files[0];
              var form = new FormData();
            form.append('id',id);
            form.append('nip_nrp', nip_nrp);
            form.append('jenjang_pendidikan', jenjang_pendidikan);
            form.append('nama_sekolah', nama_sekolah);
            form.append('jurusan', jurusan);
            form.append('kota', kota);
            form.append('tahun_lulus', tahun_lulus);
            form.append('no_ijazah', no_ijazah);
            form.append('file', file);
              $.ajax({
                cache: false,
                contentType: false,
                processData: false,
                  dataType: 'json',
                  type:'post',
                  url: '{{route('pendidikan_umum.update')}}',
                  data:form,
                   success: function(data){
                       console.log(data);
                    $("#edit-pendidikan-umum").find("input[name=file]").val("");
                   }
              }).done(function(data){
                    tampil_data_pendidikan_umum();
                    $(".modal").modal('hide');
                    toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
                })

          })
        // klik delete
        $("body").on("click",".delete-pendidikan-umum",function(){
            var id = $(this).parent("td").data('id');
            $("#hapus-pendidikan-umum").find("input[name='id_hapus']").val(id);
        });
        /* Remove Post (Hapus) */
        $("#btn-hapus-pendidikan-umum").click(function(e){

            event.preventDefault();
            var id = $("#hapus-pendidikan-umum").find("input[name='id_hapus']").val();
            var c_obj = $(this).parents("tr");
            $.ajax({
                dataType: 'json',
                type:'POST',
                data:{id:id,_token: '{{csrf_token()}}'},
                url: '{{route('pendidikan_umum.delete')}}',
            }).done(function(data){
                c_obj.remove();
                toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                tampil_data_pendidikan_umum();
                $(".modal").modal('hide');
            });
        })
        $("body").on("click",".add-p-umum",function(){
        var form=$("body");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
        })
    })//end ready
</script>
<!----------------------------------------------------------------akhir pendidikan umum-------------------------------------------->

<!-----------------------------------------------------------------awal pendidikan kejuruan--------------------------------------------->
<script>
    $(document).ready(function(){
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
      tampil_data_pendidikan_kejuruan();  //pemanggilan fungsi
    //fungsi tampil
      function tampil_data_pendidikan_kejuruan(){
          $.ajax({
              type  : 'GET',
              beforeSend: function(){
                  $('.ajax-loader').css("visibility", "visible");
              },
              url   : '/pendidikan_kejuruan/'+nrp,
              async : true,
              dataType : 'json',
              success : function(data){
                  console.log(data);
                  var i;
                  var no=1;
                  var rows ='';
                  $.each( data, function( key, value ) {
                      rows = rows + '<tr>';
                      rows = rows + '<td>'+ no++ +'</td>';
                      rows = rows +'<td style="display:none">'+value.nip_nrp+'</td>';
                      rows = rows +'<td >'+value.nama_pendidikan+'</td>';
                      rows = rows +'<td >'+value.kota+'</td>';
                      rows = rows + '<td>'+value.tahun_lulus+'</td>';
                      rows = rows + '<td>'+value.lama_bulan+'</td>';
                      rows = rows + '<td>'+value.rangking+'</td>';
                      rows = rows + '<td>'+value.is_lulus_tidak+'</td>';
                      rows = rows + '<td>'+value.keterangan+'</td>';
                      rows = rows + '<td>'+'<a href=' +'{{ URL::asset('file/') }}'+'/'+value.file+'>'+value.file+'</a>'+'</td>';
                      rows = rows + '<td class="text-center" data-id="'+value.id+'">';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-pendidikan-kejuruan" class="badge badge-success edit-item-pendidikan-kejuruan"><span class="fas fa-fw fa-edit " ></a> ';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-pendidikan-kejuruan" class="badge badge-danger delete-pendidikan-kejuruan"><span class="fas fa-fw fa-trash"></button>';
                      rows = rows + '</td>';
                      rows = rows + '</tr>';
                  });
                  $('.show_pendidikan_kejuruan').html(rows);
              },
              error: function(xhr, ajaxOptions, thrownError){
                          alert("Mohon Data Masukkan Dengan Tepat");
                      },
              complete: function(){
                  $('.ajax-loader').css("visibility", "hidden");
              }
          });
      } //tutup akhir tampil
      //Simpan
    $('#btn-simpan-pendidikan-kejuruan').click(function(e){
        var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
        e.preventDefault();
        var nip_nrp = $("#modal-add-pendidikan-kejuruan").find("input[name=nip_nrp]").val();
        var nama_pendidikan = $("#modal-add-pendidikan-kejuruan").find("input[name=nama_pendidikan]").val();
        var kota = $("#modal-add-pendidikan-kejuruan").find("input[name=kota]").val();
        var tahun_lulus = $("#modal-add-pendidikan-kejuruan").find("input[name=tahun_lulus]").val();
        var lama_bulan = $("#modal-add-pendidikan-kejuruan").find("input[name=lama_bulan]").val();
        var rangking = $("#modal-add-pendidikan-kejuruan").find("input[name=rangking]").val();
        var is_lulus_tidak = $("#modal-add-pendidikan-kejuruan").find("select[name=is_lulus_tidak]").val();
        var keterangan = $("#modal-add-pendidikan-kejuruan").find("input[name=keterangan]").val();
        var file =$("#modal-add-pendidikan-kejuruan").find("input[name=file]")[0].files[0];
        //
        var form = new FormData();
        form.append('nip_nrp', nip_nrp);
        form.append('nama_pendidikan', nama_pendidikan);
        form.append('kota', kota);
        form.append('tahun_lulus', tahun_lulus);
        form.append('lama_bulan', lama_bulan);
        form.append('rangking', rangking);
        form.append('is_lulus_tidak', is_lulus_tidak);
        form.append('keterangan', keterangan);
        form.append('file', file);
        event.preventDefault();
            $.ajax({
                type : "POST",
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url  : '{{route('pendidikan_kejuruan.store')}}',
                cache: false,
                contentType: false,
                processData: false,
                data : form,
                success: function(data){
                    console.log(data);
                    $("#modal-add-pendidikan-kejuruan").find("input[name=nama_pendidikan]").val("");
                    $("#modal-add-pendidikan-kejuruan").find("input[name=kota]").val("");
                    $("#modal-add-pendidikan-kejuruan").find("input[name=tahun_lulus]").val("");
                    $("#modal-add-pendidikan-kejuruan").find("input[name=lama_bulan]").val("");
                    $("#modal-add-pendidikan-kejuruan").find("input[name=rangking]").val("");
                    $("#modal-add-pendidikan-kejuruan").find("select[name=is_lulus_tidak]").val("");
                    $("#modal-add-pendidikan-kejuruan").find("input[name=keterangan]").val("");
                    $("#modal-add-pendidikan-kejuruan").find("input[name=file]").val("");
                    tampil_data_pendidikan_kejuruan();
                    $('.modal').modal('hide');
                },
                error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                    $("select[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            }).done(function(data){
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })
    });
        /* Edit Post */
        $("body").on("click",".edit-item-pendidikan-kejuruan",function(){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
            var id = $(this).parent("td").data('id');
            var nip_nrp=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var nama_pendidikan=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var kota=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var tahun_lulus=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var lama_bulan=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var rangking=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
            var is_lulus_tidak=$(this).parent("td").prev("td").prev("td").prev("td").text();
            var keterangan=$(this).parent("td").prev("td").prev("td").text();
            var file=$(this).parent("td").prev("td").text();
            console.log(file);
            // set
            $("#edit-pendidikan-kejuruan").find("input[name='id']").val(id);
            $("#edit-pendidikan-kejuruan").find("input[name='nip_nrp']").val(nip_nrp);
            $("#edit-pendidikan-kejuruan").find("input[name='nama_pendidikan']").val(nama_pendidikan);
            $("#edit-pendidikan-kejuruan").find("input[name='kota']").val(kota);
            $("#edit-pendidikan-kejuruan").find("input[name='tahun_lulus']").val(tahun_lulus);
            $("#edit-pendidikan-kejuruan").find("input[name='lama_bulan']").val(lama_bulan);
            $("#edit-pendidikan-kejuruan").find("input[name='rangking']").val(rangking);
            if(is_lulus_tidak =="Lulus"){
                $("#edit-pendidikan-kejuruan").find("select[name=is_lulus_tidak]").val('Lulus')
            }
            if(is_lulus_tidak =="Tidak"){
                $("#edit-pendidikan-kejuruan").find("select[name=is_lulus_tidak]").val('Tidak')
            }
            $("#edit-pendidikan-kejuruan").find("input[name='keterangan']").val(keterangan);
            // current file
            $("#edit-pendidikan-kejuruan #file_prev").html(file);
            $("#edit-pendidikan-kejuruan .file_prev").attr("href",'{{ URL::asset('file/')}}'+'/'+file);
        });
          /* Updated  Post baru (Updated new Post) */
          $(".btn-edit-pendidikan-kejuruan").click(function(e){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
              e.preventDefault();
              var id = $("#edit-pendidikan-kejuruan").find("input[name='id']").val();
              var nip_nrp = $("#edit-pendidikan-kejuruan").find("input[name='nip_nrp']").val();
              var nama_pendidikan= $("#edit-pendidikan-kejuruan").find("input[name='nama_pendidikan']").val();
              var kota= $("#edit-pendidikan-kejuruan").find("input[name='kota']").val();
              var tahun_lulus= $("#edit-pendidikan-kejuruan").find("input[name='tahun_lulus']").val();
              var lama_bulan= $("#edit-pendidikan-kejuruan").find("input[name='lama_bulan']").val();
              var rangking= $("#edit-pendidikan-kejuruan").find("input[name='rangking']").val();
              var is_lulus_tidak= $("#edit-pendidikan-kejuruan").find("select[name='is_lulus_tidak']").val();
              var keterangan= $("#edit-pendidikan-kejuruan").find("input[name='keterangan']").val();
              var file =$("#edit-pendidikan-kejuruan").find("input[name=file]")[0].files[0];
              var form = new FormData();
            form.append('id',id);
            form.append('nip_nrp', nip_nrp);
            form.append('nama_pendidikan', nama_pendidikan);
            form.append('kota', kota);
            form.append('tahun_lulus', tahun_lulus);
            form.append('lama_bulan', lama_bulan);
            form.append('rangking', rangking);
            form.append('is_lulus_tidak', is_lulus_tidak);
            form.append('keterangan', keterangan);
            form.append('file', file);
              $.ajax({
                cache: false,
                contentType: false,
                processData: false,
                  dataType: 'json',
                  type:'post',
                  url: '{{route('pendidikan_kejuruan.update')}}',
                  data:form,
                   success: function(data){
                       console.log(data);
                    $("#edit-pendidikan-kejuruan").find("input[name=file]").val("");
                   },
                   error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                    $("select[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
              }).done(function(data){
                    tampil_data_pendidikan_kejuruan();
                    $(".modal").modal('hide');
                    toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
                })

          })
        // klik delete
        $("body").on("click",".delete-pendidikan-kejuruan",function(){
            var id = $(this).parent("td").data('id');
            $("#hapus-pendidikan-kejuruan").find("input[name='id_hapus']").val(id);
        });
        /* Remove Post (Hapus) */
        $("#btn-hapus-pendidikan-kejuruan").click(function(e){
            event.preventDefault();
            var id = $("#hapus-pendidikan-kejuruan").find("input[name='id_hapus']").val();
            var c_obj = $(this).parents("tr");
            $.ajax({
                dataType: 'json',
                type:'POST',
                data:{id:id,_token: '{{csrf_token()}}'},
                url: '{{route('pendidikan_kejuruan.delete')}}',
            }).done(function(data){
                c_obj.remove();
                toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                tampil_data_pendidikan_kejuruan();
                $(".modal").modal('hide');
            });
        })
        $("body").on("click",".add-p-kejuruan",function(){
        var form=$("body");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
        })

    })//end ready
</script>
<!----------------------------------------------------------------akhir pendidikan kejuruan-------------------------------------------->


<!-------------------------------------------------------------awal pendidikan non formal--------------------------------------------->
<script>
    $(document).ready(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
        tampil_data_pendidikan_non_formal();  //pemanggilan fungsi
    //fungsi tampil
        function tampil_data_pendidikan_non_formal(){
            $.ajax({
                type  : 'GET',
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url   : '/pendidikan_non_formal/'+nrp,
                async : true,
                dataType : 'json',
                success : function(data){
                    console.log(data);
                    var i;
                    var no=1;
                    var rows ='';
                    $.each( data, function( key, value ) {
                        rows = rows + '<tr>';
                        rows = rows + '<td>'+ no++ +'</td>';
                        rows = rows +'<td style="display:none">'+value.nip_nrp+'</td>';
                        rows = rows +'<td >'+value.nama_pendidikan+'</td>';
                        rows = rows +'<td >'+value.lama_pendidikan+'</td>';
                        rows = rows + '<td>'+value.tahun_pendidikan+'</td>';
                        rows = rows + '<td>'+value.tempat_pendidikan+'</td>';
                        rows = rows + '<td>'+value.keterangan+'</td>';
                        rows = rows + '<td>'+'<a href=' +'{{ URL::asset('file/') }}'+'/'+value.file+'>'+value.file+'</a>'+'</td>';
                        rows = rows + '<td class="text-center" data-id="'+value.id+'">';
                        rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-pendidikan-non-formal" class="badge badge-success edit-item-pendidikan-non-formal"><span class="fas fa-fw fa-edit " ></a> ';
                        rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-pendidikan-non-formal" class="badge badge-danger delete-pendidikan-non-formal"><span class="fas fa-fw fa-trash"></button>';
                        rows = rows + '</td>';
                        rows = rows + '</tr>';
                    });
                    $('.show_pendidikan_non_formal').html(rows);
                },
                error: function(xhr, ajaxOptions, thrownError){
                            alert("Mohon Data Masukkan Dengan Tepat");
                        },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            });
        } //tutup akhir tampil
        //Simpan
    $('#btn-simpan-pendidikan-non-formal').click(function(e){
        var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
        e.preventDefault();
        var nip_nrp = $("#modal-add-pendidikan-non-formal").find("input[name=nip_nrp]").val();
        var nama_pendidikan = $("#modal-add-pendidikan-non-formal").find("input[name=nama_pendidikan]").val();
        var lama_pendidikan = $("#modal-add-pendidikan-non-formal").find("input[name=lama_pendidikan]").val();
        var tahun_pendidikan = $("#modal-add-pendidikan-non-formal").find("input[name=tahun_pendidikan]").val();
        var tempat_pendidikan = $("#modal-add-pendidikan-non-formal").find("input[name=tempat_pendidikan]").val();
        var keterangan = $("#modal-add-pendidikan-non-formal").find("input[name=keterangan]").val();
        var file =$("#modal-add-pendidikan-non-formal").find("input[name=file]")[0].files[0];
        //
        var form = new FormData();
        form.append('nip_nrp', nip_nrp);
        form.append('nama_pendidikan', nama_pendidikan);
        form.append('lama_pendidikan', lama_pendidikan);
        form.append('tahun_pendidikan', tahun_pendidikan);
        form.append('tempat_pendidikan', tempat_pendidikan);
        form.append('keterangan', keterangan);
        form.append('file', file);
        event.preventDefault();
            $.ajax({
                type : "POST",
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url  : '{{route('pendidikan_non_formal.store')}}',
                cache: false,
                contentType: false,
                processData: false,
                data : form,
                success: function(data){
                    console.log(data);
                    $("#modal-add-pendidikan-non-formal").find("input[name=nama_pendidikan]").val("");
                    $("#modal-add-pendidikan-non-formal").find("input[name=lama_pendidikan]").val("");
                    $("#modal-add-pendidikan-non-formal").find("input[name=tahun_pendidikan]").val("");
                    $("#modal-add-pendidikan-non-formal").find("input[name=tempat_pendidikan]").val("");
                    $("#modal-add-pendidikan-non-formal").find("input[name=keterangan]").val("");
                    $("#modal-add-pendidikan-non-formal").find("input[name=file]").val("");
                    tampil_data_pendidikan_non_formal();
                    $('.modal').modal('hide');

                },
                error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            }).done(function(data){
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })
    });
        /* Edit Post */
        $("body").on("click",".edit-item-pendidikan-non-formal",function(){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
            var id = $(this).parent("td").data('id');
            var nip_nrp=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var nama_pendidikan=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var lama_pendidikan=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var tahun_pendidikan=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
            var tempat_pendidikan=$(this).parent("td").prev("td").prev("td").prev("td").text();
            var keterangan=$(this).parent("td").prev("td").prev("td").text();
            var file=$(this).parent("td").prev("td").text();
            // console.log(file);
            // set
            $("#edit-pendidikan-non-formal").find("input[name='id']").val(id);
            $("#edit-pendidikan-non-formal").find("input[name='nip_nrp']").val(nip_nrp);
            $("#edit-pendidikan-non-formal").find("input[name='nama_pendidikan']").val(nama_pendidikan);
            $("#edit-pendidikan-non-formal").find("input[name='lama_pendidikan']").val(lama_pendidikan);
            $("#edit-pendidikan-non-formal").find("input[name='tahun_pendidikan']").val(tahun_pendidikan);
            $("#edit-pendidikan-non-formal").find("input[name='tempat_pendidikan']").val(tempat_pendidikan);
            $("#edit-pendidikan-non-formal").find("input[name='keterangan']").val(keterangan);
            // current file
            $("#edit-pendidikan-non-formal #file_prev").html(file);
            $("#edit-pendidikan-non-formal .file_prev").attr("href",'{{ URL::asset('file/')}}'+'/'+file);
        });
            /* Updated  Post baru (Updated new Post) */
            $(".btn-edit-pendidikan-non-formal").click(function(e){
                var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
                e.preventDefault();
                var id = $("#edit-pendidikan-non-formal").find("input[name='id']").val();
                var nip_nrp = $("#edit-pendidikan-non-formal").find("input[name='nip_nrp']").val();
                var nama_pendidikan= $("#edit-pendidikan-non-formal").find("input[name='nama_pendidikan']").val();
                var lama_pendidikan= $("#edit-pendidikan-non-formal").find("input[name='lama_pendidikan']").val();
                var tahun_pendidikan= $("#edit-pendidikan-non-formal").find("input[name='tahun_pendidikan']").val();
                var tempat_pendidikan= $("#edit-pendidikan-non-formal").find("input[name='tempat_pendidikan']").val();
                var keterangan= $("#edit-pendidikan-non-formal").find("input[name='keterangan']").val();
                var file =$("#edit-pendidikan-non-formal").find("input[name=file]")[0].files[0];
                var form = new FormData();
            form.append('id',id);
            form.append('nip_nrp', nip_nrp);
            form.append('nama_pendidikan', nama_pendidikan);
            form.append('lama_pendidikan', lama_pendidikan);
            form.append('tahun_pendidikan', tahun_pendidikan);
            form.append('tempat_pendidikan', tempat_pendidikan);
            form.append('keterangan', keterangan);
            form.append('file', file);
                $.ajax({
                cache: false,
                contentType: false,
                processData: false,
                    dataType: 'json',
                    type:'post',
                    url: '{{route('pendidikan_non_formal.update')}}',
                    data:form,
                    success: function(data){
                        console.log(data);
                    $("#edit-pendidikan-non-formal").find("input[name=file]").val("");
                    },
                    error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
                }).done(function(data){
                    tampil_data_pendidikan_non_formal();
                    $(".modal").modal('hide');
                    toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
                })

            })
        // klik delete
        $("body").on("click",".delete-pendidikan-non-formal",function(){
            var id = $(this).parent("td").data('id');
            $("#hapus-pendidikan-non-formal").find("input[name='id_hapus']").val(id);
        });
        /* Remove Post (Hapus) */
        $("#btn-hapus-pendidikan-non-formal").click(function(e){
            event.preventDefault();
            var id = $("#hapus-pendidikan-non-formal").find("input[name='id_hapus']").val();
            var c_obj = $(this).parents("tr");
            $.ajax({
                dataType: 'json',
                type:'POST',
                data:{id:id,_token: '{{csrf_token()}}'},
                url: '{{route('pendidikan_non_formal.delete')}}',
            }).done(function(data){
                c_obj.remove();
                toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                tampil_data_pendidikan_non_formal();
                $(".modal").modal('hide');
            });
        })
        $("body").on("click",".add-p-non-formal",function(){
        var form=$("body");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
        })
    })//end ready
</script>
<!-------------------------------------------------------------akhir pendidikan non formal-------------------------------------------->

<!----------------------------------------------------------------awal mutasi keluar--------------------------------------------->
<script>
    $(document).ready(function(){
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
      tampil_data_mutasi_keluar();  //pemanggilan fungsi
    //fungsi tampil
      function tampil_data_mutasi_keluar(){
          $.ajax({
              type  : 'GET',
              beforeSend: function(){
                  $('.ajax-loader').css("visibility", "visible");
              },
              url   : '/mutasi_keluar/'+nrp,
              async : true,
              dataType : 'json',
              success : function(data){
                  console.log(data);
                  var i;
                  var no=1;
                  var rows ='';
                  $.each( data, function( key, value ) {
                      rows = rows + '<tr>';
                      rows = rows + '<td>'+ no++ +'</td>';
                      rows = rows +'<td style="display:none">'+value.nip_nrp+'</td>';
                      rows = rows +'<td >'+value.tempat_tujuan+'</td>';
                      rows = rows +'<td >'+value.nomor_sk+'</td>';
                      rows = rows + '<td>'+value.pejabat+'</td>';
                      rows = rows + '<td>'+value.tanggal_sk+'</td>';
                      rows = rows + '<td>'+value.tmt+'</td>';
                      rows = rows + '<td>'+value.keterangan+'</td>';
                      rows = rows + '<td class="text-center" data-id="'+value.id+'">';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-mutasi-keluar" class="badge badge-success edit-item-mutasi-keluar"><span class="fas fa-fw fa-edit " ></a> ';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-mutasi-keluar" class="badge badge-danger delete-mutasi-keluar"><span class="fas fa-fw fa-trash"></button>';
                      rows = rows + '</td>';
                      rows = rows + '</tr>';
                  });
                  $('.show_mutasi_keluar').html(rows);
              },
              error: function(xhr, ajaxOptions, thrownError){
                          alert("Mohon Data Masukkan Dengan Tepat");
                      },
              complete: function(){
                  $('.ajax-loader').css("visibility", "hidden");
              }
          });
      } //tutup akhir tampil
      //Simpan
    $('#btn_simpan_mutasi_keluar').click(function(e){
        var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
        e.preventDefault();
        var nip_nrp = $("#modal-add-mutasi-keluar").find("input[name=nip_nrp]").val();
        var tempat_tujuan = $("#modal-add-mutasi-keluar").find("input[name=tempat_tujuan]").val();
        var nomor_sk = $("#modal-add-mutasi-keluar").find("input[name=nomor_sk]").val();
        var pejabat = $("#modal-add-mutasi-keluar").find("input[name=pejabat]").val();
        var tanggal_sk = $("#modal-add-mutasi-keluar").find("input[name=tanggal_sk]").val();
        var tmt = $("#modal-add-mutasi-keluar").find("input[name=tmt]").val();
        var keterangan = $("#modal-add-mutasi-keluar").find("input[name=keterangan]").val();
        event.preventDefault();
            $.ajax({
                type : "POST",
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url  : '{{route('mutasi_keluar.store')}}',
                data : {nip_nrp:nip_nrp,tempat_tujuan:tempat_tujuan,nomor_sk:nomor_sk,pejabat:pejabat,tanggal_sk:tanggal_sk,tmt:tmt,keterangan:keterangan},
                success: function(data){
                    console.log(data);
                    $("#modal-add-mutasi-keluar").find("input[name=tempat_tujuan]").val("");
                    $("#modal-add-mutasi-keluar").find("input[name=nomor_sk]").val("");
                    $("#modal-add-mutasi-keluar").find("input[name=pejabat]").val("");
                    $("#modal-add-mutasi-keluar").find("input[name=tanggal_sk]").val("");
                    $("#modal-add-mutasi-keluar").find("input[name=tmt]").val("");
                    $("#modal-add-mutasi-keluar").find("input[name=keterangan]").val("");
                    tampil_data_mutasi_keluar();
                    $('.modal').modal('hide');

                },
                error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            }).done(function(data){
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })
    });
        /* Edit Post */
        $("body").on("click",".edit-item-mutasi-keluar",function(){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
            var id = $(this).parent("td").data('id');
            var nip_nrp=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var tempat_tujuan=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var nomor_sk=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var pejabat=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
            var tanggal_sk=$(this).parent("td").prev("td").prev("td").prev("td").text();
            var tmt=$(this).parent("td").prev("td").prev("td").text();
            var keterangan=$(this).parent("td").prev("td").text();

            // set
            $("#edit-mutasi-keluar").find("input[name='id']").val(id);
            $("#edit-mutasi-keluar").find("input[name='nip_nrp']").val(nip_nrp);
            $("#edit-mutasi-keluar").find("input[name='tempat_tujuan']").val(tempat_tujuan);
            $("#edit-mutasi-keluar").find("input[name='nomor_sk']").val(nomor_sk);
            $("#edit-mutasi-keluar").find("input[name='pejabat']").val(pejabat);
            $("#edit-mutasi-keluar").find("input[name='tanggal_sk']").val(tanggal_sk);
            $("#edit-mutasi-keluar").find("input[name='tmt']").val(tmt);
            $("#edit-mutasi-keluar").find("input[name='keterangan']").val(keterangan);
        });
          /* Updated  Post baru (Updated new Post) */
          $(".btn-edit-mutasi-keluar").click(function(e){
            var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
              e.preventDefault();
              var id = $("#edit-mutasi-keluar").find("input[name='id']").val();
              var nip_nrp = $("#edit-mutasi-keluar").find("input[name='nip_nrp']").val();
              var tempat_tujuan= $("#edit-mutasi-keluar").find("input[name='tempat_tujuan']").val();
              var nomor_sk= $("#edit-mutasi-keluar").find("input[name='nomor_sk']").val();
              var pejabat= $("#edit-mutasi-keluar").find("input[name='pejabat']").val();
              var tanggal_sk= $("#edit-mutasi-keluar").find("input[name='tanggal_sk']").val();
              var tmt= $("#edit-mutasi-keluar").find("input[name='tmt']").val();
              var keterangan= $("#edit-mutasi-keluar").find("input[name='keterangan']").val();
              $.ajax({
                  dataType: 'json',
                  type:'post',
                  url: '{{route('mutasi_keluar.update')}}',
                  data:{id:id,nip_nrp:nip_nrp,tempat_tujuan:tempat_tujuan,nomor_sk:nomor_sk,pejabat:pejabat,tanggal_sk:tanggal_sk,tmt:tmt,keterangan:keterangan},
                   success: function(data){
                        console.log(data);
                   },
                   error: function(xhr){
                            var res=xhr.responseJSON;
                            if($.isEmptyObject(res)==false){
                                $.each(res.errors,function(key,value){
                                    $("input[name="+key+"]")
                                        .closest('.form-group')
                                        .addClass('has-error')
                                        .append('<span class="help-block"><strong>'+value+'</strong></span>');
                                })
                            }
                    },
              }).done(function(data){
                    tampil_data_mutasi_keluar();
                    $(".modal").modal('hide');
                    toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
                })

          })
        // klik delete
        $("body").on("click",".delete-mutasi-keluar",function(){
            var id = $(this).parent("td").data('id');
            var nip_nrp=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
    ol,        $("#hapus-mutasi-keluar").find("input[name='id_hapus']").val(id);
            $("#hapus-mutasi-keluar").find("input[name='nip_nrp']").val(nip_nrp);
        });
        /* Remove Post (Hapus) */
        $("#btn-hapus-mutasi-keluar").click(function(e){
            event.preventDefault();
            var id = $("#hapus-mutasi-keluar").find("input[name='id_hapus']").val();
            var nip_nrp = $("#hapus-mutasi-keluar").find("input[name='nip_nrp']").val();
            var c_obj = $(this).parents("tr");
            $.ajax({
                dataType: 'json',
                type:'POST',
                data:{nip_nrp:nip_nrp,id:id,_token: '{{csrf_token()}}'},
                url: '{{route('mutasi_keluar.delete')}}',
            }).done(function(data){
                c_obj.remove();
                toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                tampil_data_mutasi_keluar();
                $(".modal").modal('hide');
            });
        })
        $("body").on("click",".mutasi-keluar",function(){
        var form=$("body");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
        })
    })//end ready
</script>
<!----------------------------------------------------------------akhir mutasi keluar-------------------------------------------->

<!----------------------------------------------------------------awal mutasi internal--------------------------------------------->
<script>
    $(document).ready(function(){
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
      tampil_data_mutasi_internal();  //pemanggilan fungsi
    //fungsi tampil
      function tampil_data_mutasi_internal(){
          $.ajax({
              type  : 'GET',
              beforeSend: function(){
                  $('.ajax-loader').css("visibility", "visible");
              },
              url   : '/mutasi_internal/'+nrp,
              async : true,
              dataType : 'json',
              success : function(data){
                //   console.log(data);
                  var i;
                  var no=1;
                  var rows ='';
                  $.each( data, function( key, value ) {
                      rows = rows + '<tr>';
                      rows = rows + '<td>'+ no++ +'</td>';
                      rows = rows +'<td style="display:none">'+value.nip_nrp+'</td>';
                      rows = rows +'<td style="display:none">'+value.id_unit_kerja+'</td>';
                      rows = rows +'<td style="display:none">'+value.id_divisi+'</td>';
                      rows = rows +'<td >'+value.unit_kerja.nama_unit_kerja+'</td>';
                      rows = rows +'<td >'+value.divisi.nama_devisi+'</td>';
                      rows = rows + '<td>'+value.nomor_sk+'</td>';
                      rows = rows + '<td>'+value.pejabat+'</td>';
                      rows = rows + '<td>'+value.tanggal_sk+'</td>';
                      rows = rows + '<td>'+value.tmt+'</td>';
                      rows = rows + '<td>'+value.keterangan+'</td>';
                      rows = rows + '<td class="text-center" data-id="'+value.id+'">';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-mutasi-internal" class="badge badge-success edit-item-mutasi-internal"><span class="fas fa-fw fa-edit " ></a> ';
                      rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-mutasi-internal" class="badge badge-danger delete-mutasi-internal"><span class="fas fa-fw fa-trash"></button>';
                      rows = rows + '</td>';
                      rows = rows + '</tr>';
                  });
                  $('.show_mutasi_internal').html(rows);
              },
              error: function(xhr, ajaxOptions, thrownError){
                          alert("Mohon Data Masukkan Dengan Tepat");
                      },
              complete: function(){
                  $('.ajax-loader').css("visibility", "hidden");
              }
          });
      } //tutup akhir tampil
      //Simpan
       // ajax get divisi
       $('#add_id_unit_kerja').change(function(){
            var divisi=$(this).val();
            $.ajax({
                type:'POST',
                url:'{{route('mutasi_internal.divisi')}}',
                data:{id:divisi},
                success:function(data){
                    $('#add_id_divisi').html(data);
                    console.log(data);
                }
            })
        })
    $('#btn_simpan_mutasi_internal').click(function(e){
        e.preventDefault();
        var nip_nrp = $("#modal-add-mutasi-internal").find("input[name=nip_nrp]").val();
        var id_unit_kerja = $("#modal-add-mutasi-internal").find("select[name=id_unit_kerja]").val();
        var id_divisi = $("#modal-add-mutasi-internal").find("select[name=id_divisi]").val();
        var nomor_sk = $("#modal-add-mutasi-internal").find("input[name=nomor_sk]").val();
        var pejabat = $("#modal-add-mutasi-internal").find("input[name=pejabat]").val();
        var tanggal_sk = $("#modal-add-mutasi-internal").find("input[name=tanggal_sk]").val();
        var tmt = $("#modal-add-mutasi-internal").find("input[name=tmt]").val();
        var keterangan = $("#modal-add-mutasi-internal").find("input[name=keterangan]").val();
        event.preventDefault();
            $.ajax({
                type : "POST",
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url  : '{{route('mutasi_internal.store')}}',
                data : {nip_nrp:nip_nrp,id_unit_kerja:id_unit_kerja,id_divisi:id_divisi,nomor_sk:nomor_sk,pejabat:pejabat,tanggal_sk:tanggal_sk,tmt:tmt,keterangan:keterangan},
                success: function(data){
                // console.log(data);
                $("#modal-add-mutasi-internal").find("select[name=id_unit_kerja]").val("");
                $("#modal-add-mutasi-internal").find("select[name=id_divisi]").val("");
                $("#modal-add-mutasi-internal").find("input[name=nomor_sk]").val("");
                $("#modal-add-mutasi-internal").find("input[name=pejabat]").val("");
                $("#modal-add-mutasi-internal").find("input[name=tanggal_sk]").val("");
                $("#modal-add-mutasi-internal").find("input[name=tmt]").val("");
                $("#modal-add-mutasi-internal").find("input[name=keterangan]").val("");
                    tampil_data_mutasi_internal();
                    $('.modal').modal('hide');

                },
                error: function(xhr, ajaxOptions, thrownError){
                        alert("Mohon Data Masukkan Dengan Tepat");
                    },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            }).done(function(data){
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })
    });
        $('#id_unit_kerja').change(function(){
            var divisi=$(this).val();
            $.ajax({
                type:'POST',
                url:'{{route('mutasi_internal.divisi')}}',
                data:{id:divisi},
                success:function(data){
                    $('#id_divisi').html(data);
                    console.log(data);
                }
            })
        })
        /* Edit Post */
        $("body").on("click",".edit-item-mutasi-internal",function(){
            var id = $(this).parent("td").data('id');
            var nip_nrp=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var id_unit_kerja=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var id_divisi=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var nama_unit_kerja=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var nama_divisi=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var nomor_sk=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            var pejabat=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
            var tanggal_sk=$(this).parent("td").prev("td").prev("td").prev("td").text();
            var tmt=$(this).parent("td").prev("td").prev("td").text();
            var keterangan=$(this).parent("td").prev("td").text();
            // console.log(id_unit_kerja);
            $.ajax({
                type:'POST',
                url:'{{route('mutasi_internal.editdivisi')}}',
                data:{id:id_unit_kerja,selected:id_divisi},
                success:function(data){
                    $('#edit-mutasi-internal #id_divisi').html(data);
                }
            })
            var i;
            var x= document.getElementById("id_unit_kerja");
            for(i=0; i<x.options.length;i++){
                if(x.options[i].value == id_unit_kerja){
                    $("#edit-mutasi-internal").find("select[name=id_unit_kerja]").val(id_unit_kerja);
                }
                else{
                    $("#edit-mutasi-internal").find("select[name=id_unit_kerja]").val();

                }
            }
            $("#edit-mutasi-internal").find("input[name='id']").val(id);
            $("#edit-mutasi-internal").find("input[name='nip_nrp']").val(nip_nrp);
            $("#edit-mutasi-internal").find("input[name='nomor_sk']").val(nomor_sk);
            $("#edit-mutasi-internal").find("input[name='pejabat']").val(pejabat);
            $("#edit-mutasi-internal").find("input[name='tanggal_sk']").val(tanggal_sk);
            $("#edit-mutasi-internal").find("input[name='tmt']").val(tmt);
            $("#edit-mutasi-internal").find("input[name='keterangan']").val(keterangan);
        });
          /* Updated  Post baru (Updated new Post) */
          $(".btn-edit-mutasi-internal").click(function(e){
            e.preventDefault();
            var id = $("#edit-mutasi-internal").find("input[name=id]").val();
            var nip_nrp = $("#edit-mutasi-internal").find("input[name=nip_nrp]").val();
            var id_unit_kerja = $("#edit-mutasi-internal").find("select[name=id_unit_kerja]").val();
            var id_divisi = $("#edit-mutasi-internal").find("select[name=id_divisi]").val();
            var nomor_sk = $("#edit-mutasi-internal").find("input[name=nomor_sk]").val();
            var pejabat = $("#edit-mutasi-internal").find("input[name=pejabat]").val();
            var tanggal_sk = $("#edit-mutasi-internal").find("input[name=tanggal_sk]").val();
            var tmt = $("#edit-mutasi-internal").find("input[name=tmt]").val();
            var keterangan = $("#edit-mutasi-internal").find("input[name=keterangan]").val();

              $.ajax({
                  dataType: 'json',
                  type:'post',
                  url: '{{route('mutasi_internal.update')}}',
                  data:{id:id,nip_nrp:nip_nrp,id_unit_kerja:id_unit_kerja,id_divisi:id_divisi,nomor_sk:nomor_sk,pejabat:pejabat,tanggal_sk:tanggal_sk,tmt:tmt,keterangan:keterangan},
                   success: function(data){
                        console.log(data);
                   }
              }).done(function(data){
                    tampil_data_mutasi_internal();
                    $(".modal").modal('hide');
                    toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
                })

          })
        // klik delete
        $("body").on("click",".delete-mutasi-internal",function(){
            var id = $(this).parent("td").data('id');
           var nip_nrp=$(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
            $("#hapus-mutasi-internal").find("input[name='id_hapus']").val(id);
            $("#hapus-mutasi-internal").find("input[name='nip_nrp']").val(nip_nrp);

        });
        /* Remove Post (Hapus) */
        $("#btn-hapus-mutasi-internal").click(function(e){
            event.preventDefault();
            var id = $("#hapus-mutasi-internal").find("input[name='id_hapus']").val();
            var nip_nrp = $("#hapus-mutasi-internal").find("input[name='nip_nrp']").val();
            var c_obj = $(this).parents("tr");
            $.ajax({
                dataType: 'json',
                type:'POST',
                data:{id:id,nip_nrp:nip_nrp,_token: '{{csrf_token()}}'},
                url: '{{route('mutasi_internal.delete')}}',
                error: function(xhr, ajaxOptions, thrownError){
                          alert("Maaf Hanya Data Terakhir Yang Bisa Dihapus!!");
                }, success: function(data){
                console.log(data);
                },

            }).done(function(data){
                c_obj.remove();
                toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                tampil_data_mutasi_internal();
                $(".modal").modal('hide');
            });
        })

    })//end ready
</script>
<!----------------------------------------------------------------akhir mutasi internal-------------------------------------------->

<script>
     $('#p_pangkat').select2({
            // placeholder: "Select a state"
        });
</script>
<script>
     $('#id_pangkat_r_kepangkatan').select2({
            // placeholder: "Select a state"
            width: '100%';
        });
     $('#id_pangkat_r_kepangkatans').select2({
            // placeholder: "Select a state"


        });
</script>
<script>
     $('#p_jabatan').select2({
            // placeholder: "Select a state"
        });
</script>
<script>
        $('#id_jabatan').select2({
               // placeholder: "Select a state"
           });
        $('#id_jabatans').select2({
               // placeholder: "Select a state"
           });
   </script>
    <script>
        var biodata ='<?php echo $biodata ?>';
        if(biodata === null || biodata.length === 0){
                var ask = alert("Silahkan Lengkapi Biodata Terlebih Dahulu");
                window.location.href = "<?php echo route('biodata.index')?>";
        }

   </script>
@endsection
