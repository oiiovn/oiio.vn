<!-- Phần làm  -->

@extends('layout')

@section('content')

@section('content')
<!-- Thông tin shop -->
<!-- check lại back-end -->
<div class="form-create-shop" style="width: 90%;height: 225px; margin: auto;margin-bottom:46px;">
    <div style="height:250px;margin-bottom:20px;background:#fff;border-radius:10px;">
        <x-card style="">
            <x-slot name="header">
                <div style="display:flex;">
                    <span class="header__create-shop"
                        style="color: #E0793F;font-size: 22px;font-style: normal;font-weight: 500;line-height: normal;">Thông
                        tin Shop</span>
                    <img src="{{ asset('viewsCustom/assets/images/icon-edit.svg') }}"
                        style="width:38px; height:38px;position: absolute;right: 40px;top: 22px;" />
                </div>
            </x-slot>
            <div class="card-body" style="padding-top:16px;display:flex;padding-bottom:0px; border-radius:10px;">

                <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}" class=""
                    style="display:flex;width:100%;height:150px;">
                    <div class="dl-f" style="width: 100%;">
                        <label
                            style="color: rgba(0, 0, 0, 0.70);text-align: center;font-size: 16px;font-style: normal;font-weight: 700;line-height: normal;position: absolute;top:-12px;left: 40px;background: #fff;    width: 110px;"
                            class="form-label">{{ __('Tên cửa hàng') }}</label>
                        <div style="display:block;width:100%;" class="">
                            <div class="mb-3 w-form pd-form f-create-shop" style="">
                                <x-input class="w-100 height-ip" name="name_shop"
                                    value="{{ auth()->user()->name_shop }}" placeholder="Nhập tên shop" :required="true"
                                    style="color: rgba(0, 0, 0, 0.70);display: flex;width: 600px;width: 100% !important;align-items: center;flex-shrink: 0;" />
                            </div>
                        </div>
                        <x-button type="submit" class="btn-create-shop"
                            style="border-radius: 5px;background: #BBB;display: flex;width: 212px;justify-content: center;align-items: center;gap: 10px;margin:auto;height: 49px;margin-top:25px;">
                            <span
                                style="color: #FFF;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Cập
                                nhật</span>
                        </x-button>
                    </div>
                </x-form>
            </div>
        </x-card>
    </div>
