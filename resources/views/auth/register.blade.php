

{{--<x-card>
    <x-slot name="header">
        <span class="text-white"><i class="fa-solid fa-registered"></i> Đăng ký</span>
    </x-slot>
    <div class="card-body">
        <x-form type="post" :validate="true">
            <div class="mb-3">
                <label class="form-label">{{ __('Họ và tên') }}</label>
                <x-input class="w-100" type="text" name="fullname" placeholder="Họ và tên" required />
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('Tên đăng nhập') }}</label>
                <x-input class="w-100" type="text" name="username" placeholder="Tên đăng nhập" />
                <p id="errorName" class="text-left text-danger mb-2"></p>
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('Số điện thoại') }}</label>
                <x-input class="w-100" type="text" name="phone" placeholder="Số điện thoại" />
                <p id="errorPhone" class="text-danger text-left mb-2"></p>
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('Email') }}</label>
                <x-input id="email" class="w-100 email" type="email" name="email" placeholder="Email" />
                <p id="errorEmail" class="text-danger text-left mb-2"></p>
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('Mật khẩu') }}</label>
                <x-input id="password" class="w-100" type="password" name="password" placeholder="Mật khẩu" />
                <p id="errorPassword" class="text-danger text-left mb-2"></p>
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('Nhập lại mật khẩu') }}</label>
                <x-input id="password-confirm" class="w-100" type="password" name="confirm-password" placeholder="Nhập lại mật khẩu" />
                <p id="errorConfirm" class="text-danger text-left mb-2"></p>
            </div>

            <div class="mb-3">
                <label class="anim">
                    <input type="checkbox" class="checkbox" required="" />
                    <span>Tôi đồng ý với điều khoản sử dụng.</span>
                </label>
                <div class="clear"> </div>
            </div>
            <x-button type="submit" class="btn-orange w-100 mb-3">Đăng ký</x-button>
            <p class="mb-0">Bạn đã có tài khoản <a href="#"> Đăng nhập ngay!</a></p>
        </x-form>
    </div>
</x-card>--}}

