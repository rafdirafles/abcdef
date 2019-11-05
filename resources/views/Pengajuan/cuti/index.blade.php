@extends('layouts.admin.app')
@section('body')
@php
date_default_timezone_set('Asia/Jakarta');
@endphp
 <!-- konten mulai -->
 <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">ABSENSI</h3>
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                    <span class="kt-subheader__desc">CUTI</span>
                </div>
            </div>
        </div>
        <!-- end:: Content Head -->
        @if (session('alert'))
            <div class="alert alert-danger">
                {{ session('alert') }}
            </div>
        @endif

        <!-- begin:: Content -->
        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <!-- <span class="kt-portlet__head-icon">
                            <i class="kt-font-brand flaticon2-line-chart"></i>
                        </span> -->
                        <h3 class="kt-portlet__head-title">
                            DATA PEGAWAI SEDANG CUTI
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                    <!-- &nbsp; -->
                                    <!-- <a href="#" class="btn btn-brand btn-elevate btn-icon-sm">
                                        <i class="la la-plus"></i>
                                        New Record -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <!--begin: Datatable -->
                    <table class="table table-striped table-bordered dt-responsive nowrap display" style="width:100%">
                                <thead>
                                        <tr>
                                                <th>No</th>
                                                <th>NIP / NRP</th>
                                                <th>Nama</th>
                                                <th>Jenis Cuti</th>
                                                <th>Tanggal Mulai</th>
                                                <th>Tanggal Selesai</th>
                                                <th>Keterangan</th>
                                                <th>Jumlah</th>

                                        </tr>
                                    </thead>
                                            <tbody>
                                                @php
                                                    $no=1;
                                                    date_default_timezone_set('Asia/Jakarta');
                                                    $sekarang=date("Y-m-d");
                                                @endphp
                                                @if (!empty($data))
                                                    @foreach ($data as $item)
                                                    @if ($item->status != 3)
                                                        <tr>
                                                            <td>{{$no++}}</td>
                                                            <td>{{$item->nip_nrp}}</td>
                                                            <td>{{$item->User->nama_pegawai}}</td>
                                                            <td>{{$item->jenis_cuti->nama_cuti}}</td>
                                                            <td>{{$item->tgl_mulai}}</td>
                                                            <td>{{$item->tgl_selesai}}</td>
                                                            <td>{{$item->keterangan}}</td>
                                                            <td>{{$item->jumlah}}</td>
                                                        </tr>
                                                    @endif

                                                    @endforeach
                                                @endif

                                            </tbody>
                    </table>
                    <!--end: Datatable -->
                </div>
            </div>
        </div>
        <!-- end:: Content -->

        <!-- begin:: Content dATA CUTI BARU-->
        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <!-- <span class="kt-portlet__head-icon">
                            <i class="kt-font-brand flaticon2-line-chart"></i>
                        </span> -->
                        <h3 class="kt-portlet__head-title">
                            DATA PEGAWAI MENGAJUKAN CUTI
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#cutitmbh"><i class="la la-plus"></i>Tambah</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <!--begin: Datatable -->
                    <table class="table table-striped table-bordered dt-responsive nowrap display" style="width:100%">
                                <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP / NRP</th>
                                            <th>Nama</th>
                                            <th>Jenis Cuti</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Selesai</th>
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th>jumlah</th>
                                            <th>file</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                            <tbody>
                                                @php
                                                    $no=1;
                                                @endphp
                                                    @foreach ($P_cuti as $cuti)
                                                    @if ($cuti->status != 3)
                                                        <tr>
                                                                <td>{{$no++}}</td>
                                                                <td>{{$cuti->nip_nrp}}</td>
                                                                <td>{{$cuti->User->nama_pegawai}}</td>
                                                                <td>{{$cuti->jenis_cuti->nama_cuti}}</td>
                                                                <td>{{$cuti->tgl_mulai}}</td>
                                                                <td>{{$cuti->tgl_selesai}}</td>
                                                                <td>{{$cuti->keterangan}}</td>
                                                                <td>
                                                                    @if ($cuti->status == 0)
                                                                        <p style="color:#FFB821">Pending</p>
                                                                    @elseif($cuti->status ==2)
                                                                        <p style="color:red">Tolak</p>
                                                                    @endif
                                                                </td>
                                                                <td>{{$cuti->jumlah}}</td>
                                                                <td><a href="{{asset('file/'.$cuti->file)}}">{{$cuti->file}}</a></td>
                                                                <td class="text-center">
                                                                <form action="{{route('P_cuti.update',$cuti->nip_nrp)}}" method="post">
                                                                    @csrf
                                                                    @method('PATCH')
                                                                    <input type="hidden" value="{{$cuti->id}}" name="id" >
                                                                    <input type="hidden" value="{{$cuti->id_jenis_cuti}}" name="jenis_cuti">
                                                                    <button class="badge badge-success">T E R I M A </button>
                                                                </form>

                                                                <form action="{{route('tolak_cuti')}}" method="post">
                                                                    @csrf
                                                                    <input type="hidden" value="{{$cuti->id}}" name="id">
                                                                    <input type="hidden" value="{{$cuti->id_jenis_cuti}}" name="jenis_cuti">
                                                                    <button class="badge badge-warning">T O L A K</button>
                                                                </form>
                                                                <!-- {{-- <a class="badge badge-success" href="{{route('P_cuti',$cuti->nip_nrp)}}"  title="ACC"><span class="fas fa-fw fa-edit"></span></a>
                                                                        <a class="badge badge-danger" href="#modal-hapus" data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                                </td> --}} -->
                                                                <form action="{{route('P_cuti.destroy',$cuti->id)}}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="hidden" value="{{$cuti->id}}" name="id">
                                                                    <input type="hidden" value="{{$cuti->id_jenis_cuti}}" name="jenis_cuti">
                                                                    <button class="badge badge-danger">H A P U S </button>
                                                                </form>
                                                        </tr>
                                                    @endif
                                                    @endforeach
                                                </tr>
                                            </tbody>
                    </table>
                    <!--end: Datatable -->
                </div>
        
        <!-- Selesai -->
        
        <!-- modal cuti -->
        <div class="modal fade" id="cutitmbh" tabindex="-1" role="dialog" aria-labelledby="jdlcuti" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="jdlcuti">Tambah Data Cuti</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('P_cuti.store')}}" method="post" enctype="multipart/form-data">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @csrf
                            <div class="form-group">
                                <label for="nip" class="form-control-label">NIP / NRP*</label>
                                <br>
                                <select class="form-control" id="kt_select2_1" name="nip_nrp" required>
                                        <option value="">Select Pegawai</option>
                                        @foreach ($pegawais as $pegawai)
                                            <option  value="{{$pegawai->nip_nrp}}" class="form-control" {{ (old('nip_nrp') ==$pegawai->nip_nrp) ? 'selected' : ''}}> {{$pegawai->nama_pegawai}}</option>
                                        @endforeach
                                </select>
                                <span class="invalid-feedback" role="alert">
                                        <strong>alert</strong></span>
                            </div>
                            <div class="form-group">
                                    <label for="message-text" class="form-control-label">Jenis Cuti *</label>
                                    <select name="id_jenis_cuti" id="" class="form-control" required>
                                        <option value="">Pilih</option>
                                        @foreach ($jenis_cuti as $jenis)
                                            <option value="{{$jenis->id}}" class="form-control" {{ (old('id_jenis_cuti') ==$jenis->id) ? 'selected' : ''}}>{{$jenis->nama_cuti}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                    <label for="message-text" class="form-control-label">Tanggal Mulai *</label>
                                    <input type="date" class="form-control" name="tgl_mulai" id="message-text" required value="{{ old('tgl_mulai') }}"">
                            </div>
                            <div class="form-group">
                                    <label for="message-text" class="form-control-label">Tanggal Selesai *</label>
                                    <input type="date" class="form-control" name="tgl_selesai" id="message-text" value="{{ old('tgl_selesai') }}" required>
                            </div>
                            <div class="form-group">
                                    <label for="message-text" class="form-control-label">File *</label>
                                    <input type="file" class="form-control" name="file" id="message-text" value="{{ old('file') }}" required>
                                    @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                    <label for="message-text" class="form-control-label">Keterangan *</label>
                                    <input type="text" class="form-control" name="keterangan" id="message-text" value="{{ old('keterangan') }}" required>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- selesai -->    
            </div>
        </div>
        <!-- end:: Content -->
    </div>
</div>
<!-- selesai -->

@endsection
@section('asset-buttom')

        @if ($errors->any())
        <script>

            $('#cutitmbh').modal('show');

        </script>
        @endif

<script>

        var table = $('table.display').DataTable({
            responsive: true,
            searching : false,
            paging:false,
            ordering: false,
            info: false
        });

    </script>
    <script src="{{ asset('template/assets/js/pages/crud/forms/widgets/select2.js')}}" type="text/javascript"></script>
@endsection
