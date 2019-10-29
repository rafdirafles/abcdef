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
                        <span class="kt-subheader__desc">Kompartemen</span>
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
                            <h3 class="kt-portlet__head-title" style="margin-right:20px">Kompartemen</h3>
                        </div>
                        <div class="ajax-loader">
                                <img width=100px src="{{ asset('/img/1.gif') }}" class="img-responsive" />
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="kt-portlet__head-actions">
                                    <button href="#" class="btn btn-brand btn-elevate btn-icon-sm klik-tambah" data-toggle="modal" data-target="#modal-add-kompartemen"><i class="la la-plus"></i> Tambah Kompartemen</button>
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
                                        <th>Kompartemen</th>
                                        <th width="7%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="kompartemen">
                                </tbody >
                    </table>
                </div>
            </div>
        </div>
    </div>
{{--  --}}
<!-- MODAL ADD unit kerja -->
<div class="modal fade" id="modal-add-kompartemen" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Tambah Kompartemen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- form -->
            <form class="form-horizontal" data-toggle="validator">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <div class="modal-body">
                    <div class="form-group">
                            <label class="control-label" for="title">Kompartemen</label>
                            <input type="text" name="nama_kompartemen" id="nama_kompartemen" class="form-control" required />

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="btn_simpan_kompartemen">Simpan</button>
                </div>
            </form>
            <!-- form -->
        </div>
    </div>
</div>
<!--END MODAL ADD-->
<!--edit MODAL -->
<div class="modal fade" id="edit-item-kompartemen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jdlbrevet">Edit Kompartemen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- body modal -->
            <div class="modal-body">
                    <form data-toggle="validator" >
                        <input type="hidden" name="id">
                        <div class="form-group">
                                <label class="control-label" for="title">Kompartemen</label>
                                <input type="text" name="nama_kompartemen" id="nama_kompartemen" class="form-control" required />

                        </div>
                        <div class="modal-footer">
                                <button class="btn btn-primary edit-kompartemen">Simpan</button>
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
            tampil_data_unit_kerja();   //pemanggilan fungsi tampil barang.
            //fungsi tampil barang
            function tampil_data_unit_kerja(){
                $.ajax({
                    type  : 'GET',
                    beforeSend: function(){
                        $('.ajax-loader').css("visibility", "visible");
                    },
                    url   : '/setting/kompartemen/show',
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        var i;
                        var no=1;
                        var rows = '';
                        $.each( data, function( key, value ) {
                            rows = rows + '<tr>';
                            rows = rows + '<td>'+ no++ +'</td>';
                            rows = rows + '<td>'+value.nama_kompartemen+'</td>';
                            rows = rows + '<td data-id="'+value.id+'">';
                            rows = rows + '<a href="#" data-toggle="modal" data-target="#edit-item-kompartemen" class="badge badge-success edit-item-kompartemen"><span class="fas fa-fw fa-edit " ></a> ';
                            rows = rows + '<a href="#" data-toggle="modal" data-target="#hapus-kompartemen" class="badge badge-danger delete-unit-kerja"><span class="fas fa-fw fa-trash"></button>';
                            rows = rows + '</td>';
                            rows = rows + '</tr>';
                        });
                        $('#kompartemen').html(rows);
                    },
                    complete: function(){
                        $('.ajax-loader').css("visibility", "hidden");
                    }
                });
            }
            //Simpan Barang
            $('#btn_simpan_kompartemen').click(function(){
                var nama_kompartemen=$("input[name=nama_kompartemen]").val();
                event.preventDefault();
                var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
                    $.ajax({
                        type : "POST",
                        beforeSend: function(){
                            $('.ajax-loader').css("visibility", "visible");
                        },
                        url  : '{{route('kompartemen.store')}}',
                        datatype:"html",
                        data : {nama_kompartemen:nama_kompartemen,_token: '{{csrf_token()}}' },
                        success: function(data){
                            $("input[name=nama_kompartemen]").val("");
                            tampil_data_unit_kerja();
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

            $("body").on("click",".edit-item-kompartemen",function(){
                var id = $(this).parent("td").data('id');
                var unit_kerja = $(this).parent("td").prev("td").text();
                $("#edit-item-kompartemen").find("input[name='nama_kompartemen']").val(unit_kerja);
                $("#edit-item-kompartemen").find("input[name='id']").val(id);
                var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
            });
            /* Updated  Post baru (Updated new Post) */
            $(".edit-kompartemen").click(function(e){
                e.preventDefault();
                var id =   $("#edit-item-kompartemen").find("input[name='id']").val();
                var kompartemen = $("#edit-item-kompartemen").find("input[name='nama_kompartemen']").val();
                var form=$("body");
                form.find('.help-block').remove();
                form.find('.form-group').removeClass('has-error');
                $.ajax({
                    dataType: 'json',
                    type:'POST',
                    url: '{{route('kompartemen.update')}}',
                    data:{id:id,nama_kompartemen:kompartemen,_token: '{{csrf_token()}}'},
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
                   tampil_data_unit_kerja();
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
                url: '{{route('kompartemen.delete')}}',
                error: function(xhr){
                    alert('Maaf data ini masih digunakan silahkan edit saja');
                }

            }).done(function(data){
                c_obj.remove();
                toastr.success('Post Deleted Successfully.', 'Success Alert', {timeOut: 5000});
                tampil_data_unit_kerja();
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