<!-- <div class="form-register rp-register" style="background:#fff;margin-left:auto;margin-right:auto;border-radius: 10px;">
<div class="auth-form-light text-left p-4 in-register" style="border-radius: 10px">
                        <div class="brand-logo" style="">
                            <img src="{{ asset('icon/logoPagesAuth.png') }}" alt="logo">
                        </div>
                        <h4 style="margin-top: 12px; display: flex; width: 100%; align-items: center; gap: 10px; font-family: 'Lato', sans-serif; font-weight: bold;padding-left:33px;">
                            Đăng ký để đặt đơn
                        </h4>
                        <x-form class="web" type="post" :validate="true" style="font-family: 'Lato', sans-serif">
                            <div class="mb-3 " style="margin-top: 15px;">
                                <x-input class="form-control form-control-flush h55 w100" type="text" name="fullname" placeholder="Họ và tên" required
                                       style="flex-shrink: 0; border-radius: 5px; border: 1px solid #C7C6C1; font-family: 'Lato', sans-serif;"/>
                            </div>

                            <div class="mb-3 " style="margin-top: 15px">
                                <x-input class="form-control form-control-flush h55 w100" type="text" name="username" placeholder="Tên đăng nhập"
                                       style=" flex-shrink: 0; border-radius: 5px; border: 1px solid #C7C6C1; font-family: 'Lato', sans-serif;"/>
                               
                            </div>

                            <div class="mb-3 " style="margin-top: 15px">
                                <x-input class="form-control form-control-flush h55 w100" type="text" name="phone" placeholder="Số điện thoại"
                                         style=" flex-shrink: 0; border-radius: 5px; border: 1px solid #C7C6C1; font-family: 'Lato', sans-serif;"/>
                                <p id="errorPhone" class="text-danger text-left mb-2"></p>
                            </div>

                            <div class="mb-3 " style="margin-top: 15px">
                                <x-input id="email" class="form-control form-control-flush email h55 w100" type="email" name="email" placeholder="Email"
                                         style=" flex-shrink: 0; border-radius: 5px; border: 1px solid #C7C6C1; font-family: 'Lato', sans-serif;"/>
                                <p id="errorEmail" class="text-danger text-left mb-2"></p>
                            </div>

                            <div class="mb-3 " style="margin-top: 15px">
                                <x-input id="password" class="form-control form-control-flush h55 w100" type="password" name="password" placeholder="Mật khẩu"
                                       style=" flex-shrink: 0; border-radius: 5px; border: 1px solid #C7C6C1; font-family: 'Lato', sans-serif;"/>
                               
                            </div>

                            <div class="mb-3 " style="margin-top: 15px">
                                <x-input id="password-confirm" class="form-control form-control-flush h55 w100 " type="password" name="confirm-password" placeholder="Nhập lại mật khẩu"
                                         style=" flex-shrink: 0; border-radius: 5px; border: 1px solid #C7C6C1; font-family: 'Lato', sans-serif;"/>
                                <p id="errorConfirm" class="text-danger text-left mb-2"></p>
                            </div>

                            <div class="mb-0" style="margin-top: 15px;">
                                <label class="anim mb-3" style="display: flex; justify-content: left; align-items: center;gap: 10px;">
                                    <input type="checkbox" class="checkbox" required="" />
                                    <span style="color: #AEAEAE; font-size: 14px; font-family: 'Lato', sans-serif; font-weight: 400; line-height: 22.40px; word-wrap: break-word">
                                        Tôi đồng ý với
                                        <a href="#" style="color: #505050; font-size: 14px; font-family: 'Lato', sans-serif; font-weight: 400; line-height: 22.40px; word-wrap: break-word; text-decoration: none;">
                                            Điều khoản sử dụng!
                                        </a>
                                    </span>
                                </label>
                                <div class="clear"> </div>
                            </div>
                            <button type="submit" class="btn-warning mb-3 h55"
                                    style="width: 100%; ; flex-shrink: 0; border-radius: 5px; margin-top: 10px;
                                           background: linear-gradient(90deg, #FBC250 0%, #DEA143 24.48%, #F5AE5D 50%, #DE8C49 77.08%, #E0793F 100%); border: none;">
                                <span class=" " style="color: #FFF; font-size: 16px; font-family: 'Lato', sans-serif; font-style: normal; font-weight: 700; line-height: 22.4px;">Đăng ký</span>
                            </button>


                            <div class="mb-0" style="width: 100%; align-items: center; gap: 10px; margin-top: 20px; text-align: center;padding-bottom:13px;">
                                <p style="color: #333; font-size: 14px; font-family: 'Lato', sans-serif; font-style: normal; font-weight: 400; line-height: 22.4px;">
                                    Bạn đã có tài khoản <a href="{{ route('login.index') }}" style="color: #E0793F !important; text-decoration: none;"> Đăng nhập ngay!</a>
                                </p>
                            </div>
                        </x-form>
                    </div>
</div>
<footer class="footer fixed-bottom">
            @include('components.layout.footer')
    </footer>
<style>
    .footer{
        width:100%;
        
        border-top:1px solid rgba(81, 81, 81, 0.20);
        height: 68px;
        justify-content: center;
        align-items: center;
       padding: 0px;
       position: absolute;
       bottom: 0px;

    }
    #title-footer{
        text-align: left !important;
    }
    .text-end{
        position: absolute;
        right:40px;
    }
    .container-fluid{
        padding-left:40px;
        padding-top:23px; 
    }
    .card .card-body {
    padding:1.5rem 20px;
    }
    body{
        background:#E9E9E9;
        margin:0px;
    }
    #sidebar-left{
        background:#E9E9E9 !important;
    }
    .mb-3{
        
        padding-left:33px;
        padding-right:33px;
        
    }
    .w100{
        width: 100%;
    }
    .h55{
        height: 45px;;
    }
    .form-control{
        padding: 0.94rem 1.375rem;
    }
   
    @media (max-width:2400px){
        .form-register{
            width:30%;
            margin-top:2%;
        }
        .h55{
            height: 60px;
        }
        .brand-logo{
            padding-left:33px;
            padding-top:44px;
        }
    }
    @media (max-width:1920px){
        .form-register{
            width:30%;
        }
        .h55{
            height: 55px;
        }
    }
    @media (max-width:1440px){

    .form-register{
            width:35%;
            margin-top:2%;
        }
    }
    @media (max-width:1024px){
        .form-register{
            width:40%;
            margin-top:0%;
        }
        .h55{
            height: 30px;
        }
        .brand-logo{
            padding-left:33px;
            padding-top:22px;
        }
    }
    @media (max-width:912px){
        .rp-register{
            width:800px;
            margin-top:0%;
        }
        .h55{
            height: 30px;
        }
        .brand-logo{
            padding-left:33px;
            padding-top:22px;
        }
    }
    @media (max-width:768px) {
        .rp-register{
            width:60%;
        }
    }
    @media  (max-width: 590px){
    .rp-register{
        width: 125%;
    }
}
</style> -->
@include('auth.include.scriptReg')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Square</title>
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .form-register {
            
        }

        @media (min-width: 1441px) {
            .form-register {
                width: 30%;
                margin-bottom:20px;
            }
            .brand-logo{
            padding-left:33px;
            padding-top:44px;
        }
        .btn-warning{
          
            margin-left:10%;
            margin-right:auto%;
            
        }
        }

        @media (min-width: 912px) and (max-width: 1440px) {
            .form-register {
                width: 40%;
                margin-bottom:50px;
            }
            .brand-logo{
            padding-left:33px;
            padding-top:44px;
        }
        .btn-warning{
            width:90%;
            margin-left:5%;
            margin-right:5%;
            
        }
        }

        @media (min-width: 768px) and (max-width: 912px) {
            .form-register {
                width: 60%;
                margin-bottom:50px;
            }
            .brand-logo{
            padding-left:33px;
            padding-top:44px;
        }
        .btn-warning{
            width:90%;
            margin-left:5%;
            margin-right:5%;
            
        }
        }

        @media (max-width: 767px) {
            .form-register {
                width: 95%;
                margin-bottom:20px;
            }
            .brand-logo{
            padding-left:33px;
            padding-top:22px;
        }
        .btn-warning{
            width:90%;
            margin-left:5%;
            margin-right:5%;
            
        }
        }
        .footer{
        width:100%;
        
        border-top:1px solid rgba(81, 81, 81, 0.20);
        height: 68px;
        justify-content: center;
        align-items: center;
       padding: 0px !important;
       position: absolute;
       bottom: 0px;

    }
    #title-footer{
        text-align: left !important;
    }
    .text-end{
        position: absolute;
        right:40px;
    }
    .container-fluid{
        padding-left:40px;
        padding-top:23px; 
    }
    .card .card-body {
    padding:1.5rem 20px;
    }
    body{
        background:#E9E9E9;
        margin:0px;
    }
    #sidebar-left{
        background:#E9E9E9 !important;
    }
    .mb-3{
        
        padding-left:33px;
        padding-right:33px;
        
    }
    .w100{
        width: 100%;
    }
    .h55{
        height: 45px;;
    }
    .form-control{
        padding: 0.94rem 1.375rem;
    }
   
    </style>
