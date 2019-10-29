@extends('User.pegawai.index')
@section('content')

                        <!--Begin:: App Content-->
                        <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="kt-portlet">
                                        <div class="kt-portlet__head">
                                            <div class="kt-portlet__head-label">
                                                <h3 class="kt-portlet__head-title">Biodata Diri <small>update bila diperlukan</small></h3>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                    <div class="col-lg-12 col-xl-12">
                                                        @if ($succes = Session::get('succes'))
                                                        <div class="alert alert-solid-success alert-bold fade show kt-margin-t-20 kt-margin-b-40" role="alert">
                                                            <div class="alert-icon"><i class="fas fa-check"></i></div>
                                                        <div class="alert-text">{{$succes}}</div>
                                                            <div class="alert-close">
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                                                </button>
                                                            </div>

                                                        </div>
                                                    @endif
                                                    </div>
                                            </div>
                                        </div>
                                        <form class="kt-form kt-form--label-right">
                                            <div class="kt-portlet__body">
                                                <div class="kt-section kt-section--first">
                                                    <div class="kt-section__body">
                                                        <div class="row">
                                                        <label class="col-xl-3"></label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <h3 class="kt-section__title kt-section__title-sm">Info Riwayat Pendidikan dan Pekerjaan:</h3>
                                                        </div>
                                                        </div>

                                    <!-- row tabel PENDIDIKN POLRI -->
                                    <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                                            <div class="kt-portlet kt-portlet--mobile">
                                                <div class="kt-portlet__head kt-portlet__head--lg">
                                                    <div class="kt-portlet__head-label">
                                                        <!-- <span class="kt-portlet__head-icon">
                                                            <i class="kt-font-brand flaticon2-line-chart"></i>
                                                        </span> -->
                                                        <h3 class="kt-portlet__head-title">
                                                            Pendidikan Polri
                                                        </h3>
                                                    </div>
                                                    <div class="kt-portlet__head-toolbar">
                                                        <div class="kt-portlet__head-wrapper">
                                                            <div class="kt-portlet__head-actions">
                                                                    <!-- &nbsp; -->
                                                                    <!-- <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
                                                                        <i class="la la-plus"></i>
                                                                        New Record -->
                                                                    </a>
                                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_pendidikan_polri">
                                                                            (+) TAMBAH
                                                                    </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kt-portlet__body">
                                                    <!--begin: Datatable -->
                                                    <table class="table table-striped table-bordered dt-responsive nowrap display" style="width:100%">
                                                            <thead>
                                                                    <th>No</th>
                                                                    <th>Nama Pendidikan</th>
                                                                    <th>Tahun</th>
                                                                    <th>Lulus/Tidak</th>
                                                                    <th>Lama Bulan</th>
                                                                    <th>Rangking</th>
                                                                    <th>File</th>
                                                                    <th width="10%">Aksi</th>
                                                                </thead>
                                                                <tbody>
                                                                  @php
                                                                    $no=1;
                                                                  @endphp
                                                                 @foreach ($p_polris as $polri)
                                                                 <tr>
                                                                     <td>{{$no++}}</td>
                                                                     <td>{{$polri->nama_pendidikan}}</td>
                                                                     <td>{{$polri->tahun}}</td>
                                                                     <td>{{$polri->lulus_tidak}}</td>
                                                                     <td>{{$polri->lama_bulan}}</td>
                                                                     <td>{{$polri->rangking}}</td>
                                                                     <td><a href="{{asset('file/'.$polri->file)}}">{{$polri->file}}</a> </td>
                                                                    <td>
                                                                        <a class="badge badge-success" href="#modal-edit-polri<?php echo $polri->id?>" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                                        <a class="badge badge-danger" href="#modal-hapus-polri<?php echo $polri->id?>"  data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                                    </td>
                                                                  </tr>
                                                                  @endforeach
                                                                        </tbody>
                                                    </table>
                                                    <!--end: Datatable -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- akhir row tabel  -->
                                        <br><br>

                                        <!-- row tabel PENDIDIKN UMUM -->
                                        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                                            <div class="kt-portlet kt-portlet--mobile">
                                                <div class="kt-portlet__head kt-portlet__head--lg">
                                                    <div class="kt-portlet__head-label">
                                                        <!-- <span class="kt-portlet__head-icon">
                                                            <i class="kt-font-brand flaticon2-line-chart"></i>
                                                        </span> -->
                                                        <h3 class="kt-portlet__head-title">
                                                            Pendidikan Umum
                                                        </h3>
                                                    </div>
                                                    <div class="kt-portlet__head-toolbar">
                                                        <div class="kt-portlet__head-wrapper">
                                                            <div class="kt-portlet__head-actions">
                                                                    <!-- &nbsp; -->
                                                                    <!-- <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
                                                                        <i class="la la-plus"></i>
                                                                        New Record </a> -->
                                                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_umum">
                                                                                (+) TAMBAH
                                                                        </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kt-portlet__body">
                                                    <!--begin: Datatable -->
                                                    <table class="table table-striped table-bordered dt-responsive nowrap display" style="width:100%">
                                                            <thead>
                                                                    <th>No</th>
                                                                    <th>Jenjang Pendidikan</th>
                                                                    <th>Nama Sekolah</th>
                                                                    <th>Jurusan</th>
                                                                    <th>Kota</th>
                                                                    <th>Tahun Lulus</th>
                                                                    <th>No. Ijazah</th>
                                                                    <th>File</th>
                                                                    <th width="10%">Aksi</th>
                                                                </thead>
                                                                <tbody>
                                                                  @php
                                                                    $no=1;
                                                                  @endphp
                                                                 @foreach ($p_umum as $umum)
                                                                 <tr>
                                                                     <td>{{$no++}}</td>
                                                                     <td>{{$umum->jenjang_pendidikan}}</td>
                                                                     <td>{{$umum->nama_sekolah}}</td>
                                                                     <td>{{$umum->jurusan}}</td>
                                                                     <td>{{$umum->kota}}</td>
                                                                     <td>{{$umum->tahun_lulus}}</td>
                                                                     <td>{{$umum->no_ijazah}}</td>
                                                                     <td><a href="{{asset('file/'.$umum->file)}}">{{$umum->file}}</a> </td>
                                                                    <td>
                                                                        <a class="badge badge-success" href="#modal-edit-umum<?php echo $umum->id?>" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                                        <a class="badge badge-danger" href="#modal-hapus-umum<?php echo $umum->id?>"  data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                                    </td>
                                                                  </tr>
                                                                  @endforeach
                                                                            </tbody>
                                                    </table>
                                                    <!--end: Datatable -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- akhir row tabel  -->
                                        <br><br>

                                        <!-- row tabel PENDIDIKAN KEJURUAN -->
                                        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                                            <div class="kt-portlet kt-portlet--mobile">
                                                <div class="kt-portlet__head kt-portlet__head--lg">
                                                    <div class="kt-portlet__head-label">
                                                        <!-- <span class="kt-portlet__head-icon">
                                                            <i class="kt-font-brand flaticon2-line-chart"></i>
                                                        </span> -->
                                                        <h3 class="kt-portlet__head-title">
                                                                Pendidikan Kejuruan
                                                        </h3>
                                                    </div>
                                                    <div class="kt-portlet__head-toolbar">
                                                        <div class="kt-portlet__head-wrapper">
                                                            <div class="kt-portlet__head-actions">
                                                                    <!-- &nbsp; -->
                                                                    <!-- <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
                                                                        <i class="la la-plus"></i>
                                                                        New Record -->
                                                                    </a>
                                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_kejuruan">
                                                                            (+) TAMBAH
                                                                    </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kt-portlet__body">
                                                    <!--begin: Datatable -->
                                                    <table class="table table-striped table-bordered dt-responsive nowrap display" style="width:100%">
                                                            <thead>
                                                                    <td>No</td>
                                                                    <td>Nama Pendidikan</td>
                                                                    <td>Kota</td>
                                                                    <td>Tahun lulus</td>
                                                                    <td>Lama bulan</td>
                                                                    <td>Ranking</td>
                                                                    <td>Lulus/Tidak</td>
                                                                    <td>keterangan</td>
                                                                    <td>File</td>
                                                                    <td>action</td>
                                                                  </thead>
                                                                  <tbody>
                                                                    @php
                                                                      $no=1;
                                                                    @endphp
                                                                    @foreach ($p_kejuruan as $kejuruan)
                                                                    <tr>
                                                                        <td>{{$no++}}</td>
                                                                        <td>{{$kejuruan->nama_pendidikan}}</td>
                                                                        <td>{{$kejuruan->kota}}</td>
                                                                        <td>{{$kejuruan->tahun_lulus}}</td>
                                                                        <td>{{$kejuruan->lama_bulan}}</td>
                                                                        <td>{{$kejuruan->rangking}}</td>
                                                                        <td>{{$kejuruan->is_lulus_tidak}}</td>
                                                                        <td>{{$kejuruan->keterangan}}</td>
                                                                        <td>{{$kejuruan->file}}</td>
                                                                          <td>
                                                                                <a href="#" class="badge badge-success" data-namapendidikan="{{$kejuruan->nama_pendidikan}}" data-kota="{{$kejuruan->kota}}" data-tahunlulus="{{$kejuruan->tahun_lulus}}" data-lamabulan="{{$kejuruan->lama_bulan}}" data-rangking="{{$kejuruan->rangking}}" data-lulustidak="{{$kejuruan->is_lulus_tidak}}" data-keterangan="{{$kejuruan->keterangan}}" data-file="{{$kejuruan->file}}" data-umumid="{{$kejuruan->id}}" data-nipnrp="{{$kejuruan->nip_nrp}}" data-toggle="modal" data-target="#edit_pkejuruan"><span class="fas fa-fw fa-edit"></span></a>
                                                                                <a class="badge badge-danger" href="#" data-target="#modal-hapuskejuruan<?php echo $kejuruan->id?>" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                                          </td>
                                                                    </tr>
                                                                    @endforeach
                                                                            </tbody>
                                                    </table>
                                                    <!--end: Datatable -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- akhir row tabel  -->
                                        <br><br>

                                        <!-- row tabel PENDIDIKAN NON FORMAL -->
                                        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                                            <div class="kt-portlet kt-portlet--mobile">
                                                <div class="kt-portlet__head kt-portlet__head--lg">
                                                    <div class="kt-portlet__head-label">
                                                        <!-- <span class="kt-portlet__head-icon">
                                                            <i class="kt-font-brand flaticon2-line-chart"></i>
                                                        </span> -->
                                                        <h3 class="kt-portlet__head-title">
                                                                Pendidikan Non Formal
                                                        </h3>
                                                    </div>
                                                    <div class="kt-portlet__head-toolbar">
                                                        <div class="kt-portlet__head-wrapper">
                                                            <div class="kt-portlet__head-actions">
                                                                    <!-- &nbsp; -->
                                                                    <!-- <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
                                                                        <i class="la la-plus"></i>
                                                                        New Record -->
                                                                    </a>
                                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_pendidikan_nonformal">
                                                                        (+) TAMBAH
                                                                    </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kt-portlet__body">
                                                    <!--begin: Datatable -->
                                                    <table class="table table-striped table-bordered dt-responsive nowrap display" style="width:100%">
                                                        <thead>
                                                            <th>No</th>
                                                            <th>NIP / NRP</th>
                                                            <th>Nama Pendidikan</th>
                                                            <th>Lama Pendidikan</th>
                                                            <th>Tahun Pendidikan</th>
                                                            <th>Tempat Pendidikan</th>
                                                            <th>Keterangan</th>
                                                            <th>File</th>
                                                            <th width="10%">Aksi</th>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                            $no=1;
                                                            @endphp
                                                            @foreach ($p_non_formal as $nonformal)
                                                         <tr>
                                                             <td>{{$no++}}</td>
                                                             <td>{{$nonformal->nip_nrp}}</td> <!-------------nama nonformal (dari field data base exp nama_pendidikan)---------------------->
                                                             <td>{{$nonformal->nama_pendidikan}}</td>
                                                             <td>{{$nonformal->lama_pendidikan}}</td>
                                                             <td>{{$nonformal->tahun_pendidikan}}</td>
                                                             <td>{{$nonformal->tempat_pendidikan}}</td>
                                                             <td>{{$nonformal->keterangan}}</td>
                                                             <td>{{$nonformal->file}}</td>
                                                             <td>
                                                                {{-- pastikan modal berjalan dengan baik --}}
                                                                <a class="badge badge-success" href="#modal-edit-nonformal<?php echo $nonformal->id?>" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                                <a class="badge badge-danger" href="#modal-hapus-nonformal<?php echo $nonformal->id?>"  data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                            </td>
                                                          </tr>
                                                          @endforeach
                                                        </tbody>
                                                    </table>
                                                    <!--end: Datatable -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="kt-separator kt-separator--space-lg kt-separator--fit kt-separator--border-solid"></div>

                                        <!-- row tabel PANGKAT -->
                                    <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                                            <div class="kt-portlet kt-portlet--mobile">
                                                <div class="kt-portlet__head kt-portlet__head--lg">
                                                    <div class="kt-portlet__head-label">
                                                        <!-- <span class="kt-portlet__head-icon">
                                                            <i class="kt-font-brand flaticon2-line-chart"></i>
                                                        </span> -->
                                                        <h3 class="kt-portlet__head-title">
                                                                Riwayat Kepangkatan
                                                        </h3>
                                                    </div>
                                                    <div class="kt-portlet__head-toolbar">
                                                        <div class="kt-portlet__head-wrapper">
                                                            <div class="kt-portlet__head-actions">
                                                                    <!-- &nbsp; -->
                                                                    <!-- <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
                                                                        <i class="la la-plus"></i>
                                                                        New Record -->
                                                                    </a>
                                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_riwayat_pangkat">
                                                                        (+) TAMBAH
                                                                    </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kt-portlet__body">
                                                    <!--begin: Datatable -->
                                                    <table class="table table-striped table-bordered dt-responsive nowrap display" style="width:100%">
                                                        <thead>
                                                            <th>No</th>
                                                            <th>NIP / NRP</th>
                                                            <th>Nama Pangkat</th>
                                                            <th>TMT</th>
                                                            <th>Nomor SK</th>
                                                            <th>Pejabat</th>
                                                            <th>Tanggal SK</th>
                                                            <th>Dasar Peraturan</th>
                                                            <th width="10%">Aksi</th>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                            $no=1;
                                                            @endphp
                                                            @foreach ($r_pangkat as $pangkat)
                                                         <tr>
                                                             <td>{{$no++}}</td>
                                                             <td>{{$pangkat->nip_nrp}}</td>
                                                             <td>{{$pangkat->Pangkat->nama_pangkat}}</td>
                                                             <td>{{$pangkat->tmt}}</td>
                                                             <td>{{$pangkat->nomor_sk}}</td>
                                                             <td>{{$pangkat->pejabat}}</td>
                                                             <td>{{$pangkat->tanggal_sk}}</td>
                                                             <td>{{$pangkat->dasar_peraturan}}</td>
                                                             <td>
                                                                <a class="badge badge-success" href="#modal-edit-pangkat<?php echo $pangkat->id?>" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                                <a class="badge badge-danger" href="#modal-hapus-pangkat<?php echo $pangkat->id?>"  data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                            </td>
                                                          </tr>
                                                          @endforeach
                                                                            </tbody>
                                                    </table>
                                                    <!--end: Datatable -->
                                                </div>
                                            </div>
                                    </div>
                                    <!-- akhir row tabel  -->
                                    <br><br>

                                    <!-- row tabel GAJI -->
                                    <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                                        <div class="kt-portlet kt-portlet--mobile">
                                            <div class="kt-portlet__head kt-portlet__head--lg">
                                                <div class="kt-portlet__head-label">
                                                    <!-- <span class="kt-portlet__head-icon">
                                                        <i class="kt-font-brand flaticon2-line-chart"></i>
                                                    </span> -->
                                                    <h3 class="kt-portlet__head-title">
                                                            Riwayat Kenaikan Gaji Berkala
                                                    </h3>
                                                </div>
                                                <div class="kt-portlet__head-toolbar">
                                                    <div class="kt-portlet__head-wrapper">
                                                        <div class="kt-portlet__head-actions">
                                                                <!-- &nbsp; -->
                                                                <!-- <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
                                                                    <i class="la la-plus"></i>
                                                                    New Record -->
                                                                </a>
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_riwayat_gaji">
                                                                    (+) TAMBAH
                                                                </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__body">
                                                <!--begin: Datatable -->
                                                <table class="table table-striped table-bordered dt-responsive nowrap display" style="width:100%">
                                                    <thead>
                                                        <th>No</th>
                                                        <th>NIP / NRP</th>
                                                        <th>Gaji</th>
                                                        <th>TMT</th>
                                                        <th>Nomor SK</th>
                                                        <th>Pejabat</th>
                                                        <th>Tanggal SK</th>
                                                        <th>Dasar Peraturan</th>
                                                        <th width="10%">Aksi</th>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                        $no=1;
                                                        @endphp
                                                        @foreach ($r_gaji as $gaji)
                                                     <tr>
                                                         <td>{{$no++}}</td>
                                                         <td>{{$gaji->nip_nrp}}</td>
                                                         <td>{{$gaji->gaji}}</td>
                                                         <td>{{$gaji->tmt}}</td>
                                                         <td>{{$gaji->nomor_sk}}</td>
                                                         <td>{{$gaji->pejabat}}</td>
                                                         <td>{{$gaji->tanggal_sk}}</td>
                                                         <td>{{$gaji->dasar_peraturan}}</td>
                                                         <td>
                                                            <a class="badge badge-success" href="#modal-edit-gaji<?php echo $gaji->id?>" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                            <a class="badge badge-danger" href="#modal-hapus-gaji<?php echo $gaji->id?>"  data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                        </td>
                                                      </tr>
                                                      @endforeach
                                                                        </tbody>
                                                </table>
                                                <!--end: Datatable -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- akhir row tabel  -->
                                    <br><br>
                                    <!-- row tabel JABATAAN -->
                                    <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                                        <div class="kt-portlet kt-portlet--mobile">
                                            <div class="kt-portlet__head kt-portlet__head--lg">
                                                <div class="kt-portlet__head-label">
                                                    <!-- <span class="kt-portlet__head-icon">
                                                        <i class="kt-font-brand flaticon2-line-chart"></i>
                                                    </span> -->
                                                    <h3 class="kt-portlet__head-title">
                                                            Riwayat Jabatan
                                                    </h3>
                                                </div>
                                                <div class="kt-portlet__head-toolbar">
                                                    <div class="kt-portlet__head-wrapper">
                                                        <div class="kt-portlet__head-actions">
                                                                <!-- &nbsp; -->
                                                                <!-- <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
                                                                    <i class="la la-plus"></i>
                                                                    New Record -->
                                                                </a>
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_riwayat_jabatan">
                                                                    (+) TAMBAH
                                                                </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__body">
                                                <!--begin: Datatable -->
                                                <table class="table table-striped table-bordered dt-responsive nowrap display" style="width:100%">
                                                    <thead>
                                                        <th>No</th>
                                                        <th>NIP / NRP</th>
                                                        <th>ID Jabatan</th>
                                                        <th>Nomor SK</th>
                                                        <th>Pejabat</th>
                                                        <th>Tanggal SK</th>
                                                        <th>Tanggal Mulai Terhitung</th>
                                                        <th>Keterangan</th>
                                                        <th width="10%">Aksi</th>

                                                    </thead>
                                                    <tbody>
                                                        @php
                                                        $no=1;
                                                        @endphp
                                                        @foreach ($r_jabatan as $j)
                                                     <tr>
                                                         <td>{{$no++}}</td>
                                                         <td>{{$j->nip_nrp}}</td>
                                                         <td>{{$j->Jabatan->nama_jabatan}}</td>
                                                         <td>{{$j->nomor_sk}}</td>
                                                         <td>{{$j->pejabat}}</td>
                                                         <td>{{$j->tgl_sk}}</td>
                                                         <td>{{$j->tgl_mulai_terhitung}}</td>
                                                         <td>{{$j->keterangan}}</td>
                                                         <td>
                                                            <a class="badge badge-success" href="#modal-edit-jabatan<?php echo $j->id?>" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                            <a class="badge badge-danger" href="#modal-hapus-jabatan<?php echo $j->id?>"  data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                        </td>
                                                      </tr>
                                                      @endforeach
                                                                        </tbody>
                                                </table>
                                                <!--end: Datatable -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- akhir row tabel  -->
                                    <br><br>

                                    <!-- row tabel jASA -->
                                    <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                                        <div class="kt-portlet kt-portlet--mobile">
                                            <div class="kt-portlet__head kt-portlet__head--lg">
                                                <div class="kt-portlet__head-label">
                                                    <!-- <span class="kt-portlet__head-icon">
                                                        <i class="kt-font-brand flaticon2-line-chart"></i>
                                                    </span> -->
                                                    <h3 class="kt-portlet__head-title">
                                                            Tanda Jasa / Prestasi
                                                    </h3>
                                                </div>
                                                <div class="kt-portlet__head-toolbar">
                                                    <div class="kt-portlet__head-wrapper">
                                                        <div class="kt-portlet__head-actions">
                                                                <!-- &nbsp; -->
                                                                <!-- <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
                                                                    <i class="la la-plus"></i>
                                                                    New Record -->
                                                                </a>
                                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_prestasi">
                                                                    (+) TAMBAH
                                                                </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__body">
                                                <!--begin: Datatable -->
                                                <table class="table table-striped table-bordered dt-responsive nowrap display" style="width:100%">
                                                                <thead>
                                                                    <th>No</th>
                                                                    <th>NIP / NRP</th>
                                                                    <th>Nama Prestasi</th>
                                                                    <th>Tahun</th>
                                                                    <th>Keterangan</th>
                                                                    <th width="10%">Aksi</th>

                                                                </thead>
                                                                <tbody>
                                                                  @php
                                                                    $no=1;
                                                                  @endphp
                                                                 @foreach ($prestasi as $p)
                                                                 <tr>
                                                                     <td>{{$no++}}</td>
                                                                     <td>{{$p->nip_nrp}}</td>
                                                                     <td>{{$p->nama_prestasi}}</td>
                                                                     <td>{{$p->tahun}}</td>
                                                                     <td>{{$p->keterangan}}</td>
                                                                    <td>
                                                                        <a class="badge badge-success" href="#modal-edit-prestasi<?php echo $p->id?>" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                                        <a class="badge badge-danger" href="#modal-hapus-prestasi<?php echo $p->id?>"  data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                                    </td>
                                                                  </tr>
                                                                  @endforeach
                                                                        </tbody>
                                                </table>
                                                <!--end: Datatable -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- akhir row tabel  -->
                                    <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                                                    </div>
                                                </div>
                                            </div>
                                                <!-- akhir row tabel  -->

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End:: App Content-->
                    </div>
                    <!--End::App-->
                </div>
                <!-- end:: Content -->
            </div>
    </div>
    <!-- selesai -->
{{-- ###################################################################################################################### --}}

 <!---------------------------------------------polri------------------------------------------------------------------->
 <!------------------------edit------------------------------>
 <?php $no=0; foreach($p_polris as $x): $no++; ?>
 <div class="modal fade" id="modal-edit-polri<?= $x->id; ?>">
   <div class="modal-dialog">
     <div class="modal-content">
       <!-- Modal Header -->
       <div class="modal-header">
         <h4 class="modal-title">EDIT PENDIDIKAN POLRI</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       <!-- Modal body -->
       <div class="modal-body">
       <form action="{{route('pendidikanpolri.update',$x->id)}}" name="edit_form" method="post" enctype="multipart/form-data">
          {{method_field('patch')}}
          {{csrf_field()}}
          <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
          <div class="form-group">
                  <label for="message-text" class="form-control-label">Nama Pendidikan*</label>
                  <input class="form-control" id="message-text" value="{{$x->nama_pendidikan}}" required name="nama_pendidikan" type="text" required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Tahun Pendidikan*</label>
              <input type="number" class="form-control" required name="tahun" id="message-text" value="{{$x->tahun}}" required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Lulus / Tidak* </label>
              <select class="form-control kt-select2" required  name="lulus_tidak" >
                      <option value="">-----pilih------</option>
                      <option <?php if ($x->lulus_tidak== "Lulus" ) echo 'selected' ; ?> value="Lulus">Lulus</option>
                      <option <?php if ($x->lulus_tidak== "Tidak" ) echo 'selected' ; ?> value="Tidak">Tidak</option>

              </select>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Lama Bulan*</label>
             <input type="number" name="lama_bulan" class="form-control" value="{{$x->lama_bulan}}" required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Ranking</label>
              <input class="form-control" id="message-text"  name="rangking" type="number" value="{{$x->rangking}}">
          </div>
          <div class="form-group">
            <a href="{{asset('file/'.$x->file)}}">{{$x->file}}</a>
           </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">file </label>
              <input class="form-control" id="message-text" type="file" name="file" value="{{$x->file}}">
          </div>
       </div>
       {{-- end body --}}
       <!-- Modal footer -->
       <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         <input type="submit" id="submit" class="btn btn-primary" value="Edit" />
       </div>
 </form>
     </div>
   </div>
 </div>
<?php endforeach;?>
 <!------------------------end edit------------------------------>
 <!------------------------add data------------------------------>
<div class="modal fade" id="add_pendidikan_polri">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">PENDIDIKAN POLRI</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <form action="{{route('pendidikanpolri.store')}}" method="post" name="registration" enctype="multipart/form-data">
              @csrf
              <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
              <div class="form-group">
                      <label for="message-text" class="form-control-label">Nama Pendidikan*</label>
                      <input class="form-control" id="message-text" required name="nama_pendidikan" type="text" required>
              </div>
              <div class="form-group">
                  <label for="message-text" class="form-control-label">Tahun Pendidikan*</label>
                  <input type="number" class="form-control" required name="tahun" id="message-text" required>
              </div>
              <div class="form-group">
                  <label for="message-text" class="form-control-label">Lulus / Tidak* </label>
                  <select class="form-control kt-select2" required  name="lulus_tidak">
                          <option value="">-----pilih------</option>
                          <option value="Lulus">Lulus</option>
                          <option value="Tidak">Tidak</option>

                  </select>
              </div>
              <div class="form-group">
                  <label for="message-text" class="form-control-label">Lama Bulan*</label>
                 <input type="number" name="lama_bulan" class="form-control" required >
              </div>
              <div class="form-group">
                  <label for="message-text" class="form-control-label">Ranking</label>
                  <input class="form-control" id="message-text"  name="rangking" type="number" >
              </div>
              <div class="form-group">
                  <label for="message-text" class="form-control-label">file </label>
                  <input class="form-control" id="message-text" type="file" name="file">
              </div>
         <!-- end body -->
      </div>
        <!-- Modal footer -->
        <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" />
        </div>
        </form>
        </div>
    </div>
</div>
 <!------------------------end add------------------------------>
 <!------------------------Hapus data------------------------------>
@foreach ($p_polris as $x)
<div class="modal fade" id="modal-hapus-polri<?= $x->id; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">HAPUS PENDIDIKAN POLRI</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
    <form action="{{route('pendidikanpolri.destroy',$x->id)}}" method="post">
        {{method_field('delete')}}
        {{csrf_field()}}
        <div class="modal-body">
            <p>Apakah Anda Yakin Menghapus Data </strong>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <input type="submit"  class="btn btn-danger" value="Hapus" />
        </div>
    </form>
    </div>
  </div>
</div>
@endforeach
 <!------------------------end hapus------------------------------>
 <!-------------------------------------------end polri------------------------------------------------------------------->

 <!---------------------------------------------umum------------------------------------------------------------------->
 <!------------------------edit------------------------------>
 <?php $no=0; foreach($p_umum as $x): $no++; ?>
 <div class="modal fade" id="modal-edit-umum<?= $x->id; ?>">
   <div class="modal-dialog">
     <div class="modal-content">
       <!-- Modal Header -->
       <div class="modal-header">
         <h4 class="modal-title">Edit Kategori</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       <!-- Modal body -->
       <div class="modal-body">
       <form action="{{route('pendidikanumum.update',$x->id)}}" method="post" enctype="multipart/form-data">
           {{method_field('patch')}}
           {{csrf_field()}}
           <input type="hidden" readonly value="<?=$x->file;?>" name="file_lama" class="form-control" >
           <input type="hidden" readonly value="<?=$x->nip_nrp;?>" name="nip_nrp" class="form-control" >
           <div class="form-group">
               <label for="message-text" class="form-control-label">Jenjang Pendidikan *</label>
               <select name="jenjang_pendidikan" id="" class="form-control" required>
                   <option value="">Pilih jenjang pendidikan</option>
                   <option <?php if ($x->jenjang_pendidikan== "SD" ) echo 'selected' ; ?> value="SD">SD</option>
                   <option <?php if ($x->jenjang_pendidikan== "SLTP" ) echo 'selected' ; ?> value="SLTP">SLTP</option>
                   <option <?php if ($x->jenjang_pendidikan== "SLTA" ) echo 'selected' ; ?> value="SLTA">SLTA</option>
                   <option <?php if ($x->jenjang_pendidikan== "S1" ) echo 'selected' ; ?> value="S1">S1</option>
                   <option <?php if ($x->jenjang_pendidikan== "S2" ) echo 'selected' ; ?> value="S2">S2</option>
                   <option <?php if ($x->jenjang_pendidikan== "S3" ) echo 'selected' ; ?> value="S3">S3</option>
               </select>
           </div>
           <div class="form-group">
               <label for="message-text" class="form-control-label">Nama Sekolah *</label>
           <input class="form-control" id="message-text" name="nama_sekolah" type="text" value="{{$x->nama_sekolah}}" required>
           </div>
           <div class="form-group">
               <label for="message-text" class="form-control-label">Jurusan </label>
               <input class="form-control" id="message-text" name="jurusan" value="{{$x->jurusan}}" type="text" required>
           </div>
           <div class="form-group">
               <label for="message-text" class="form-control-label">Kota *</label>
               <input class="form-control" id="message-text" name="kota" value="{{$x->kota}}" type="text" required>
           </div>
           <div class="form-group">
               <label for="message-text" class="form-control-label">Tahun Lulus *</label>
               <input type="number" class="form-control" name="tahun_lulus" id="message-text" value="{{$x->tahun_lulus}}" required placeholder="exp:2019">
           </div>
           <div class="form-group">
               <label for="message-text" class="form-control-label">Nomer Ijazah * </label>
               <input type="text" class="form-control" id="message-text" value="{{$x->no_ijazah}}" name="no_ijazah" required >
           </div>
           <div class="form-group">
            <a href="{{asset('file/'.$x->file)}}">{{$x->file}}</a>
           </div>
           <div class="form-group">
               <label for="message-text" class="form-control-label">file </label>
               <input class="form-control" id="message-text" type="file" name="file">
           </div>
       </div>
       {{-- end body --}}
       <!-- Modal footer -->
       <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Edit" />
       </div>
 </form>
     </div>
   </div>
 </div>
<?php endforeach;?>
 <!------------------------end edit------------------------------>
 <!------------------------add data------------------------------>
<div class="modal fade" id="add_umum">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Kejuruan</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
      <form action="{{route('pendidikanumum.store')}}" method="post" enctype="multipart/form-data" name="registration">
          @csrf
          <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
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
              <input class="form-control" id="message-text" name="nama_sekolah" type="text" required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Jurusan </label>
              <input class="form-control" id="message-text" name="jurusan" type="text">
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Kota *</label>
              <input class="form-control" id="message-text" name="kota" type="text" required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Tahun Lulus *</label>
              <input type="number" class="form-control" name="tahun_lulus" id="message-text" required placeholder="exp:2019" >
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Nomer Ijazah * </label>
              <input type="text" class="form-control" id="message-text" name="no_ijazah" required >
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">file </label>
              <input class="form-control" id="message-text" type="file" name="file">
          </div>
         <!-- end body -->
      </div>
        <!-- Modal footer -->
        <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <input type="submit" name="submit" class="btn btn-primary" value="SImpan" />
        </div>
        </form>
        </div>
    </div>
</div>
 <!------------------------end add------------------------------>
 <!------------------------Hapus data------------------------------>
@foreach ($p_umum as $umum)
<div class="modal fade" id="modal-hapus-umum<?= $umum->id; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Hapus Pendidikan Umum</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
    <form action="{{route('pendidikanumum.destroy',$umum->id)}}" method="post">
        {{method_field('delete')}}
        {{csrf_field()}}
        <div class="modal-body">
            <p>Apakah Anda Yakin Menghapus Data </strong>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <input type="submit" name="submit" class="btn btn-danger" value="Hapus" />
        </div>
    </form>
    </div>
  </div>
</div>
@endforeach
 <!------------------------end hapus------------------------------>
 <!-------------------------------------------endke umum------------------------------------------------------------------->

 <!---------------------------------------------kejuruan------------------------------------------------------------------->
 <!------------------------edit------------------------------>
 <?php $no=0; foreach($p_kejuruan as $x): $no++; ?>
 <div class="modal fade" id="edit_pkejuruan">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="jdlpendidikanumum">EDIT PENDIDIKAN KEJURUAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('pendidikankejuruan.update',$x->id)}}" name="edit_form" method="post" enctype="multipart/form-data">
                        {{method_field('patch')}}
                        {{csrf_field()}}
                    <input type="hidden" name="nip_nrp" value="{{$x->nip_nrp}}">
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Nama Pendidikan *</label>
                        <input class="form-control" id="namapendidikan" name="nama_pendidikan" type="text" value="{{$x->nama_pendidikan}}" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Kota *</label>
                            <input class="form-control" id="kota" name="kota"  value="{{$x->kota}}" type="text" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Tahun Lulus *</label>
                            <input class="form-control" id="tahunlulus" name="tahun_lulus"  value="{{$x->tahun_lulus}}" type="number" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Lama Studi *</label>
                            <input class="form-control" id="lamabulan" name="lama_bulan"  value="{{$x->lama_bulan}}" type="number" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Ranking *</label>
                            <input class="form-control" id="rangking" name="rangking"  value="{{$x->rangking}}" type="number">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Lulus/Tidak *</label>
                            <select  class="form-control" name="is_lulus_tidak"  value="{{$x->is_lulus_tidak}}" id="lulustidak" required>
                                <option value="">select</option>
                                <option {{ $x->is_lulus_tidak == 'Lulus' ? 'selected' : ''}} value="Lulus">Lulus</option>
                                <option {{ $x->is_lulus_tidak == 'Tidak' ? 'selected' : ''}} value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Keterangan</label>
                            <input class="form-control" id="keterangan" name="keterangan"  value="{{$x->keterangan}}" type="text">
                        </div>
                        <div class="form-group">
                            <a href="{{asset('file/'.$x->file)}}">{{$x->file}}</a>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">file </label>
                            <input class="form-control" type="file" name="file">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php endforeach;?>
