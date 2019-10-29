@extends('Profile.index')
@section('content')
<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
        <div class="row">
            <div class="col-xl-12">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Biodata<small>ganti bila dibutuhkan</small></h3>
                        </div>
                    </div>
                <form class="kt-form kt-form--label-right" action="{{route('biodata.update',auth::user()->nip_nrp)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">

                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-12 col-xl-12">
                                            <h3 class="kt-section__title kt-section__title-sm">Biodata:</h3>
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
                                        <label class="col-xl-3 col-lg-3 col-form-label">Foto</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar">
                                                <div class="kt-avatar__holder" style="background-image: url({{asset('img/'.$data->foto)}}); background-size: 120px 120px;"></div>
                                                <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                    <i class="fa fa-pen"></i>
                                                    <input type="file" name="foto" accept=".png, .jpg, .jpeg">
                                                </label>
                                                <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                    <i class="fa fa-times"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                            <div class="col-lg-12">
                                            <label >NIP / NRP</label>
                                            <input type="number" id="nrp" name="nip_nrp" class="form-control" value="{{$data->nip_nrp}}"  readonly>
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label>Tinggi Badan</label>
                                            <input type="number" name="tinggi_badan" class="form-control @error('tinggi_badan') is-invalid @enderror"@if (empty($datas))
                                            value=""
                                            @else
                                            value="{{$datas->tinggi_badan}}"
                                            @endif placeholder="Tinggi" required>
                                           @error('tinggi_badan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="">Berat Badan</label>
                                            <input type="number" name="berat_badan" class="form-control @error('berat_badan') is-invalid @enderror" @if (empty($datas))
                                            value=""
                                            @else
                                            value="{{$datas->berat_badan}}"
                                            @endif
                                            placeholder="Berat" required>
                                           @error('berat_badan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label class="">Warna Rambut</label>
                                                <input type="text" name="warna_rambut" class="form-control @error('warna_rambut') is-invalid @enderror" @if (empty($datas))
                                                value=""
                                                @else
                                                value="{{$datas->warna_rambut}}"
                                                @endif
                                                placeholder="Masukkan Warna Rambut" required>
                                            @error('warna_rambut')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="">Bentuk Muka</label>
                                                <input type="text" name="bentuk_muka" class="form-control @error('bentuk_muka') is-invalid @enderror" @if (empty($datas))
                                                value=""
                                                @else
                                                value="{{$datas->bentuk_muka}}"
                                                @endif  placeholder="Masukkan Bentuk Muka" required>
                                                @error('bentuk_muka')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label class="">Warna Kulit</label>
                                                <input type="text" name="warna_kulit" class="form-control @error('warna_kulit') is-invalid @enderror" @if (empty($datas))
                                                value="{{ old('warna_kulit') }}"
                                                @else
                                                value="{{$datas->warna_kulit }}"
                                                @endif placeholder="Masukkan Warna Kulit" required>
                                                @error('warna_kulit')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="">Ciri Khas</label>
                                                <input type="text" name="ciri_khas" class="form-control @error('ciri_khas') is-invalid @enderror" @if (empty($datas))
                                                value=""
                                                @else
                                                value="{{$datas->ciri_khas}}"
                                                @endif   placeholder="Masukkan Ciri Khas" required>
                                                @error('ciri_khas')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label class="">Cacat Tubuh</label>
                                                <input type="text" name="cacat_tubuh" class="form-control @error('cacat_tubuh') is-invalid @enderror" @if (empty($datas))
                                                value=""
                                                @else
                                                value="{{$datas->cacat_tubuh}}"
                                                @endif placeholder="Masukkan Cacat Tubuh" required>
                                                @error('cacat_tubuh')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6">
                                                    <label class="">Hobi</label>
                                                    <input type="text" name="hobi" class="form-control @error('hobi') is-invalid @enderror" @if (empty($datas))
                                                    value=""
                                                    @else
                                                    value="{{$datas->hobi}}"
                                                    @endif  placeholder="Masukkan Hobi" required>
                                                @error('hobi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="status_menikah" class="">Status Menikah</label>
                                                @if ($datas == null)
                                                    <select class="form-control  @error('status_menikah') is-invalid @enderror" name="status_menikah" id="status_menikah" required>
                                                        <option value="">---- Pilih -------</option>
                                                        <option  value="Belum Kawin">Belum Kawin</option>
                                                        <option value="Kawin">Kawin</option>
                                                        <option  value="Janda">Janda</option>
                                                        <option value="Duda">Duda</option>
                                                    </select>
                                                @else
                                                <select class="form-control  @error('status_menikah') is-invalid @enderror" name="status_menikah" id="status_menikah" required>
                                                        <option value="">---- Pilih -------</option>
                                                        <option {{ ($datas->status_menikah == 'Belum Kawin') ? 'selected' : '' }} value="Belum Kawin">Belum Kawin</option>
                                                        <option {{ ($datas->status_menikah == 'Kawin') ? 'selected' : '' }} value="Kawin">Kawin</option>
                                                        <option {{ ($datas->status_menikah == 'Janda') ? 'selected' : '' }} value="Janda">Janda</option>
                                                        <option {{ ($datas->status_menikah == 'Duda') ? 'selected' : '' }} value="Duda">Duda</option>
                                                </select>
                                                @endif
                                                @error('status_menikah')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label for="no_kk" class="">No Kartu Keluarga</label>
                                                <input type="text" id="no_kk" name="no_kk" class="form-control  @error('no_kk') is-invalid @enderror" placeholder="Masukkan No Kartu Keluarga" @if (empty($datas))
                                                value=""
                                                @else
                                                value="{{$datas->no_kk}}"
                                                @endif required >
                                                @error('no_kk')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                                <!-- <span class="form-text text-muted">Please enter your email</span> -->
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="no_telp" class="">No Telepon</label>
                                                <input type="text" id="no_telp" name="no_tlp" class="form-control" placeholder="Masukkan Nomer Telepon" @if (empty($datas))
                                                value=""
                                                @else
                                                value="{{$datas->no_tlp}}"
                                                @endif required>
                                                <!-- <span class="form-text text-muted">Please enter your contact</span> -->
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
                                        <button type="submit" class="btn btn-brand btn-bold">Save</button>&nbsp;
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
