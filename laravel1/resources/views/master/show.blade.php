@extends('layouts.admin.app')
@section('asset-top')
<style>

.ajax-loader {
  visibility: hidden;
  background-color: rgba(255,255,255,0.7);
  position: absolute;
  z-index: +100 !important;
  width: 100%;
  height:100%;
}

.ajax-loader img {
  position: absolute;

  left:50%;
}
    table {
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
    </style>
@endsection
@section('body')
<!-- begin:: Content Head -->
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
                                               Detail Data
                    </span>

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
        <div class="kt-portlet__body">
            <form  method="post" enctype="multipart/form-data">
                <div class="tab-content">
                    <div class="tab-pane active" id="kt_user_edit_tab_1" role="tabpanel">
                        <div class="kt-form kt-form--label-right">
                            <div class="kt-form__body">
                                <div class="kt-section kt-section--first">

                                    <div class="kt-section__body">

                                            <div class="kt-portlet__head">
                                                    <div class="kt-portlet__head-label">
                                                        <h3 class="kt-portlet__head-title">
                                                            Detail Data Pegawai
                                                            <div class="ajax-loader">
                                                                    <img width=100px src="{{ asset('/img/loader.gif') }}" class="img-responsive" />
                                                            </div>
                                                        </h3>

                                                    </div>
                                            </div>

                                            <div class="kt-portlet__body pegawai ">
                                                @csrf
                                                <div class="form-group row">
                                                    <div class="col-lg-6">
                                                        <label>NIP / NRP</label>
                                                    <input type="text" name="nip_nrp" class="form-control" value="{{$datas->nip_nrp}}" readonly>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="">Nama Pegawai</label>
                                                        <input type="text" name="nama_pegawai" value="{{ old('nama_pegawai') }}" class="form-control @error('nama_pegawai') is-invalid @enderror" placeholder="Masukkan Nama Lengkap" readonly>
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
                                                        <select class="form-control @error('jenis_pegawai') is-invalid @enderror" value="{{ old('jenis_pegawai') }}" name="jenis_pegawai" readonly>
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
                                                        <input type="text" name="nidn" class="form-control @error('nidn') is-invalid @enderror" value="{{ old('nidn') }}" placeholder="Masukkan NIDN" readonly>
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
                                                        <input type="text"  name="no_kta_pegawai" class="form-control @error('no_kta_pegawai') is-invalid @enderror" value="{{ old('no_kta_pegawai') }}" placeholder="Masukkan No KTA Pegawai" readonly>
                                                        @error('no_kta_pegawai')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="">No.Kep.Jabatan</label>
                                                        <input type="text" name="no_kep_jabatan" class="form-control @error('no_kep_jabatan') is-invalid @enderror" value="{{ old('no_kep_jabatan') }}" placeholder="Masukkan No.Kep.Jabatan" readonly>
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
                                                        <select class="form-control " name="pangkat" id="p_pangkat" readonly>
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
                                                        <select class="form-control" name="jabatan" id="p_jabatan" readonly>
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
                                                            <select class="form-control" name="id_kompartemen" id="kompartemen" readonly>
                                                                <option value="">pilih</option>
                                                                @foreach ($kompartemen as $u)
                                                                    {{-- <option value="{{$u->id}}">{{$u->nama_unit_kerja}}</option> --}}
                                                                    <option value="{{$u->id }}" {{ (old("id_kompartemen") == $u->id ? "selected":"") }}>{{$u->nama_kompartemen}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="">Satker</label>
                                                            <select class="form-control" name="id_satker" id="satker" readonly>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-4">
                                                                <label class="">Divisi</label>
                                                                {{-- <input type="text" class="form-control" placeholder="Masukkan Unit Kerja"> --}}
                                                                <select class="form-control @error('email') is-invalid @enderror" name="id_divisi" id="divisi" readonly>
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
                                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Masukkan Email" readonly>
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                        @enderror
                                                        </div>
                                                        <div class="col-lg-6">
                                                                <label class="">NIK</label>
                                                                <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}" placeholder="Masukkan NIK" readonly>
                                                            @error('nik')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                @enderror
                                                        </div>
                                                </div>
                                                <div class="form-group row">
                                                        <label class="">Alamat</label>
                                                        <textarea name="alamat" id="p_alamat" class="form-control " placeholder="Masukkan Alamat " readonly></textarea>

                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-6">
                                                        <label class="">Tempat Lahir</label>
                                                        <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ old('tempat_lahir') }}" placeholder="Masukkan Tempat Lahir" readonly>
                                                    @error('tempat_lahir')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="">Tanggal Lahir</label>
                                                        <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir') }}" placeholder="Masukkan Tanggal Lahir" readonly>
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
                                                        <select class="form-control @error('jk') is-invalid @enderror" value="{{ old('jk') }}" name="jk" id="sel1" readonly>
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
                                                        <select class="form-control @error('agama') is-invalid @enderror" value="{{ old('agama') }}" name="agama" readonly>
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
                                                        <div class="col-lg-4">
                                                            <label class="">No HP</label>
                                                            <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') }}" placeholder="Masukkan Nomer Handphone" readonly>
                                                                @error('no_hp')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label class="">Tanggal Masuk</label>
                                                            <input type="date" name="tgl_masuk" class="form-control @error('tgl_masuk') is-invalid @enderror" value="{{ old('tgl_masuk') }}" placeholder="Tanggal Masuk" readonly>
                                                            @error('tgl_masuk')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-4">
                                                                <label class="">Hak Akses</label>
                                                                <select class="form-control" name="level" readonly>
                                                                    <option value="">pilih</option>
                                                                    <option {{($datas->level=='1' ) ? 'selected' : ""}} value="1">Super Admin</option>
                                                                    <option  {{($datas->level=='2' ) ? 'selected' : ""}}  value="2">Admin</option>
                                                                    <option  {{($datas->level=='3' ) ? 'selected' : ""}}  value="3">Pegawai</option>
                                                                </select>
                                                        </div>
                                                </div>
                                                <label><b>Foto</b></label>
                                                <div class="kt-widget kt-widget--user-profile-1">
                                                    <div class="kt-widget__head">
                                                            <img id="foto" src="assets/media/users/100_1.jpg" width="200px" height="200px" alt="image">
                                                    </div>
                                                </div>
                                                <div class="kt-portlet__foot">
                                                    <div class="kt-form__actions">
                                                        <!--  -->
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

                                        </tr>
                                        </thead>
                                        <tbody class="show_keluarga">
                                        </tbody>

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

                                                        </tr>
                                                        </thead>
                                                        <tbody class="show_pendidikan_polri">
                                                        </tbody>

                                                    </table>
                                                </div>
                                                <!--end: datatable -->
                                            </div>
                                        </div>
                                        <!-- akhir row tabel  -->
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

                                                        </tr>
                                                        </thead>
                                                        <tbody class="show_pendidikan_umum">
                                                        </tbody>

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

                                                        </tr>
                                                        </thead>
                                                        <tbody class="show_pendidikan_kejuruan">
                                                        </tbody>


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

                                                        </tr>
                                                        </thead>
                                                        <tbody class="show_pendidikan_non_formal">
                                                        </tbody>

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

                                                        </tr>
                                                        </thead>
                                                        <tbody class="show_kecakapan_bahasa">
                                                        </tbody>

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

                                                        </tr>
                                                        </thead>
                                                        <tbody class="show_kecakapan_olahraga">
                                                        </tbody>

                                                    </table>
                                                </div>
                                                <!--end: datatable -->
                                            </div>
                                        </div>
                                        <!-- akhir row tabel  -->
                                        <br><br>
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

                                                        </tr>
                                                        </thead>
                                                        <tbody class="show_kecakapan_brevet">
                                                        </tbody>

                                                    </table>
                                                </div>
                                                <!--end: datatable -->
                                            </div>
                                        </div>
                                        <!-- akhir row tabel  -->
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

                                        </tr>
                                        </thead>

                                        <tbody class="show_r_kepangkatan">
                                        </tbody>

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

                                        </thead>
                                        <tbody class="show_r_gaji">
                                        </tbody>

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

                                        </thead>
                                            <tbody class="show_r_jabatan">
                                            </tbody>

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

                                        </tr>
                                        </thead>
                                        <tbody class="show_tanda_jasa">
                                        </tbody>

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

                                                            </tr>
                                                            </thead>
                                                            <tbody class="show_mutasi_keluar">
                                                            </tbody>

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

                                                        </tr>
                                                        </thead>
                                                        <tbody class="show_mutasi_internal">
                                                        </tbody>

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
            tampil_data_pegawai();  //pemanggilan fungsi
        //fungsi tampil
            $('#satker').change(function(){
                var divisi=$(this).val();
                $.ajax({
                    type:'POST',
                    url:'{{route('mutasi_internal.divisi')}}',
                    data:{id:divisi},
                    success:function(data){
                        $('#id_divisi_pegawai').html(data);
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
                        var i;
                        var z= document.getElementById("p_pangkat");
                        for(i=0; i<z.options.length;i++){
                            if(z.options[i].value == data.pangkat){
                                $(".pegawai").find("select[name=pangkat]").val(data.pangkat);
                            }
                            else{
                                $(".pegawai").find("select[name=pangkat]").val();

                            }
                        }
                         // jabatan
                         var i;
                        var z= document.getElementById("p_jabatan");
                        for(i=0; i<z.options.length;i++){
                            if(z.options[i].value == data.jabatan){
                                $(".pegawai").find("select[name=jabatan]").val(data.jabatan);
                            }
                            else{
                                $(".pegawai").find("select[name=jabatan]").val();

                            }
                        }
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
            //Simpan
        })//end ready
</script>
    <!----------------------------------------------------------------akhir data pegawai-------------------------------------------->
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
                    rows = rows + '<td >'+value.gaji+'</td>';
                    rows = rows + '<td>'+value.tmt+'</td>';
                    rows = rows + '<td>'+value.nomor_sk+'</td>';
                    rows = rows + '<td>'+value.pejabat+'</td>';
                    rows = rows + '<td>'+value.tanggal_sk+'</td>';
                    rows = rows + '<td>'+value.dasar_peraturan+'</td>';
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
</script>
<!-------------------------------------------------------------------akhir riwayat gaji----------------------------------------------->

<!--------------------------------------------------------------------riwayat jabatan------------------------------------------------->
<script>
    tampil_data_riwayat_jabatan();   //pemanggilan fungsi tampil barang.
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


    })//end ready
</script>
<!----------------------------------------------------------------akhir mutasi internal-------------------------------------------->


@endsection
