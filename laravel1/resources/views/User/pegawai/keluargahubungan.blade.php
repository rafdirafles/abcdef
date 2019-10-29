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

                <form class="kt-form kt-form--label-right" action="{{route('keluargahubungan.update',$data->nip_nrp)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h3 class="kt-section__title kt-section__title-sm">Data Keluarga:</h3>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">NIK</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="number" id="nik" name="nik" class="form-control @error('nik') is-invalid @enderror" placeholder="Masukkan NIK" value="{{$data->nik}}" required>
                                        @error('nik')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Status Menikah</label>
                                    <div class="col-lg-9 col-xl-6">
                                                @if ($datas == null)
                                                    <select class="form-control" name="status_menikah" id="status_menikah" required>
                                                        <option value="">---- Pilih -------</option>
                                                        <option  value="Belum Kawin">Belum Kawin</option>
                                                        <option value="Kawin">Kawin</option>
                                                        <option  value="Janda">Janda</option>
                                                        <option value="Duda">Duda</option>
                                                    </select>

                                                @else
                                                <select class="form-control" name="status_menikah" id="status_menikah" required>
                                                        <option value="">---- Pilih -------</option>
                                                        <option {{ ($datas->status_menikah == 'Belum Kawin') ? 'selected' : '' }} value="Belum Kawin">Belum Kawin</option>
                                                        <option {{ ($datas->status_menikah == 'Kawin') ? 'selected' : '' }} value="Kawin">Kawin</option>
                                                        <option {{ ($datas->status_menikah == 'Janda') ? 'selected' : '' }} value="Janda">Janda</option>
                                                        <option {{ ($datas->status_menikah == 'Duda') ? 'selected' : '' }} value="Duda">Duda</option>
                                                </select>

                                                @endif
                                        </div>
                                    </div>

                                    <div class="form-group row form-group-last row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">No Kartu Keluarga</label>
                                    <div class="col-lg-9 col-xl-6">

                                            <input type="number" id="no_kk" name="no_kk" class="form-control @error('no_kk') is-invalid @enderror" placeholder="Masukkan No Kartu Keluarga"  value="{{$datas->no_kk}}" required>
                                            @error('no_kk')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                    <div class="kt-portlet kt-portlet--mobile">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
                                <!-- <span class="kt-portlet__head-icon">
                                    <i class="kt-font-brand flaticon2-line-chart"></i>
                                </span> -->
                                <h3 class="kt-portlet__head-title">
                                    DATA KELUARGA
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
                                            <a class="btn btn-primary" data-toggle="modal" data-target="#add_keluarga">(+)tambah</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <!--begin: Datatable -->
                            <table class="table table-striped table-bordered dt-responsive nowrap display" style="width:100%">
                                    <thead>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Hubungan Keluarga</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Status Hidup</th>
                                            <th>Pekerjaan</th>
                                            <th>Keterangan</th>
                                            <th width="10%">Aksi</th>
                                        </thead>
                                        <tbody>
                                          @php
                                            $no=1;
                                          @endphp
                                         @foreach ($keluargas as $keluarga)
                                         <tr>
                                             <td>{{$no++}}</td>
                                             <td>{{$keluarga->nama}}</td>
                                             <td>{{$keluarga->jk}}</td>
                                             <td>{{$keluarga->hubungan_keluarga}}</td>
                                             <td>{{$keluarga->tempat_lahir}}</td>
                                             <td>{{$keluarga->tanggal_lahir}}</td>
                                             <td>{{$keluarga->status_hidup}}</td>
                                             <td>{{$keluarga->pekerjaan}}</td>
                                             <td>{{$keluarga->keterangan}}</td>
                                            <td>
                                                <a class="badge badge-success" href="#modal-edit-keluarga<?php echo $keluarga->id?>" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                                <a class="badge badge-danger" href="#modal-hapus-keluarga<?php echo $keluarga->id?>"  data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
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
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-3 col-xl-3"></div>
                                    <div class="col-lg-9 col-xl-9">
                                        <button type="submit" class="btn btn-success">Submit</button>&nbsp;
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
  <!------------------------edit------------------------------>
