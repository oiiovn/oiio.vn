<nav class="navbar navbar-expand-lg"
    style="width: 100%; height: 80px; border-bottom: 1px solid rgba(233, 233, 233, 0.95);">
    <!-- Đã sửa -->
    <div class="container" style="width:100%;">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand me-2" href="{{ route('homepage') }}" style="width: 100%;margin-right: 0 !important;">
                <img src="{{ asset('icon/logoHeader.png') }}"
                    style="width: auto; height: 50px; justify-content: center; align-items: center; flex-shrink: 0;" />
            </a>
        </div>
        <!-- {{--        <div class="d-flex align-items-center gap-2">--}}
{{--            <x-link class="fs-14 d-flex align-items-center gap-1 text-orange p-2" :href="'tel:'.$settings['hotline']">--}}
{{--                <i class="fa-duotone fa-phone"></i>--}}
{{--                <span class="d-none d-md-block">{{ $settings['hotline'] }}</span>--}}
{{--            </x-link>--}}
{{--            <x-link class="d-flex align-items-center gap-1 fs-14 text-orange ms-2 p-2" :href="$settings['admin_facebook_link']" target="_blank">--}}
{{--                <i class="fa-brands fa-facebook"></i>--}}
{{--                <span class="d-none d-md-block">{{ $settings['admin_facebook_name'] }}</span>--}}
{{--            </x-link>--}}
{{--        </div>--}} -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown" style="width: 82.01%;">
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between"
                style="margin-left: 16px;list-style:none;width: 100%;">
                @if (auth()->guard('web')->check())
                {{-- Tìm kiếm --}}
                <div class="search-field-s d-none d-md-block" style="width: 51.01%;margin-left:22px;">
                    <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group-s">
                            <input type="text" class="form-control-s" placeholder="Tìm kiếm">
                            <div style="position: relative;border-left: 1px solid #3333;align-items: center;justify-content: center;display: flex;width: 20%;margin-left: auto;"
                                class="input-group-prepend-s bg-transparent">
                                <img src="{{ asset('icon/search.svg') }}" alt="logo">
                            </div>
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav navbar-nav-right" style="margin-right:0;width: 28.99%;">
                    {{-- Thông báo --}}
                    <li class="nav-item dropdown" style="border: none;width: 30%;display: flex;">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-bs-toggle="dropdown">
                            <img src="{{ asset('icon/bell.svg') }}" style="display: flex;
                                                    height: 25px;
                                                    padding: 1px;
                                                    justify-content: center;
                                                    align-items: center;
                                                    flex-shrink: 0;">
                            <span class="count-symbol bg-danger"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown" style="width: fit-content;">
                            <!-- ãã sửa-->
                            <h6 class="p-3 mb-0">Notifications</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="mdi mdi-calendar"></i>
                                    </div>
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="mdi mdi-settings"></i>
                                    </div>
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="mdi mdi-link-variant"></i>
                                    </div>
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                        </div>
                    </li>
                    {{-- Thông tin người dùng --}}
                    <li class="nav-item nav-profile dropdown" style="border: none;width: 70%;">
                        @if (auth()->check())

                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false" style="width: fit-content;">
                            @if (auth()->check())
                            <div class="nav-profile-img">
                                <img src="{{asset(auth()->user()->getAvatar())}}" width="35px" height="35px"
                                    style="display: flex;align-items: flex-end;gap: 10px;" alt="image">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black">{{ auth()->user()->username }}</p>
                            </div>
                            @endif
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                            <a id="item-menu" class="dropdown-item" href="{{ route('user.index') }}"> Thông tin tài
                                khoản </a>
                            <div class="dropdown-divider"></div>
                            <a id="item-menu" class="dropdown-item" href="{{ route('user.bank.index') }}"> Tài khoản
                                ngân hàng </a>
                            <div class="dropdown-divider"></div>
                            @if(auth()->user()->isMember())
                            <a id="item-menu" class="dropdown-item" href="{{ route('user.create_shop') }}">Tạo shop
                                bán hàng</a>
                            <div class="dropdown-divider"></div>
                            @endif
                            @if(auth()->user()->isShop())
                            <a id="item-menu" class="dropdown-item" href="{{ route('user.update_shop') }}">Sửa tên cửa
                                hàng</a>
                            <div class="dropdown-divider"></div>
                            @endif
                            <button type="button" id="item-menu" class="dropdown-item " data-toggle="modal"
                                data-target="#exampleModalCenterdmk">Đổi mật khẩu </button>
                            <div class="dropdown-divider"></div>
                            <x-form class="" :action="route('logout')" type="post">
                                <button id="item-menu" type="submit" class="dropdown-item border-0"
                                    style="background: transparent !important">{{ __('Đăng xuất') }}
                                    <img style="margin-left:auto;"
                                        src="{{ asset('viewsCustom/assets/images/ic4.svg') }}" alt="">
                                </button>
                            </x-form>
                        </div>

                    </li>

                    @endif
                </ul>
            </div>
            <!-- Side bar on mobile devices -->
            @include('components.layout.nav-mobile')
            <!-- End Side bar on mobile devices -->

        </div>
        @else
        <div class="nav-item-grid" style="display:flex; margin-left: auto;">
            <li class="nav-item" style="border:none;">
                <a class="nav-link active" aria-current="page" href="{{ route('login.index') }}">Đăng nhập</a>
            </li>
            <li class="nav-item" style="border:none;margin-left:16px;">
                <a class="nav-link" href="{{ route('register.index') }}">Đăng ký</a>
            </li>
        </div>
        @endif

    </div>
