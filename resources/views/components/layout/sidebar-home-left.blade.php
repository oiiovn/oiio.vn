@if (auth()->guard('web')->check())
    <x-card>
        {{--Ví tiền--}}
        <x-slot name="header">
            <div class="text-center">
                <li style="border-bottom: 1px solid #CBCBC6;padding-bottom:10px;" class="nav-link">
                    <a class="menu-title-wallet" href="{{ route('transaction.deposit.create') }}">
                        <img style="margin-right:5px;" src="{{ asset('viewsCustom/assets/images/wallet.svg') }}" alt="">
                        {{format_price(auth()->user()->wallet()->value('amount'))}}
                    </a>
                </li>
            </div>
        </x-slot>
        {{--Nút nạp tiền và rút tiền mobile--}}
        <div class="btn-money"style="display:none;">
            <button style="background:#fff;padding:8px 19px;border-radius:5px;border:1px solid #269300;color:#269300;font-family:'Lato'sans-serif;font-size: 12px;font-style: normal;font-weight: 500;line-height: normal;">Nạp tiền</button>
            <button style="background:#fff;padding:8px 19px;border-radius:5px;border:1px solid #DE8C49;color:#DE8C49;font-family:'Lato'sans-serif;font-size: 12px;font-style: normal;font-weight: 500;line-height: normal;">Rút tiền</button>
        </div>
        {{--Dịch vụ--}}
        <x-card>
            <x-slot name="header">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="true"
                   aria-controls="ui-basic">
                    <img src="{{ asset('viewsCustom/assets/images/ic1.svg') }}" alt="">
                    <span class="menu-title" style="margin-left:10px;"> Dịch vụ</span>
                    <i style="margin-left:auto;font-size:20px;" class="ri-arrow-down-s-line"></i>
                </a>
            </x-slot>

            <x-slot name="footer">
                <div class="collapse show" id="ui-basic">
                    <li class="nav-item" href="#">Lên Shopee Mall</li>
                    <li class="nav-item" href="#">Lên Lazada Mall</li>
                    <li class="nav-item" href="#">Mở thông tin khách hàng Shopee</li>
                    <li class="nav-item" href="#">Setup gian hàng chuẩn SEO</li>
                </div>
            </x-slot>
        </x-card>

        {{--Quản lý shop (nếu tài khoản đã tạo shop)--}}
        @if(auth()->user()->isShop())
            <x-card>
                <x-slot name="header">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic1" aria-expanded="true"
                       aria-controls="ui-basic1">
                        <img src="{{ asset('viewsCustom/assets/images/ic2.svg') }}" alt="">
                        <span class="menu-title" style="margin-left:10px;">
                            {{ __('Quản lý shop') }}
                        </span>
                        <i style="margin-left:auto;font-size:20px;" class="ri-arrow-down-s-line"></i>
                    </a>
                </x-slot>
                <x-slot name="footer">
                    <div class="collapse show" id="ui-basic1">
                        <x-link :href="route('user.contact.index')">
                            <li class="nav-item">
                                {{ __('Thông tin shop') }}
                            </li>
                        </x-link>
                        <x-link :href="route('job.manager.create')">
                            <li class="nav-item">
                                {{ __('Tạo đơn') }}
                            </li>
                        </x-link>
                        @foreach ($job_status['shop'] as $key => $item)
                            <x-link :href="route('job.manager.index', $key)">
                                <div @class([ " "=> !$loop->last ])>
                                    <li class="nav-item d-flex align-items-center gap-1">
                                        <span>{{ $item['text'] }}</span>
                                        @if($item['number'])
                                            <span class="job-status-number badge rounded-pill bg-danger">
                                                {{ $item['number'] }}
                                            </span>
                                        @endif
                                    </li>
                                </div>
                            </x-link>
                        @endforeach
                    </div>
                </x-slot>
            </x-card>
        @endif

        {{--Quản lý đặt đơn--}}
        <x-card>
            <x-slot name="header">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="true"
                   aria-controls="ui-basic2">
                    <img src="{{ asset('viewsCustom/assets/images/ic8.svg') }}" alt="">
                    <span class="menu-title" style="margin-left:10px;">
                        {{ __('Quản lý đặt đơn') }}
                    </span>
                    <i style="margin-left:auto;font-size:20px;" class="ri-arrow-down-s-line"></i>
                </a>
            </x-slot>
            <x-slot name="footer">
                <div class="collapse show" id="ui-basic2">
                    @foreach ($job_status['member'] as $key => $item)
                        <x-link class="" :href="route('job.received.index', $key)">
                            <div @class([ " "=> !$loop->last ])>
                                <div class="nav-item d-flex align-items-center gap-1">
                                    <span>{{ $item['text'] }}</span>
                                    @if($item['number'])
                                        <span class="job-status-number badge rounded-pill bg-danger">
                                            {{ $item['number'] }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </x-link>
                    @endforeach
                </div>
            </x-slot>
        </x-card>

        {{--Trợ giúp--}}
        <x-card>
            <x-slot name="header">
                <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false"
                   aria-controls="ui-basic3">
                    <a href="https://help.oiio.vn" class="help">
                        <img src="{{ asset('viewsCustom/assets/images/ic5.svg') }}" alt="">
                        <span class="menu-title" style="margin-left:10px;">Trợ giúp</span></a>
                    <i style="margin-left:auto;font-size:20px;" class=""></i>
                </a>
            </x-slot>
            <x-slot name="footer">
                <div class="collapse" id="ui-basic3">
                    <ul class="nav flex-column sub-menu">
                    </ul>
                </div>
            </x-slot>
        </x-card>

        <x-card style="width: 100%;height: 100px;background-color:#FFF;">
            <div style="height: 68px;"></div>
        </x-card>
    </x-card>
@else
    <x-link class="btn btn-orange w-100 mb-3" href="{{ route('login.index') }}">Đăng nhập</x-link>
    <x-link class="btn btn-orange w-100 mb-3" href="{{ route('register.index') }}">Đăng ký</x-link>
@endif
    <x-card>
        <x-slot name="header">
            <div class="nav">
                <ul class="nav-r">
                    <li class="nav-item">
                        <span style="color: #000;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">
                            <a class="" href="{{ route('news.index')}}">{{ ('Tin tức') }}</a>
                        </span>
                    </li>
                </ul>
            </div>
        </x-slot>
        <x-slot name="footer">
            <div class="nav">
                @foreach($news as $value)
                    @if($loop->iteration <= 2)
                        <a href="{{ route('news.detail', $value->slug) }}">
                            <div @class([ ""=> !$loop->last ])>
                                <div style="display:grid;grid-template-columns:30% 65%;margin-bottom:20px;">
                                    <div class="img-news">
                                        <img src="{{ asset($value->getavatar) }}"/>
                                    </div>
                                    <div class="content-news">
                                        <p style="margin-bottom: 20px;">{{ $value->title }}</p>
                                        <div style="display:flex;justify-content:space-between;" class="btn-date-news">
                                            <span style="color: #A6A4A4;font-size: 10px;font-style: normal;font-weight: 500;line-height: normal;">1 giờ trước</span>
                                            <a class="text-orange" href="#" style="border-bottom: 1px solid #E0793F;">{{ __('Xem thêm') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endif
                @endforeach
            </div>

            <div class="nav-arrow">
                <a style="text-align: center;margin:10px 50% 10px 50%" href="#">
                    <img src="{{ asset('viewsCustom/assets/images/down2.png') }}" alt=""></a>
            </div>
        </x-slot>
    </x-card>

<!-- Đã sửa -->
<style>
   @media (max-width:768px) {
    .btn-money{
        display: flex !important;
        gap:10px;
        margin-left:8%;
        margin-bottom:15px;
    }
    .card{
        width: 100% !important;
    }

   }
    * {
        list-style-type: none !important;
    }

    .bg-orange {
        background: #FFF;
    }
    .card .card-body{
        padding-top:15px !important;
        padding-bottom:15px !important;
    }
    .text-white,
    .navbar.navbar-primary .navbar-menu-wrapper .nav-profile-text p,
    .navbar.navbar-secondary .navbar-menu-wrapper .nav-profile-text p,
    .navbar.navbar-success .navbar-menu-wrapper .nav-profile-text p,
    .navbar.navbar-info .navbar-menu-wrapper .nav-profile-text p,
    .navbar.navbar-warning .navbar-menu-wrapper .nav-profile-text p,
    .navbar.navbar-danger .navbar-menu-wrapper .nav-profile-text p,
    .navbar.navbar-light .navbar-menu-wrapper .nav-profile-text p,
    .navbar.navbar-dark .navbar-menu-wrapper .nav-profile-text p {
        --bs-text-opacity: 1;
        color: #454545 !important;
    }

    ul li,
    ol li,
    dl li {
        line-height: 1.8;
        display: flex;
    }

    .nav-link {
        color: #454545;
        display: flex;
        align-items: center;
    }

    .nav-link:hover {
        color: #E0793F;
    }

    .btn-orange:hover {
        background-color: #FFF;
    }
    .collapse{
        transition: all ease 1s !important;
    }
    #ui-basic .nav-item {
        padding: 10px 0;
        margin-left: 5px;
        font-size: 13px;
    }

    #ui-basic .nav-item:hover {
        color: #E0793F;
    }

    #ui-basic1 .nav-item {
        padding: 10px 0;
        margin-left: 5px;
        font-size: 13px;
    }

    #ui-basic1 .nav-item:hover {
        color: #E0793F;
    }

    #ui-basic2 .nav-item {
        padding: 10px 0;
        margin-left: 5px;
        font-size: 13px;
    }

    #ui-basic2 .nav-item:hover {
        color: #E0793F;
    }

    #ui-basic4 .nav-item {
        padding: 10px 0;
        margin-left: 5px;
        font-size: 13px;
    }

    #ui-basic4 .nav-item:hover {
        color: #E0793F;
    }

    .card.border-0 {
        margin-bottom: 1rem !important;
    }

    .help:hover {
        color: #E0793F;
    }

    .menu-title-wallet {
        margin-right: auto;
        letter-spacing: 1.4px;
    }

    .menu-title-wallet:hover {
        color: #E0793F;
    }

    /* Đã sửa */
    .collapse {
        padding: 10px 22px;
        cursor: pointer;
    }

    .collapse .nav-item {
        border-bottom: 1px solid #3333;
    }

    .menu-title {
        font-size: 14px;
    }
</style>
