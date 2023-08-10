<!-- phần làm -->
@extends('layout')

@section('content')

@section('content')
<!-- Thông tin shop -->
<!-- check lại back-end -->

<div class="form-create-shop" style="width: 90%;height: 225px; margin: auto;">
    <div style="height:250px;margin-bottom:20px;background:#fff;border-radius:10px;">
        <x-card>
            <x-slot name="header">
                <div style="display:flex;">
                    <span class="header__create-shop"
                        style="color: #E0793F;font-size: 22px;font-style: normal;font-weight: 500;line-height: normal;">Thông
                        tin Shop</span>
                    <img src="{{ asset('viewsCustom/assets/images/icon-edit.svg') }}"
                        style="width:38px; height:38px;position: absolute;right: 20px;top: 15px;" />
                </div>
            </x-slot>
            <div class="card-body" style="padding-top:16px;display:flex;padding-bottom:0px; border-radius:10px;">

                <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}" class=""
                    style="display:flex;width:100%;height:150px;">
                    <div class="dl-f " style="width:100%;">
                        <label
                            style="color: rgba(0, 0, 0, 0.70);text-align: center;font-size: 16px;font-style: normal;font-weight: 700;line-height: normal;"
                            class="form-label title-ip-1">{{ __('Tên cửa hàng') }}</label>
                        <div style="display:block;" class="length-ip">
                            <div class="mb-3 w-form pd-form f-create-shop">
                                <x-input class="w-100 height-ip" name="name_shop" placeholder="VD:Nhập tên shop"
                                    :required="true"
                                    style="color: rgba(0, 0, 0, 0.70);display: flex;width: 600px;width: 100% !important;align-items: center;flex-shrink: 0;" />
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
    border: 2px solid #d0011b !important;
    box-shadow: none !important;

}

* {
    font-family: 'Lato'sans-serif !important;
}

#sidebar-Left {
    height: 1150px !important;
}

@media (max-width:768px) {
    .row {
        margin-left: 0px !important;
    }

    .height-ip {
        height: 45px;
    }

    .length-ip {
        width: 100%;
        margin: unset;
    }

    .title-ip-1 {
        position: absolute;
        top: -12px;
        left: 40px;
        background: #fff;
        width: 120px;
    }
}

@media (min-width:769px) {
    .height-ip {
        height: 55px;
    }

    .length-ip {
        width: 80%;
        margin: auto;
    }

    .title-ip-1 {
        position: absolute;
        top: -12px;
        left: 100px;
        background: #fff;
        width: 120px;
    }

}
</style>