</nav>
<style>
.rounded-circle {
    border-radius: 50% !important;
    border: 2px solid #ed6237;
}

.navbar {
    transition: none !important;
}

.navbar .navbar-brand-wrapper {
    width: 16.88%;
    height: 70px;
}

.rounded-circle {
    border-radius: 50% !important;
    border: 2px solid #ed6237;
}

.navbar .navbar-brand-wrapper {
    width: 16.88%;
    height: 70px;
}

.navbar .navbar-brand-wrapper .navbar-brand {
    margin-right: 0;
    padding: 0;
    width: 100%;
}

@media (min-width: 992px) {
    .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
        margin-left: 0;
    }
}

/* Dropdowns */
.dropdown .dropdown-toggle:after {
    border-top: 0;
    border-right: 0;
    border-left: 0;
    border-bottom: 0;
    font: normal normal normal 24px/1 "Material Design Icons";
    content: "\f140";
    width: auto;
    height: auto;
    vertical-align: baseline;
    font-size: .75rem;
}

.dropdown .dropdown-menu {
    margin-top: .75rem;
    font-size: 0.875rem;
    -webkit-box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
    box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
}

.dropdown .dropdown-menu .dropdown-item {
    font-size: 1rem;
    padding: .25rem 1.5rem;
}

.dropdown .dropdown-menu .dropdown-item:active {
    background: initial;
}

.dropdown .dropdown-menu .dropdown-item:hover {
    background-color: #f8f9fa;
    color: #ffffff;
}

.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1rem;
    clear: both;
    font-weight: 400;
    color: #343a40;
    text-align: inherit;
    text-decoration: none;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}

#item-menu:hover,
#item-menu:focus {
    color: rgba(251, 104, 21, 0.90);
    background-color: #ffffff;

}

.dropdown-item.active,
.dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #0d6efd;
}

.dropdown-item.disabled,
.dropdown-item:disabled {
    color: #adb5bd;
    pointer-events: none;
    background-color: transparent;
}

.dropdown-item .dropdown-menu.show {
    display: block;
}

.dropdown-header {
    display: block;
    padding: 0.5rem 1rem;
    margin-bottom: 0;
    font-size: 0.875rem;
    color: #343a40;
    white-space: nowrap;
}

.dropdown-item-text {
    display: block;
    padding: 0.25rem 1rem;
    color: #343a40;
}

.preview-item-content h6 {
    color: #454545;
    cursor: pointer;
}

.dropdown-menu-dark {
    color: #dee2e6;
    background-color: #343a40;
    border-color: rgba(0, 0, 0, 0.15);
}

.dropdown-item {
    color: #454545;
}

.dropdown-item:hover,
.dropdown-menu-dark .dropdown-item:focus {
    background-color: rgba(255, 255, 255, 0.15);
}

.dropdown-item.active,
.dropdown-menu-dark .dropdown-item:active {
    background-color: #0d6efd;
}

