<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Mirrored from sego.dexignzone.com/laravel/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jun 2022 19:19:26 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="h2avmTUWlidwz0fVqgivzmoj1I8XD5xgoKX3s11q">
    <title>@yield('page_title', 'Eventer | Admin Dashboard')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" />
    <!-- Canonical SEO -->
    {{--
        <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-html-laravel-admin-template/"> --}}
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('backend/img/favicon/favicon.icon') }}" />
    <!-- Include Styles -->
    <!-- BEGIN: Theme CSS-->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="{{asset('slick-1.8.1/slick-1.8.1/slick/slick-theme.css')}}">
    <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
    rel="stylesheet">
    <link rel="stylesheet"
    href="{{ asset('backend/vendor/fonts/boxicons076f.css?id=b821a646ad0904f9218f56d8be8f070c') }}" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('backend/vendor/css/coredcac.css?id=7a74a9d0cfeabd283069bfaa3de33eaa') }}" />
    <link rel="stylesheet"
    href="{{ asset('backend/vendor/css/theme-default6271.css?id=3d127db9612959fd1b1297d4adb3d55e') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/demo6e6a.css?id=8a804dae81f41c0f9fcbef2fa8316bdd') }}" />
    <link rel="stylesheet"
    href="{{ asset('backend/vendor/libs/perfect-scrollbar/perfect-scrollbarc5ea.css?id=98fefe4424f0148a6e7c70b613511b33') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <!-- Vendor Styles -->
    <link rel="stylesheet" href="{{ asset('backend/vendor/libs/apex-charts/apex-charts.css') }}">
    <link rel="stylesheet" href="{{asset('slick-1.8.1/slick-1.8.1/slick/slick.css')}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/typography.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}"> --}}
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- third party css -->
    <link href="{{asset('backend/vendor/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{asset('backend/vendor/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')}}"
        rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendor/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css')}}"
        rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/vendor/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css')}}"
        rel="stylesheet" type="text/css" />
    <!-- third party css end -->
    <!-- Include Scripts for customizer, helper, analytics, config -->
    <!-- laravel style -->
    <script src="{{ asset('backend/vendor/js/helpers.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('backend/js/config.js') }}"></script>
    <!-- beautify ignore:end -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');

    </script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="../../../buttons.github.io/buttons.js"></script>
</head>

