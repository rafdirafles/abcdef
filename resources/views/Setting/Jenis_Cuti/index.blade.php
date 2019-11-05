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
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
        <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
            <!-- begin:: Content Head -->
            <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                <div class="kt-container ">
                    <div class="kt-subheader__main">
                        <h3 class="kt-subheader__title">MASTER </h3>
                        <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                        <span class="kt-subheader__desc">Jenis Cuti</span>
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
                                <i class="kt-font-brand flaticon2-layers-1"></i>
                            </span>
                            <h3 class="kt-portlet__head-title" style="margin-right:20px">jenis cuti</h3>
                        </div>
                        <div class="ajax-loader">
                                <img width=100px src="{{ asset('/img/1.gif') }}" class="img-responsive" />
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="kt-portlet__head-actions">
                                    <button href="#" class="btn btn-brand btn-elevate btn-icon-sm klik-tambah" data-toggle="modal" data-target="#modal-add-jenis-cuti"><i class="la la-plus"></i> Tambah Jenis Cuti</button>
                                    {{-- <a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10" data-toggle="modal" data-target="#modal-add-unit_kerja"> New Record</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="kt-portlet__body">
                    <table class="table table-striped- table-bordered table-hover table-checkable " id="datatable">
                        <thead>
                                <tr>
                                        <th>No</th>
                                        <th>Nama Cuti</th>
                                        <th>Lama Cuti</th>
                                        <th width="7%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="jenis_cuti">
                                </tbody >
                    </table>
                </div>
            </div>
        </div>
    </div>
{{--  --}}
<!-- MODAL ADD unit kerja -->
<div class="modal fade" id="modal-add-jenis-cuti" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Tambah Jenis Cuti</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- form -->
            <form class="form-horizontal" >
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <div class="form-group">
                            <label class="control-label" for="title">Nama Cuti</label>
                            <input type="text" name="nama_cuti" id="nama_cuti" class="form-control" required />
                    </div>
                    <div class="form-group">
                            <label class="control-label" for="title">Lama Cuti</label>
                            <input type="number" name="lama_cuti" id="lama_cuti" class="form-control" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="btn_simpan_jenis_cuti">Simpan</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-item-jenis-cuti" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Edit Jenis Cuti</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form data-toggle="validator" >
                        <input type="hidden" name="id">
                        <div class="form-group">
                                <label class="control-label" for="title">Jenis Cuti</label>
                                <input type="text" name="nama_cuti" id="nama_cuti" class="form-control" required />

                                <label class="control-label" for="title">Lama Cuti</label>
                                <input type="number" name="lama_cuti" id="lama_cuti" class="form-control" required />

                        </div>
                        <div class="modal-footer">
                                <button class="btn btn-primary edit-jenis-cuti">Simpan</button>
                        </div>
                    </form>

            </div>
                <!-- body modal -->
        </div>
    </div>
</div>
<!--end MODAL-->
<!------------------------Hapus data------------------------------>
<div class="modal fade" id="hapus-kompartemen">
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
                    <button class="btn btn-primary" id="btn-hapus-kompartemen">Hapus</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <!------------------------end hapus------------------------------>
<!-----------------------------------------------------------------  MODAL unit kerja ------------------------------------------>
@endsection
@section('asset-buttom')
<script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            tampil_data_jenis_cuti();   //pemanggilan fungsi tampil barang.
            //fungsi tampil barang
            function tampil_data_jenis_cuti(){
                $.ajax({
                    type  : 'GET',
                    beforeSend: function(){
                        $('.ajax-loader').css("visibility", "visible");
                    },
                    url   : '/setting/cuti/show',
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        var i;
                        var no=1;
                        var rows = '';
                        $.each( data, function( key, value ) {
                            rows = rows + '<tr>';
                            rows = rows + '<td>'+ no++ +'</td>';
                            rows = rows + '<td>'+value.nama_cuti+'</td>';
                            rows = rows + '<td>'+value.lama_cuti+'</td>';
                            rows = rows + '<td data-id="'+value.id+'">';
                            rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-item-jenis-cuti" class="badge badge-success edit-item-jenis-cuti"><span class="fas fa-fw fa-edit " ></a> ';
                            rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-kompartemen" class="badge badge-danger delete-unit-kerja"><span class="fas fa-fw fa-trash"></button>';
                            rows = rows + '</td>';
                            rows = rows + '</tr>';
                        });
                        $('#jenis_cuti').html(rows);
                    },
                    complete: function(){
                        $('.ajax-loader').css("visibility", "hidden");
                    }
                });
            }
            //Simpan Barang
            $('#btn_simpan_jenis_cuti').click(function(){
                var nama_cuti=$("input[name=nama_cuti]").val();
                var lama_cuti=$("input[name=lama_cuti]").val();
                event.preventDefault();
                var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
                    $.ajax({
                        type : "POST",
                        beforeSend: function(){
                            $('.ajax-loader').css("visibility", "visible");
                        },
                        url  : '{{route('cuti.store')}}',
                        datatype:"html",
                        data : {nama_cuti:nama_cuti,lama_cuti:lama_cuti,_token: '{{csrf_token()}}' },
                        success: function(data){
                            $("input[name=nama_cuti]").val("");
                            $("input[name=jenis_cuti]").val("");
                            tampil_data_jenis_cuti();
                            $('.modal').modal('hide');
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

            $("body").on("click",".edit-item-jenis-cuti",function(){
                var id = $(this).parent("td").data('id');
                var nama_cuti = $(this).parent("td").prev("td").prev("td").text();
                var lama_cuti = $(this).parent("td").prev("td").text();
                $("#edit-item-jenis-cuti").find("input[name='nama_cuti']").val(nama_cuti);
                $("#edit-item-jenis-cuti").find("input[name='lama_cuti']").val(lama_cuti);
                $("#edit-item-jenis-cuti").find("input[name='id']").val(id);
                var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
            });
            /* Updated  Post baru (Updated new Post) */
            $(".edit-jenis-cuti").click(function(e){
                e.preventDefault();
                var id =   $("#edit-item-jenis-cuti").find("input[name='id']").val();
                var nama_cuti = $("#edit-item-jenis-cuti").find("input[name='nama_cuti']").val();
                var lama_cuti = $("#edit-item-jenis-cuti").find("input[name='lama_cuti']").val();
                var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
                $.ajax({
                    dataType: 'json',
                    type:'POST',
                    url: '{{route('jenis_cuti.update')}}',
                    data:{id:id,nama_cuti:nama_cuti,lama_cuti:lama_cuti,_token: '{{csrf_token()}}'},
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
                   tampil_data_jenis_cuti();
                    $(".modal").modal('hide');
                    toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
                })
                // console.log(unit_kerja);
            })
            // klik delete
            $("body").on("click",".delete-unit-kerja",function(){
                var id = $(this).parent("td").data('id');
                $("#hapus-kompartemen").find("input[name='id_hapus']").val(id);

            });
            /* Remove Post (Hapus) */
            $("#btn-hapus-kompartemen").click(function(e){
                event.preventDefault();
            var id = $("#hapus-kompartemen").find("input[name='id_hapus']").val();
            var c_obj = $(this).parents("tr");
            $.ajax({
                dataType: 'json',
                type:'post',
                data:{id:id,_token: '{{csrf_token()}}'},
                url: '{{route('jenis_cuti.delete')}}',
                error: function(xhr){
                    alert('Maaf data ini masih digunakan silahkan edit saja');
                }

            }).done(function(data){
                c_obj.remove();
                toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                tampil_data_jenis_cuti();
                $(".modal").modal('hide');
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
