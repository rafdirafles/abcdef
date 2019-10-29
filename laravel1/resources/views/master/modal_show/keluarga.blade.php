
 <!------------------------Tabel------------------------------>
 <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
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
          <tr>
              <td colspan="10" class="text-right">
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_keluarga">
                      (+) TAMBAH
                  </button>
              </td>
          </tr>
        </tbody>
      </table>

      
<!------------------------end table------------------------------>
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
        <form action="{{route('keluarga.update',$x->id)}}" name="edit_form" method="post" enctype="multipart/form-data">
            {{method_field('patch')}}
            {{csrf_field()}}
        <input type="hidden" readonly value="{{$x->nip_nrp}}" name="nip_nrp" class="form-control" >
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
                    <input type="date" class="form-control" value="{{$x->tempat_lahir}}" name="tempat_lahir" required placeholder="exp:2019">
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
    <form action="{{route('keluarga.store')}}" method="post" name="registration">
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
    <form action="{{route('keluarga.destroy',$keluarga->id)}}" method="post">
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
       <!------------------------end hapus------------------------------>
@section('asset-buttom')
       <script>
          $('#edit_pkejuruan').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget)
              var namapendidikan = button.data('namapendidikan')
              var kota = button.data('kota')
              var tahunlulus = button.data('tahunlulus')
              var lamastudi = button.data('lamabulan')
              var rangking = button.data('rangking')
              var lulustidak = button.data('lulustidak')
              var keterangan = button.data('keterangan')
              var id = button.data('umumid')
              var nipnrp = button.data('nipnrp')
              var file = button.data('file')
              var modal = $(this)
              modal.find('.modal-body #kota').val(kota);
              modal.find('.modal-body #namapendidikan').val(namapendidikan);
              modal.find('.modal-body #rangking').val(rangking);
              modal.find('.modal-body #lamabulan').val(lamastudi);
              modal.find('.modal-body #kota').val(kota);
              modal.find('.modal-body #tahunlulus').val(tahunlulus);
              modal.find('.modal-body #lulustidak').val(lulustidak);
              modal.find('.modal-body #keterangan').val(keterangan);
              modal.find('.modal-body #id').val(id);
              modal.find('.modal-body #nipnrp').val(nipnrp);
              modal.find('img#file').attr('src', '<?php echo asset('img')?>/'+file);
              console.log(rangking);
          });
      </script>
@endsection
            