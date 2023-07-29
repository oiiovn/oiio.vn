<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Web đặt đơn</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('viewsCustom/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('viewsCustom/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('viewsCustom/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
<head>
    <x-layout.head />
</head>
<style>
     .ads-content{
        display:flex;
    }
</style>
<body>
    <header>
        <x-layout.header />
    </header>
    <main>
        <div class="container pt-3">
            <div class="row">
                <div class="col-12 col-md-3 sidebar-left-right d-mobi-none position-relative" id="sidebar-left" style="">
                    <div @class([
                            'd-none' => Route::is('login.index', 'register.index')
                        ]) id="sidebar-left-child">
                        <x-sidebar_home_left />
                    </div>
                </div>
                <div class="col-12 col-md-9 main-sec-content">

                    <div class="row"style="width: 100%;margin-left: 16px !important;">
                       
                        <div class="col-12 col-md-9 main-content" >                          
                                <div style=""> @yield('content')</div>                                             
                        </div>
                        
                        <div class="col-12 col-md-3 sidebar-left-right d-mobi-none " id="sidebarRight" style="width:28.28% !important;">
                            <div @class([
                                    'd-none' => Route::is('login.index', 'register.index'),
                                    'sidebar-right-child' => !Route::is('homepage')
                                ])>
                                <x-sidebar_home_right />
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
    <x-layout.script />
    <x-alert />
</body>

</html>