.dropdown-item.disabled,
.dropdown-menu-dark .dropdown-item:disabled {
    color: #adb5bd;
}

.dropdown-divider {
    border-color: rgba(0, 0, 0, 0.15);
}

.dropdown-item-text {
    color: #454545;
}

.dropdown-header {
    color: #adb5bd;
}

.nav-item.nav-settings {
    padding-left: 20px;
    padding-right: 5px;
}

.nav-item.nav-settings .nav-link {
    margin-right: 0;
    margin-left: 0;
}

.nav-item.nav-profile .nav-link .nav-profile-img {
    position: relative;
    width: 32px;
    height: 32px;
}

.nav-item.nav-profile .nav-link .nav-profile-img img {
    width: 32px;
    height: 32px;
    border-radius: 100%;
}

.nav-item.nav-profile .nav-link .nav-profile-img .availability-status {
    position: absolute;
    width: 10px;
    height: 10px;
    border-radius: 100%;
    border: 2px solid #ffffff;
    bottom: 5px;
    right: -5px;
}

.nav-item.nav-profile .nav-link .nav-profile-img .availability-status.online {
    background: #1bcfb4;
}

.nav-item.nav-profile .nav-link .nav-profile-img .availability-status.offline {
    background: #fe7c96;
}

.nav-item.nav-profile .nav-link .nav-profile-img .availability-status.busy {
    background: #fed713;
}

.nav-item.nav-profile .nav-link .nav-profile-text {
    margin-left: 1.25rem;
}

.nav-item.nav-profile .nav-link .nav-profile-text {
    margin-left: 0;
}

.nav-item.nav-profile .nav-link .nav-profile-text p {
    line-height: 1;
}

@media (max-width: 767px) {
    .nav-item.nav-profile .nav-link .nav-profile-text {
        display: none;
    }
}

.nav-item.nav-profile .nav-link.dropdown-toggle:after {
    line-height: 2;
}

.dropdown-menu {
    position: absolute;
    display: none;
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ebedf2;
    border-radius: 0.25rem;
}

.dropdown-menu[data-bs-popper] {
    top: 100%;
    left: 0;
    margin-top: 0.125rem;
}

.dropdown-menu-start {
    --bs-position: start;
}

.dropdown-menu-start[data-bs-popper] {
    right: auto;
    left: 0;
}

.dropdown-menu-end {
    --bs-position: end;
}

.dropdown-menu-end[data-bs-popper] {
    right: 0;
    left: auto;
}

@media (min-width: 576px) {
    .dropdown-menu-sm-start {
        --bs-position: start;
    }

    .dropdown-menu-sm-start[data-bs-popper] {
        right: auto;
        left: 0;
    }

    .dropdown-menu-sm-end {
        --bs-position: end;
    }

    .dropdown-menu-sm-end[data-bs-popper] {
        right: 0;
        left: auto;
    }
}

@media (min-width: 768px) {
    .dropdown-menu-md-start {
        --bs-position: start;
    }

    .dropdown-menu-md-start[data-bs-popper] {
        right: auto;
        left: 0;
    }

    .dropdown-menu-md-end {
        --bs-position: end;
    }

    .dropdown-menu-md-end[data-bs-popper] {
        right: 0;
        left: auto;
    }
}

@media (min-width: 992px) {
    .dropdown-menu-lg-start {
        --bs-position: start;
    }

    .dropdown-menu-lg-start[data-bs-popper] {
        right: auto;
        left: 0;
    }

    .dropdown-menu-lg-end {
        --bs-position: end;
    }

    .dropdown-menu-lg-end[data-bs-popper] {
        right: 0;
        left: auto;
    }
}

@media (min-width: 1200px) {
    .dropdown-menu-xl-start {
        --bs-position: start;
    }

    .dropdown-menu-xl-start[data-bs-popper] {
        right: auto;
        left: 0;
    }

    .dropdown-menu-xl-end {
        --bs-position: end;
    }

    .dropdown-menu-xl-end[data-bs-popper] {
        right: 0;
        left: auto;
    }
}

@media (min-width: 1400px) {
    .dropdown-menu-xxl-start {
        --bs-position: start;
    }

    .dropdown-menu-xxl-start[data-bs-popper] {
        right: auto;
        left: 0;
    }

    .dropdown-menu-xxl-end {
        --bs-position: end;
    }

    .dropdown-menu-xxl-end[data-bs-popper] {
        right: 0;
        left: auto;
    }
}

