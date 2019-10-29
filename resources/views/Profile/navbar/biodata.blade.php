
@section('content')
<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
        <div class="row">
            <div class="col-xl-12">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Pengaturan Akun dan Sandi<small>ganti bila dibutuhkan</small></h3>
                        </div>
                    </div>
                <form class="kt-form kt-form--label-right" action="{{route('profile.store')}}" method="post">
                        @csrf
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="alert alert-solid-danger alert-bold fade show kt-margin-t-20 kt-margin-b-40" role="alert">
                                        <div class="alert-icon"><i class="fa fa-exclamation-triangle"></i></div>
                                        <div class="alert-text">Konfigurasikan Kata Sandi Yang Mudah Diingat</div>
                                        <div class="alert-close">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="la la-close"></i></span>
                                            </button>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-12 col-xl-12">
                                            <h3 class="kt-section__title kt-section__title-sm">Pengaturan Akun:</h3>
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
                                    <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">NIP / NRP</label>
                                            <div class="col-lg-9 col-xl-6">
                                            <input type="number" id="nrp" name="nip_nrp" class="form-control" value="{{$data->nip_nrp}}" readonly>
                                                </div>
                                    </div>
                                            <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">E-mail</label>
                                                    <div class="col-lg-9 col-xl-6">
                                                            <input type="email" id="email" name="email" class="form-control" value="{{$data->email}}" >
                                                    </div>
                                            </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Current Password</label>
                                        <div class="col-lg-9 col-xl-6">
                                        <input type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password"  value="{{$data->current_password}}" autofocus ">
                                        @error('current_password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">New Password</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" value="" placeholder="New password">

                                        @error('new_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                         @enderror
                                        </div>
                                    </div>
                                    <div class="form-group form-group-last row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Verify Password</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" value="" placeholder="Verify password">

                                        @error('confirm_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                         @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-3 col-xl-3">
                                    </div>
                                    <div class="col-lg-9 col-xl-9">
                                        <button type="submit" class="btn btn-brand btn-bold">Change Password</button>&nbsp;
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
@endsection
