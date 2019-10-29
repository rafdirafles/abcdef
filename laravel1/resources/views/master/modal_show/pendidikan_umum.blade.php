 <!------------------------Tabel------------------------------>
 <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
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
             <td><a href="">{{$umum->file}}</a> </td>
            <td>
                <a class="badge badge-success" href="#modal-edit-umum<?php echo $umum->id?>" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                <a class="badge badge-danger" href="#modal-hapus-umum<?php echo $umum->id?>"  data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
            </td>
          </tr>
          @endforeach
          <tr>
              <td colspan="10" class="text-right">
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_umum">
                      (+) TAMBAH
                  </button>
              </td>
          </tr>
        </tbody>
      </table>

      
       <!------------------------end table------------------------------>
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
             <form action="{{route('pendidikan_umum.update',$x->id)}}" method="post" enctype="multipart/form-data">
                 {{method_field('patch')}}
                 {{csrf_field()}}
                 <input type="hidden" readonly value="<?=$x->file;?>" name="file_lama" class="form-control" >
                 <input type="hidden" readonly value="<?=$x->nip_nrp;?>" name="nip_nrp" class="form-control" >
                 <div class="form-group">
                     <label for="message-text" class="form-control-label">Jenjang Pendidikan *</label>
                     <select name="jenjang_pendidikan" id="" class="form-control" required>
                         <option value="">Pilih jenjang pendidikan</option>
                         <option <?php if ($x->jenjang_pendidikan== "SD" ) echo 'selected' ; ?> value="SD">SD</option>
                         <option <?php if ($x->jenjang_pendidikan== "SLTA" ) echo 'selected' ; ?> value="SLTP">SLTP</option>
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
                     <input class="form-control" id="message-text" name="jurusan" value="{{$x->jurusan}}" type="text">
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
            <form action="{{route('pendidikan_umum.store')}}" method="post" enctype="multipart/form-data" name="registration">
                @csrf
                <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Jenjang Pendidikan *</label>
                    <select name="jenjang_pendidikan" id="" class="form-control" required>
                        <option value="">Pilih jenjang pendidikan</option>
                        <option value="SD">SD</option>
                        <option value="SLTA">SLTP</option>
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
                    <input type="number" class="form-control" name="tahun_lulus" id="message-text" required placeholder="exp:2019">
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
          <form action="{{route('pendidikan_umum.destroy',$umum->id)}}" method="post">
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
            