<!------------------------end edit------------------------------>
 <!------------------------add data------------------------------>
<div class="modal fade" id="add_kejuruan">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Kejuruan</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <form action="{{route('pendidikankejuruan.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
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
                <input type="number" class="form-control" name="tahun_lulus"  required>
            </div>
            <div class="form-group">
                <label for="message-text" class="form-control-label">Lama Studi *</label>
                <input class="form-control" name="lama_bulan" type="number" required></input>
            </div>
            <div class="form-group">
                <label for="message-text" class="form-control-label">Ranking</label>
                <input class="form-control" name="ranking" type="number" >
            </div>
            <div class="form-group">
                <label for="message-text" class="form-control-label">Lulus / Tidak</label>
                <select class="form-control kt-select2" name="is_lulus_tidak" required>
                        <option value="">select lulus</option>
                        <option value="Lulus">Lulus</option>
                        <option value="Tidak">Tidak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message-text" class="form-control-label">Keterangan</label>
                <input class="form-control" name="keterangan" type="text">
            </div>
            <div class="form-group">
                <label for="message-text" class="form-control-label">file </label>
                <input class="form-control" type="file" name="file">
            </div>
        </div>
         <!-- end body -->
        <!-- Modal footer -->
        <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <input type="submit" name="submit" class="btn btn-primary" value="SImpan" />
        </div>
        </form>
        </div>
    </div>
