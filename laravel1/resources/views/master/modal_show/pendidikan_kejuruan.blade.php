 <!------------------------Tabel------------------------------>
<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
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
    <tr>
        <td colspan="10" class="text-right">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_kejuruan">
                (+) TAMBAH
            </button>
        </td>
    </tr>
  </tbody>
</table>
 <!------------------------end table------------------------------>
 <!------------------------edit------------------------------>
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
                    <form action="{{route('pendidikan_kejuruan.update','test')}}" name="edit_form" method="post" enctype="multipart/form-data">
                        {{method_field('patch')}}
                        {{csrf_field()}}
                        <input type="hidden" value="" name="id" id="id">
                        <input type="hidden" value="" name="nip_nrp" id="nipnrp">
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Nama Pendidikan *</label>
                            <input class="form-control" id="namapendidikan" name="nama_pendidikan" type="text" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Kota *</label>
                            <input class="form-control" id="kota" name="kota" type="text" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Tahun Lulus *</label>
                            <input class="form-control" id="tahunlulus" name="tahun_lulus" type="number">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Lama Studi *</label>
                            <input class="form-control" id="lamabulan" name="lama_bulan" type="number" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">Ranking *</label>
                            <input class="form-control" id="rangking" name="rangking" type="number">
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
                            <input class="form-control" id="keterangan" name="keterangan" type="text">
                        </div>
                        <div class="form-group">
                            <img src="" alt="img/file" id="file" width="40%"><br>
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
            <form action="{{route('pendidikan_kejuruan.store')}}" method="post" enctype="multipart/form-data">
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
                <select class="form-control kt-select2" name="is_lulus_tidak">
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
    <form action="{{route('pendidikan_kejuruan.destroy',$kejuruan->id)}}" method="post">
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


