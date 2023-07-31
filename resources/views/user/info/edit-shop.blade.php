{{--@extends('layout')

@section('content')
<x-card>
    <x-slot name="header">
        <span class="text-white"><i class="fa-brands fa-shopify"></i>Cập nhật cửa hàng</span>
    </x-slot>
    <div class="card-body">
        <x-form type="post" :validate="true" action="{{ route('user.update_shop') }}">
            <div class="mb-3">
                <label class="form-label">{{ __('Tên cửa hàng') }}</label>
                <x-input class="w-100" name="name_shop" value="{{ auth()->user()->name_shop }}" placeholder="Nhập tên cửa hàng" :required="true" />
            </div>
            <x-button type="submit" class="btn-orange w-100">Cập nhật</x-button>
        </x-form>
    </div>
</x-card>
@endsection--}}



<!-- Phần làm  -->

@extends('layout')

@section('content')

@section('content')
<!-- Thông tin shop -->
<!-- check lại back-end -->
<div class="form-create-shop" style="width:100%;">
<x-card style="">
    <x-slot name="header">
    <div style="display:flex;">
        <span class="header__create-shop" style="color: #E0793F;font-size: 22px;font-style: normal;font-weight: 500;line-height: normal;">Thông tin Shop</span>
        <a class="edit-name"><img src="{{ asset('viewsCustom/assets/images/icon-edit.svg') }}"  style="width:38px; height:38px;position: absolute;right: 40px;top: 22px;"/></a>
    </div>    
    </x-slot>
    <div class="card-body" style="padding-top:16px;display:flex;padding-bottom:0px;">
       
        <x-form type="post" :validate="true" action="{{ route('user.update_shop') }}" class="" style="display:flex;width:100%;">
            <label style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;width:150px;" class="form-label">{{ __('Tên cửa hàng') }}</label>
            <div style="display:block;width:100%;" class="">
                <div class="mb-3 w-form pd-form" style="">           
                    <x-input class="w-100" name="name_shop" value="{{ auth()->user()->name_shop }}" placeholder="VD: Làn Sóng Xanh" :required="true" style="margin-top: -10px;;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;height:46px;" />
                </div> 
                <x-button  type="submit" class="" style="float: right;margin-right: 40px;margin-top: 18px;margin-bottom: 20px;border-radius: 5px;background: #BBB;color: #FFF;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;">Cập nhật ngay</x-button>  
            </div>
        </x-form>          
    </div>          
</x-card>
<!-- Thông tin liên hệ -->
<!-- cần đổ lại back-end -->
<x-card style="">
    <x-slot name="header">
    <div style="display:flex;">
        <span class="header__create__info-shop" style="color: #E0793F;font-size: 22px;font-style: normal;font-weight: 500;line-height: normal;">Thông tin liên hệ</span>
        <img src="{{ asset('viewsCustom/assets/images/icon-edit.svg') }}"  style="width:38px; height:38px;position: absolute;right: 40px;top: 22px;"/>
    </div>    
    </x-slot>
    <div class="card-body" style="padding-top:16px;display:flex;padding-bottom:0px;">
       
        <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}" class="" style="display:flex;width:100%;">
            <label style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;width:150px;" class="form-label">{{ __('Địa chỉ') }}</label>
            <div style="display:block;width:100%;" class="">
                <div class="mb-3 w-form pd-form" style="">           
                    <x-input class="w-100" name="name_shop" placeholder="VD: 124 đường kênh 19/5 Tây Thạnh, Tân Phú" :required="true" style="margin-top: -10px;color: rgba(48, 48, 48, 0.20);font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;height:46px;" />
                </div> 
            </div>
        </x-form>          
    </div>
    <div class="card-body" style="padding-top:16px;display:flex;padding-bottom:0px;">
       
        <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}" class="" style="display:flex;width:100%;">
            <label style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;width:150px;" class="form-label">{{ __('Nhập Facebook') }}</label>
            <div style="display:block;width:100%;" class="">
                <div class="mb-3 w-form pd-form" style="">           
                    <x-input class="w-100" name="name_shop" placeholder="VD: Shop Online Seeding" :required="true" style="margin-top: -10px;color: rgba(48, 48, 48, 0.20);font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;height:46px;" />
                </div> 
            </div>
        </x-form>          
    </div>
    <div class="card-body" style="padding-top:16px;display:flex;padding-bottom:0px;">
       
        <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}" class="" style="display:flex;width:100%;">
            <label style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;width:150px;" class="form-label">{{ __('Nhập Zalo') }}</label>
            <div style="display:block;width:100%;" class="">
                <div class="mb-3 w-form pd-form" style="">           
                    <x-input class="w-100" name="name_shop" placeholder="VD: 0123456789" :required="true" style="margin-top: -10px;color: rgba(48, 48, 48, 0.20);font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;height:46px;" />
                </div> 
            </div>
        </x-form>          
    </div>
    <x-button  type="submit" class="" style="float: right;margin-right: 40px;margin-top: 18px;margin-bottom: 20px;border-radius: 5px;background: #BBB;color: #FFF;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;height:39px;">Lưu thông tin liên hệ</x-button>
</x-card>
</div>
@endsection
<style>
    
    
    @media (max-width:2440px){
        .w-form{
            width:410px;
        }
        .row{
        margin-left:16px !important ;
    }
        .pd-form{
            margin-left:20.3%;
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
            width:300px;
        }
        
    }
    @media (max-width:650px){
        .w-form{
            width:250px;
        }
        .pd-form{
            margin-left:10%;
        }
    }

</style>