</div>
 <!------------------------end add------------------------------>
 <!------------------------Hapus data------------------------------>
@foreach ($p_kejuruan as $kejuruan)
<div class="modal fade" id="modal-hapuskejuruan<?= $kejuruan->id; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Hapus Kejuruan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
    <form action="{{route('pendidikankejuruan.destroy',$kejuruan->id)}}" method="post">
        {{method_field('delete')}}
        {{csrf_field()}}
        <div class="modal-body">
            <p>Apakah Anda Yakin Menghapus Data </strong>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <input type="submit" name="submit" class="btn btn-danger" value="Hapus" />
        </div>
    </form>
    </div>
  </div>
</div>
@endforeach
 <!------------------------end hapus------------------------------>
 <!--------------------------------------------- end kejuruan------------------------------------------------------------------->
 {{-- modal --}}
       <!------------------------edit------------------------------>
       <?php $no=0; foreach($p_non_formal as $x): $no++; ?>
       <div class="modal fade" id="modal-edit-nonformal<?= $x->id; ?>">
         <div class="modal-dialog">
           <div class="modal-content">
             <!-- Modal Header -->
             <div class="modal-header">
                 {{-- edit sesuai judul topik dst --}}
               <h4 class="modal-title">EDIT PENDIDIKAN NON FORMAL</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <!-- Modal body -->
             <div class="modal-body">
                 {{-- form action boleh dikosongi --}}
             <form action="{{route('pendidikannonformal.update',$x->id)}}" name="edit_form" method="post" enctype="multipart/form-data">
                {{method_field('patch')}}
                {{csrf_field()}}
                {{-- minta tolong value di isi sesuai denga database ex $x->nama_pendidikan  --}}
                <input type="hidden" readonly value="<?=$x->nip_nrp;?>" name="nip_nrp" class="form-control" >
                <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
                <div class="form-group">
                        <label for="message-text" class="form-control-label">Nama Pendidikan</label>
                        <input type="text" class="form-control" name="nama_pendidikan" value="{{$x->nama_pendidikan}}" id="message-text" required>
                    </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Lama Pendidikan</label>
                    <input class="form-control" id="message-text" name="lama_pendidikan" type="number" value="{{$x->lama_pendidikan}}" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Tahun Pendidikan</label>
                    <input class="form-control" id="message-text" name="tahun_pendidikan" type="text" value="{{$x->tahun_pendidikan}}" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Tempat Pendidikan</label>
                    <input class="form-control" id="message-text" name="tempat_pendidikan" type="text" value="{{$x->tempat_pendidikan}}" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Keterangan</label>
                    <input class="form-control" id="message-text" name="keterangan" type="text" value="{{$x->keterangan}}" >
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">File</label>
                    <input class="form-control" id="message-text" name="file" type="file" value="{{$x->file}}" >
                </div>
             </div>
             {{-- end body --}}
             <!-- Modal footer -->
             <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
               <input type="submit" id="submit" class="btn btn-primary" value="Edit" />
             </div>
            </form>
           </div>
         </div>
       </div>
     <?php endforeach;?>
       <!------------------------end edit------------------------------>

       <!------------------------add data------------------------------>
      <div class="modal fade" id="add_pendidikan_nonformal">
          <div class="modal-dialog">
              <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                  <h4 class="modal-title">PENDIDIKAN NON FORMAL</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <form action="{{route('pendidikannonformal.store')}}" method="post" name="registration">
                    @csrf
                    {{-- hiraukan yang type hidden --}}
                    <input type="hidden" value="{{$data->nip_nrp}}" name="nip_nrp">
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Nama Pendidikan</label>
                        <input type="text" class="form-control" name="nama_pendidikan" id="message-text" required>
                    </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Lama Pendidikan</label>
                    <input class="form-control" id="message-text" name="lama_pendidikan" type="number" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Tahun Pendidikan</label>
                    <input class="form-control" id="message-text" name="tahun_pendidikan" type="number" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Tempat Pendidikan</label>
                    <input class="form-control" id="message-text" name="tempat_pendidikan" type="text" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Keterangan</label>
                    <input class="form-control" id="message-text" name="keterangan" type="text" >
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">File</label>
                    <input class="form-control" id="message-text" name="file" type="file" >
                </div>>
               <!-- end body -->
            </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      <input type="submit" class="btn btn-primary" />
              </div>
              </form>
              </div>
          </div>
      </div>
       <!------------------------end add------------------------------>


       <!------------------------Hapus data------------------------------>

      @foreach ($p_non_formal as $non_formal)
      <div class="modal fade" id="modal-hapus-nonformal<?= $non_formal->id; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">HAPUS PENDIDIKAN NON FORMAL</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
          <form action="{{route('pendidikannonformal.destroy',$non_formal->id)}}" method="post">
              {{method_field('delete')}}
              {{csrf_field()}}
              <div class="modal-body">
                  <p>Apakah Anda Yakin Menghapus Data </strong>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                  <input type="submit"  class="btn btn-danger" value="Hapus" />
              </div>
          </form>
          </div>
        </div>
      </div>
      @endforeach
       <!------------------------end hapus------------------------------>
