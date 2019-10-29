 <!------------------------Tabel------------------------------>
 <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
        <thead>
            <th>No</th>
            <th>Nama Prestasi</th>
            <th>Tahun</th>
            <th>Keterangan</th>
            <th width="10%">Aksi</th>
        </thead>
        <tbody>
          @php
            $no=1;
          @endphp
         @foreach ($tanda_jasas as $tanda_jasa)
         <tr>
             <td>{{$no++}}</td>
             <td>{{$tanda_jasa->nama_prestasi}}</td>
             <td>{{$tanda_jasa->tahun}}</td>
             <td>{{$tanda_jasa->keterangan}}</td>
            <td>
                <a class="badge badge-success" href="#modal-edit-tanda_jasa<?php echo $tanda_jasa->id?>" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                <a class="badge badge-danger" href="#modal-hapus-tanda_jasa<?php echo $tanda_jasa->id?>"  data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
            </td>
          </tr>
          @endforeach
          <tr>
              <td colspan="10" class="text-right">
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_tanda_jasa">
                      (+) TAMBAH
                  </button>
              </td>
          </tr>
        </tbody>
      </table>

      
       <!------------------------end table------------------------------>
       <!------------------------edit------------------------------>
       <?php $no=0; foreach($tanda_jasas as $x): $no++; ?>
       <div class="modal fade" id="modal-edit-tanda_jasa<?= $x->id; ?>">
         <div class="modal-dialog">
           <div class="modal-content">
             <!-- Modal Header -->
             <div class="modal-header">
               <h4 class="modal-title">EDIT TANDA JASA DAN PRESTASI</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <!-- Modal body -->
             <div class="modal-body">
             <form action="{{route('tanda_jasa.update',$x->id)}}" name="edit_form" method="post" enctype="multipart/form-data">
                {{method_field('patch')}}
                {{csrf_field()}}
               
                <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Nama Prestasi *</label>
                    <input type="text" class="form-control" name="nama_prestasi" value="{{$x->nama_prestasi}}" id="message-text" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Tahun *</label>
                    <input class="form-control" type="number" name="tahun" value="{{$x->tahun}}" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Keterangan</label>
                    <input class="form-control" id="message-text" value="keterangan" name="keterangan" type="text">
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
      <div class="modal fade" id="add_tanda_jasa">
          <div class="modal-dialog">
              <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                  <h4 class="modal-title">TANDA JASA DAN PRESTASI</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <form action="{{route('tanda_jasa.store')}}" method="post" name="registration">
                    @csrf
                    <input type="hidden" name="nip_nrp" value="{{$datas->nip_nrp}}">
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Nama Prestasi *</label>
                        <input type="text" class="form-control" name="nama_prestasi" id="message-text" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Tahun *</label>
                        <input class="form-control" type="number" name="tahun" required>
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
       <!------------------------end add------------------------------>
       <!------------------------Hapus data------------------------------>
      @foreach ($tanda_jasas as $tanda_jasa)
      <div class="modal fade" id="modal-hapus-tanda_jasa<?= $tanda_jasa->id; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">HAPUS TANDA JASA DAN PRESTASI</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
          <form action="{{route('tanda_jasa.destroy',$tanda_jasa->id)}}" method="post">
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
            