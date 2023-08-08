<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Web đặt đơn</title>
<!-- plugins:css -->
<link rel="stylesheet" href="{{ asset('viewsCustom/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('viewsCustom/assets/vendors/css/vendor.bundle.base.css') }}">
<link rel="stylesheet" href="{{ asset('viewsCustom/assets/css/style.css') }}">
<link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">

<style>
    .ads-content {
        display: flex;
    }

    /* width */
    ::-webkit-scrollbar {
        width: 5px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        border-radius: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #3333;
        border-radius: 10px;
        height: 5px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        opacity: 0.8;
    }

    /* @media (min-width:1500px) {
        #sidebar-left-child{
            max-width:11.01%;
        }
    } */
    @media (max-width: 991px) {
        #sidebar-left-child {
            position: relative !important;
            width: 100% !important;
            margin-bottom: 10px !important;
            height: auto !important;
            overflow-x: hidden;
            max-width: 100% !important;
        }

        .navbar .navbar-menu-wrapper {
            width: auto;
            padding-left: 15px;
            padding-right: 15px;
            display: flex;
        }

        .navbar-brand-wrapper {
            margin-left: 10px;
        }

        .offcanvas-body {
            margin-left: 0 !important;
            padding-left: 0 !important;
        }

        .card-list {
            grid-template-columns: 50% 50% !important;
            padding: 0 !important;
        }

        .card-list span {
            font-size: 20px;
        }
    }
</style>

<head>
    <x-layout.head/>
</head>


<body>

<header>
    <x-layout.header/>
</header>

<main>
    <div class="container pt-3">
        <div class="row">
            <div class="col-12 col-md-3 sidebar-left-right d-mobi-none position-relative" id="sidebar-left"
                 style="background: #fff;padding-top:65px;padding-right:2px;">
                <div style="position: fixed;overflow-y:scroll;height:95%;width:16.88%;max-width:243px;" @class([
                            'd-none' => Route::is('login.index', 'register.index')
                        ]) id="sidebar-left-child">
                    <x-sidebar_home_left/>
                </div>
            </div>
            <div class="col-12 col-md-9 main-sec-content" style="margin-top:70px;" id="content">

                <div class="row" style="width: 100%;margin-left: 16px;margin-top:11px;" id="row">
                    <div class="col-12 col-md-9 main-content" style="width:71.72%;display:flex; ">

                        <div style="width:98.11%;"> @yield('content')</div>

                    </div>
                    <div class="col-12 col-md-3 sidebar-left-right d-mobi-none " id="sidebarRight"
                         style="width:28.28% !important;border-radius: 10px;background: #fff;height: 1000px;">
                        <div @class([
                                    'd-none' => Route::is('login.index', 'register.index'),
                                    'sidebar-right-child' => !Route::is('homepage')
                                ])>
                            <x-sidebar_home_right/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="footer fixed-bottom">
    @include('components.layout.footer')
</footer>

<x-layout.script/>
<x-alert/>
</body>

</html>
