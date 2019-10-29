@extends('layouts.admin.app')
@section('asset-top')
<script href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<style>
        .help-block {
        color: red;
}
</style>
@endsection
@section('body')
<!-- tabel mulai -->
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container ">
                <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">MASTER </h3>
                        <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                        <span class="kt-subheader__desc">Jabatan</span>
                </div>
            </div>
        </div>
        <!-- end:: Content Head -->
        <!-- begin:: Content -->
        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon">
                            <i class="kt-font-brand flaticon-arrows"></i>
                        </span>
                        <h3 class="kt-portlet__head-title" style="margin-right:20px">JABATAN</h3>
                    </div>
                    <div class="ajax-loader">
                            <img width=100px src="{{ asset('/img/1.gif') }}" class="img-responsive" />
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <div class="dropdown dropdown-inline">
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                                <span class="kt-nav__section-text">Choose an option</span>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-print"></i><span class="kt-nav__link-text">Print</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-copy"></i><span class="kt-nav__link-text">Copy</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i><span class="kt-nav__link-text">Excel</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-file-text-o"></i><span class="kt-nav__link-text">CSV</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-file-pdf-o"></i><span class="kt-nav__link-text">PDF</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <button href="#" class="btn btn-brand btn-elevate btn-icon-sm klik-tambah" data-toggle="modal" data-target="#modal-add-jabatan"><i class="la la-plus"></i> Tambah Jabatan</button>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="kt-portlet__body">
                <table class="table table-striped- table-bordered table-hover table-checkable " id="datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jabatan</th>
                            <th width="7%">Aksi</th>
                        </tr>
                    </thead>
                        @php
                        $no=1;
                        @endphp
                    <tbody id="show_jabatan">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- MODAL ADD -->
<div class="modal fade" id="modal-add-jabatan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Tambah Jabatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- form -->
            <form class="form-horizontal" data-toggle="validator">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <div class="form-group">
                            <label class="control-label" for="title">Jabatan</label>
                            <input type="text" name="nama_jabatan" class="form-control" id="nama_jabatan" data-error="Please enter jabatan." required />
                            <p style="color:red"><div class="help-block with-errors"></div></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="btn_simpan_jabatan">Kirim</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Edit Jabatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                <form data-toggle="validator"  method="post">
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label" for="title">Jabatan</label>
                            <input type="text" name="nama_jabatan" id="nama_jabatan" class="form-control" required />
                        </div>
                        <div class="modal-footer">
                                <button class="btn btn-primary edit-jabatan">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
             <!-- body modal -->
        </div>
    </div>
</div>
<!--end MODAL-->
<!------------------------Hapus data------------------------------>
<div class="modal fade" id="hapus_jabatan">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                    <h5 class="modal-title" id="jdlbrevet">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <!-- Modal body -->
          <form method="post">
              {{csrf_field()}}
              <input type="hidden" name="id_hapus">
              <div class="modal-body">
                  <strong>Apakah Anda Yakin Menghapus Data ?</strong>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                  <button class="btn btn-primary" id="btn_hapus_jabatan">Hapus</button>
              </div>
          </form>
          </div>
        </div>
      </div>              
     <!------------------------end hapus------------------------------>
@endsection

