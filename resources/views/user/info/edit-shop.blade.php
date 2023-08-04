<!-- Phần làm  -->

@extends('layout')

@section('content')

@section('content')
<!-- Thông tin shop -->
<!-- check lại back-end -->

<div class="form-edit-shop" style="width:100%;">
    <div style="height:250px;margin-bottom:20px;background:#fff;">
        <x-card style="">
            <x-slot name="header">
                <div style="display:flex;">
                    <span class="header__edit-shop"
                        style="color: #E0793F;font-size: 22px;font-style: normal;font-weight: 500;line-height: normal;">Thông
                        tin Shop</span>
                    <img src="{{ asset('viewsCustom/assets/images/icon-edit.svg') }}"
                        style="width:38px; height:38px;position: absolute;right: 40px;top: 22px;" />
                </div>
            </x-slot>
            <div class="card-body" style="padding-top:16px;display:flex;padding-bottom:0px;">

                <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}"
                    style="display:flex;width:100%;height:150px;">
                    <div class="dl-f">
                        <label
                            style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;width:150px;"
                            class="form-label">{{ __('Tên cửa hàng') }}</label>
                        <div style="display:block;width:100%;">
                            <div class="mb-3 w-form pd-form f-edit-shop">
                                <x-input class="w-100" name="name_shop" value="{{ auth()->user()->name_shop }}"
                                    placeholder="VD: Làn Sóng Xanh" :required="true"
                                    style="margin-top: -10px;;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;height:46px;" />
                            </div>
                        </div>
                        <x-button type="submit" class="btn-edit-shop"
                            style="border-radius: 5px;background: #BBB;color: #FFF;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;">
                            Cập nhật ngay</x-button>
                    </div>
                </x-form>
            </div>
        </x-card>
    </div>
    <!-- Thông tin liên hệ -->
    <!-- cần đổ lại back-end -->
    <x-card>

        <x-slot name="header">
            <div style="display:flex;">
                <span class="header__edit__info-shop"
                    style="color: #E0793F;font-size: 22px;font-style: normal;font-weight: 500;line-height: normal;">Thông
                    tin liên hệ</span>
                <img src="{{ asset('viewsCustom/assets/images/icon-edit.svg') }}"
                    style="width:38px; height:38px;position: absolute;right: 40px;top: 22px;" />
            </div>
        </x-slot>
        <div class="card-body" style="padding-top:16px;display:flex;padding-bottom:0px;">

            <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}" class="edit-shop-items"
                style="width:100%;">
                <label
                    style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;width:150px;"
                    class="form-label">{{ __('Địa chỉ') }}</label>
                <div style="display:block;width:100%;" class="">
                    <div class="mb-3 w-form pd-form f-edit-shop" style="">
                        <x-input class="w-100" name="name_shop" placeholder="VD: 124 đường kênh 19/5 Tây Thạnh, Tân Phú"
                            :required="true"
                            style="margin-top: -10px;color: rgba(48, 48, 48, 0.20);font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;height:46px;" />
                    </div>
                </div>
            </x-form>
        </div>
        <div class="card-body" style="padding-top:16px;display:flex;padding-bottom:0px;">

            <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}" class="edit-shop-items"
                style="width:100%;">
                <label
                    style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;width:150px;"
                    class="form-label">{{ __('Nhập Facebook') }}</label>
                <div style="display:block;width:100%;" class="">
                    <div class="mb-3 w-form pd-form f-edit-shop" style="">
                        <x-input class="w-100" name="name_shop" placeholder="VD: Shop Online Seeding" :required="true"
                            style="margin-top: -10px;color: rgba(48, 48, 48, 0.20);font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;height:46px;" />
                    </div>
                </div>
            </x-form>
        </div>
        <div class="card-body" style="padding-top:16px;display:flex;padding-bottom:0px;">

            <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}" class="edit-shop-items"
                style="width:100%;margin-bottom:50px;">
                <label
                    style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;width:150px;"
                    class="form-label">{{ __('Nhập Zalo') }}</label>
                <div style="display:block;width:100%;" class="">
                    <div class="mb-3 w-form pd-form f-edit-shop" style="">
                        <x-input class="w-100" name="name_shop" placeholder="VD: 0123456789" :required="true"
                            style="margin-top: -10px;color: rgba(48, 48, 48, 0.20);font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;height:46px;" />
                    </div>
                </div>
            </x-form>
        </div>
        <x-button type="submit" class="btn-edit-shop-2"
            style="border-radius: 5px;background: #BBB;color: #FFF;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;height:39px;">
            Lưu thông tin liên hệ</x-button>

    </x-card>
</div>
@endsection
<style>
* {
    font-family: "lato", sans-serif !important;
}

@media (max-width:2440px) {
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
}
</style>