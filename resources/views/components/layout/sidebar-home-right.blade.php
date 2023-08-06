{{--<x-card>--}}
{{--    <x-slot name="header">--}}
{{--        <span class="text-white"><i class="fa-solid fa-magnifying-glass"></i> Tìm kiêm</span>--}}
{{--    </x-slot>--}}
{{--    <x-slot name="footer">--}}
{{--        <a href="{{ route('info.search_shop') }}">--}}
{{--            <div class="card-option border-dotted">--}}
{{--                Tìm kiếm cửa hàng <i class="fa-solid fa-right float-end"></i>--}}
{{--            </div>--}}
{{--        </a>--}}
{{--        <a href="{{ route('info.search_user') }}">--}}
{{--            <div class="card-option">--}}
{{--                Tìm kiếm cộng tác viên <i class="fa-solid fa-right float-end"></i>--}}
{{--            </div>--}}
{{--        </a>--}}
{{--    </x-slot>--}}
{{--</x-card>--}}
{{--<x-card>--}}
{{--    <x-slot name="header">--}}
{{--        <span class="text-white fs-14"><i class="fa-regular fa-box-open"></i> {{ __('Shop có nhiều đơn hàng') }}</span>--}}
{{--    </x-slot>--}}
{{--    <div class="card-body p-0">--}}
{{--        @foreach($users as $user)--}}
{{--    <a href="{{ route('info.shop_detail', $user->slug) }}">--}}
{{--            <div @class([--}}
{{--                "p-2",--}}
{{--                "border-dotted" => !$loop->last--}}
{{--            ])>--}}
{{--                <p class="m-0 text-orange">--}}
{{--                    <i class="fa-regular fa-{{ $loop->iteration }}"></i> {{ $user->getNameShop() }}--}}
{{--    @if($user->isReputable())--}}
{{--        <i class="fa-regular fa-circle-check text-primary"></i>--}}


{{--    @endif--}}
{{--    </p>--}}
{{--</div>--}}
{{--</a>--}}


{{--@endforeach--}}
{{--</div>--}}
{{--</x-card>--}}
{{--@if (auth()->check())--}}
{{--    <x-card>--}}
{{--        <x-slot name="header">--}}
{{--            <span class="text-white fs-14"><i class="fa-regular fa-box-open"></i> {{ __('Đã nhận gần đây') }}</span>--}}
{{--    </x-slot>--}}
{{--    <div class="card-body">--}}
{{--        @foreach ($jobs as $job)--}}
{{--        <x-link :href="route('job.show', $job->slug)">--}}
{{--            <div class="order-list mb-2">--}}
{{--                <p class="m-0 fw-bold">{{ __('Đơn gần đây') }}</p>--}}
{{--                    <p class="m-0 text-orange"> {{ __('Xem chi tiết') }} <i
    class="fa-solid fa-right float-end"></i></p>--}}
{{--                </div>--}}
{{--            </x-link>--}}


{{--    @endforeach--}}
{{--    </div>--}}
{{--</x-card>--}}
{{--@endif--}}

<x-card>
    {{--Cộng đồng đặt đơn--}}
    <x-slot name="header">
        <div class="nav" style="border-bottom: 1px solid #3333;">
            <ul class="nav-r" style="width:100%;">
                <x-banner />
            </ul>
        </div>
    </x-slot>

    {{--Shop có nhiều đơn hàng--}}
    <x-card>
        <x-slot name="header">
            <div class="nav">
                <ul class="nav-r">
                    <li class="nav-item">
                        <span
                            style="color: #000;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">{{ ('Shop có nhiều đơn hàng') }}</span>
                    </li>
                </ul>
            </div>
        </x-slot>

        {{--Render hình ảnh và tên shop--}}
        <div class="nav text-center"
            style="width:100%;height: 200px;flex-direction: column;justify-content: flex-start;align-items: center;gap: 10px;display: inline-flex;">
            @foreach($users as $user)
<<<<<<< HEAD

            <a href="{{ route('info.shop_detail', $user->slug) }}">
                {{--Render hình ảnh--}}
                {{--Đọc rồi xoá nha: Do ở lúc đẩy hình ảnh lên bên mevivu có thể cấu hình sai ấy nên là lúc đưa lên ở localhost nó kh lên hình nhưng thật sự là có hình rồi nha--}}
                <img style="width: 45px; height: 45px; border-radius: 9999px; border: 0.50px black solid"
                    src="{{ $user->avatar }}" alt="" />
                <div @class([ ""=> !$loop->last ])>
                    <p>
                        {{ $user->getNameShop() }}
                        @if($user->isReputable())
                        <img style="margin-left:2.8px;width:15px ;height:15px;"
                            src="{{ asset('viewsCustom/assets/images/tick.svg') }}" />
                        @endif
                    </p>
                </div>
            </a>
=======
                <a href="{{ route('info.shop_detail', $user->slug) }}">
                    {{--Render hình ảnh--}}
                    <img style="width: 45px; height: 45px; border-radius: 9999px; border: 0.50px black solid" src="{{ $user->avatar }}" alt=""/>
                    <div @class([ ""=> !$loop->last ])>
                        <p>
                            {{ $user->getNameShop() }}
                            @if($user->isReputable())
                                <i class="fa-regular fa-circle-check text-primary"></i>
                            @endif
                        </p>
                    </div>
                </a>
>>>>>>> aa1b47871e2b7958ad6e4ee988b994e8fb5a7740
            @endforeach
        </div>
    </x-card>

    {{--Sidebar Tin Tức--}}
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

        {{--Thông tin tin tức--}}
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
                    <img src="{{ asset('viewsCustom/assets/images/down2.png') }}" alt="" />
                </a>
            </div>
        </x-slot>
    </x-card>
</x-card>

<style>
* {
    list-style: none;
}

ol,
ul {
    padding-left: 0 !important;
}

.nav a {
    width: 100px;
}

.nav .nav-item .nav-link {
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    white-space: nowrap;
    padding: 1.125rem 0 1.125rem 0;
    color: #3e4b5b;
    -webkit-transition-duration: 0.45s;
    transition-duration: 0.45s;
    transition-property: color;
    -webkit-transition-property: color;
}

.card-body {
    background: #FFF;
}

.nav a:hover {
    color: #E0793F !important;
}

</style>