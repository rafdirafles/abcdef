<!DOCTYPE html>
<html lang="en" >
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8"/>
        <title>A-SIK</title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
        <!--end::Fonts -->
        <!--begin::Page Vendors Styles(used by this page) -->
        {{-- <link href="{{ ('template/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" /> --}}
        <!--end::Page Vendors Styles -->
        <!--begin::Global Theme Styles(used by all pages) -->
            <link href="{{ asset('template/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{ asset('template/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles -->
        <link rel="shortcut icon" href="{{ asset('template/assets/media/logos/logoakpol2.png')}}" />
        <link href="{{ asset('template/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

        @yield('asset-top')

    </head>
    <!-- end::Head -->
    <!-- begin::Body -->
    <body  class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading"  >
    {{-- <body  class="kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading"  > --}}
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
        <div class="kt-header-mobile__logo">
            <a href="index.html">
                <img alt="Logo" src="{{ asset('template/assets/media/logos/logoakpol2.png')}}"/>
            </a>
        </div>
        <div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
            <div class="kt-header--fixed">
                <h3 style="color: black; margin-left:4%">SISTEM INFORMASI KEPEGAWAIAN</h3>
            </div>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
        </div>
    </div>
<!-- end:: Header Mobile -->
	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

<!-- begin:: Header -->
<div id="kt_header" class="kt-header  kt-header--fixed " data-ktheader-minimize="on" >
	<div class="kt-header__top">
		<div class="kt-container ">

            <div class="kt-header__brand kt-grid__item" id="kt_header_brand">
                <div class="kt-header__brand-logo">
                    <a href="index.html">
                        <img alt="Logo"  src="{{ asset('template/assets/media/logos/logoakpol1.png')}}" class="kt-header__brand-logo-default"/>
                        <img alt="Logo"  src="{{ asset('template/assets/media/logos/logoakpol2.png')}}" class="kt-header__brand-logo-sticky"/>
                    </a>
                </div>
                <span style="margin-left: 30px"></span>
                <div class="kt-header__topbar">
                    <h1 style="color: white;">SISTEM INFORMASI KEPEGAWAIAN  </h1>
                </div>
            </div>

            <!-- end:: Brand -->

            <div class="kt-header__topbar">
                <!--begin: Search
                <div class="kt-header__topbar-item kt-header__topbar-item--search dropdown kt-hidden-desktop" id="kt_quick_search_toggle">
                    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px">
                        <span class="kt-header__topbar-icon">
                            <i class="flaticon2-search-1"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--info">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
                                </g>
                            </svg>
                        </span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">
                        <div class="kt-quick-search kt-quick-search--dropdown kt-quick-search--result-compact" id="kt_quick_search_dropdown">
                            <form method="get" class="kt-quick-search__form">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="flaticon2-search-1"></i></span></div>
                                        <input type="text" class="form-control kt-quick-search__input" style="color: yellow" placeholder="Search...">
                                        <div class="input-group-append"><span class="input-group-text"><i class="la la-close kt-quick-search__close"></i></span></div>
                                </div>
                            </form>
                            <div class="kt-quick-search__wrapper kt-scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>
                        </div>
                    </div>
                </div>
                <end: Search -->
                <div class="kt-header__topbar-item kt-header__topbar-item--quick-panel" data-toggle="kt-tooltip" title="Quick panel" data-placement="left">
                    <div class="kt-header__topbar-wrapper"></div>
                </div>

                <!--begin: User bar -->
                <div class="kt-header__topbar-item kt-header__topbar-item--user">
                    <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px" aria-expanded="false">
                        <span class="kt-header__topbar-welcome">Hi,</span>
                    <span class="kt-header__topbar-username">{{auth::user()->nama_pegawai}}</span>
                        <img class="kt-hidden" alt="Pic" src="{{ asset('template/assets/media/users/300_21.jpg')}}">

                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                        <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden-">S</span>
                    </div>
                    <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
                        <!--begin: Head -->
                <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-color: white"><!--background-image: url(/assets/media/misc/bg-1.jpg)-->
                    <div class="kt-user-card__avatar">
                        <img class="kt-hidden" alt="Pic" src="{{ asset('template/assets/media/users/300_25.jpg')}}" />
                        <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                        <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">S</span>
                    </div>
                    <div class="kt-user-card__name">
                        {{auth::user()->nama_pegawai}}
                    </div>
                </div>
            <!--end: Head -->
                        <div class="kt-notification">
                            <a href="{{route('profile.index')}}" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon2-calendar-3 kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title kt-font-bold">My Profile</div>
                                </div>
                            </a>
                            <div class="kt-notification__custom kt-valign-middle">
                                {{-- <a href="custom/user/login-v2.html" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold" >Sign Out</a> --}}
                                <a class="btn btn-label btn-label-brand btn-sm btn-bold" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                  Sign Out
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>

<!-- begin: Header Menu -->
    @include('layouts.admin.navbar')
</div>
        @yield('body')

{{-- end body --}}
<!-- begin:: Footer -->
<div class="kt-footer  kt-footer--extended  kt-grid__item" id="kt_footer">
	<div class="kt-footer__bottom">
	    <div class="kt-container ">
			<div class="kt-footer__wrapper">
				<div class="kt-footer__logo">

						<img alt="Logo" src="{{ asset('template/assets/media/logos/logoakpol.png')}}" width="7%">

				    <div class="kt-footer__copyright" style="color: black">
					    2019&nbsp;&copy;&nbsp;
					    <a href="http://keenthemes.com/metronic" target="_blank">AKPOL BY SIAK</a>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end:: Footer -->
            </div>
		</div>
	</div>

<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
</div>
</body>
<!-- end::Scrolltop -->

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#374afb","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

    	<!--begin::Global Theme Bundle(used by all pages) -->
    	    	   <script src="{{ asset('template/assets/plugins/global/plugins.bundle.js')}}" type="text/javascript"></script>
		    	   <script src="{{ asset('template/assets/js/scripts.bundle.js')}}" type="text/javascript"></script>
				<!--end::Global Theme Bundle -->

                    <!--begin::Page Vendors(used by this page) -->
                            {{-- <script src="{{ asset('template/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script> --}}
                            {{-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script> --}}
                            {{-- <script src="{{ asset('template/assets/plugins/custom/gmaps/gmaps.js')}}" type="text/javascript"></script> --}}
                        <!--end::Page Vendors -->

                    <!--begin::Page Scripts(used by this page) -->
                            <script src="{{ asset('template/assets/js/pages/dashboard.js')}}" type="text/javascript"></script>
                        <!--end::Page Scripts -->
                        <script src="{{ asset('template/assets/plugins/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
            @yield('asset-buttom')
            {{-- validator and toast --}}
            <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

    <!-- end::Body -->
    <script>
        $(document).ready(function(){
            $("ul li").on("click",function(){
            $("ul li").removeClass("kt-menu__item--here");
            $(this).addClass("kt-menu__item--here");
        });

        });
    </script>
<!-- Mirrored from keenthemes.com/metronic/preview/demo2/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2019 06:32:28 GMT -->
</html>
