 <!--Begin:: App Content-->
 @section('content')
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
            <form class="kt-form kt-form--label-right" action="{{route('pegawaiuser.update',$data->nip_nrp)}}"  enctype="multipart/form-data" method="post">
                @csrf
                {{ method_field('PATCH') }}
                <div class="kt-portlet__body">
                        <div class="kt-section kt-section--first">
                            <div class="kt-section__body">
                                <div class="row">
                                <label class="col-xl-3"></label>
                                <div class="col-lg-9 col-xl-6">
                                    <h3 class="kt-section__title kt-section__title-sm">Data Personel:</h3>
                                </div>
                                </div>
                                <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Foto</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar">
                                        <div class="kt-avatar__holder" style="background-image: url({{asset('img/'.$data->foto)}}); background-size: 120px 120px;"></div>
                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                            <i class="fa fa-pen"></i>
                                            <input type="file" name="foto" accept=".png, .jpg, .jpeg">
                                        </label>
                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                            <i class="fa fa-times"></i>
                                        </span>
                                    </div>
                                </div>
                                </div>
                                <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">NIP / NRP</label>
                                <div class="col-lg-9 col-xl-6">
                                <input type="number" id="nrp" name="nip_nrp" class="form-control" placeholder="Masukkan NIP/NRP" value="{{$data->nip_nrp}}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Nama Pegawai</label>
                                <div class="col-lg-9 col-xl-6">
                                <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" placeholder="Masukkan Nama Lengkap" value="{{$data->nama_pegawai}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">No KTA Pegawai</label>
                                <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="no_kta" name="no_kta_pegawai" class="form-control" placeholder="Masukkan No KTA Pegawai" value="{{$data->no_kta_pegawai}}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Jenis Pegawai</label>
                                <div class="col-lg-9 col-xl-6">
                                        <select class="form-control" id="jenis_pegawai" name="jenis_pegawai" required>
                                                <option value="">------- Pilih -------</option>
                                                <option {{ $data->jenis_pegawai == "Polri" ? 'selected' : '' }} value="Polri">POLRI</option>
                                                <option {{ $data->jenis_pegawai == "PNS" ? 'selected' : '' }} value="PNS">PNS</option>
                                                <option {{ $data->jenis_pegawai == "Dosen Eksternal" ? 'selected' : ''}} value="Dosen Eksternal">DOSEN EKSTERNAL</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">NIK</label>
                                <div class="col-lg-9 col-xl-6">
                                        <input type="number" id="nik" name="nik" class="form-control" placeholder="Masukkan NIK" value="{{$data->nik}}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">NIDN</label>
                                <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="nidn" name="nidn" class="form-control" placeholder="Masukkan NIDN" value="{{$data->nidn}}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">No.Kep.Jabatan</label>
                                <div class="col-lg-9 col-xl-6">
                                        <input type="number" id="no_kep_jabatan" name="no_kep_jabatan" class="form-control" placeholder="Masukkan No.Kep.Jabatan" value="{{$data->nik}}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Tempat Lahir</label>
                                <div class="col-lg-9 col-xl-6">
                                        <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" value="{{$data->tempat_lahir}}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-lg-9 col-xl-6">
                                        <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" value="{{$data->tanggal_lahir}}" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-lg-9 col-xl-6">
                                        <select class="form-control" id="jk" name="jk" required>
                                                <option value="">------- Pilih -------</option>
                                                <option {{ $data->jk == "L" ? 'selected' : ''}} value="L">Laki-Laki</option>
                                                <option {{ $data->jk == "P" ? 'selected' : ''}} value="P">Perempuan</option>
                                            </select>
                                </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Pangkat</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <select class="form-control " name="pangkat" id="p_pangkat" required>
                                            <option value="">pilih</option>
                                            @foreach ($pangkats as $pangs)
                                                <option {{ $data->pangkat == $pangs->id  ? 'selected' : ''}} value="{{$pangs->id }}">{{$pangs->nama_pangkat}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Jabatan</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <select class="form-control" name="jabatan" id="p_jabatan" required>
                                            <option value="">pilih</option>
                                            @foreach ($jabatan as $jabat)
                                                <option {{ $data->jabatan == $jabat->id  ? 'selected' : ''}} value="{{$jabat->id }}">{{$jabat->nama_jabatan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Agama</label>
                                <div class="col-lg-9 col-xl-6">
                                        <select class="form-control" id="agama" name="agama" required>
                                                <option value="">------- Pilih -------</option>
                                                <option {{ $data->agama == "Islam" ? 'selected' : ''}} value="Islam">Islam</option>
                                                <option {{ $data->agama == "Kristen" ? 'selected' : ''}} value="Kristen">Kristen</option>
                                                <option {{ $data->agama == "Katolik" ? 'selected' : ''}} value="Katolik">Katolik</option>
                                                <option {{ $data->agama == "Hindu" ? 'selected' : ''}} value="Hindu">Hindu</option>
                                                <option {{ $data->agama == "Budha" ? 'selected' : ''}} value="Budha">Budha</option>
                                                <option {{ $data->agama == "Konghucu" ? 'selected' : ''}} value="Konghucu">Konghucu</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group form-group-last row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Tanggal Masuk</label>
                                <div class="col-lg-9 col-xl-6">
                                        <input type="date" id="tgl_masuk" name="tgl_masuk" class="form-control" placeholder="Tanggal Masuk" value="{{$data->tgl_masuk}}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                <!-- row tabel bahasa  -->
                <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                    <div class="kt-portlet kt-portlet--mobile">
                        <div class="kt-portlet__head kt-portlet__head--lg">
                            <div class="kt-portlet__head-label">
                                <!-- <span class="kt-portlet__head-icon">
                                    <i class="kt-font-brand flaticon2-line-chart"></i>
                                </span> -->
                                <h3 class="kt-portlet__head-title">
                                        Kecakapan Bahasa
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
                                            <a class="btn btn-primary" data-toggle="modal" data-target="#bhs">(+)tambah</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <!--begin: Datatable -->
                            <table class="table table-striped table-bordered dt-responsive nowrap display" style="width:100%">
                                <thead>
                                    <th>No</th>
                                    <th>Jenis Bahasa</th>
                                    <th>Bahasa</th>
                                    <th>Kemampuan Bahasa</th>
                                    <th width="10%">Aksi</th>
                                </thead>
                                <tbody>
                                  @php
                                    $no=1;
                                  @endphp
                                 @foreach ($k_bahasa as $bahasa)
                                 <tr>
                                     <td>{{$no++}}</td>
                                     <td>{{$bahasa->jenis_bahasa}}</td>
                                     <td>{{$bahasa->nama_bahasa}}</td>
                                     <td>{{$bahasa->kemampuan_bahasa}}</td>
                                    <td>
                                        <a class="badge badge-success" href="#modal-edit-bahasa<?php echo $bahasa->id?>" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                        <a class="badge badge-danger" href="#modal-hapus-bahasa<?php echo $bahasa->id?>"  data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
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

            <!-- row tabel OLAHRAGA  -->
            <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
                            <!-- <span class="kt-portlet__head-icon">
                                <i class="kt-font-brand flaticon2-line-chart"></i>
                            </span> -->
                            <h3 class="kt-portlet__head-title">
                                    Kecakapan Olah Raga dan Bela Diri
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
                                        <a class="btn btn-primary" data-toggle="modal" data-target="#add_kecakapan_olahraga">(+)tambah</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <!--begin: Datatable -->
                        <table class="table table-striped table-bordered dt-responsive nowrap display" style="width:100%">
                                <thead>
                                        <th>No</th>
                                        <th>Olahraga Dan Beladiri</th>
                                        <th>Keterangan</th>
                                        <th width="10%">Aksi</th>
                                    </thead>
                                    <tbody>
                                      @php
                                        $no=1;
                                      @endphp
                                     @foreach ($k_olahraga as $olahraga)
                                     <tr>
                                         <td>{{$no++}}</td>
                                         <td>{{$olahraga->nama_olahraga}}</td>
                                         <td>{{$olahraga->keterangan}}</td>
                                        <td>
                                            <a class="badge badge-success" href="#modal-edit-olahraga<?php echo $olahraga->id?>" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                                            <a class="badge badge-danger" href="#modal-hapus-olahraga<?php echo $olahraga->id?>"  data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
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
            </div>
        </div>
    </div>
    <!-- modal bahasa -->
    <div class="modal fade" id="bhs">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Kecakapan Bahasa</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
          <form action="{{route('keahlian_bahasa.store')}}" method="post" enctype="multipart/form-data" name="registration">
              @csrf
              <input type="hidden" value="{{$data->nip_nrp}}" name="nip_nrp">
              <div class="form-group">
                      <label for="message-text" class="form-control-label">Jenis Bahasa*</label>
                      <select class="form-control" required name="jenis_bahasa">
                          <option value="">pilih jenis bahasa</option>
                          <option value="Daerah">Daerah</option>
                          <option value="Asing">Asing</option>

                      </select>
              </div>
              <div class="form-group">
                      <label for="message-text" class="form-control-label">Nama Bahasa*</label>
                      <input type="text" class="form-control" name="nama_bahasa" id="message-text" required>
              </div>
              <div class="form-group">
                      <label for="message-text" class="form-control-label">Kemampuan Bahasa*</label>
                      <select class="form-control" required name="kemampuan_bahasa">
                          <option value="">pilih</option>
                          <option value="Aktif">Aktif</option>
                          <option value="Pasif">Pasif</option>
                      </select>
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
    {{-- end --}}
<!------------------------edit------------------------------>
<?php $no=0; foreach($k_bahasa as $x): $no++; ?>
<div class="modal fade" id="modal-edit-bahasa<?= $x->id; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Kategori</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
      <form action="{{route('keahlian_bahasa.update',$x->id)}}" name="edit_form" method="post" enctype="multipart/form-data">
         {{method_field('patch')}}
         {{csrf_field()}}
         <input type="hidden" readonly value="<?=$x->nip_nrp;?>" name="nip_nrp" class="form-control" >
         <div class="form-group">
             <label for="message-text" class="form-control-label">Jenis Bahasa *</label>
             <select class="form-control" required name="jenis_bahasa">
                 <option value="">pilih jenis bahasa</option>
                 <option <?php if ($x->jenis_bahasa == "Daerah" ) echo 'selected' ; ?> value="Daerah">Daerah</option>
                 <option <?php if ($x->jenis_bahasa == "Asing" ) echo 'selected' ; ?> value="Asing">Asing</option>
             </select>
         </div>
         <div class="form-group">
             <label for="message-text" class="form-control-label">Nama Bahasa *</label>
             <input type="text" class="form-control" value="{{$x->nama_bahasa}}" name="nama_bahasa" id="message-text" required>
         </div>
         <div class="form-group">
             <label for="message-text" class="form-control-label">Kemampuan Bahasa *</label>
             <select class="form-control" required name="kemampuan_bahasa">
                 <option value="">pilih</option>
                 <option <?php if ($x->kemampuan_bahasa == "Aktif" ) echo 'selected' ; ?> value="Aktif">Aktif</option>
                 <option <?php if ($x->kemampuan_bahasa == "Pasif" ) echo 'selected' ; ?> value="Pasif">Pasif</option>
             </select>
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
 <!------------------------Hapus data------------------------------>
 @foreach ($k_bahasa as $bahasa)
 <div class="modal fade" id="modal-hapus-bahasa<?= $bahasa->id; ?>">
   <div class="modal-dialog">
     <div class="modal-content">
       <!-- Modal Header -->
       <div class="modal-header">
         <h4 class="modal-title">Hapus Data Kecakapan Bahasa</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       <!-- Modal body -->
     <form action="{{route('keahlian_bahasa.destroy',$bahasa->id)}}" method="post">
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
{{-- ----------------------------------------------------------------------------------------------------------------------- --}}

  <!------------------------edit------------------------------>
  <?php $no=0; foreach($k_olahraga as $x): $no++; ?>
  <div class="modal fade" id="modal-edit-olahraga<?= $x->id; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">EDIT KECAKAPAN OLAHRAGA DAN BELADIRI</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
        <form action="{{route('keahlian_olahraga.update',$x->id)}}" name="edit_form" method="post" enctype="multipart/form-data">
           {{method_field('patch')}}
           {{csrf_field()}}
           <input type="hidden" readonly value="<?=$x->nip_nrp;?>" name="nip_nrp" class="form-control" >
           <input type="hidden" value="{{$data->nip_nrp}}" name="nip_nrp">
           <div class="form-group">
               <label for="message-text" class="form-control-label">Nama Olahraga *</label>
               <input type="text" class="form-control" value="{{$x->nama_olahraga}}" name="nama_olahraga"id="message-text" required>
           </div>
           <div class="form-group">
               <label for="message-text" class="form-control-label">Keterangan</label>
               <input class="form-control" value="{{$x->keterangan}}" id="message-text" name="keterangan" type="text"></input>
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
 <div class="modal fade" id="add_kecakapan_olahraga">
     <div class="modal-dialog">
         <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
             <h4 class="modal-title">KECAKAPAN OLAHRAGA DAN BELADIRI</h4>
             <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
           <form action="{{route('keahlian_olahraga.store')}}" method="post" name="registration">
               @csrf
               <input type="hidden" value="{{$data->nip_nrp}}" name="nip_nrp">
               <div class="form-group">
                   <label for="message-text" class="form-control-label">Nama Olahraga *</label>
                   <input type="text" class="form-control" name="nama_olahraga"id="message-text" required>
               </div>
               <div class="form-group">
                   <label for="message-text" class="form-control-label">Keterangan</label>
                   <input class="form-control" id="message-text" name="keterangan" type="text"></input>
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
 @foreach ($k_olahraga as $olahraga)
 <div class="modal fade" id="modal-hapus-olahraga<?= $olahraga->id; ?>">
   <div class="modal-dialog">
     <div class="modal-content">
       <!-- Modal Header -->
       <div class="modal-header">
         <h4 class="modal-title">HAPUS KECAKAPAN OLAHRAGA DAN BELADIRI</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
       <!-- Modal body -->
     <form action="{{route('keahlian_olahraga.destroy',$olahraga->id)}}" method="post">
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
</div> <!-- tutup atas -->
@endsection
<!--End:: App Content-->
