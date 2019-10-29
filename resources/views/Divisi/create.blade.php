@extends("layouts.admin.app")
@section('body')

<!-- Begin Input Pegawai  -->
{{-- <div class="kt-container  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="kt-portlet">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Input Pegawai
                </h3>
            </div>
        </div>
        <!--begin::Form-->
    <form class="kt-form kt-form--label-right" action="{{route('divisi.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="kt-portlet__body">
                <div class="form-group row">
                    <label class="">Unit kerja</label>
                    <select class="form-control @error('id_unit_kerja') is-invalid @enderror" value="{{ old('id_unit_kerja') }}" name="id_unit_kerja" id="sel1">
                        <option>select unit kerja</option>
                        @foreach ($datas as $data)
                            <option value="{{$data->id}}">{{$data->nama_unit_kerja}}</option>
                        @endforeach
                    </select>
                        @error('id_unit_kerja')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
               
                        <div class="col-lg-6">
                            <label class="">Nama Divisi</label>
                            <input type="tetx"  name="nama_devisi" class="form-control @error('nama_devisi') is-invalid @enderror" value="{{ old('nama_devisi') }}" placeholder="Masukkan unit kerja exp:siak">
                            @error('nama_devisi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                        </div>
                </div>
            </div>
            <div class="kt-portlet__foot">
                <div class="kt-form__actions">
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>
        <!--end::Form-->
    </div>
    </div>
</div>
</div> --}}
<!-- End form input -->


@endsection