<style>
    .service-list {
        margin-bottom: 30px;
    }

    .service-list:last-child {
        border-bottom: 0;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .service-list ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .service-list ul li {
        float: left;
        margin: 6px 0;
        padding-left: 25px;
        position: relative;
        width: 33%;
    }

    .service-list ul li::before {
        color: #ccc;
        content: '\f30b';
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        left: 0;
        position: absolute;
    }

    .blog-view .service-list ul li::before {
        color: #3e08b9;
    }

    .img-fill img {
        min-height: 100%;
        min-width: 100%;
        position: relative;
        display: inline-block;
        max-width: none;
    }

    .slick-slide img {
        display: block;
    }

    .slick-slide img {
        display: block;
    }

    .slick-slide img {
        display: block;
    }

    .pl-3,
    .px-3 {
        padding-left: 1rem !important;
    }

    .pr-3,
    .px-3 {
        padding-right: 1rem !important;
    }

    .mb-5,
    .my-5 {
        margin-bottom: 3rem !important;
    }

    .pl-3,
    .px-3 {
        padding-left: 1rem !important;
    }

    .pr-3,
    .px-3 {
        padding-right: 1rem !important;
    }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
    }

    .profile-info .profile-img img {
        border: 2px solid #3e08b9;
        border-radius: 50%;
        width: 45px;
        margin-right: 15px;
    }

    .profile-pro {
        font-size: 12px;
        color: #ED1B79;
        font-weight: 500;
        text-transform: uppercase;
    }

    .pt-2,
    .py-2 {
        padding-top: 0.5rem !important;
    }

    .ml-2,
    .mx-2 {
        margin-left: 0.5rem !important;
    }

    .mt-0,
    .my-0 {
        margin-top: 0 !important;
    }

    .ml-3,
    .mx-3 {
        margin-left: 1rem !important;
    }

    .mb-0,
    .my-0 {
        margin-bottom: 0 !important;
    }

    .d-flex {
        display: -ms-flexbox !important;
        display: flex !important;
    }

    #star {
        color: #f1e207;
    }

    .fa,
    .fas {
        font-weight: 900;
    }

    .fa,
    .far,
    .fas {
        font-family: "Font Awesome 5 Free";
    }

    /* ==== Main CSS === */
    .img-fill {
        width: 100%;
        height: 200px;
        display: block;
        overflow: hidden;
        position: relative;
        text-align: center
    }

    .img-fill img {
        min-height: 200px;
        min-width: 100%;
        position: relative;
        display: inline-block;
        max-width: none;
    }

    .blocks-box,
    .slick-slider {
        margin: 0;
        padding: 0 !important;
    }

    .slick-slide {
        float: left
            /* If RTL Make This Right */
        ;
        padding: 0;
    }

    .Modern-Slider .item .info>div {
        display: inline-block !important;
        vertical-align: middle;
    }

    .Modern-Slider .NextArrow {
        position: absolute;
        top: 50%;
        right: 0px;
        width: 45px;
        height: 45px;
        background: transparent;
        border: 0 none;
        margin-top: -22.5px;
        text-align: center;
        font: 20px/45px FontAwesome;
        color: rgba(250, 250, 250, 0.747);
        z-index: 5;
    }

    .Modern-Slider .NextArrow:before {
        content: '\f105';
    }

    .Modern-Slider .PrevArrow {
        position: absolute;
        top: 50%;
        left: 0px;
        width: 45px;
        height: 45px;
        background: transparent;
        border: 0 none;
        margin-top: -22.5px;
        text-align: center;
        font: 20px/45px FontAwesome;
        color: rgba(250, 250, 250, 0.747);
        z-index: 5;
    }

    .Modern-Slider .PrevArrow:before {
        content: '\f104';
    }

    .Modern-Slider .item.slick-active {
        animation: Slick-FastSwipeIn 1s both;
    }

    /* .Modern-Slider {background:#000;} */
    /* ==== Slider Image Transition === */
    @keyframes Slick-FastSwipeIn {
        0% {
            transform: rotate3d(0, 1, 0, 150deg) scale(0) perspective(400px);
        }

        100% {
            transform: rotate3d(0, 1, 0, 0deg) scale(1) perspective(400px);
        }
    }

    @-webkit-keyframes ProgressDots {
        from {
            width: 0px;
        }

        to {
            width: 100%;
        }
    }

    @keyframes ProgressDots {
        from {
            width: 0px;
        }

        to {
            width: 100%;
        }
    }

    .img-wrap {
        position: relative;
        /* width: 200px !important; */
    }

    .img-wrap .close {
        position: absolute;
        top: -65px;
        bottom: 100%;
        right: 8px;
        z-index: 100;
        color: red;
    }
   
table.table td h2 {
display: inline-block;
font-size: inherit;
font-weight: 400;
margin: 0;
padding: 0;
vertical-align: middle;
}

table.table td h2.table-avatar {
-webkit-box-align: center;
-ms-flex-align: center;
align-items: center;
display: -webkit-inline-box;
display: -ms-inline-flexbox;
display: inline-flex;
font-size: inherit;
font-weight: 400;
margin: 0;
padding: 0;
vertical-align: middle;
white-space: nowrap;
}

table.table td h2 a {
color: #272b41;
}

table.table td h2 a:hover {
color: #ed1b79;
}

table.table td h2 span {
color: #888;
display: block;
font-size: 12px;
margin-top: 3px;
}
</style>