@section('asset-buttom')
<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        tampil_data_barang();   //pemanggilan fungsi tampil barang.
        //fungsi tampil barang
        function tampil_data_barang(){
            $.ajax({
                type  : 'GET',
                beforeSend: function(){
                    $('.ajax-loader').css("visibility", "visible");
                },
                url   : '/setting/jabatan/show',
                async : true,
                dataType : 'json',
                success : function(data){
                    var i;
                    var no=1;
                    var rows = '';
                    $.each( data, function( key, value ) {
                        rows = rows + '<tr>';
                        rows = rows + '<td>'+ no++ +'</td>';
                        rows = rows + '<td>'+value.nama_jabatan+'</td>';
                        rows = rows + '<td data-id="'+value.id+'">';
                        rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-item" class="badge badge-success edit-item"><span class="fas fa-fw fa-edit " ></a> ';
                        rows = rows + '<a href="#" class="badge badge-danger hapus_jabatan" data-toggle="modal" data-target="#hapus_jabatan" ><span class="fas fa-fw fa-trash"></button>';
                        rows = rows + '</td>';
                        rows = rows + '</tr>';
                    });
                    $('#show_jabatan').html(rows);
                },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            });
        }
        //Simpan Barang
        $('#btn_simpan_jabatan').click(function(){
            var nama_jabatan=$("input[name=nama_jabatan]").val();
            event.preventDefault();
            var form=$("body");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
                $.ajax({
                    type : "POST",
                    beforeSend: function(){
                        $('.ajax-loader').css("visibility", "visible");
                    },
                    url  : '{{route('jabatan.store')}}',
                    datatype:"html",
                    data : {nama_jabatan:nama_jabatan,_token: '{{csrf_token()}}' },
                    success: function(data){
                        $("input[name=nama_jabatan]").val("");
                        tampil_data_barang();
                        $('#modal-add-jabatan').modal('hide');
                    },
                    error: function(xhr){
                        var res=xhr.responseJSON;
                        if($.isEmptyObject(res)==false){
                            $.each(res.errors,function(key,value){
                                $("input[name="+key+"]")
                                    .closest('.form-group')
                                    .addClass('has-error')
                                    .append('<span class="help-block"><strong>'+value+'</strong></span>');
                            })
                        }
                    },
                    complete: function(){
                        $('.ajax-loader').css("visibility", "hidden");
                    }
                }).done(function(data){
                    toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
                })
        });
        /* Edit Post */
      
        $("body").on("click",".edit-item",function(){
            var id = $(this).parent("td").data('id');
            var nama_jabatan = $(this).parent("td").prev("td").text();
            $("#edit-item").find("input[name='nama_jabatan']").val(nama_jabatan);
            $("#edit-item").find("input[name='id']").val(id);
            var form=$("body");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
           
        });
        /* Updated  Post baru (Updated new Post) */
        $(".edit-jabatan").click(function(e){
            e.preventDefault();
            var nama_jabatan = $("#edit-item").find("input[name='nama_jabatan']").val();
            var id = $("#edit-item").find("input[name='id']").val();
            var form=$("body");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
            $.ajax({
                dataType: 'json',
                type:'POST',
                url:'{{route('jabatan.update')}}',
                data:{id:id,nama_jabatan:nama_jabatan,_token: '{{csrf_token()}}'},
                error: function(xhr){
                        var res=xhr.responseJSON;
                        if($.isEmptyObject(res)==false){
                            $.each(res.errors,function(key,value){
                                $("input[name="+key+"]")
                                    .closest('.form-group')
                                    .addClass('has-error')
                                    .append('<span class="help-block"><strong>'+value+'</strong></span>');
                            })
                        }
                },
            }).done(function(data){
                tampil_data_barang();
                $(".modal").modal('hide');
                toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            })
        })
        // delete klik
       
        $("body").on("click",".hapus_jabatan",function(){
            var id = $(this).parent("td").data('id');
            $("#hapus_jabatan").find("input[name='id_hapus']").val(id);
          
        });
        /* Remove Post (Hapus) */
        $("#btn_hapus_jabatan").click(function(e){
            e.preventDefault();
            var id = $("#hapus_jabatan").find("input[name='id_hapus']").val();
            var c_obj = $(this).parents("tr");
            $.ajax({
                dataType: 'json',
                type:'post',
                url: '{{route('jabatan.delete')}}',
                data:{id:id,_token: '{{csrf_token()}}'},
                success: function(data){
                    $(".modal").modal('hide');
                }
            }).done(function(data){
                c_obj.remove();
                toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                tampil_data_barang();
            });
        });
    });
    $("body").on("click",".klik-tambah",function(){
        var form=$("body");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
    })
</script>
@endsection