<!-------------------------------------------------awal kepangkatan------------------------------------------------------------>
<!--------------------------------------------------akhir kepangkatan------------------------------------------------------------>
 <!---------------------------------------------    gaji berkala------------------------------------------------------------------->
 <!------------------------edit------------------------------>
 <?php $no=0; foreach($r_gaji as $x): $no++; ?>
 <div class="modal fade" id="modal-edit-gaji<?= $x->id; ?>">
   <div class="modal-dialog">
     <div class="modal-content">
       <!-- Modal Header -->
       <div class="modal-header">
         <h4 class="modal-title">EDIT RIWAYAT GAJI BERKALA</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       <!-- Modal body -->
       <div class="modal-body">
       <form action="{{route('riwayatgaji.update',$x->id)}}" name="edit_form" method="post" enctype="multipart/form-data">
          @csrf
          {{method_field('patch')}}
          <input type="hidden" readonly value="<?=$x->nip_nrp;?>" name="nip_nrp" class="form-control" >
          <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
          <div class="form-group">
                  <label for="message-text" class="form-control-label">Gaji</label>
                  <input type="number" class="form-control" name="gaji" value="{{$x->gaji}}" id="message-text" required>
              </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">TMT</label>
              <input class="form-control" id="message-text" name="tmt" type="date" value="{{$x->tmt}}" required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Nomor SK</label>
              <input class="form-control" id="message-text" name="nomor_sk" type="text" value="{{$x->nomor_sk}}" required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Pejabat</label>
              <input class="form-control" id="message-text" name="pejabat" type="text" value="{{$x->pejabat}}" required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Tanggal SK</label>
              <input class="form-control" id="message-text" name="tanggal_sk" type="date" value="{{$x->tanggal_sk}}" required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Dasar Peraturan</label>
              <input class="form-control" id="message-text" name="dasar_peraturan" type="text" value="{{$x->dasar_peraturan}}" required>
          </div>

       </div>
       {{-- end body --}}
       <!-- Modal footer -->
       <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         <input type="submit" id="submit" class="btn btn-primary" value="Edit" />
       </div>
    </form>
     </div>
   </div>
 </div>