</head>
<body>
<div class="form-register rp-register" style="background:#fff;margin-left:auto;margin-right:auto;border-radius: 10px;">
<div class="auth-form-light text-left p-4 in-register" style="border-radius: 10px">
                        <div class="brand-logo" style="">
                            <img src="{{ asset('icon/logoPagesAuth.png') }}" alt="logo">
                        </div>
                        <h4 style="margin-top: 12px; display: flex; max-width:200px; align-items: center; gap: 10px; font-family: 'Lato', sans-serif; font-weight: bold;padding-left:33px;">
                        Đăng ký để đặt đơn
                        </h4>
                        <x-form class="web" type="post" :validate="true" style="font-family: 'Lato', sans-serif">
                            <div class="mb-3 " style="margin-top: 15px;">
                                <x-input class="form-control form-control-flush h55 w100" type="text" name="fullname" placeholder="Họ và tên" required
                                       style="flex-shrink: 0; border-radius: 5px; border: 1px solid #C7C6C1; font-family: 'Lato', sans-serif;"/>
                            </div>

                            <div class="mb-3 " style="margin-top: 15px">
                                <x-input class="form-control form-control-flush h55 w100" type="text" name="username" placeholder="Tên đăng nhập"
                                       style=" flex-shrink: 0; border-radius: 5px; border: 1px solid #C7C6C1; font-family: 'Lato', sans-serif;"/>
                               
                            </div>

                            <div class="mb-3 " style="margin-top: 15px">
                                <x-input class="form-control form-control-flush h55 w100" type="text" name="phone" placeholder="Số điện thoại"
                                         style=" flex-shrink: 0; border-radius: 5px; border: 1px solid #C7C6C1; font-family: 'Lato', sans-serif;"/>
                                <p id="errorPhone" class="text-danger text-left mb-2"></p>
                            </div>

                            <div class="mb-3 " style="margin-top: 15px">
                                <x-input id="email" class="form-control form-control-flush email h55 w100" type="email" name="email" placeholder="Email"
                                         style=" flex-shrink: 0; border-radius: 5px; border: 1px solid #C7C6C1; font-family: 'Lato', sans-serif;"/>
                                <p id="errorEmail" class="text-danger text-left mb-2"></p>
                            </div>

                            <div class="mb-3 " style="margin-top: 15px">
                                <x-input id="password" class="form-control form-control-flush h55 w100" type="password" name="password" placeholder="Mật khẩu"
                                       style=" flex-shrink: 0; border-radius: 5px; border: 1px solid #C7C6C1; font-family: 'Lato', sans-serif;"/>
                               
                            </div>

                            <div class="mb-3 " style="margin-top: 15px">
                                <x-input id="password-confirm" class="form-control form-control-flush h55 w100 " type="password" name="confirm-password" placeholder="Nhập lại mật khẩu"
                                         style=" flex-shrink: 0; border-radius: 5px; border: 1px solid #C7C6C1; font-family: 'Lato', sans-serif;"/>
                                <p id="errorConfirm" class="text-danger text-left mb-2"></p>
                            </div>

                            <div class="mb-0" style="margin-top: 15px;">
                                <label class="anim mb-3" style="display: flex; justify-content: left; align-items: center;gap: 10px;">
                                    <input type="checkbox" class="checkbox" required="" />
                                    <span style="color: #AEAEAE; font-size: 14px; font-family: 'Lato', sans-serif; font-weight: 400; line-height: 22.40px; word-wrap: break-word">
                                        Tôi đồng ý với
                                        <a href="#" style="color: #505050; font-size: 14px; font-family: 'Lato', sans-serif; font-weight: 400; line-height: 22.40px; word-wrap: break-word; text-decoration: none;">
                                            Điều khoản sử dụng!
                                        </a>
                                    </span>
                                </label>
                                <div class="clear"> </div>
                            </div>
                            <button type="submit" class="btn-warning mb-3 h55"
                                    style=" ; flex-shrink: 0; border-radius: 5px; margin-top: 10px;
                                           background: linear-gradient(90deg, #FBC250 0%, #DEA143 24.48%, #F5AE5D 50%, #DE8C49 77.08%, #E0793F 100%); border: none;">
                                <span class=" " style="color: #FFF; font-size: 16px; font-family: 'Lato', sans-serif; font-style: normal; font-weight: 700; line-height: 22.4px;">Đăng ký</span>
                            </button>


                            <div class="mb-0" style="width: 100%; align-items: center; gap: 10px; margin-top: 20px; text-align: center;padding-bottom:13px;">
                                <p style="color: #333; font-size: 14px; font-family: 'Lato', sans-serif; font-style: normal; font-weight: 400; line-height: 22.4px;">
                                    Bạn đã có tài khoản <a href="{{ route('login.index') }}" style="color: #E0793F !important; text-decoration: none;"> Đăng nhập ngay!</a>
                                </p>
                            </div>
                        </x-form>
                    </div>
</div>
<footer class="footer fixed-bottom">
            @include('components.layout.footer')
    </footer>
</body>
</html>
