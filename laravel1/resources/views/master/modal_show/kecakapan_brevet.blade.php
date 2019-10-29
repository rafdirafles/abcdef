 <!------------------------Tabel------------------------------>
 <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
        <thead>
            <th>No</th>
            <th>Nama Brevet</th>
            <th>Asal Perolehan</th>
            <th width="10%">Aksi</th>
        </thead>
        <tbody>
          @php
            $no=1;
          @endphp
          <!-------------"$k_brevet" (sesuaikan dengan topik pembahasan ex r_kepangkatan,p_non_formal)---------------------->
         @foreach ($k_brevet as $brevet)
         <tr>
             <td>{{$no++}}</td>
             <td>{{$brevet->nama_brevet}}</td> <!-------------nama brevet (dari field data base exp nama_pendidikan)---------------------->
             <td>{{$brevet->asal_perolehan}}</td>
            <td>
                {{-- pastikan modal berjaln dengan baik --}}
                <a class="badge badge-success" href="#modal-edit-brevet<?php echo $brevet->id?>" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                <a class="badge badge-danger" href="#modal-hapus-brevet<?php echo $brevet->id?>"  data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
            </td>
          </tr>
          @endforeach
          <tr>
              {{-- pindah di atas table --}}
              <td colspan="10" class="text-right">
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_kecakapan_brevet">
                      (+) TAMBAH
                  </button>
              </td>
          </tr>
        </tbody>
      </table>
       <!------------------------end table------------------------------>
       {{-- modal --}}
       <!------------------------edit------------------------------>
       <?php $no=0; foreach($k_brevet as $x): $no++; ?>
       <div class="modal fade" id="modal-edit-brevet<?= $x->id; ?>">
         <div class="modal-dialog">
           <div class="modal-content">
             <!-- Modal Header -->
             <div class="modal-header">
                 {{-- edit sesuai judul topik dst --}}
               <h4 class="modal-title">EDIT KECAKAPAN KECAKAPAN BREVET</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <!-- Modal body -->
             <div class="modal-body">
                 {{-- form action boleh dikosongi --}}
             <form action="{{route('kecakapan_brevet.update',$x->id)}}" name="edit_form" method="post" enctype="multipart/form-data">
                {{method_field('patch')}}
                {{csrf_field()}}
                {{-- minta tolong value di isi sesuai denga database ex $x->nama_pendidikan  --}}
                <input type="hidden" readonly value="<?=$x->nip_nrp;?>" name="nip_nrp" class="form-control" >
                <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
                <div class="form-group">
                        <label for="message-text" class="form-control-label">Nama Brevet</label>
                        <input type="text" class="form-control" name="nama_brevet" value="{{$x->nama_brevet}}" id="message-text" required>
                    </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Asal Perolehan</label>
                    <input class="form-control" id="message-text" name="asal_perolehan" type="text" value="{{$x->asal_perolehan}}" required>
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
      <div class="modal fade" id="add_kecakapan_brevet">
          <div class="modal-dialog">
              <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                  <h4 class="modal-title">KECAKAPAN KECAKAPAN BREVET</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <form action="{{route('kecakapan_brevet.store')}}" method="post" name="registration">
                    @csrf
                    {{-- hiraukan yang type hidden --}}
                    <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
                    <div class="form-group">
                        {{-- mohon isi name sesuai dengan databse tolong pastikan lagi --}}
                        <label for="message-text" class="form-control-label">Nama Brevet</label>
                        <input type="text" class="form-control" name="nama_brevet" id="message-text" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Asal Perolehan</label>
                        <input class="form-control" id="message-text" name="asal_perolehan" type="text" required>
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
       {{-- khusus hapus hiraukan variable nya cuman pastikan modal berjalan --}}
      @foreach ($k_brevet as $olahraga)
      <div class="modal fade" id="modal-hapus-brevet<?= $olahraga->id; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">HAPUS KECAKAPAN KECAKAPAN BREVET</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
          <form action="{{route('kecakapan_brevet.destroy',$olahraga->id)}}" method="post">
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
