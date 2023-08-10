@extends('layout')

@section('content')
<div class="container-fg-pw"style="width:41.67%;background: #fff;border-radius: 10px;padding:2rem 20px;margin-left:20%;margin-top:10%;">
    <div class="container-fg">
        <div class="header-pw" style="display: block;">
            <div class="logo-pw" style="margin-bottom:24px;"><img src="{{ asset('icon/logoPagesAuth.png') }}" alt=""></div>
            <div class="title-pw"style="margin-bottom:20px;"><span style="color: #000;font-family: 'Lato'sans-serif;font-size: 18px;font-style: normal;font-weight: 600;line-height: 22.4px;">Quên mật khẩu? Đừng lo chúng tôi sẽ cài đặt lại.</span></div>
        </div>
        <div>
            @if (Session::has('message'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('message') }}
            </div>
            @endif
            <x-form type="post" :validate="true" action="{{ route('password.post') }}">
                <div class="mb-3">
                    <x-input-email class="w-100" name="email" :required="true" />
                </div>
                <button style="margin-bottom:15px;color:#fff;background: linear-gradient(90deg, #FBC250 0%, #DEA143 24.48%, #F5AE5D 50%, #DE8C49 77.08%, #E0793F 100%);border-radius:5px;border:none;width: 434px;height: 55px;flex-shrink: 0;color: #FFF;font-family: 'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 700;line-height: 22.4px;"type="submit" class="w-100">
                    Đặt lại Mật khẩu</button>
                <div class="link-lg" style="color:#000;display:flex;align-items:center;justify-content:center;width:100%;height: 55px;border-radius: 5px;border: 1px solid #C7C6C1;margin-bottom:43px;">
                    <a href="{{ route('login.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M10.0464 15.5536L10.4 15.9072L11.1071 15.2L10.7535 14.8465L10.0464 15.5536ZM7.19995 12L6.8464 11.6465L6.49284 12L6.8464 12.3536L7.19995 12ZM10.7535 9.1536L11.1071 8.80005L10.4 8.09294L10.0464 8.4465L10.7535 9.1536ZM10.7535 14.8465L7.5535 11.6465L6.8464 12.3536L10.0464 15.5536L10.7535 14.8465ZM7.5535 12.3536L10.7535 9.1536L10.0464 8.4465L6.8464 11.6465L7.5535 12.3536ZM7.19995 12.5H17.6V11.5H7.19995V12.5Z" fill="#A6A4A4"/>
                        </svg>
                     Quay lại Đăng nhập</a>
                </div>
                <div class="link-rg" style="width:100%;display:flex;justify-content: center;align-items: center;">
                    <a href="{{ route('register.index') }}">Chưa có tài khoản?<span style="color:#DEA143;"> Đăng ký ngay</span></a><br>
                </div>
            </x-form>

        </div>
    </div>
</div>
<style>
    @media (max-width:768px) {
        .container-fg-pw{
            width: 80% !important;
            margin:0 !important;
        }
        .title-pw span{
            font-size: 14px !important;
        }
    }
    header{
        display: none !important;
    }
    #sidebar-left{
        display:none !important;
    }
    #sidebarRight{
        display: none !important;
    }
    #main-content{
        width: 1440px !important;
    }
    .content-jr{
        width: 100% !important;
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
    }
    #row{
        margin-left: 0 !important;
    }
    .link-rg a:hover{
        color:#000 !important;
    }
    .link-rg span:hover{
        color:#DEA143 !important;
    }
    .link-lg :hover{
        color:#000 !important;
    }
</style>
@endsection