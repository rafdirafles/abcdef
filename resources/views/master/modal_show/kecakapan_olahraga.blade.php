 <!------------------------Tabel------------------------------>
 <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
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
          <tr>
              <td colspan="10" class="text-right">
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_kecakapan_olahraga">
                      (+) TAMBAH
                  </button>
              </td>
          </tr>
        </tbody>
      </table>


       <!------------------------end table------------------------------>
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
             <form action="{{route('kecakapan_olahraga.update',$x->id)}}" name="edit_form" method="post" enctype="multipart/form-data">
                {{method_field('patch')}}
                {{csrf_field()}}
                <input type="hidden" readonly value="<?=$x->nip_nrp;?>" name="nip_nrp" class="form-control" >
                <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
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
                <form action="{{route('kecakapan_olahraga.store')}}" method="post" name="registration">
                    @csrf
                    <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
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
          <form action="{{route('kecakapan_olahraga.destroy',$olahraga->id)}}" method="post">
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