</div>
<div class="form-create-shop" style="width: 90%;height: 225px; margin: auto;">
    <div style="height:250px;margin-bottom:20px;background:#fff;border-radius:10px;">
        <x-card style="">
            <x-slot name="header">
                <div style="display:flex;">
                    <span class="header__create-shop"
                        style="color: #E0793F;font-size: 22px;font-style: normal;font-weight: 500;line-height: normal;">Thông
                        tin Shop</span>
                    <img src="{{ asset('viewsCustom/assets/images/icon-edit.svg') }}"
                        style="width:38px; height:38px;position: absolute;right: 40px;top: 22px;" />
                </div>
            </x-slot>
            <div class="card-body" style="padding-top:16px;display:flex;padding-bottom:0px; border-radius:10px;">

                <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}"
                    style="display:flex;width:100%;">
                    <div class="dl-f" style="width: 100%;">
                        <label
                            style="color: rgba(0, 0, 0, 0.70);text-align: center;font-size: 16px;font-style: normal;font-weight: 700;line-height: normal;position: absolute;top:-11px;left: 40px;background: #fff;width: 60px;"
                            class="form-label">{{ __('Địa chỉ') }}</label>
                        <div style="display:block;width:100%;" class="">
                            <div class="mb-3 w-form pd-form f-create-shop" style="">
                                <x-input class="w-100 height-ip" name="name_shop" placeholder="Nhập địa chỉ"
                                    :required="true"
                                    style="color: rgba(0, 0, 0, 0.70);display: flex;width: 600px;width: 100% !important;align-items: center;flex-shrink: 0;" />
                            </div>
                        </div>
                    </div>
                </x-form>
            </div>
            <div class="card-body" style="padding-top:16px;display:flex;padding-bottom:0px; border-radius:10px;">

                <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}"
                    style="display:flex;width:100%;">
                    <div class="dl-f" style="width: 100%;">
                        <label
                            style="color: rgba(0, 0, 0, 0.70);text-align: center;font-size: 16px;font-style: normal;font-weight: 700;line-height: normal;position: absolute;top:-11px;left: 40px;background: #fff;width: 80px;"
                            class="form-label">{{ __('Facebook') }}</label>
                        <div style="display:block;width:100%;" class="">
                            <div class="mb-3 w-form pd-form f-create-shop" style="">
                                <x-input class="w-100 height-ip" name="name_shop" placeholder="Dán link facebook"
                                    :required="true"
                                    style="color: rgba(0, 0, 0, 0.70);display: flex;width: 600px;width: 100% !important;align-items: center;flex-shrink: 0;" />
                            </div>
                        </div>
                    </div>
                </x-form>
            </div>
            <div class="card-body" style="padding-top:16px;display:flex;padding-bottom:0px; border-radius:10px;">

                <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}" class=""
                    style="display:flex;width:100%;height:150px;">
                    <div class="dl-f" style="width: 100%;">
                        <label
                            style="color: rgba(0, 0, 0, 0.70);text-align: center;font-size: 16px;font-style: normal;font-weight: 700;line-height: normal;position: absolute;top:-11px;left: 40px;background: #fff; width: 40px;"
                            class="form-label">{{ __('Zalo') }}</label>
                        <div style="display:block;width:100%;" class="">
                            <div class="mb-3 w-form pd-form f-create-shop" style="">
                                <x-input class="w-100 height-ip" name="name_shop" placeholder="Số điện thoại zalo"
                                    :required="true"
                                    style="color: rgba(0, 0, 0, 0.70);display: flex;width: 600px;width: 100% !important;align-items: center;flex-shrink: 0;" />
                            </div>
                        </div>
                        <x-button type="submit" class="btn-create-shop"
                            style="border-radius: 5px;background: #BBB;display: flex;width: 212px;justify-content: center;align-items: center;gap: 10px;margin:auto;height: 49px;margin-top:25px;">
                            <span
                                style="color: #FFF;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Lưu
                                lại</span>
                        </x-button>
                    </div>
                </x-form>
            </div>
        </x-card>
    </div>
</div>
@endsection
<style>
.form-control:focus {
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}

* {
    font-family: 'Lato'sans-serif !important;
}

@media (max-width:768px) {
    .row {
        margin-left: 0px !important;
    }

    .height-ip {
        height: 45px;
    }
}

@media (min-width:769px) {
    .height-ip {
        height: 55px;
    }
}

/* @media (max-width:2440px) {
    .edit-shop-items {
        display: flex;
    }

    .card-body {
        padding: 0px;
    }

    .w-form {
        width: 410px;
    }

    .btn-edit-shop {
        position: absolute;
        right: 15px;
        bottom: 15px;
    }

    .btn-edit-shop-2 {
        position: absolute;
        right: 35px;
        bottom: 15px;
    }

    .dl-f {
        display: flex;
    }

    .row {
        margin-left: 16px !important;
    }

    .pd-form {
        margin-left: 20.3%;
    }
}

@media (max-width:1390px) {
    .row {
        margin-left: 0px !important;
    }
}

@media (max-width:768px) {
    .card-body.rounded-top.bg-orange {
        border-radius: 5px !important;
    }


    .btn-edit-shop {
        position: absolute;
        width: 100%;
        margin: auto;
        right: 0px;
        bottom: 0px;
    }

    .btn-edit-shop-2 {
        position: absolute;
        width: 90%;
        right: 0px;
        bottom: 5px;
        margin-left: 5%;
        margin-right: 5%;
    }
}

@media (max-width:767px) {
    .w-form {
        width: 300px;
    }

    .f-edit-shop {
        margin-top: 20px;
    }

    .dl-f {
        display: block;
    }

    .edit-shop-items {
        display: block;
    }

    .pd-form {
        margin-left: 0%;
    }

}

@media (max-width:650px) {
    .w-form {
        width: 250px;
    }

    .pd-form {
        margin-left: 0%;
    }
} */
</style>