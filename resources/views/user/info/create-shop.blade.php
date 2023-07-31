{{--@extends('layout')

@section('content')

@section('content')
<x-card >
    <x-slot name="header">
    <div style="display:flex;">
        <span class="header__create-shop" style="color: #000;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;padding-left:18px;padding-top:4px;">Thông tin Shop</span>
        <img src="{{ asset('viewsCustom/assets/images/icon-edit.svg') }}"  style="width:38px; height:38px;position: absolute;right: 40px;top: 22px;"/>
    </div>    
    </x-slot>
    <div class="card-body">
        <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}">
            <div class="mb-3">
                <label class="form-label">{{ __('Tên cửa hàng') }}</label>
                <x-input class="w-100" name="name_shop" placeholder="Nhập tên cửa hàng" :required="true" />
            </div>
            <x-button type="submit" class="btn-orange w-100">Tạo ngay</x-button>
        </x-form>
    </div>
</x-card>
<x-card>
    <x-slot name="header">
        <span class="text-white"><i class="fa-brands fa-shopify"></i> Tạo cửa hàng</span>
    </x-slot>
    <div class="card-body">
        <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}">
            <div class="mb-3">
                <label class="form-label">{{ __('Tên cửa hàng') }}</label>
                <x-input class="w-100" name="name_shop" placeholder="Nhập tên cửa hàng" :required="true" />
            </div>
            <x-button type="submit" class="btn-orange w-100">Tạo ngay</x-button>
        </x-form>
    </div>
</x-card>
@endsection--}}

@extends('layout')

@section('content')

@section('content')
<!-- Thông tin shop -->
<!-- check lại back-end -->
<div class="form-create-shop" style="width:100%;">
<x-card style="">
    <x-slot name="header">
    <div style="display:flex;">
        <span class="header__create-shop" style="color: #E0793F;font-size: 22px;font-style: normal;font-weight: 500;line-height: normal;padding-left:18px;padding-top:4px;">Thông tin Shop</span>
        <img src="{{ asset('viewsCustom/assets/images/icon-edit.svg') }}"  style="width:38px; height:38px;position: absolute;right: 40px;top: 22px;"/>
    </div>    
    </x-slot>
    <div class="card-body" style="padding-top:16px;padding-left:38px;display:flex;">
        <label style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;width:130px;" class="form-label">{{ __('Tên cửa hàng') }}</label>
        <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}" class="pd-form" style="margin-top:-10px;">
            <div class="mb-3 w-form" style="">           
                <x-input class="w-100" name="name_shop" placeholder="VD: Làn Sóng Xanh" :required="true" style="color: rgba(48, 48, 48, 0.20);font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;height:46px;" />
            </div>           
        </x-form>    
    </div>
    <x-button  type="submit" class="" style="float: right;margin-right: 40px;margin-top: 18px;margin-bottom: 20px;border-radius: 5px;background: #E0793F;color: #FFF;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;">Tạo ngay</x-button>
</x-card>
<!-- Thông tin liên hệ -->
<!-- cần đổ lại back-end -->
<x-card style="">
    <x-slot name="header">
    <div style="display:flex;">
        <span class="header__create__info-shop" style="color: #E0793F;font-size: 22px;font-style: normal;font-weight: 500;line-height: normal;padding-left:18px;padding-top:4px;">Thông tin liên hệ</span>
        <img src="{{ asset('viewsCustom/assets/images/icon-edit.svg') }}"  style="width:38px; height:38px;position: absolute;right: 40px;top: 22px;"/>
    </div>    
    </x-slot>
    <div class="card-body" style="padding-top:16px;padding-left:38px;display:flex;">
        <label style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;width:130px;" class="form-label">{{ __('Địa chỉ') }}</label>
        <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}" class="pd-form" style="margin-top:-10px;">
            <div class="mb-3 w-form" style="">           
                <x-input class="w-100" name="name_shop" placeholder="VD: 124 đường kênh 19/5 Tây Thạnh, Tân Phú" :required="true" style="color: rgba(48, 48, 48, 0.20);font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;height:46px;" />
            </div>           
        </x-form>    
    </div>
    <div class="card-body" style="padding-top:16px;padding-left:38px;display:flex;">
        <label style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;width:130px;" class="form-label">{{ __('Nhập Facebook') }}</label>
        <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}" class="pd-form" style="margin-top:-10px;">
            <div class="mb-3 w-form" style="">           
                <x-input class="w-100" name="name_shop" placeholder="VD: Shop Online Seeding" :required="true" style="color: rgba(48, 48, 48, 0.20);font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;height:46px;" />
            </div>           
        </x-form>    
    </div>
    <div class="card-body" style="padding-top:16px;padding-left:38px;display:flex;">
        <label style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;width:130px;" class="form-label">{{ __('Nhập Zalo') }}</label>
        <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}" class="pd-form" style="margin-top:-10px;">
            <div class="mb-3 w-form" style="">           
                <x-input class="w-100" name="name_shop" placeholder="VD: 0123456789" :required="true" style="color: rgba(48, 48, 48, 0.20);font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;height:46px;" />
            </div>           
        </x-form>    
    </div>
    <x-button  type="submit" class="" style="float: right;margin-right: 40px;margin-top: 18px;margin-bottom: 20px;border-radius: 5px;background: #E0793F;color: #FFF;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;height:39px;">Lưu thông tin liên hệ</x-button>
</x-card>
</div>
@endsection
<style>
    
    
    @media (max-width:2440px){
        .w-form{
            width:387px;
        }
        .row{
        margin-left:16px !important ;
    }
        .pd-form{
            padding-left:20.3%;
        }
    }
    @media (max-width:1390px){
        .row{
        margin-left:0px !important ;
    }
    }
    @media (max-width:768px){
        .card-body.rounded-top.bg-orange {
    border-radius: 5px !important;
}
        
    }
    @media (max-width:767px){
        .w-form{
            width:250px;
        }
        
    }
    @media (max-width:650px){
        .w-form{
            width:250px;
        }
        .pd-form{
            padding-left:10%;
        }
    }

</style>