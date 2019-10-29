@extends("layouts.admin.app")
@section('body')

<!-- Input Mulai -->
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Input Cuti
                            </h3>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form class="kt-form kt-form--label-right">
                        <div class="kt-portlet__body">
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label>NIP / NRP</label>
                                    <input type="text" class="form-control" placeholder="Masukkan NIP/NRP">
                                    <!-- <span class="form-text text-muted">Please enter your full name</span> -->
                                </div>
                                <div class="col-lg-9">
                                    <label class="">Nama Pegawai</label>
                                    <input type="text" class="form-control" placeholder="">
                                    <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                    <label class="">Jenis Cuti</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Jenis Cuti">
                                    <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3">
                                        <label class="">Tanggal Mulai Cuti</label>
                                        <input type="date" class="form-control" placeholder="Masukkan Tanggal Mulai Cuti">
                                        <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                </div>
                                <div class="col-lg-3">
                                        <label class="">Tanggal Selesai Cuti</label>
                                        <input type="date" class="form-control" placeholder="Tanggal Selesai Cuti">
                                        <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                </div>
                            </div>
                            <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label class="">Keterangan</label>
                                        <input type="text" class="form-control" placeholder="Keterangan">
                                        <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                    </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <button type="reset" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                </div>
            </div>
        </div>
</div>
@endsection
