<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập - Web đặt đơn</title>
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        

        @media (min-width: 1441px) {
            .form-login {
                width: 30%;
                margin-bottom:20px;
            }
            .brand-logo{
            padding-left:33px;
            padding-top:44px;
        }
        .btn-warning{
          
            margin-left:10%;
            margin-right:auto;
            
        }
        }

        @media (min-width: 912px) and (max-width: 1440px) {
            .form-login {
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
            .form-login {
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
            .form-login {
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
        
        padding-left:5%;
        padding-right:5%;
        
    }
    .w100{
        width: 90%;
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
<div class="form-login" style="background:#fff;margin-left:auto;margin-right:auto;border-radius: 10px;">
<div class="col-lg-4 mx-auto" style="">
                    <div class="auth-form-light text-left p-4" style="border-radius: 10px">
                        <div class="brand-logo">
                            <img src="{{ asset('icon/logoPagesAuth.png') }}" alt="logo">
                        </div>
                        <h4 class="mb-3" style="margin-top: 24px; display: flex; width: 100%; align-items: center; gap: 10px; font-family: 'Lato', sans-serif; font-weight: bold;max-width:200px;">
                            Đăng nhập để đặt đơn
                        </h4>

                        <x-form type="post" :validate="true" style="font-family: 'Lato', sans-serif">
                            <div class="mb-3" style="margin-top: 20px;">
                                <input class="form-control form-control-lg mb-3 h55 w100" type="email" name="email" :required="true" placeholder="Nhập Email"
                                       style="flex-shrink: 0; border-radius: 5px; border: 1px solid #C7C6C1; font-family: 'Lato', sans-serif;"/>
                            </div>
                            <div class="mb-3" style="margin-top: 22px">
                                <input class="form-control form-control-lg mb-3 h55 w100" type="password" name="password" :required="true" placeholder="Nhập Password"
                                       style=" flex-shrink: 0; border-radius: 5px; border: 1px solid #C7C6C1; font-family: 'Lato', sans-serif;"/>
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center mb-3"
                                 style="display: flex; width: 100%; height: 10px;  justify-content: left; align-items: center; margin-top: 12px">
                                <label class="remember" style="display: flex; justify-content: left; align-items: center;gap: 10px;">
                                    <input type="checkbox" class="checkbox" />
                                    <span style="color: #AEAEAE; font-size: 14px; font-family: 'Lato', sans-serif; font-weight: 400; line-height: 22.40px; word-wrap: break-word">Ghi nhớ đăng nhập</span>
                                </label>
                                <a href="{{ route('password.get') }}" class="auth-link text-black "
                                   style="color: #333; font-size: 14px; font-family: 'Lato', sans-serif; font-style: normal; font-weight: 500; line-height: 22.4px; text-decoration: none;padding-left:4px;">
                                    Quên mật khẩu?
                                </a>
                            </div>
                            <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn btn-warning h55 mb-3"
                                    style=" flex-shrink: 0; border-radius: 5px; margin-top: 22px; font-family: 'Lato', sans-serif; font-weight: bold;border:none;
                                          background: linear-gradient(90deg, #FBC250 0%, #DEA143 24.48%, #F5AE5D 50%, #DE8C49 77.08%, #E0793F 100%)"><span style="color: #FFF;font-size: 16px;font-style: normal;font-weight: 600;line-height: 22.4px;">Đăng nhập</span>
                                
                            </button>
                            <div class="form-check" style="color: #333333; font-size: 14px; font-family: 'Lato', sans-serif; font-style: normal; font-weight: 400; line-height: 22.4px; text-align: center;padding-bottom:18px;margin-top:10px;">
                                <span class="desktop-text">Chưa có tài khoản?
                                    <a href="{{ route('register.index') }}" class="text-primary" style="color: #E0793F !important; text-decoration: none;">Đăng ký ngay</a>
                                </span>
                                <span  class="mobile-text">Chưa có tài khoản?
                                    <a href="{{ route('register.index') }}" class="text-primary" style="color: #E0793F !important; text-decoration: none; margin-bottom: 10px;"><br>Đăng ký ngay</a>
                                </span>
                            </div>
                            <style>
                                @media only screen and (max-width: 767px) {
                                    .desktop-text {
                                        display: none;
                                    }
                                    .mobile-text {
                                        display: inline-block;
                                    }
                                }

                                @media only screen and (min-width: 600px) {
                                    .desktop-text {
                                        display: inline-block;
                                    }
                                    .mobile-text {
                                        display: none;
                                    }
                                }
                               
                            </style>
                        </x-form>
                    </div>
                </div>
</div>
<footer class="footer fixed-bottom">
            @include('components.layout.footer')
    </footer>
</body>
</html>