.dropup .dropdown-menu[data-bs-popper] {
    top: auto;
    bottom: 100%;
    margin-top: 0;
    margin-bottom: 0.125rem;
}

.search-field-s {
    width: 51.01%;
    height: 50px;
    flex-shrink: 0;
    background: #FFF;
}

.input-group-s {
    width: 100%;
    background-color: rgba(var(--bs-tertiary-bg-rgb), var(--bs-bg-opacity)) !important;
    border: 1px solid #D8D8D8;
    border-radius: 15px;

}

.form-control:focus {
    border: 2px solid #d0011b !important;
    box-shadow: none !important;
}

.form-control-s {
    background: transparent;
    position: absolute;
    outline: none;
    width: 75%;
    padding: 0.75rem;
    border: none;
    align-items: center;
    justify-content: center;
    margin-left: 30px;
    display: flex;
    color: #212529;
    font-size: 14px;
    font-family: 'Lato';
    font-style: normal;
    font-weight: 400;
    line-height: 22.4px;
}

.input-group-prepend-s img {
    margin-top: 15px;
    margin-bottom: 15px;
    margin-left: 30px;
    margin-right: 20px;
    display: flex;
    width: 20px;
    height: 20px;
    padding: 0.833px;
    justify-content: center;
    align-items: center;
    flex-shrink: 0;
    cursor: pointer;
}

.input-group-s:hover {
    border: 1px solid #E0793F;
}

.input-group-s:hover,
.input img {
    opacity: 0.8;
}

.form-control-s:focus {
    border-color: none !important;
    outline: none !important;
}

.dropdown-menu:hover {
    background: white;
}

.dropdown-item:hover {
    color: orange;
}

.navbar .navbar-menu-wrapper {
    padding: 0;
    width: 100%;
}

/* @media (max-width: 480px) {
        .navbar .navbar-brand-wrapper {
            width: auto;
        }
    } */
.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link .nav-profile-img img {
    border: 1px solid rgba(0, 0, 0, 0.20) !important;
}

/* Đã sửa */
.navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link {
    color: inherit;
    font-size: 0.875rem;
    height: 70px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

/* .grid-news .content-news {
        margin-left: 10px;
        flex-shrink: 0;
    }

    .grid-news .content-news span {
        color: #000;
        font-size: 13px;
        font-style: normal;
        font-weight: 400;
        line-height: 17px;
    }

    .grid-news .content-news .btn-date-news {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .grid-news .content-news .btn-date-news span {
        color: #A6A4A4;
        font-size: 10px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }
    .content-news p:hover{
        color:#E0793F;
    }
    .btn-date-news a {
        text-decoration: none;
        padding-left: 10px;
        padding-bottom: 5px;
        color: #DE8C49;
        font-size: 12px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }
    .content-news .btn-date-news a:hover{
        color:#E0793F;
    }*/
@media (max-width: 678px) {
    .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown {
        position: static !important;
    }

    #navbarNavDropdown {
        display: flex;
        position: absolute;
        margin-left: 20%;
        padding-right: 0;
        padding-left: 0;
    }

    .navbar-collapse {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-top: 0;
    }

    .navbar-nav {
        margin-left: 50%;
    }

    .nav-item {
        margin-right: 20px;
    }

    .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown {
        left: 0;
    }

    .search-field-s {
        display: none !important;
    }
}
</style>
<!-- Modal đổi mật khẩu -->
<!-- Modal -->
<div class="modal-dmk">
    <div class="modal fade dmk" id="exampleModalCenterdmk" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="content-dmk" style="margin-left: auto; margin-right: auto;background:#fff;margin-top:40%;">
                <div class="modal-header" style="border: none;">
                    <h5 class="modal-title" id="exampleModalLongTitle"
                        style="color: #000; font-size: 20px; font-style: normal; font-weight: 600; line-height: normal;">
                        Cập
                        nhật mật khẩu của bạn</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        style="border: none; background: none;">
                        <span aria-hidden="true"><img src="{{ asset('viewsCustom/assets/images/clone.svg') }}"></span>
                    </button>
                </div>
                <div class="modal-body" style="padding-top: 9px;">
                    <div>

                        <div>
                            <div
                                style="position: absolute; left: 40px; top: -3px; background: #fff; text-align: center; width: 160px;">
                                Nhập mật khẩu mới
                            </div>
                            <input id="new-password" class="form-control form-control-flush h55 w100" type="password"
                                name="password" placeholder=""
                                style="flex-shrink: 0; border-radius: 5px; border: 1px solid #C7C6C1; font-family: 'Lato', sans-serif;" />
                            <span id="new-password-err" class="text-danger"></span>
                        </div>
                    </div>
                    <div style="padding-top: 24px;">

                        <div>
                            <div
                                style="position: absolute; left: 40px; bottom: 42px;width: 180px;background: #fff;text-align: center;">
                                Nhập lại mật khẩu mới
                            </div>
                            <input id="re-password" class="form-control form-control-flush h55 w100" type="password"
                                name="re_password" placeholder=""
                                style="flex-shrink: 0; border-radius: 5px; border: 1px solid #C7C6C1; font-family: 'Lato', sans-serif;" />
                            <span id="re-password-err" class="text-danger"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border: none;">
                    <button type="button" id="btn-resetpass" class=""
                        style="border-radius: 5px; background: #E0793F; width: 90%; margin-left: 5%; margin-right: 5%; border: none; height: 40px;">
                        Cập nhật
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
//Validate reset password
let newPassword = document.querySelector('#new-password');
let rePassword = document.querySelector('#re-password');
let newPassword_err = document.querySelector('#new-password-err');
let rePassword_err = document.querySelector('#re-password-err');
let btnResetpass = document.querySelector('#btn-resetpass');