<?php endforeach;?>
 <!------------------------end edit------------------------------>

 <!------------------------add data------------------------------>
<div class="modal fade" id="add_riwayat_gaji">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">RIWAYAT GAJI BERKALA</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <form action="{{route('riwayatgaji.store')}}" method="post" name="registration">
              @csrf
              <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
              <div class="form-group">
                  <label for="message-text" class="form-control-label">Gaji</label>
                  <input type="number" class="form-control" name="gaji" id="message-text" required>
              </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">TMT</label>
              <input class="form-control" id="message-text" name="tmt" type="date"   required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Nomor SK</label>
              <input class="form-control" id="message-text" name="nomor_sk" type="text"  required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Pejabat</label>
              <input class="form-control" id="message-text" name="pejabat" type="text"   required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Tanggal SK</label>
              <input class="form-control" id="message-text" name="tanggal_sk" type="date"  required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Dasar Peraturan</label>
              <input class="form-control" id="message-text" name="dasar_peraturan" type="text"   required>
          </div>
         <!-- end body -->
      </div>
        <!-- Modal footer -->
        <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" />
        </div>
        </form>
        </div>
    </div>
</div>
 <!------------------------end add------------------------------>


 <!------------------------Hapus data------------------------------>
@foreach ($r_gaji as $x)
<div class="modal fade" id="modal-hapus-gaji<?= $x->id; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">HAPUS RIWAYAT GAJI BERKALA</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
    <form action="{{route('riwayatgaji.destroy',$x->id)}}" method="post">
        @csrf
        {{method_field('delete')}}
        <div class="modal-body">
            <p>Apakah Anda Yakin Menghapus Data </strong>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <input type="submit"  class="btn btn-danger" value="Hapus" />
        </div>
    </form>
    </div>
  </div>
