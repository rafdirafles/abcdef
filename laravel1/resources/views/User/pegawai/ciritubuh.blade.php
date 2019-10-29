@extends('User.pegawai.index')
@section('content')

<!--Begin:: App Content-->
<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
        <div class="row">
            <div class="col-xl-12">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Biodata Diri <small>update bila diperlukan</small></h3>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                                <div class="col-lg-12 col-xl-12">
                                    @if ($succes = Session::get('succes'))
                                    <div class="alert alert-solid-success alert-bold fade show kt-margin-t-20 kt-margin-b-40" role="alert">
                                        <div class="alert-icon"><i class="fas fa-check"></i></div>
                                    <div class="alert-text">{{$succes}}</div>
                                        <div class="alert-close">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="la la-close"></i></span>
                                            </button>
                                        </div>

                                    </div>
                                @endif
                                </div>
                        </div>
                    </div>
                <form class="kt-form kt-form--label-right" action="{{route('ciritubuh.update',$datas->nip_nrp)}}" method="post" >
                    @csrf
                    @method('PATCH')
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h3 class="kt-section__title kt-section__title-sm">Ciri Ciri Tubuh:</h3>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Tinggi Badan</label>
                                    <div class="col-lg-9 col-xl-6">
                                    <input type="text" id="tinggi_badan" name="tinggi_badan" class="form-control" placeholder="Tinggi" value="{{$datas->tinggi_badan}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Berat Badan</label>
                                    <div class="col-lg-9 col-xl-6">
                                            <input type="number" id="berat_badan" name="berat_badan" class="form-control" placeholder="Berat"  value="{{$datas->berat_badan}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Warna Rambut</label>
                                    <div class="col-lg-9 col-xl-6">
                                            <input type="text" id="warna_rambut" name="warna_rambut" class="form-control" placeholder="Masukkan Warna Rambut"  value="{{$datas->warna_rambut}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Bentuk Muka</label>
                                    <div class="col-lg-9 col-xl-6">
                                            <input type="text" id="bentuk_muka" name="bentuk_muka" class="form-control" placeholder="Masukkan Bentuk Muka"  value="{{$datas->bentuk_muka}}" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Warna Kulit</label>
                                    <div class="col-lg-9 col-xl-6">
                                            <input type="text" id="warna_kulit" name="warna_kulit" class="form-control" placeholder="Masukkan Warna Kulit"  value="{{$datas->warna_kulit}}" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Ciri Khas</label>
                                    <div class="col-lg-9 col-xl-6">
                                            <input type="text" id="ciri_khas" name="ciri_khas" class="form-control" placeholder="Masukkan Ciri Khas"  value="{{$datas->ciri_khas}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row form-group-last row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Cacat Tubuh</label>
                                    <div class="col-lg-9 col-xl-6">
                                            <input type="text" id="cacat" class="form-control" placeholder="Masukkan Cacat Tubuh"  value="{{$datas->cacat_tubuh}}" name="cacat_tubuh" required>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                            <!-- akhir row tabel  -->
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-3 col-xl-3"></div>
                                    <div class="col-lg-9 col-xl-9">
                                        <button type="submit" class="btn btn-success">Submit</button>&nbsp;
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End:: App Content-->
@endsection