<body>
    <!-- Layout Content -->
    <div class="layout-wrapper layout-content-navbar ">
        <div class="layout-container">
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <!-- ! Hide app brand if navbar-full -->
                <div class="app-brand demo">
                    {{-- <a href="{{route('/')}}" class="app-brand-link">
                    <span class="app-brand-logo demo">
                        <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <path
                                    d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                                    id="path-1"></path>
                                <path
                                    d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                                    id="path-3"></path>
                                <path
                                    d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                                    id="path-4"></path>
                                <path
                                    d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                                    id="path-5"></path>
                            </defs>
                            <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                    <g id="Icon" transform="translate(27.000000, 15.000000)">
                                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                                            <mask id="mask-2" fill="white">
                                                <use xlink:href="#path-1"></use>
                                            </mask>
                                            <use fill="#ff007a" xlink:href="#path-1"></use>
                                            <g id="Path-3" mask="url(#mask-2)">
                                                <use fill="#ff007a" xlink:href="#path-3"></use>
                                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                            </g>
                                            <g id="Path-4" mask="url(#mask-2)">
                                                <use fill="#ff007a" xlink:href="#path-4"></use>
                                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                            </g>
                                        </g>
                                        <g id="Triangle"
                                            transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                            <use fill="#ff007a" xlink:href="#path-5"></use>
                                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                    <span class="app-brand-text demo menu-text fw-bold ms-2">Sneat</span>
                    </a> --}}
                    <a href="{{ route('dashboard') }}"><img src="{{ asset('images/logo.png') }}" width="40%" alt=""></a>
                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-autod-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
                    <li class="menu-item active">
                        <a href="{{ url('/dashboard') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div>Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="{{ route('user.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div>User</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="{{ route('categorylist.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-category"></i>
                            <div>Category</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="{{ route('dashboard.services') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div>Services</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx bx-dock-top"></i>
                            <div>Orders</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item ">
                                <a href="{{route('order.invoice')}}" class="menu-link">
                                    <div>Pending Orders</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{route('order.admin.complete.list')}}" class="menu-link">
                                    <div>Completed Orders</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{route('order.admin.canceled.list')}}" class="menu-link">
                                    <div>Canceled Orders</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item "> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="menu-link">
                            <i class="menu-icon fas fa-sign-out-alt"></i>

                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    
                    {{-- <li class="menu-item ">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div>Services</div>
                        </a> --}}
                    {{-- <ul class="menu-sub">
                            <li class="menu-item ">
                                <a href="layouts/without-menu.html" class="menu-link">
                                    <div>Without menu</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="layouts/without-navbar.html" class="menu-link">
                                    <div>Without navbar</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="layouts/container.html" class="menu-link">
                                    <div>Container</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="layouts/fluid.html" class="menu-link">
                                    <div>Fluid</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="layouts/blank.html" class="menu-link" target="_blank">
                                    <div>Blank</div>
                                </a>
                            </li>
                        </ul> --}}
                    </li>
                    {{-- <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Pages</span>
                    </li>
                    <li class="menu-item ">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx bx-dock-top"></i>
                            <div>Account Settings</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item ">
                                <a href="pages/account-settings-account.html" class="menu-link">
                                    <div>Account</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="pages/account-settings-notifications.html" class="menu-link">
                                    <div>Notifications</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="pages/account-settings-connections.html" class="menu-link">
                                    <div>Connections</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item ">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                            <div>Authentications</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item ">
                                <a href="auth/login-basic.html" class="menu-link" target="_blank">
                                    <div>Login</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="auth/register-basic.html" class="menu-link" target="_blank">
                                    <div>Register</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="auth/forgot-password-basic.html" class="menu-link" target="_blank">
                                    <div>Forgot Password</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item ">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                            <div>Misc</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item ">
                                <a href="pages/misc-error.html" class="menu-link" target="_blank">
                                    <div>Error</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="pages/misc-under-maintenance.html" class="menu-link" target="_blank">
                                    <div>Under Maintenance</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Components</span>
                    </li>
                    <li class="menu-item ">
                        <a href="cards/basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div>Cards</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div>User interface</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item ">
                                <a href="ui/accordion.html" class="menu-link">
                                    <div>Accordion</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="ui/alerts.html" class="menu-link">
                                    <div>Alerts</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="ui/badges.html" class="menu-link">
                                    <div>Badges</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="ui/buttons.html" class="menu-link">
                                    <div>Buttons</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="ui/carousel.html" class="menu-link">
                                    <div>Carousel</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="ui/collapse.html" class="menu-link">
                                    <div>Collapse</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="ui/dropdowns.html" class="menu-link">
                                    <div>Dropdowns</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="ui/footer.html" class="menu-link">
                                    <div>Footer</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="ui/list-groups.html" class="menu-link">
                                    <div>List groups</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="ui/modals.html" class="menu-link">
                                    <div>Modals</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="ui/navbar.html" class="menu-link">
                                    <div>Navbar</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="ui/offcanvas.html" class="menu-link">
                                    <div>Offcanvas</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="ui/pagination-breadcrumbs.html" class="menu-link">
                                    <div>Pagination &amp; Breadcrumbs</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="ui/progress.html" class="menu-link">
                                    <div>Progress</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="ui/spinners.html" class="menu-link">
                                    <div>Spinners</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="ui/tabs-pills.html" class="menu-link">
                                    <div>Tabs &amp; Pills</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="ui/toasts.html" class="menu-link">
                                    <div>Toasts</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="ui/tooltips-popovers.html" class="menu-link">
                                    <div>Tooltips &amp; popovers</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="ui/typography.html" class="menu-link">
                                    <div>Typography</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item ">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-copy"></i>
                            <div>Extended UI</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item ">
                                <a href="extended/ui-perfect-scrollbar.html" class="menu-link">
                                    <div>Perfect scrollbar</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="extended/ui-text-divider.html" class="menu-link">
                                    <div>Text Divider</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item ">
                        <a href="icons/boxicons.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-crown"></i>
                            <div>Boxicons</div>
                        </a>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Forms &amp; Tables</span>
                    </li>
                    <li class="menu-item ">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div>Form Elements</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item ">
                                <a href="forms/basic-inputs.html" class="menu-link">
                                    <div>Basic Inputs</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="forms/input-groups.html" class="menu-link">
                                    <div>Input groups</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item ">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div>Form Layouts</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item ">
                                <a href="form/layouts-vertical.html" class="menu-link">
                                    <div>Vertical Form</div>
                                </a>
                            </li>
                            <li class="menu-item ">
                                <a href="form/layouts-horizontal.html" class="menu-link">
                                    <div>Horizontal Form</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item ">
                        <a href="tables/basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-table"></i>
                            <div>Tables</div>
                        </a>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Misc</span>
                    </li>
                    <li class="menu-item ">
                        <a href="https://themeselection.com/support/" class="menu-link" target="_blank">
                            <i class="menu-icon tf-icons bx bx-support"></i>
                            <div>Support</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/laravel-introduction.html"
                            class="menu-link" target="_blank">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div>Documentation</div>
                        </a>
                    </li> --}}
                </ul>
            </aside>
            <!-- Layout page -->
            <div class="layout-page">
                <!-- BEGIN: Navbar-->
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <!--  Brand demo (display only for navbar-full and hide on below xl) -->
                    <!-- ! Not required for layout-without-menu -->
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none ">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                                    aria-label="Search...">
                            </div>
                        </div>
                        <!-- /Search -->

                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            <!-- Authentication Links -->
                            @guest
                            @auth
                            @if (auth()->user()->type == 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif
                            @if (auth()->user()->type == 'user')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif
                            @endauth
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="{{ asset('images/users/' . Auth::user()->userimage) }}" width="50px"
                                        height="50px" class="rounded-circle" alt="">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if (auth()->user()->type == 'admin')
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a>
                                    @elseif(auth()->user()->type == 'seller')
                                    <a class="dropdown-item" href="{{ route('seller.index') }}">{{ __('Dashboard')
                                        }}</a>
                                    @else
                                    <a class="dropdown-item" href="{{ route('buyer.index') }}">{{ __('Dashboard') }}</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                        {{-- <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                                <a class="github-button"
                                    href="https://github.com/themeselection/sneat-html-laravel-admin-template-free"
                                    data-icon="octicon-star" data-size="large" data-show-count="true"
                                    aria-label="Star themeselection/sneat-html-laravel-admin-template-free on GitHub">Star</a>
                            </li>
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('backend/img/avatars/1.png') }}" alt
                        class="w-px-40 h-auto rounded-circle">
                    </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <img src="assets/img/avatars/1.png" alt
                                                class="w-px-40 h-auto rounded-circle">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-semibold d-block">John Doe</span>
                                        <small class="text-muted">Admin</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);">
                                <i class="bx bx-user me-2"></i>
                                <span class="align-middle">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);">
                                <i class='bx bx-cog me-2'></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);">
                                <span class="d-flex align-items-center align-middle">
                                    <i class="flex-shrink-0 bx bx-credit-card me-2 pe-1"></i>
                                    <span class="flex-grow-1 align-middle">Billing</span>
                                    <span
                                        class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);">
                                <i class='bx bx-power-off me-2'></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                        </li>
                    </ul>
                    </li>
                    <!--/ User -->
                    </ul> --}}
            </div>
            </nav>
            <!-- / Navbar -->
            <!-- END: Navbar-->
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    {{-- <div id="app"> --}}
                    <main class="py-4">
                        @yield('dashboard_content')
                    </main>
                </div>
                <!-- Footer -->
                <!-- Footer-->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            ©
                            <script>
                                document.write(new Date().getFullYear())

                            </script>
                            , made with ❤️ by <a href="https://themeselection.com/" target="_blank"
                                class="footer-link fw-bolder">ThemeSelection</a>
                        </div>
                        <div>
                            <a href="https://themeselection.com/license/" class="footer-link me-4"
                                target="_blank">License</a>
                            <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More
                                Themes</a>
                            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/laravel-introduction.html"
                                target="_blank" class="footer-link me-4">Documentation</a>
                            <a href="https://github.com/themeselection/sneat-html-laravel-admin-template-free/issues"
                                target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
                        </div>
                    </div>
                </footer>
                <!--/ Footer-->
                <!-- / Footer -->
                <div class="content-backdrop fade"></div>
            </div>
            <!--/ Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
    <!--/ Layout Content -->
    </div>
    </div>
    <!-- Include Scripts -->
    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>


    {{-- <script src="{{ asset('backend//vendor/libs/jquery/jquery0bfa.js?id=c9eab148c98f81221c99ba6da84fdbe2') }}">
    </script> --}}
    <script src="{{ asset('backend//vendor/libs/popper/popper3939.js?id=3b2f93fa0eb2f0ed310a789319de72fc') }}"></script>
    <script src="{{ asset('backend//vendor/js/bootstrap1425.js?id=f4406bcd0acdeffbdcca24c2e1033ae6') }}"></script>
    <script
        src="{{ asset('backend//vendor/libs/perfect-scrollbar/perfect-scrollbar7d0f.js?id=2f948c841c6aca9e3a18f6ef2c65b140') }}">
    </script>
    <script src="{{ asset('backend//vendor/js/menu68ea.js?id=3421096250c82e0d3760f641a4d2dba0') }}"></script>
    <script src="{{ asset('backend//vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('backend//js/main84ce.js?id=0c91cceb5195b308a36d5ac021b16464') }}"></script>
    <!-- END: Theme JS-->
    <!-- Pricing Modal JS-->
    <!-- END: Pricing Modal JS-->
    <!-- BEGIN: Page JS-->
    <script src="{{ asset('backend//js/dashboards-analytics.js') }}"></script>
    <!-- END: Page JS-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <!-- Appear JavaScript -->
    <script src="{{ asset('backend/js/jquery.appear.js') }}"></script>
    <!-- Countdown JavaScript -->
    <script src="{{ asset('backend/js/countdown.min.js') }}"></script>
    <!-- Counterup JavaScript -->
    <script src="{{ asset('backend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.counterup.min.js') }}"></script>
    <!-- Wow JavaScript -->
    <script src="{{ asset('backend/js/wow.min.js') }}"></script>
    <!-- Apexcharts JavaScript -->
    <script src="{{ asset('backend/js/apexcharts.js') }}"></script>
    <!-- Slick JavaScript -->
    <script src="{{ asset('backend/js/slick.min.js') }}"></script>
    <!-- Select2JavaScript -->
    <script src="{{ asset('backend/js/select2.min.js') }}"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="{{ asset('backend/js/owl.carousel.min.js') }}"></script>
    <!-- MagnificPopup JavaScript -->
    <script src="{{ asset('backend/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="{{ asset('backend/js/smooth-scrollbar.js') }}"></script>
    <!-- lottie JavaScript -->
    <script src="{{ asset('backend/js/lottie.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('backend/js/chart-custom.js') }}"></script>
    <!-- Custom J{{ asset('backend/') }}avaScript -->
    <script src="{{ asset('backend/js/custom.js') }}"></script>
    <script src="{{asset('slick-1.8.1/slick-1.8.1/slick/slick.min.js')}}"></script>
    <!-- third party js -->
    <script src="{{asset('backend/vendor/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/vendor/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('backend/vendor/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('backend/vendor/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}">
    </script>
    <script src="{{asset('backend/vendor/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('backend/vendor/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{asset('backend/vendor/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('backend/vendor/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('backend/vendor/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('backend/vendor/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('backend/vendor/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
    <script src="{{asset('backend/vendor/libs/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('backend/vendor/libs/pdfmake/build/vfs_fonts.js')}}"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="{{asset('backend/js/datatables.init.js')}}"></script>
    <script>
        $(document).ready(function () {
            $(".Modern-Slider").slick({
                autoplay: false,
                // autoplaySpeed:10000,
                speed: 600,
                slidesToShow: 1,
                slidesToScroll: 1,
                pauseOnHover: false,
                dots: false,
                pauseOnDotsHover: false,
                // cssEase:'linear',
                // fade:true,
                draggable: false,
                prevArrow: '<button class="PrevArrow"></button>',
                nextArrow: '<button class="NextArrow"></button>',
            });
        })
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $('.Modern-Slider').slick('setPosition');
        })
        $("#filter_users").change(function () {
            //this is the #state dom element
            var filter_users = $(this).val();
            console.log(filter_users);


            // parameter 1 : url
            // parameter 2: post data
            //parameter 3: callback function
            $.get("{{route('user.index')}}", {
                    filter_users: filter_users
                },
                function (htmlCode) { //htmlCode is the code retured from your controller
                    $("#user_table_body ").html(htmlCode);
                });
        });
        //    $(document).ready(function() {
        //         $('#filter_users').on('change', function() {
        //             var filter = $(this).val();
        //             console.log(filter);
        //           getFilterData(filter);
        //         });
        //     });
        //     function getFilterData(value) {

        //       $.ajax({
        //         type: "GET",
        //         data: {
        //          filter_users: value,
        //         },
        //         url: "{{route('user.index')}}",
        //         success:function(data) {
        //             console.log(data)
        //           $("#user_table_body").html(data);
        //         }
        //       });
        //     }
        //     

    </script>
</body>
<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jun 2022 19:56:03 GMT -->

</html>