</div>
@endforeach
 <!------------------------end hapus------------------------------>
 <!--------------------------------------------  end gaji berkala------------------------------------------------------------------->
 <!---------------------------------------------tanda jasa prestasi------------------------------------------------------------------->
 <!------------------------edit------------------------------>



 <?php $no=0; foreach($prestasi as $x): $no++; ?>
 <div class="modal fade" id="modal-edit-prestasi<?= $x->id; ?>">
   <div class="modal-dialog">
     <div class="modal-content">
       <!-- Modal Header -->
       <div class="modal-header">
         <h4 class="modal-title">EDIT KECAKAPAN KECAKAPAN BREVET</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       <!-- Modal body -->
       <div class="modal-body">
       <form action="{{route('riwayattandajasa.update',$x->id)}}" name="edit_form" method="post" enctype="multipart/form-data">
          {{method_field('patch')}}
          {{csrf_field()}}
          <input type="hidden" readonly value="<?=$x->nip_nrp;?>" name="nip_nrp" class="form-control" >
          <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
          <div class="form-group">
                  <label for="message-text" class="form-control-label">Nama Prestasi</label>
                  <input type="text" class="form-control" name="nama_prestasi" value="{{$x->nama_prestasi}}" id="message-text" required>
              </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Tahun</label>
              <input class="form-control" id="message-text" name="tahun" type="number" value="{{$x->tahun}}" required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Keterangan</label>
              <input class="form-control" id="message-text" name="keterangan" type="text" value="{{$x->keterangan}}" >
          </div>
       </div>
       {{-- end body --}}
       <!-- Modal footer -->
       <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         <input type="submit" id="submit" class="btn btn-primary" value="Edit" />
       </div>
 </form>
     </div>
   </div>
 </div>
