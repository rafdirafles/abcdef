 <!------------------------Tabel------------------------------>
 <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
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
          <tr>
              <td colspan="10" class="text-right">
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_kecakapan_bahasa">
                      (+) TAMBAH
                  </button>
              </td>
          </tr>
        </tbody>
      </table>

      
       <!------------------------end table------------------------------>
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
             <form action="{{route('kecakapan_bahasa.update',$x->id)}}" name="edit_form" method="post" enctype="multipart/form-data">
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
       <!------------------------add data------------------------------>
      <div class="modal fade" id="add_kecakapan_bahasa">
          <div class="modal-dialog">
              <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                  <h4 class="modal-title">Kecakapan Bahasa</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
            <form action="{{route('kecakapan_bahasa.store')}}" method="post" enctype="multipart/form-data" name="registration">
                @csrf
                <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
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
       <!------------------------end add------------------------------>
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
          <form action="{{route('kecakapan_bahasa.destroy',$bahasa->id)}}" method="post">
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
       @section('asset-buttom')
@endsection
            