<?php $no=0; foreach($keluargas as $x): $no++; ?>
<div class="modal fade" id="modal-edit-keluarga<?= $x->id; ?>">
    <div class="modal-dialog">
    <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
        <h4 class="modal-title">EDIT KELUARGA</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
        <form action="{{route('keluargahubungan.updates')}}" name="edit_form" method="post" enctype="multipart/form-data">

            {{csrf_field()}}
        <input type="hidden" readonly value="{{$x->nip_nrp}}" name="nip_nrp" class="form-control" >
        <input type="hidden" readonly value="{{$x->id}}" name="id" class="form-control" >
            <div class="form-group">
                    <label for="message-text" class="form-control-label">Nama *</label>
                <input class="form-control" name="nama" value="{{$x->nama}}" type="text" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Jenis Kelamin *</label>
                    <select class="form-control" required name="jk">
                        <option value="">pilih jenis kelamin</option>
                        <option <?php if ($x->jk== "L" ) echo 'selected' ; ?> value="L">Laki-Laki</option>
                        <option <?php if ($x->jk== "P" ) echo 'selected' ; ?> value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Hubungan Keluarga *</label>
                    <select class="form-control" required name="hubungan_keluarga">
                        <option value="">Pilih Hubungan Keluarga</option>
                        <option <?php if ($x->hubungan_keluarga== "Ayah" ) echo 'selected' ; ?> value="Ayah">Ayah</option>
                        <option <?php if ($x->hubungan_keluarga== "Ibu" ) echo 'selected' ; ?> value="Ibu">Ibu</option>
                        <option <?php if ($x->hubungan_keluarga== "Saudara kandung" ) echo 'selected' ; ?> value="Saudara kandung">Saudara Kandung</option>
                        <option <?php if ($x->hubungan_keluarga== "Saudara tiri" ) echo 'selected' ; ?> value="Saudara tiri">Saudara Tiri</option>
                        <option <?php if ($x->hubungan_keluarga== "Anak kandung" ) echo 'selected' ; ?> value="Anak kandung">Anak Kandung</option>
                        <option <?php if ($x->hubungan_keluarga== "Anak tiri" ) echo 'selected' ; ?> value="Anak tiri">Anak Tiri</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Tempat Lahir *</label>
                    <input type="text" class="form-control" value="{{$x->tempat_lahir}}" name="tempat_lahir" required placeholder="exp:2019">
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Tanggal Lahir * </label>
                    <input type="date" class="form-control" value="{{$x->tanggal_lahir}}" name="tanggal_lahir" required >
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Status Hidup *</label>
                    <select class="form-control" required name="status_hidup">
                        <option value="">pilih jenis status hidup</option>
                        <option <?php if ($x->status_hidup == "Hidup" ) echo 'selected' ; ?> value="Hidup">Hidup</option>
                        <option <?php if ($x->status_hidup == "Meninggal" ) echo 'selected' ; ?> value="Meninggal">Meninggal</option>
                    </select>
                </div>
                <div class="form-group">
                        <label for="message-text" class="form-control-label">Pekerjaan * </label>
                        <input type="text" class="form-control" value="{{$x->pekerjaan}}" name="pekerjaan" required >
                </div>
                <div class="form-group">
                        <label for="message-text" class="form-control-label">Keterangan  </label>
                        <input type="text" class="form-control" value="{{$x->keterangan}}" name="keterangan">
                </div>
            </div>
        {{-- end body --}}
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" id="submit" class="btn btn-primary" />
        </div>
    </form>
    </div>
    </div>
</div>
<?php endforeach;?>
<!------------------------end edit------------------------------>

<!------------------------add data------------------------------>
<div class="modal fade" id="add_keluarga">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">KELUARGA</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
    <form action="{{route('keluargahubungan.store')}}" method="post" name="registration">
        @csrf
        <input type="hidden" value="{{ $datas->nip_nrp}}" name="nip_nrp">
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
                <label for="message-text" class="form-control-label">Keterangan  </label>
                <input type="text" class="form-control" name="keterangan">
        </div>
        <!-- end body -->
    </div>
        <!-- Modal footer -->
        <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <input type="submit" name="submit" class="btn btn-primary" />
        </div>
        </form>
        </div>
    </div>
</div>
<!------------------------end add------------------------------>

<!------------------------Hapus data------------------------------>
@foreach ($keluargas as $keluarga)
<div class="modal fade" id="modal-hapus-keluarga<?= $keluarga->id; ?>">
<div class="modal-dialog">
    <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
        <h4 class="modal-title">HAPUS DATA KELUARGA</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <!-- Modal body -->
    <form action="{{route('keluargahubungan.destroy',$keluarga->id)}}" method="post">
        {{method_field('delete')}}
        {{csrf_field()}}
        <div class="modal-body">
            <p>Apakah Anda Yakin Menghapus Data </strong>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <input type="submit" name="submit" class="btn btn-danger" />
        </div>
    </form>
    </div>
</div>
</div>
@endforeach
<!-- selesai -->
                </div>
            </div>
        </div>
    </div>
    <!--End:: App Content-->
@endsection
