@extends('layouts.admin.app')
@section('body')

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
        @elseif(session('succes'))
        <div class="alert alert-success">
                {{ session('succes') }}
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
                            Tabel Cuti
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <!-- <button class="btn btn-primary tambah" data-toggle="modal" data-target="#cutitmbh"><i class="la la-plus">Tambah</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <!--begin: Datatable -->
                    <table class="table table-striped table-bordered dt-responsive nowrap display" style="width:100%">
                                @php
                                    $jum=0;
                                    foreach($kuota as $kuotas){
                                        $jum+=$kuotas->jumlah;
                                    }
                                    @endphp
                                <thead>
                                        <tr>
                                                <th>No</th>
                                                <th>Jenis Cuti</th>
                                                <th>Cuti Yang Telah Diambil</th>
                                                <th width="4%">Aksi</th>
                                        </tr>
                                </thead>
                                <tbody>
                                    
                                    @php
                                        $no=1;
                                    @endphp
                                    @if (!empty($data))
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$item->jenis_cuti->nama_cuti}}</td>
                                                <td>{{$jum}}</td>
                                                <td>
                                                    <a class="badge badge-info" href="" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-folder-open"></span></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                    </table>
                    <!--end: Datatable -->
                </div>
            </div>
        </div>
        <!-- end:: Content -->
        

        <!-- begin:: Content DATA CUTI BARU-->
        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <!-- @php
                        $jum=0;
                        foreach($kuota as $kuotas){
                            $jum+=$kuotas->jumlah;
                        }
                        @endphp -->


                        <h3 class="kt-portlet__head-title">
                           <!-- cuti yang telah anda ambil={{$jum}} -->
                           <!-- @foreach ($jenis_cuti as $item)
                           <a class="badge badge-info" href="{{route('pegawai_cuti.show',$item->id)}}" >
                               <p>{{$item->nama_cuti}}: <p>{{$item->lama_cuti}} hari</p></p>
                            </a>
                            @endforeach -->
                            Pengajuan Cuti
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#cutitmbh"><i class="la la-plus"></i>Tambah</button>
                                    <!-- <a class="btn btn-primary" data-toggle="modal" data-target="#cutitmbh"><i class="la la-plus">Tambah</a> -->
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
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                            <tbody>
                                                @php
                                                    $no=1;
                                                @endphp
                                                    @foreach ($data as $cuti)
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
                                                                    @elseif($cuti->status == 1)
                                                                    <p style="color:#10be10">Diterima</p>
                                                                    @elseif($cuti->status == 2)
                                                                    <p style="color:red">Ditolak</p>
                                                                    @elseif($cuti->status == 3)
                                                                    <p>Selesai</p>
                                                                    @endif
                                                                </td>
                                                                <td>{{$cuti->jumlah}}</td>
                                                                @if ($cuti->status == 1 || $cuti->status == 3)
                                                                <td class="text-center">
                                                                    -
                                                                </td>
                                                                @else
                                                                <td class="text-center">
                                                                        <a class="badge badge-success edit" href="#modal-edit-cuti<?php echo $cuti->id?>" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                                        <a class="badge badge-danger" href="#modal-hapus-cuti<?php echo $cuti->id?>"  data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
                                                                </td>
                                                                @endif
                                                        </tr>
                                                    @endforeach
                                                </tr>
                                            </tbody>
                    </table>
                    <!--end: Datatable -->
                </div>
                 <!-- modal cuti -->
                 <div class="modal fade" id="cutitmbh" tabindex="-1" role="dialog" aria-labelledby="jdlcuti" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="jdlcuti">Tambah Data Cuti</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="modal-body tambah ">
                                        @if ($errors->any())
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>

                                    @endif
                                    <form action="{{route('P_cuti.store')}}" method="post" enctype="multipart/form-data" >
                                        @csrf
                                        <input type="hidden" name="nip_nrp" value="{{auth::user()->nip_nrp}}">
                                            <span class="invalid-feedback" role="alert">
                                            <strong>alert</strong></span>
                                        <div class="form-group">
                                                <label for="message-text" class="form-control-label">Jenis Cuti *</label>
                                                <select name="id_jenis_cuti" id="" class="form-control" required>
                                                    <option value="">Pilih</option>
                                                    @foreach ($jenis_cuti as $jenis)
                                                        <option value="{{$jenis->id}}" class="form-control" {{ (old('id_jenis_cuti') == $jenis->id) ? 'selected' : ''}}>{{$jenis->nama_cuti}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                        <div class="form-group">
                                                <label for="message-text" class="form-control-label">Tanggal Mulai *</label>
                                                <input type="date" class="form-control" name="tgl_mulai" id="message-text" required value="{{ old('tgl_mulai') }}">
                                        </div>
                                        <div class="form-group">
                                                <label for="message-text" class="form-control-label">Tanggal Selesai *</label>
                                                <input type="date" class="form-control" name="tgl_selesai" id="message-text" value="{{ old('tgl_selesai') }}" required>
                                        </div>
                                        <div class="form-group">
                                                <label for="message-text" class="form-control-label">File *</label>
                                                <input type="file" class="form-control" name="file" id="message-text" value="{{ old('file') }}" required>
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
                <?php $no=0; foreach($data as $x): $no++; ?>
                <div class="modal fade" id="modal-edit-cuti<?= $x->id; ?>">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header">
                          {{-- edit sesuai judul topik dst --}}
                        <h4 class="modal-title">Edit Pengajuan Cuti</h4>
                        <button type="button" class="close" data-dismiss="modal"></button>
                      </div>
                      <!-- Modal body -->
                      <div class="modal-body">
                            @if ($errors->any())
                                            <ul >
                                                @foreach ($errors->all() as $error)
                                                    <li style="background-color:green">{{ $error }}</li>
                                                @endforeach
                                            </ul>

                                    @endif
                      <form action="{{route('pegawai_cuti.update',$x->id)}}" name="edit_form" method="post" enctype="multipart/form-data">
                         {{method_field('patch')}}
                         {{csrf_field()}}
                            <div class="form-group">

                            <input type="hidden" name="nip_nrp" value="{{auth::user()->nip_nrp}}">
                                <span class="invalid-feedback" role="alert">
                                        <strong>alert</strong></span>
                            </div>
                            <div class="form-group">
                                    <label for="message-text" class="form-control-label">Jenis Cuti *</label>
                                    <select name="id_jenis_cuti" id="" class="form-control" required>
                                        <option value="">Pilih</option>
                                        @foreach ($jenis_cuti as $jenis)
                                            <option value="{{$jenis->id}}" class="form-control" {{ ($x->id_jenis_cuti ==$jenis->id) ? 'selected' : ''}}>{{$jenis->nama_cuti}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                    <label for="message-text" class="form-control-label">Tanggal Mulai *</label>
                                    <input type="date" class="form-control" name="tgl_mulai" id="message-text" required value="{{ $x->tgl_mulai }}">
                            </div>
                            <div class="form-group">
                                    <label for="message-text" class="form-control-label">Tanggal Selesai *</label>
                                    <input type="date" class="form-control" name="tgl_selesai" id="message-text" value="{{ $x->tgl_selesai }}" required>
                            </div>
                            <div class="form-group">
                                    <label for="message-text" class="form-control-label">File Sebelumnya </label><br>
                                    <a href="{{asset('file'.'/'.$x->file)}}"> {{$x->file}}</a>
                            </div>
                            <div class="form-group">
                                    <label for="message-text" class="form-control-label">File *</label>

                                    <input type="file" class="form-control" name="file" id="message-text" >
                            </div>
                            <div class="form-group">
                                    <label for="message-text" class="form-control-label">Keterangan *</label>
                                    <input type="text" class="form-control" name="keterangan" id="message-text" value="{{ $x->keterangan }}" required>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
                </div>
              <?php endforeach;?>
                <!------------------------end edit------------------------------>
                @foreach ($data as $x)
                <div class="modal fade" id="modal-hapus-cuti<?= $x->id; ?>">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Hapus Pengajuan Cuti</h4>
                        <button type="button" class="close" data-dismiss="modal"></button>
                      </div>
                      <!-- Modal body -->
                    <form action="{{route('pegawai_cuti.destroy',$x->id)}}" method="post">
                        {{method_field('delete')}}
                        {{csrf_field()}}
                        <div class="modal-body">
                            <p>Apakah Anda Yakin Menghapus Data </strong>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <input type="submit"  class="btn btn-primary" value="Hapus" />
                        </div>
                    </form>
                    </div>
                  </div>
                </div>
                @endforeach

                <div class="modal fade" id="jml">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Total Cuti </h4>
                              <button type="button" class="close" data-dismiss="modal"></button>
                            </div>
                            <!-- Modal body -->
                          <form action="{{route('pegawai_cuti.destroy',$x->id)}}" method="post">
                              {{method_field('delete')}}
                              {{csrf_field()}}
                              <div class="modal-body">

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
    $("body").on("click",".close",function(){
        location.reload();
    })
    $("body").on("click",".edit",function(){
        // $("input[name=tgl_mulai]").val("");
        var form=$("body");
            form.find('ul').remove();
    })
</script>
@endif
@if (session('error_code'))
<script>
  $(function() {
    $('#jml').modal('show');
    var z={{ session('error_code') }}
    $('.modal-body').append('<span class="help-block"><strong>Cuti Yang Telah Anda Ambil '+z+'</strong></span>');
});
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
