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
                        <span class="kt-subheader__desc">Pangkat</span>
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
                            <i class="kt-font-brand flaticon-star"></i>
                        </span>
                        <h3 class="kt-portlet__head-title" style="margin-right:20px">PANGKAT</h3>
                    </div>
                    <div class="ajax-loader">
                            <img width=100px src="{{ asset('/img/1.gif') }}" class="img-responsive" />
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <button href="#" class="btn btn-brand btn-elevate btn-icon-sm klik-tambah" data-toggle="modal" data-target="#modal-add-pangkat"><i class="la la-plus"></i> Tambah Pangkat</button>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="kt-portlet__body">
                
                <table class="table table-striped- table-bordered table-hover table-checkable " id="datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pangkat</th>
                            <th width="7%">Aksi</th>
                        </tr>
                    </thead>
                        @php
                        $no=1;
                        @endphp
                    <tbody id="show_pangkat">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- MODAL ADD -->
<div class="modal fade" id="modal-add-pangkat" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Tambah Pangkat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- form -->
            <form class="form-horizontal" data-toggle="validator">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <div class="form-group">
                            <label class="control-label" for="title">Pangkat </label>
                            <input type="text" name="nama_pangkat" class="form-control" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="btn_simpan_pangkat">Simpan</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!------------------------end data------------------------------>
<!------------------------edit data------------------------------>
<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Edit Pangkat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                  <form data-toggle="validator">
                    <div class="modal-body">
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                        <input type="hidden" name="id" class="form-control" />
                        <div class="form-group">
                            <label class="control-label" for="title">Pangkat </label>
                            <input type="text" name="nama_pangkat" class="form-control" data-error="Please enter title." required />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary crud-submit-edit">Simpan</button>
                    </div>
                  </form>
            </div>
             <!-- body modal -->
        </div>
    </div>
</div>
<!------------------------ end data------------------------------>

 <!------------------------Hapus data------------------------------>
 <div class="modal fade" id="hapus-pangkat">
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
             <strong>Apakah Anda Yakin Menghapus Data ? </strong>
         </div>
         <!-- Modal footer -->
         <div class="modal-footer">
             <button class="btn btn-primary" id="btn_hapus_pangkat">Hapus</button>
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
                url   : '/setting/pangkat/show',
                async : true,
                dataType : 'json',
                success : function(data){
                    var i;
                    var no=1;
                    var rows = '';
                    $.each( data, function( key, value ) {
                        rows = rows + '<tr>';
                        rows = rows + '<td>'+ no++ +'</td>';
                        rows = rows + '<td>'+value.nama_pangkat+'</td>';
                        rows = rows + '<td data-id="'+value.id+'">';
                        rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-item" class="badge badge-success edit-item"><span class="fas fa-fw fa-edit " ></a> ';
                        rows = rows + '<a href="#" class="badge badge-danger delete-item"  data-toggle="modal" data-target="#hapus-pangkat"><span class="fas fa-fw fa-trash"></button>';
                        rows = rows + '</td>';
                        rows = rows + '</tr>';
                    });
                    $('#show_pangkat').html(rows);
                },
                complete: function(){
                    $('.ajax-loader').css("visibility", "hidden");
                }
            });
        }
        //Simpan Barang
        $('#btn_simpan_pangkat').click(function(){
            var nama_pangkat=$("input[name=nama_pangkat]").val();
            event.preventDefault();
            var form=$("#modal-add-pangkat");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
                $.ajax({
                    type : "POST",
                    beforeSend: function(){
                        $('.ajax-loader').css("visibility", "visible");
                    },
                    url  : '{{route('pangkat.store')}}',
                    datatype:"html",
                    data : {nama_pangkat:nama_pangkat,_token: '{{csrf_token()}}' },
                    success: function(data){
                        $("input[name=nama_pangkat]").val("");
                        tampil_data_barang();
                        $('#modal-add-pangkat').modal('hide');
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
        /* ketika tekan Edit Post */
        var url = 'pangkat';
        $("body").on("click",".edit-item",function(){
            var id = $(this).parent("td").data('id');
            var nama_pangkat = $(this).parent("td").prev("td").text();
            // $("#edit-item").find("input[name='title']").val(title);
            var form=$("#edit-item");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
            $("#edit-item").find("input[name='nama_pangkat']").val(nama_pangkat);
            $("#edit-item").find("input[name='id']").val(id);
           
        });
        /* Kirim Updated  Post baru (Updated new Post) */
        $(".crud-submit-edit").click(function(e){
            event.preventDefault();
            var nama_pangkat = $("#edit-item").find("input[name='nama_pangkat']").val();
            var id = $("#edit-item").find("input[name='id']").val();
            var form=$("#edit-item");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: '{{route('pangkat.update')}}',
                data:{nama_pangkat:nama_pangkat,id:id,_token: '{{csrf_token()}}'},
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
        // ketika delete button
        $("body").on("click",".delete-item",function(){
            var id = $(this).parent("td").data('id');
            $("#hapus-pangkat").find("input[name='id_hapus']").val(id);
           
        });
        /* Kirim Remove Post (Hapus) */
        $("#btn_hapus_pangkat").click(function(e){
        event.preventDefault();
            var id = $("#hapus-pangkat").find("input[name='id_hapus']").val();
            var c_obj = $(this).parents("tr");
            $.ajax({
                dataType: 'json',
                type:'post',
                data:{id:id},
                url: '{{route('pangkat.delete')}}',
                success:function(data){
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
        var form=$("#modal-add-pangkat");
            form.find('.help-block').remove();
            form.find('.form-group').removeClass('has-error');
    })
    // $("body").on("click",".close",function(){
    //         body.find('.help-block').remove();
    //         body.find('.form-group').removeClass('has-error');
    // })
</script>
<script>
 
</script>
@endsection
