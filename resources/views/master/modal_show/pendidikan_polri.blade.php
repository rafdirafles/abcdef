 <!------------------------Tabel------------------------------>
 <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
        <thead>
            <th>No</th>
            <th>Nama Pendidikan</th>
            <th>Tahun</th>
            <th>Lulus/Tidak</th>
            <th>Lama Bulan</th>
            <th>Rangking</th>
            <th>File</th>
            <th width="10%">Aksi</th>
        </thead>
        <tbody>
          @php
            $no=1;
          @endphp
         @foreach ($p_polris as $polri)
         <tr>
             <td>{{$no++}}</td>
             <td>{{$polri->nama_pendidikan}}</td>
             <td>{{$polri->tahun}}</td>
             <td>{{$polri->lulus_tidak}}</td>
             <td>{{$polri->lama_bulan}}</td>
             <td>{{$polri->rangking}}</td>
             <td>{{$polri->file}}</td>
            <td>
                <a class="badge badge-success" href="#modal-edit-polri<?php echo $polri->id?>" data-toggle="modal" title="Edit"><span class="fas fa-fw fa-edit"></span></a>
                <a class="badge badge-danger" href="#modal-hapus-polri<?php echo $polri->id?>"  data-toggle="modal" title="Hapus"><span class="fas fa-fw fa-trash"></span></a>
            </td>
          </tr>
          @endforeach
          <tr>
              <td colspan="10" class="text-right">
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_pendidikan_polri">
                      (+) TAMBAH
                  </button>
              </td>
          </tr>
        </tbody>
      </table>
       <!------------------------end table------------------------------>
       <!------------------------edit------------------------------>
       <?php $no=0; foreach($p_polris as $x): $no++; ?>
       <div class="modal fade" id="modal-edit-polri<?= $x->id; ?>">
         <div class="modal-dialog">
           <div class="modal-content">
             <!-- Modal Header -->
             <div class="modal-header">
               <h4 class="modal-title">EDIT PENDIDIKAN POLRI</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <!-- Modal body -->
             <div class="modal-body">
             <form action="{{route('pendidikan_polri.update',$x->id)}}" name="edit_form" method="post" enctype="multipart/form-data">
                {{method_field('patch')}}
                {{csrf_field()}}
                <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
                <div class="form-group">
                        <label for="message-text" class="form-control-label">Nama Pendidikan*</label>
                        <input class="form-control" id="message-text" value="{{$x->nama_pendidikan}}" required name="nama_pendidikan" type="text">
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Tahun Pendidikan*</label>
                    <input type="number" class="form-control" required name="tahun" id="message-text" value="{{$x->tahun}}">
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Lulus / Tidak* </label>
                    <select class="form-control kt-select2" required  name="lulus_tidak">
                            <option value="">-----pilih------</option>
                            <option <?php if ($x->lulus_tidak== "Lulus" ) echo 'selected' ; ?> value="Lulus">Lulus</option>
                            <option <?php if ($x->lulus_tidak== "Tidak" ) echo 'selected' ; ?> value="Tidak">Tidak</option>
                           
                    </select>
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Lama Bulan*</label>
                   <input type="number" name="lama_bulan" class="form-control" value="{{$x->lama_bulan}}" >
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">Ranking</label>
                    <input class="form-control" id="message-text"  name="rangking" type="number" value="{{$x->rangking}}">
                </div>
                <div class="form-group">
                    <label for="message-text" class="form-control-label">file </label>
                    <input class="form-control" id="message-text" type="file" name="file" value="{{$x->file}}">
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
      <div class="modal fade" id="add_pendidikan_polri">
          <div class="modal-dialog">
              <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                  <h4 class="modal-title">PENDIDIKAN POLRI</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                <form action="{{route('pendidikan_polri.store')}}" method="post" name="registration" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$datas->nip_nrp}}" name="nip_nrp">
                    <div class="form-group">
                            <label for="message-text" class="form-control-label">Nama Pendidikan*</label>
                            <input class="form-control" id="message-text" required name="nama_pendidikan" type="text">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Tahun Pendidikan*</label>
                        <input type="number" class="form-control" required name="tahun" id="message-text">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Lulus / Tidak* </label>
                        <select class="form-control kt-select2" required  name="lulus_tidak">
                                <option value="">-----pilih------</option>
                                <option value="Lulus">Lulus</option>
                                <option value="Tidak">Tidak</option>
                               
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Lama Bulan*</label>
                       <input type="number" name="lama_bulan" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Ranking</label>
                        <input class="form-control" id="message-text"  name="rangking" type="number">
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
                      <input type="submit" class="btn btn-primary" />
              </div>
              </form>
              </div>
          </div>
      </div>
       <!------------------------end add------------------------------>
       <!------------------------Hapus data------------------------------>
      @foreach ($p_polris as $x)
      <div class="modal fade" id="modal-hapus-polri<?= $x->id; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">HAPUS PENDIDIKAN POLRI</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
          <form action="{{route('pendidikan_polri.destroy',$x->id)}}" method="post">
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
            