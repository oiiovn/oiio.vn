<!-- phần làm -->
@extends('layout')

@section('content')

@section('content')
<!-- Thông tin shop -->
<!-- check lại back-end -->
{{--<div class="form-create-shop" style="width:100%;">
    <div style="height:250px;margin-bottom:20px;background:#fff;">
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
<div class="card-body" style="padding-top:16px;display:flex;padding-bottom:0px;">

    <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}" class=""
        style="display:flex;width:100%;height:150px;">
        <div class="dl-f">
            <label
                style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;width:150px;"
                class="form-label">{{ __('Tên cửa hàng') }}</label>
            <div style="display:block;width:100%;" class="">
                <div class="mb-3 w-form pd-form f-create-shop" style="">
                    <x-input class="w-100" name="name_shop" placeholder="VD: Làn Sóng Xanh" :required="true"
                        style="margin-top: -10px;color: rgba(48, 48, 48, 0.20);font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;height:46px;" />
                </div>
            </div>
            <x-button type="submit" class="btn-create-shop"
                style="border-radius: 5px;background: #E0793F;color: #FFF;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;">
                Tạo ngay</x-button>
        </div>
    </x-form>
</div>
</x-card>
</div>
<!--  Thông tin liên hệ -->
<!-- cần đổ lại back-end -->
<x-card>

    <x-slot name="header">
        <div style="display:flex;">
            <span class="header__create__info-shop"
                style="color: #E0793F;font-size: 22px;font-style: normal;font-weight: 500;line-height: normal;">Thông
                tin liên hệ</span>
            <img src="{{ asset('viewsCustom/assets/images/icon-edit.svg') }}"
                style="width:38px; height:38px;position: absolute;right: 40px;top: 22px;" />
        </div>
    </x-slot>
    <div class="card-body" style="padding-top:16px;display:flex;padding-bottom:0px;">

        <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}" class="create-shop-items"
            style="width:100%;">
            <label
                style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;width:150px;"
                class="form-label">{{ __('Địa chỉ') }}</label>
            <div style="display:block;width:100%;" class="">
                <div class="mb-3 w-form pd-form f-create-shop" style="">
                    <x-input class="w-100" name="name_shop" placeholder="VD: 124 đường kênh 19/5 Tây Thạnh, Tân Phú"
                        :required="true"
                        style="margin-top: -10px;color: rgba(48, 48, 48, 0.20);font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;height:46px;" />
                </div>
            </div>
        </x-form>
    </div>
    <div class="card-body" style="padding-top:16px;display:flex;padding-bottom:0px;">

        <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}" class="create-shop-items"
            style="width:100%;">
            <label
                style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;width:150px;"
                class="form-label">{{ __('Nhập Facebook') }}</label>
            <div style="display:block;width:100%;" class="">
                <div class="mb-3 w-form pd-form f-create-shop" style="">
                    <x-input class="w-100" name="name_shop" placeholder="VD: Shop Online Seeding" :required="true"
                        style="margin-top: -10px;color: rgba(48, 48, 48, 0.20);font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;height:46px;" />
                </div>
            </div>
        </x-form>
    </div>
    <div class="card-body" style="padding-top:16px;display:flex;padding-bottom:0px;">

        <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}" class="create-shop-items"
            style="width:100%;margin-bottom:50px;">
            <label
                style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;width:150px;"
                class="form-label">{{ __('Nhập Zalo') }}</label>
            <div style="display:block;width:100%;" class="">
                <div class="mb-3 w-form pd-form f-create-shop" style="">
                    <x-input class="w-100" name="name_shop" placeholder="VD: 0123456789" :required="true"
                        style="margin-top: -10px;color: rgba(48, 48, 48, 0.20);font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;height:46px;" />
                </div>
            </div>
        </x-form>
    </div>
    <x-button type="submit" class="btn-create-shop-2"
        style="border-radius: 5px;background: #E0793F;color: #FFF;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;height:39px;">
        Lưu thông tin liên hệ</x-button>

</x-card>

</div>--}}
<div class="form-create-shop" style="width: 90%;height: 225px; margin: auto;">
    <div style="height:250px;margin-bottom:20px;background:#fff;border-radius:10px;">
        <x-card style="">
            <x-slot name="header">
                <div style="display:flex;">
                    <span class="header__create-shop"
                        style="color: #E0793F;font-size: 22px;font-style: normal;font-weight: 500;line-height: normal;">Thông
                        tin Shop</span>
                    <img src="{{ asset('viewsCustom/assets/images/icon-edit.svg') }}"
                        style="width:38px; height:38px;position: absolute;right: 20px;top: 20px;" />
                </div>
            </x-slot>
            <div class="card-body" style="padding-top:16px;display:flex;padding-bottom:0px; border-radius:10px;">

                <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}" class=""
                    style="display:flex;width:100%;height:150px;">
                    <div class="dl-f" style="width: 100%;">
                        <label
                            style="color: rgba(0, 0, 0, 0.70);text-align: center;;font-size: 16px;font-style: normal;font-weight: 700;line-height: normal;position: absolute;top:-12px;left: 50px;background: #fff;"
                            class="form-label">{{ __('Tên cửa hàng') }}</label>
                        <div style="display:block;width:100%;" class="">
                            <div class="mb-3 w-form pd-form f-create-shop" style="">
                                <x-input class="w-100 height-ip" name="name_shop" placeholder="VD:Nhập tên shop"
                                    :required="true"
                                    style="color: rgba(48, 48, 48, 0.20);display: flex;width: 600px;width: 100% !important;align-items: center;flex-shrink: 0;" />
                            </div>
                        </div>
                        <x-button type="submit" class="btn-create-shop"
                            style="border-radius: 5px;background: #E0793F;display: flex;width: 212px;justify-content: center;align-items: center;gap: 10px;margin:auto;height: 49px;margin-top:25px;">
                            <span
                                style="color: #FFF;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Tạo
                                shop seeding</span>
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

/*
@media (max-width:2440px) {
    .create-shop-items {
        display: flex;
    }

    .card-body {
        padding: 0px;
    }

    .w-form {
        width: 410px;
    }

    .btn-create-shop {
        position: absolute;
        right: 15px;
        bottom: 15px;
    }

    .btn-create-shop-2 {
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


    .btn-create-shop {
        position: absolute;
        width: 100%;
        margin: auto;
        right: 0px;
        bottom: 0px;
    }

    .btn-create-shop-2 {
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

    .f-create-shop {
        margin-top: 20px;
    }

    .dl-f {
        display: block;
    }

    .create-shop-items {
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