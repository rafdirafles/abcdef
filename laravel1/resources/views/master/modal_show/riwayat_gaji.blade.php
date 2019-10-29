
 <!------------------------Tabel------------------------------>
 <table class="table table-striped- table-bordered table-hover table-checkable" id="gaji">
        <a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10" data-toggle="modal" data-target="#modal-add-r_jabatan"> Tambah Gaji</a>
        <thead>
            <th>No</th>
            <th>Gaji</th>
            <th>Nomor SK</th>
            <th>Pejabat</th>
            <th>Tanggal SK</th>
            <th>Tanggal Mulai Terhitung</th>
            <th>Keterangan</th>
            <th width="10%">Aksi</th>
        </thead>
        <tbody class="show_r_gaji">
        </tbody>
    </table>
<!------------------------end table------------------------------>
<!-- MODAL ADD -->
<div class="modal fade" id="modal-add-r_jabatan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <h3 class="modal-title" id="myModalLabel">Tambah Jabatan</h3>
            </div>
            <!-- form -->
            <form class="form-horizontal" data-toggle="validator">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <form data-toggle="validator" method="post">
                        <input type="hidden" name="nip_nrp_r_jabatan" value="{{$datas->nip_nrp}}" >
                     
                        <div class="form-group">
                            <label class="control-label" for="title">Nama Jabatan *:</label>
                            <select name="id_jabatan_r_jabatan" id="id_jabatan" class="form-control" data-error="Please enter title." required>
                                <option value="">Pilih Jabatan</option>
                                @foreach ($jabatan as $jabat)
                                        <option value="{{$jabat->id}}">{{$jabat->nama_jabatan}}</option>
                                @endforeach
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Nomor SK *:</label>
                            <input type="text" name="nomor_sk_r_jabatan" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Pejabat *:</label>
                            <input type="text" name="pejabat_r_jabatan" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal SK *:</label>
                            <input type="date" name="tgl_sk_r_jabatan" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Tanggal Mulai Terhitung *:</label>
                            <input type="date" name="tgl_mulai_terhitung_r_jabatan" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Keterangan :</label>
                            <input type="text" name="keterangan_r_jabatan" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_simpan_jabatan">Simpan</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
    <!--END MODAL ADD-->
    <!--edit MODAL -->
    <div class="modal fade" id="edit-item-r_jabatan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                      <form data-toggle="validator" method="post">
                          <input type="hidden" name="nip_nrp_r_jabatan" value="" >
                          <input type="hidden" name="id_r_jabatan" value="">
                          <div class="form-group">
                              <label class="control-label" for="title">Nama Jabatan *:</label>
                              <select name="id_jabatan_r_jabatan" id="id_jabatan" class="form-control" data-error="Please enter title." required>
                                <option value="">Pilih Jabatan</option>
                                  @foreach ($jabatan as $jabat)
                                        <option value="{{$jabat->id}}">{{$jabat->nama_jabatan}}</option>
                                  @endforeach
                              </select>
                              <div class="help-block with-errors"></div>
                          </div>
                          <div class="form-group">
                              <label class="control-label" for="title">Nomor SK *:</label>
                              <input type="text" name="nomor_sk_r_jabatan" class="form-control" data-error="Please enter title." required />
                              <div class="help-block with-errors"></div>
                          </div>
                          <div class="form-group">
                              <label class="control-label" for="title">Pejabat *:</label>
                              <input type="text" name="pejabat_r_jabatan" class="form-control" data-error="Please enter title." required />
                              <div class="help-block with-errors"></div>
                          </div>
                          <div class="form-group">
                              <label class="control-label" for="title">Tanggal SK *:</label>
                              <input type="text" name="tgl_sk_r_jabatan" class="form-control" data-error="Please enter title." required />
                              <div class="help-block with-errors"></div>
                          </div>
                          <div class="form-group">
                              <label class="control-label" for="title">Tanggal Mulai Terhitung *:</label>
                              <input type="text" name="tgl_mulai_terhitung_r_jabatan" class="form-control" data-error="Please enter title." required />
                              <div class="help-block with-errors"></div>
                          </div>
                          <div class="form-group">
                              <label class="control-label" for="title">Keterangan :</label>
                              <input type="text" name="keterangan_r_jabatan" class="form-control" data-error="Please enter title." required />
                              <div class="help-block with-errors"></div>
                          </div>
                          <div class="form-group">
                              <button type="submit" class="btn btn-success edit-r_jabatan">Submit</button>
                          </div>
                      </form>
                </div>
                 <!-- body modal -->
            </div>
        </div>
    </div>
    <!--end MODAL-->
@section('asset-buttom')
    <script>
          tampil_data_riwayat_gaji();   //pemanggilan fungsi tampil barang.
            //fungsi tampil barang
            function tampil_data_riwayat_gaji(){
                $.ajax({
                    type  : 'GET',
                    beforeSend: function(){
                        $('.ajax-loader').css("visibility", "visible");
                    },
                    url   : '{{route('riwayat_gaji.index')}}',
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        console.log(data);
                        var i;
                        var no=1;
                        var rows ='';
                        $.each( data, function( key, value ) {
                            rows = rows + '<tr>';
                            rows = rows + '<td>'+ no++ +'</td>';
                            rows = rows + '<td style="display:none" >'+value.gaji+'</td>';
                            rows = rows + '<td>'+value.tmt+'</td>';
                            rows = rows + '<td>'+value.nomor_sk+'</td>';
                            rows = rows + '<td>'+value.pejabat+'</td>';
                            rows = rows + '<td>'+value.tgl_sk+'</td>';
                            rows = rows + '<td>'+value.dasar_peraturan+'</td>';
                            rows = rows + '<td data-id="'+value.id+'">';
                            rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-item-r_jabatan" class="badge badge-success edit-item-r_jabatan"><span class="fas fa-fw fa-edit " ></a> ';
                            rows = rows + '<a href="#" class="badge badge-danger delete-r_jabatan"><span class="fas fa-fw fa-trash"></button>';
                            rows = rows + '</td>';
                            rows = rows + '</tr>';
                        });
                        $('#gaji .show_r_gaji').html(rows);
                    },
                    error: function(xhr, ajaxOptions, thrownError){
                                alert("Mohon Data Masukkan Dengan Tepat");
                            },
                    complete: function(){
                        $('.ajax-loader').css("visibility", "hidden");
                    }
                });
            } //tutup akhir tampil
             //Simpan Barang
          
    </script>
@endsection
            