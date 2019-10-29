@extends('layouts.admin.app')
@include('Profile.navbar.biodata')
@section('body')
  <!-- konten mulai -->

  <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
        <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

            <!-- begin:: Content Head -->
            <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                <div class="kt-container ">
                    <div class="kt-subheader__main">
                        <button class="kt-subheader__mobile-toggle" id="kt_subheader_mobile_toggle"><span></span></button>
                        <h3 class="kt-subheader__title"> {{auth::user()->nama_pegawai}}</h3>
                        <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                        <span class="kt-subheader__desc">Pengaturan Akun</span>
                    </div>
                </div>
            </div>
            <!-- end:: Content Head -->

            <!-- begin:: Content -->
            <div class="kt-container  kt-grid__item kt-grid__item--fluid">

                <!--Begin::App-->
                <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
                    <!--Begin:: App Aside Mobile Toggle-->
                    <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
                        <i class="la la-close"></i>
                    </button>
                    <!--End:: App Aside Mobile Toggle-->

                    <!--Begin:: App Aside-->
                    <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">
                        <!--begin:: Widgets/Applications/User/Profile1-->
                        <div class="kt-portlet kt-portlet--height-fluid-">
                            <div class="kt-portlet__head  kt-portlet__head--noborder">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">
                                    </h3>
                                </div>
                            </div>
                            <div class="kt-portlet__body kt-portlet__body--fit-y">
                                <!--begin::Widget -->
                                <div class="kt-widget kt-widget--user-profile-1">
                                    <div class="kt-widget__head">
                                        <div class="kt-widget__media">
                                        <img src="{{asset('img/'.'/'.$data->foto)}}" alt="image" height="4%" >
                                        </div>
                                    </div>
                                    <div class="kt-widget__body">
                                        <div class="kt-widget__content">
                                            <div class="kt-widget__info">
                                                <h4>{{$data->nama_pegawai}}</h4>
                                            </div>

                                        </div>
                                        <div class="kt-widget__items">
                                        <a href="{{route('profile.index')}}" class="kt-widget__item  {{ Route::currentRouteName() == "profile.index" ? 'kt-widget__item--active' : '' }}">
                                                <span class="kt-widget__section">
                                                    <span class="kt-widget__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>
                                                        </g>
                                                    </svg>
                                                </span>
                                                    <span  class="kt-widget__desc">
                                                        Pengaturan Akun
                                                    </span>
                                                </span>
                                        </a>
                                        </div>
                                        {{-- awal biodata --}}
                                        <div class="kt-widget__items">
                                            <a href="{{route('biodata.index')}}" class="kt-widget__item  {{ Route::currentRouteName() == "biodata.index" ? 'kt-widget__item--active' : '' }}">
                                                <span class="kt-widget__section">
                                                    <span class="kt-widget__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <rect fill="#000000" opacity="0.3" x="2" y="2" width="20" height="20" rx="10"/>
                                                            <path d="M6.16794971,14.5547002 C5.86159725,14.0951715 5.98577112,13.4743022 6.4452998,13.1679497 C6.90482849,12.8615972 7.52569784,12.9857711 7.83205029,13.4452998 C8.9890854,15.1808525 10.3543313,16 12,16 C13.6456687,16 15.0109146,15.1808525 16.1679497,13.4452998 C16.4743022,12.9857711 17.0951715,12.8615972 17.5547002,13.1679497 C18.0142289,13.4743022 18.1384028,14.0951715 17.8320503,14.5547002 C16.3224187,16.8191475 14.3543313,18 12,18 C9.64566871,18 7.67758127,16.8191475 6.16794971,14.5547002 Z" fill="#000000"/>
                                                        </g>
                                                    </svg>
                                                </span>
                                                    <span  class="kt-widget__desc">
                                                        Data Diri
                                                    </span>
                                                </span>
                                            </a>
                                        </div>   <!--end::Widget -->
                                        <div class="kt-widget__items">
                                                <a href="/cetak_rh" class="kt-widget__item {{ Route::currentRouteName() == "/cetak_rh" ? 'kt-widget__item--active' : '' }}">
                                                    <span class="kt-widget__section">
                                                        <span class="kt-widget__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                                <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                                <path d="M14.8875071,11.8306874 L12.9310336,11.8306874 L12.9310336,9.82301606 C12.9310336,9.54687369 12.707176,9.32301606 12.4310336,9.32301606 L11.4077349,9.32301606 C11.1315925,9.32301606 10.9077349,9.54687369 10.9077349,9.82301606 L10.9077349,11.8306874 L8.9512614,11.8306874 C8.67511903,11.8306874 8.4512614,12.054545 8.4512614,12.3306874 C8.4512614,12.448999 8.49321518,12.5634776 8.56966458,12.6537723 L11.5377874,16.1594334 C11.7162223,16.3701835 12.0317191,16.3963802 12.2424692,16.2179453 C12.2635563,16.2000915 12.2831273,16.1805206 12.3009811,16.1594334 L15.2691039,12.6537723 C15.4475388,12.4430222 15.4213421,12.1275254 15.210592,11.9490905 C15.1202973,11.8726411 15.0058187,11.8306874 14.8875071,11.8306874 Z" fill="#000000"/>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                        <span  class="kt-widget__desc">
                                                           Cetak RH
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>   <!--end::Widget -->
                                    </div>
                                </div>
                                <!--end::Widget -->
                            </div>
                        </div>
                        <!--end:: Widgets/Applications/User/Profile1-->

                    </div>
                    <!--End:: App Aside-->
    <!--Begin:: App Content-->
                    @yield('content')
    <!--End:: App Content-->
                </div>
                <!--End::App-->
            </div>
            <!-- end:: Content -->
        </div>
    </div>
    <!-- selesai -->
@endsection
@section('asset-buttom')
<script src="{{asset('template/assets/js/pages/custom/user/profile.js')}}" type="text/javascript"></script>
@endsection