<?php endforeach;?>
 <!------------------------end edit------------------------------>
 <!------------------------add data------------------------------>
<div class="modal fade" id="add_prestasi">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Tanda Jasa Prestasi</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <form action="{{route('riwayattandajasa.store')}}" method="post" name="registration">
              @csrf
              <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
              <div class="form-group">
              <div class="form-group">
                  <label for="message-text" class="form-control-label">Nama Prestasi</label>
                  <input type="text" class="form-control" name="nama_prestasi" id="message-text" required>
              </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Tahun</label>
              <input class="form-control" id="message-text" name="tahun" type="number" required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Keterangan</label>
              <input class="form-control" id="message-text" name="keterangan" type="text">
          </div>
         <!-- end body -->
      </div>
        <!-- Modal footer -->
        <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" />
        </div>
        </form>
        </div>
    </div>
</div>
</div>
 <!------------------------end add------------------------------>
 <!------------------------Hapus data------------------------------>
@foreach ($prestasi as $pres)
<div class="modal fade" id="modal-hapus-prestasi<?= $pres->id; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">HAPUS TANDA JASA PRESTASI</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
    <form action="{{route('riwayattandajasa.destroy',$pres->id)}}" method="post">
        {{method_field('delete')}}
        {{csrf_field()}}
        <div class="modal-body">
            <p>Apakah Anda Yakin Menghapus Data </strong>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <input type="submit"  class="btn btn-danger" value="Hapus" />
        </div>
    </form>
    </div>
  </div>