function checkFieldsValidity() {
    return newPassword_err.textContent === '' && rePassword_err.textContent === '' && rePassword.value !== '';
}

function toggleUpdateButton() {
    btnResetpass.disabled = !checkFieldsValidity();
}

newPassword.addEventListener('input', (e) => {
    let passwordRegex = /^(?=.*[a-zA-Z]).{8,}$/;
    if (!passwordRegex.test(e.target.value)) {
        newPassword_err.textContent = 'Mật khẩu tối thiểu phải có 8 kí tự và ít nhất một chữ cái.';
    } else {
        newPassword_err.textContent = '';
    }
    toggleUpdateButton();
});

rePassword.addEventListener('input', (e) => {
    if (e.target.value === newPassword.value) {
        rePassword_err.textContent = '';
    } else if (e.target.value == '') {
        rePassword_err.textContent = '';
    } else {
        rePassword_err.textContent = 'Mật khẩu chưa khớp với mật khẩu ở trên.';
    }
    toggleUpdateButton();
});

btnResetpass.addEventListener('click', () => {
    console.log('Button clicked!');
    if (checkFieldsValidity()) {
        // Xử lý các hành động tùy thuộc vào yêu cầu của ứng dụng của bạn
        // Ví dụ: gửi form bằng cách sử dụng AJAX hoặc thông báo thành công, v.v.
        // Sau khi xử lý thành công, bạn có thể đóng modal bằng cách gọi hàm
        // tương ứng để ẩn modal, ví dụ: (giả sử bạn đang sử dụng Bootstrap)
        $('#exampleModalLong').modal('hide');
    }
});
</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<style>
.modal-backdrop {
    display: none !important;
}

.modal-dmk .show {
    display: block !important;
}

.content-dmk {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #FFF;
    background-clip: padding-box;
    border: 1px solid #ebedf2;
    border-radius: 0.3rem;
    outline: 0;
}

.fs16 {
    font-size: 16px !important;
}

.fs15 {
    font-size: 15px;
}

.fs14 {
    font-size: 14px;
}

.fs13 {
    font-size: 13px;
}

.fs12 {
    font-size: 12px;
}

.font-lato {
    font-family: "lato", sans-serif !important;
}

@media (max-width: 2400px) {
    .content-dmk {
        width: 500px !important;

    }
}

@media (max-width: 1000px) {
    .content-dmk {
        left: 0%;
    }
}

@media (max-width: 768px) {
    .content-dmk {
        width: 400px !important;
    }
}

@media (max-width: 460px) {
    .content-dmk {
        width: 300px !important;
        left: 0%;
    }
}
</style>