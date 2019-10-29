
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

                <form class="kt-form kt-form--label-right" action="{{ route('infokontak.update',$data->nip_nrp ) }}" method="post">
                    @csrf
                    @method('PATCH')
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h3 class="kt-section__title kt-section__title-sm">Info Kontak:</h3>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Alamat</label>
                                    <div class="col-lg-9 col-xl-6">
                                    <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Masukkan Alamat " value="{{$data->alamat}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">No Telepon</label>
                                    <div class="col-lg-9 col-xl-6">
                                            <input type="text" id="no_tlp" name="no_tlp" class="form-control" placeholder="Masukkan Nomer Telepon" value="{{$datas->no_tlp}}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row form-group-last row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">No HP</label>
                                    <div class="col-lg-9 col-xl-6">
                                            <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="Masukkan Nomer Handphone" value="{{$data->no_hp}}" required>
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