</div>
@endforeach
 <!------------------------end hapus------------------------------>
 <!---------------------------------------------end tanda jasa prestasi------------------------------------------------------------------->
 <!---------------------------------------------jabatan ------------------------------------------------------------------->
 {{-- modal --}}
       <!------------------------edit------------------------------>
       <?php $no=0; foreach($r_jabatan as $x): $no++; ?>
       <div class="modal fade" id="modal-edit-jabatan<?= $x->id; ?>">
         <div class="modal-dialog">
           <div class="modal-content">
             <!-- Modal Header -->
             <div class="modal-header">
               <h4 class="modal-title">EDIT RIWAYAT JABATAN</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <!-- Modal body -->
             <div class="modal-body">
             <form action="{{route('riwayatjabatan.update',$x->id)}}" name="edit_form" method="post" enctype="multipart/form-data">
                @csrf
                {{method_field('patch')}}
                <input type="hidden" readonly value="<?=$x->nip_nrp;?>" name="nip_nrp" class="form-control" >
                <input type="hidden" value="{{$data->nip_nrp}}" name="nip_nrp">
                <div class="form-group">
                        <label for="message-text" class="form-control-label">Jabatan</label>
                        <select class="form-control" name="id_jabatan" id="p_jabatan" required>
                            <option value="">pilih</option>
                            @foreach ($jabatan as $jab)
                                <option {{ $data->jabatan == $jab->id  ? 'selected' : ''}} value="{{$jab->id }}">{{$jab->nama_jabatan}}</option>
                            @endforeach
                        </select>
                    </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Nomor SK</label>
                    <input class="form-control" id="message-text" name="nomor_sk" type="text" value="{{$x->nomor_sk}}" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Pejabat</label>
                    <input class="form-control" id="message-text" name="pejabat" type="text" value="{{$x->pejabat}}" required>
                </div>
                 <div class="form-group">
                    <label for="message-text" class="form-control-label">Tanggal SK</label>
                    <input class="form-control" id="message-text" name="tgl_sk" type="date" value="{{$x->tgl_sk}}" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Tanggal Mulai Terhitung</label>
                    <input class="form-control" id="message-text" name="tgl_mulai_terhitung" type="date" value="{{$x->tgl_mulai_terhitung}}" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Keterangan</label>
                    <input class="form-control" id="message-text" name="keterangan" type="text" value="{{$x->keterangan}}" >
                </div>
             </div>
             {{-- end body --}}
             <!-- Modal footer -->
             <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
               <input type="submit" id="submit" class="btn btn-primary" value="Edit" />
             </div>
            </form>
           </div>
         </div>
       </div>
     <?php endforeach;?>
       <!------------------------end edit------------------------------>

       <!------------------------add data------------------------------>
      <div class="modal fade" id="add_riwayat_jabatan">
          <div class="modal-dialog">
              <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                  <h4 class="modal-title">RIWAYAT JABATAN</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <form action="{{route('riwayatjabatan.store')}}" method="post" name="registration">
                    @csrf
                    <input type="hidden" value="{{$data->nip_nrp}}" name="nip_nrp">
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Jabatan</label>
                    <select class="form-control" name="id_jabatan" id="p_jabatan" required>
                        <option value="">pilih</option>
                        @foreach ($jabatan as $jabat)
                            <option value="{{$jabat->id }}">{{$jabat->nama_jabatan}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Nomor SK</label>
                    <input class="form-control" id="message-text" name="nomor_sk" type="text"  required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Pejabat</label>
                    <input class="form-control" id="message-text" name="pejabat" type="text"required>
                </div>
                 <div class="form-group">
                    <label for="message-text" class="form-control-label">Tanggal SK</label>
                    <input class="form-control" id="message-text" name="tgl_sk" type="date"  required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Tanggal Mulai Terhitung</label>
                    <input class="form-control" id="message-text" name="tgl_mulai_terhitung" type="date"  required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Keterangan</label>
                    <input class="form-control" id="message-text" name="keterangan" type="text" >
                </div>
               <!-- end body -->
            </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      <input type="submit" class="btn btn-primary" />
              </div>
              </form>
              </div>
          </div>
      </div>
       <!------------------------end add------------------------------>


       <!------------------------Hapus data------------------------------>
      @foreach ($r_jabatan as $x)
      <div class="modal fade" id="modal-hapus-jabatan<?= $x->id; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">HAPUS RIWAYAT JABATAN</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
          <form action="{{route('riwayatjabatan.destroy',$x->id)}}" method="post">
            @csrf
            {{method_field('delete')}}
              <div class="modal-body">
                  <p>Apakah Anda Yakin Menghapus Data </strong>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                  <input type="submit"  class="btn btn-danger" value="Hapus" />
              </div>
          </form>
          </div>
        </div>
      </div>
      @endforeach
       <!------------------------end hapus------------------------------>
 <!---------------------------------------------end jabatan ------------------------------------------------------------------->
 <!---------------------------------------------pangkat ------------------------------------------------------------------->
 <!------------------------edit------------------------------>
 <?php $no=0; foreach($r_pangkat as $x): $no++; ?>
 <div class="modal fade" id="modal-edit-pangkat<?= $x->id; ?>">
   <div class="modal-dialog">
     <div class="modal-content">
       <!-- Modal Header -->
       <div class="modal-header">
         <h4 class="modal-title">EDIT RIWAYAT KEPANGKATAN</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       <!-- Modal body -->
       <div class="modal-body">
       <form action="{{route('riwayatpangkat.update',$x->id)}}" name="edit_form" method="post" enctype="multipart/form-data">
        @csrf
        {{method_field('patch')}}
          <input type="hidden" readonly value="<?=$x->nip_nrp;?>" name="nip_nrp" class="form-control" >
          <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
          <div class="form-group">
                  <label for="message-text" class="form-control-label"> Pangkat</label>
                  <select class="form-control " name="id_pangkat" id="p_pangkat" required>
                    <option value="">pilih</option>
                    @foreach ($pangkats as $pangs)
                        <option {{ $data->pangkat == $pangs->id  ? 'selected' : ''}} value="{{$pangs->id }}">{{$pangs->nama_pangkat}}</option>
                    @endforeach
                </select>
              </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">TMT</label>
              <input class="form-control" id="message-text" name="tmt" type="date" value="{{$x->tmt}}" required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Nomor SK</label>
              <input class="form-control" id="message-text" name="nomor_sk" type="text" value="{{$x->nomor_sk}}" required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Pejabat</label>
              <input class="form-control" id="message-text" name="pejabat" type="text" value="{{$x->pejabat}}" required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Tanggal SK</label>
              <input class="form-control" id="message-text" name="tanggal_sk" type="date" value="{{$x->tanggal_sk}}" required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Dasar Peraturan</label>
              <input class="form-control" id="message-text" name="dasar_peraturan" type="text" value="{{$x->dasar_peraturan}}" required>
          </div>
       </div>
       {{-- end body --}}
       <!-- Modal footer -->
       <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         <input type="submit" id="submit" class="btn btn-primary" value="Edit" />
       </div>
      </form>
     </div>
   </div>
 </div>
<?php endforeach;?>
 <!------------------------end edit------------------------------>

 <!------------------------add data------------------------------>
<div class="modal fade" id="add_riwayat_pangkat">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">RIWAYAT KEPANGKATAN</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <form action="{{route('riwayatpangkat.store')}}" method="post" name="registration">
              @csrf
              <input type="hidden" value="{{$data->nip_nrp}}" name="nip_nrp">
              <div class="form-group">
                  <label for="message-text" class="form-control-label"> Pangkat</label>
                  <select class="form-control " name="id_pangkat" id="p_pangkat" required>
                    <option value="">pilih</option>
                    @foreach ($pangkats as $pangs)
                        <option  value="{{$pangs->id }}">{{$pangs->nama_pangkat}}</option>
                    @endforeach
                </select>
              </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">TMT</label>
              <input class="form-control" id="message-text" name="tmt" type="date"   required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Nomor SK</label>
              <input class="form-control" id="message-text" name="nomor_sk" type="text"  required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Pejabat</label>
              <input class="form-control" id="message-text" name="pejabat" type="text"   required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Tanggal SK</label>
              <input class="form-control" id="message-text" name="tanggal_sk" type="date"  required>
          </div>
          <div class="form-group">
              <label for="message-text" class="form-control-label">Dasar Peraturan</label>
              <input class="form-control" id="message-text" name="dasar_peraturan" type="text"   required>
          </div>
         <!-- end body -->
      </div>
        <!-- Modal footer -->
        <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" />
        </div>
        </form>
        </div>
    </div>
</div>
 <!------------------------end add------------------------------>


 <!------------------------Hapus data------------------------------>
@foreach ($r_pangkat as $x)
<div class="modal fade" id="modal-hapus-pangkat<?= $x->id; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">HAPUS RIWAYAT KEPANGKATAN</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
    <form action="{{route('riwayatpangkat.destroy',$x->id)}}" method="post">
          @csrf
            {{method_field('delete')}}
        <div class="modal-body">
            <p>Apakah Anda Yakin Menghapus Data </strong>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <input type="submit"  class="btn btn-danger" value="Hapus" />
        </div>
    </form>
    </div>
  </div>
</div>
@endforeach
 <!------------------------end hapus------------------------------>
 <!---------------------------------------------end pangkat ------------------------------------------------------------------->
@endsection
