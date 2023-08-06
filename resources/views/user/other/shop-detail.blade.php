@extends('layout')

@section('content')

{{--<x-card>    
    <div class="img-info">
        <div class="cover-img" @if($user->getBackground()) style="background-image: url({{ asset($user->cover_photo) }})"
@endif>
<input id="file-cover_img" type="file" class="d-none"></input>
</div>
<div class="profile-img">
    <img id="avatar-img" src="{{asset($user->getAvatar())}}" class="img-fluid" />
    <p class="h5 fw-bold">
        {{ $user->name_shop }}
        @if($user->isReputable())
        <i class="fa-regular fa-circle-check text-primary mt-1 ms-2 float-end"></i>
        @endif
    </p>
</div>
</div>

<div class="card-body">
    <x-card>
        <div class="card-body">
            <p class="fs-6 mb-0">
                <i class="fa-solid fa-envelope"></i> Email:
                <span class="float-end">{{ $user->email }}</span>
            </p>
            <p class="fs-6 mb-0">
                <i class="fa-solid fa-phone"></i> Số điện thoại:
                <span class="float-end">{{ $user->phone }}</span>
            </p>
            <p class="fs-6 mb-0">
                <i class="fa-regular fa-venus-mars"></i> Giới tính:
                <span class="float-end">{{ $gender[$user->gender->value ?? '3'] }}</span>
            </p>
            <p class="fs-6 mb-0">
                <i class="fa-solid fa-address-book"></i> Địa chỉ:
                <span class="float-end">{{ $user->contact->address ?? 'Chưa cập nhật' }}</span>
            </p>
            <p class="fs-6 mb-0">
                <i class="fa-brands fa-square-facebook"></i> Facebook:
                <span class="float-end">
                    <a href="{{ Str::startsWith($user->contact->facebook, 'https://') ? $user->contact->facebook : 'https://' . $user->contact->facebook }}"
                        target="_blank">
                        {{ $user->contact->facebook ?? 'Chưa cập nhật' }}
                    </a>
                </span>
            </p>
            <p class="fs-6 mb-0">
                <i class="fa-solid fa-envelope"></i> Zalo:
                <span class="float-end"><a href="http://zalo.me/{{$user->contact->zalo}}"
                        target="_blank">{{ $user->contact->zalo ?? 'Chưa cập nhật' }}</a></span>
            </p>
        </div>
    </x-card>
    <x-card>
        <x-slot name="header">
            <span class="text-white">Thông tin ngân hàng</span>
        </x-slot>
        <div class="card-body">
            @if($user->hasBankAccount())
            <div class="row">
                @foreach ($user->bankAccount as $value)
                <div class="col-6">
                    <x-card @class([ "mb-0"=> !$loop->first
                        ])>
                        <x-slot name="header">
                            <span class="text-white">
                                <i class="fa-solid fa-piggy-bank"></i> {{ $value->bank_name }}
                            </span>
                        </x-slot>
                        <div class="card-body">
                            Tên TK: {{ $value->account_name }} <br />
                            Số TK: {{ $value->account_number }}
                        </div>
                    </x-card>
                </div>
                @endforeach
            </div>
            @else
            Shop chưa cập nhật thông tin ngân hàng
            @endif
        </div>
    </x-card>
</div>
</x-card>--}}
{{--@if($users != null)
    @foreach($users->where('id', $user->id) as $value)
        @if(count($value->reviews->where('author_id', auth()->user()->id)->where('user_id', $value->id)) 
            < count($value->jobCreateds->where('shop_id', $value->id)) )
            <x-card>
                <div class="card-body">
                    <x-form type="post" action="{{ route('reviewsShop.create') }}" :validate="true">
<div class="form-group m-0">
    <label class="control-label">{{ __('Vote sao') }}:</label>
</div>
<div class="rating">
    <input type="radio" name="rating" id="rating-5" value="5">
    <label for="rating-5"></label>
    <input type="radio" name="rating" id="rating-4" value="4">
    <label for="rating-4"></label>
    <input type="radio" name="rating" id="rating-3" value="3">
    <label for="rating-3"></label>
    <input type="radio" name="rating" id="rating-2" value="2">
    <label for="rating-2"></label>
    <input type="radio" name="rating" id="rating-1" value="1">
    <label for="rating-1"></label>
</div>
<div class="input-group">
    <input name="author_id" value="{{ auth()->user()->id }}" hidden />
    <input name="user_id" value="{{ $value->id }}" hidden />
    <input name="status" value="2" hidden />
    <input type="text" class="form-control" placeholder="Đánh giá {{ $value->fullname }}" name="title"
        aria-label="Recipient's username" aria-describedby="button-addon2">
    <button class="btn btn-orange" type="submit" id="button-addon2">Đánh giá</button>
</div>
</x-form>
</div>
</x-card>
@endif
@endforeach
@endif--}}

{{--<x-card>
    <x-slot name="header">
        <span class="text-white">
            <i class="fa-solid fa-shop me-2" aria-hidden="true"></i>
            <span class="">Đánh giá của cộng tác viên</span>
            <p class="float-end m-0 rating-box">
                <span class="text-warning"> 
                    @if ($user->reviews->where('status', 2)->count() > 0)
                        {{ round($user->reviews->where('status', 2)->sum('rating') / $user->reviews->where('status', 2)->count(),1) }}
@else 0 @endif
<i class="fa-solid fa-star"></i>
</span>
</p>
</span>
</x-slot>
<div class="card-body">
    @foreach($user->reviews->where('status', 2) as $value)
    <x-card class="{{ $loop->last ? 'mb-0' : '' }}">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <img src="{{ asset($value->author->getAvatar()) }}" width="40px" height="40px"
                        class="rounded-circle" />
                    <span class="fw-bold ps-2">{{ $value->author->fullname ?? $value->author->username }}</span>
                </div>
                <div class="col-4">
                    <p class="text-end m-0 rating-box">
                        <span class="text-warning">{{ $value->rating }} <i class="fa-solid fa-star"></i></span>
                    </p>
                </div>
            </div>
            <p class="mb-0 mt-2">{{ $value->title }}</p>
            <hr class="mt-2 mb-2">
            </hr>
            <p class="text-end text-muted mb-0"><em>{{ $value->created_at }}</em></p>
        </div>
    </x-card>
    @endforeach
</div>
</x-card>--}}
<div class="all__info-shop" style=" width:100%;">
    <div style="display:block;margin-bottom:20px;width:100%;">
        <div class="info-shop" style="background:#fff;margin-bottom:20px;width:100%;">
            <div class="all-header-info-shop" style="">
                <div class="header-left-pp__img-info-shop">
                    <img class="images-header-info-shop" src="{{ asset('viewsCustom/assets/images/hinh1.svg') }}"
                        style="border: 1px solid rgba(0, 0, 0, 0.20);border-radius:50%;width:150px;height:150px;" />
                </div>
                <div class="header-mid-text-info-shop">
                    <div style="display:flex;padding-bottom:12px;">
                        <div class="header-left-pp__text__top "
                            style="font-size:24px;color: #000;font-style: normal;font-weight: 500;line-height: normal;max-width:200px;">
                            <b>Korina</b>
                        </div>
                        <img style="padding-left:4px;" src="{{ asset('viewsCustom/assets/images/tick.svg') }}" />
                    </div>
                    <div type="button" class="header-right-info-shop" style="border:none;background:none;"
                        data-toggle="modal" data-target="#exampleModalReviewsContent">
                        <div style="display:flex;">
                            <div><img src="{{ asset('viewsCustom/assets/images/Vector.svg') }}" width:15px height:15px
                                    style="margin-bottom:7px;" /></div>
                            <div class=""
                                style="font-size:18px;color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;padding-left:8px;">
                                4.5</div>
                            <div class=""
                                style="font-size:18px;color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;width: 150px;padding-left:3px;">
                                (25,5k đánh giá)</div>
                        </div>
                    </div>
                    <button class="header-left-pp__text__bottom "
                        style="border:none;width: 99px;height: 33px;background: #0D6EFD;text-align:center;padding;7px;border-radius:5px;">
                        <span
                            style="color: #FFF;font-size: 16px;font-style: normal;font-weight: 700;line-height: normal;">Nhắn
                            tin</span>
                    </button>
                </div>
            </div>
            <div class="header-right-text"
                style="color: #303030; font-size: 16px; font-style: normal; font-weight: 400; line-height: normal; width: 272px; text-align: right;  flex-direction: column;">
                <div class="info-1">
                    <div class="change-info-shop" style="display:flex;padding-bottom:20px;justify-content: flex-end;">
                        <span>vubui.7592@gmail.com</span>
                        <img style="padding-left:16px;" src="{{ asset('viewsCustom/assets/images/mail.svg') }}"
                            style="width:16px;height:14px;" />
                    </div>

                    <div class="change-info-shop" style="display:flex;padding-bottom:20px;justify-content: flex-end;">
                        <span>Gò Vấp, Hồ Chí Minh</span>
                        <img style="padding-left:16px;" src="{{ asset('viewsCustom/assets/images/diachi.svg') }}"
                            style="width:13px;height:18px;" />
                    </div>

                </div>
                <div class="info-2">
                    <div class="change-info-shop" style="display:flex;padding-bottom:20px;justify-content: flex-end;">
                        <span>093 458 4939</span>
                        <img style="padding-left:16px;" src="{{ asset('viewsCustom/assets/images/phone.svg') }}"
                            style="width:20px;height:20px;" />
                    </div>
                    <div class="change-info-shop" style="display:flex;justify-content: flex-end;">
                        <span>Facebook</span>
                        <img style="padding-left:16px;" src="{{ asset('viewsCustom/assets/images/facebook.svg') }}"
                            style="width:20px;height:20px;" />
                    </div>
                </div>
            </div>

        </div>


        <div class="content__ads" style="display:flex;background:#E9E9E9;">
            <div class="content-all" style="display:flex;width:73.3%;background:#fff;border-radius: 10px;">
                <!-- Webside -->
                <div class=" job-note text-muted rounded index-web" style="width:100%;">
                    <div class="content__body-header" style="display:flex;padding-left:25px;padding-top:15px;">
                        <div class="header-left-pp" style="display:flex;">
                            <a href="https://www.facebook.com/buivushopee" style="display:flex;">
                                <div class="header-left-pp__img">
                                    <img src="{{ asset('viewsCustom/assets/images/hinh1.png') }}"
                                        style="border: 1px solid rgba(0, 0, 0, 0.20);border-radius:50%; width:45px; height:45px;" />
                                </div>

                                <div class="header-left-pp__text" style="display:bock;padding-left:9px;margin-top:5px;">
                                    <div style="display:flex;">
                                        <div class="header-left-pp__text__top fs16"
                                            style="color: #000;font-style: normal;font-weight: 500;line-height: normal;max-width:200px;">
                                            <b>Korina</b>
                                        </div>
                                        <img style="padding-left:4px;"
                                            src="{{ asset('viewsCustom/assets/images/tick.svg') }}" width:8.7px
                                            height:8.7px />
                                    </div>
                                    <div class="header-left-pp__text__bottom fs13"
                                        style="color: #A6A4A4;font-style: normal;font-weight: 400;line-height: normal;">
                                        22
                                        giờ trước</div>
                                </div>
                            </a>
                        </div>
                        <div class="header-right-pp" style="display:flex;padding-top:5px;">
                            <div><img src="{{ asset('viewsCustom/assets/images/Vector.svg') }}" width:15px height:15px
                                    style="margin-bottom:7px;" /></div>
                            <div class="fs15"
                                style="color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;padding-left:8px;">
                                4.5</div>
                            <div class="fs15"
                                style="color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;width: 140px;padding-left:3px;">
                                (25,5k đánh giá)</div>
                            <div class="see-more-info-shop" style="display:flex;" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                <h3 class="fs13"
                                    style="color: #A6A4A4;font-style: normal;font-weight: 400;line-height: normal;width:60px;">
                                    Xem
                                    thêm</h3><img src="{{ asset('viewsCustom/assets/images/popout.svg') }}"
                                    style="padding-left:5px;width:20px;height:20px;margin-top:-2px;" />
                            </div>
                        </div>

                    </div>
                    <div class="content__body-content" style="display:flex;padding-top:4.93%;padding-left:4.1%;">
                        <div class="content__body-content__title fs15"
                            style="display:block;color: #303030;font-style: normal;font-weight: 600;line-height: normal;">
                            <div class="items">Đơn Seeding</div>
                            <div class="items" style="width:120px;">Khu vực lên đơn</div>
                            <div class="items">Giao nhận</div>
                            <div class="items">Thanh toán</div>
                        </div>
                        <div class="content__body-content__act fs13"
                            style="color: #303030;font-style: normal;font-weight: 500;line-height: normal;text-align: right;">
                            <div class="items"
                                style="width: 94px;height: 26px;padding:5px;text-align:center;background: #FB6815;color: #FFF;font-size: 12px;font-weight: 700;margin-left:30px;border:none;border-radius: 5px;">
                                Shopee</div>
                            <div class="items" style="width: 128px;height: 26px;padding:5px;">Hà Nội</div>
                            <div class="items" style="width: 128px;height: 26px;padding:5px;">Không nhận hàng</div>
                            <div class="items" style="width: 128px;height: 26px;padding:5px;">Shop thanh toán</div>
                        </div>
                        <div class="content__body-content__btn" style="text-align: right; margin-left:13.14%;">
                            <div class="wage" style="width:193px;">
                                <p class=" fs16"
                                    style="color: #269300;font-style: normal;font-weight: 600;line-height: normal;border-radius: 5px;border: 1px solid #269300;height: 44px;text-align:center;padding:12px;align-item:center;">
                                    Tiền công: 14. 500 đ</p>
                            </div>
                            <div class="btn-receive-application" style="width:105px;">
                                <a href="#nhan-don"><button type="button" class="btn fs14" data-toggle="modal"
                                        data-target="#exampleModalCenter"
                                        style="border-radius: 5px;border-radius: 5px;background: #F5AE5D;color: #FFF;font-style: normal;font-weight: 700;line-height: normal;width:105px;height:43px;padding:12px;">Nhận
                                        Đơn</button></a>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <!-- Mobile -->
            <div class="index-mobile" style="width:100%;background: #fff;">
                <div class="content__body-header"
                    style="display:flex;padding-left:10px;padding-top:10px;padding-right:10px;">
                    <div class="header-left-pp" style="display:flex;">
                        <a href="https://www.facebook.com/buivushopee" style="display:flex;">
                            <div class="header-left-pp__img">
                                <img src="{{ asset('viewsCustom/assets/images/hinh1.png') }}"
                                    style="border: 1px solid rgba(0, 0, 0, 0.20);border-radius:50%; width:45px; height:45px;" />
                            </div>
                            <div class="header-left-pp__text" style="display:bock;padding-left:9px;margin-top:5px;">
                                <div style="display:flex;">
                                    <div class="header-left-pp__text__top fs16"
                                        style="color: #000;font-style: normal;font-weight: 500;line-height: normal;max-width:200px;">
                                        <b>Korina</b>
                                    </div>
                                    <img style="padding-left:4px;"
                                        src="{{ asset('viewsCustom/assets/images/tick.svg') }}" width:8.7px
                                        height:8.7px />
                                </div>
                                <div style="display:flex;">
                                    <div class="header-left-pp__text__bottom fs12"
                                        style="color: #A6A4A4;font-style: normal;font-weight: 400;line-height: normal;width:100px;">
                                        22 giờ trước</div>
                                </div>
                            </div>
                        </a>
                        <div class="header-right-pp" style="display:flex;padding-top:10px;">
                            <div><img src="{{ asset('viewsCustom/assets/images/Vector.svg') }}"
                                    style="margin-top:-15px;width:15px; height:15px;" /></div>
                            <div class="fs12"
                                style="color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;padding-left:8px;">
                                4.5</div>
                            <div class="fs12"
                                style="color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;padding-left:3px;">
                                (25,5k đánh giá)</div>
                        </div>
                        <!-- <div class="see-more" style="display:flex;"data-toggle="modal" data-target="#exampleModalMobile" >
                            <h3 class="fs13" style="color: #A6A4A4;font-style: normal;font-weight: 400;line-height: normal;width:60px;"  >xem thêm</h3><img src="{{ asset('viewsCustom/assets/images/popout.svg') }}"  style="padding-left:5px;width:20px;height:20px;margin-top:-2px;"/>                    
                        </div> -->
                    </div>
                </div>
                <div class="mobile-wage" style="padding-top:12px;">
                    <p class="fs13"
                        style="color: #269300;font-style: normal;font-weight: 800;line-height: normal;border-radius: 5px;border: 1px solid #269300;height: 40px;text-align:center;padding:12px;align-item:center;width:168px;">
                        Tiền công: 14. 500 đ</p>
                </div>
                <div class="mobile-modal-body" style="display:flex;padding-left: 10px;padding-right: 10px;"
                    data-toggle="modal" data-target="#exampleModalMobile">
                    <div class="body-title" style="width:150px;">
                        <div class="items">Đơn Seeding</div>
                        <div class="items" style="width:130px;">Hình thức giao nhận</div>
                        <div class="items">Thanh toán</div>
                        <div class="items">Khu vực lên đơn</div>
                    </div>
                    <div class="body-content" style="text-align:right;position: absolute;right: 20px;">
                        <div class="items fs14 items-tiktok"
                            style="color: #FFF;font-style: normal;font-weight: 400;line-height: normal;border-radius: 5px;background:rgba(253, 15, 208, 1);padding:5px 25px ;width:90px;">
                            Lazada</div>
                        <div class="items">Không nhận hàng</div>
                        <div class="items">Shop thanh toán</div>
                        <div class="items">Hà Nội</div>
                    </div>
                </div>
                <div class=btn-receive-application-mobile>
                    <button type="button" class="btn btn-primary fs14" data-toggle="modal"
                        data-target="#exampleModalMobile"
                        style="border-radius: 5px;border: 1.5px solid #E0793F;background: #E0793F;color: #FFF;font-style: normal;font-weight: 700;line-height: normal;padding:10px 18px;margin-bottom: 18px;">Nhận
                        đơn</button>
                </div>
            </div>
            <!-- Modals mobile -->
            <div class="modal fade" id="exampleModalMobile" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog " role="document" style="width:100%;margin-left:5px;">
                    <div class="modal-content" style="">
                        <div class="modal-header" style="">
                            <div class="items" style="display:flex; padding-top:5px;padding-left:5px;">
                                <div class="content__body-header" style="display:flex;padding-left:10px;">
                                    <div class="header-left-pp" style="display:flex;">
                                        <a href="https://www.facebook.com/buivushopee" style="display:flex;">
                                            <div class="header-left-pp__img">
                                                <img src="{{ asset('viewsCustom/assets/images/hinh1.png') }}"
                                                    style="border: 1px solid rgba(0, 0, 0, 0.20);border-radius:50%; width:45px; height:45px;" />
                                            </div>
                                            <div class="header-left-pp__text"
                                                style="display:bock;padding-left:9px;margin-top:5px;">
                                                <div style="display:flex;">
                                                    <div class="header-left-pp__text__top fs16"
                                                        style="color: #000;font-style: normal;font-weight: 500;line-height: normal;max-width:200px;">
                                                        <b>Korina</b>
                                                    </div>
                                                    <img style="padding-left:4px;"
                                                        src="{{ asset('viewsCustom/assets/images/tick.svg') }}"
                                                        width:8.7px height:8.7px />
                                                </div>
                                                <div style="display:flex;">
                                                    <div class="header-left-pp__text__bottom fs12"
                                                        style="color: #A6A4A4;font-style: normal;font-weight: 400;line-height: normal;width:100px;">
                                                        22 giờ trước</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="header-modal-right-info-shop"
                                            style="display:flex;padding-top:10px;">
                                            <div><img src="{{ asset('viewsCustom/assets/images/Vector.svg') }}"
                                                    width:15px height:15px style="margin-top:-15px;" /></div>
                                            <div class="fs12"
                                                style="color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;padding-left:8px;">
                                                4.5</div>
                                            <div class="fs12"
                                                style="color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;padding-left:3px;">
                                                (25,5k đánh giá)</div>
                                        </div>

                                    </div>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                    style="border: none;background:none; position: absolute;right: 17px;top: 22px;"><span
                                        aria-hidden="true"><img
                                            src="{{ asset('viewsCustom/assets/images/clone.svg') }}"></span> </button>
                            </div>
                        </div>

                        <div class="modal-body" style="display:flex;">
                            <div class="index-mobile" style="width:100%;background: #fff;">

                                <div class="mobile-wage" style="padding-top:12px;">
                                    <p class="fs13"
                                        style="color: #269300;font-style: normal;font-weight: 800;line-height: normal;border-radius: 5px;border: 1px solid #269300;height: 40px;text-align:center;padding:12px;align-item:center;width:168px;">
                                        Tiền công: 14. 500 đ</p>
                                </div>
                                <div class="mobile-modal-body"
                                    style="display:flex;padding-left: 10px;padding-right: 10px;">
                                    <div class="body-title" style="width:150px;">
                                        <div class="items">Đơn Seeding</div>
                                        <div class="items">Trạng thái</div>
                                        <div class="items" style="width:130px;">Hình thức giao nhận</div>
                                        <div class="items">Vận chuyển</div>
                                        <div class="items">Thanh toán</div>
                                        <div class="items">Hình thức đánh giá</div>
                                        <div class="items" style="width:130px;">Yêu cầu tài khoản đặt</div>
                                        <div class="items">Áp mã</div>
                                        <div class="items">Khu vực lên đơn</div>
                                    </div>
                                    <div class="body-content" style="text-align:right;position: absolute;right: 20px;">
                                        <div class="items fs14 items-tiktok"
                                            style="color: #FFF;font-style: normal;font-weight: 400;line-height: normal;border-radius: 5px;background:rgba(253, 15, 208, 1);padding:5px 25px ;width:90px;">
                                            Lazada</div>
                                        <div class="items fs13"
                                            style="color: rgba(38, 147, 0, 0.80);font-style: normal;font-weight: 400;line-height: normal;">
                                            Hoàn thành</div>
                                        <div class="items">Không nhận hàng</div>
                                        <div class="items fs13"
                                            style="color: #DE8C49;font-style: normal;font-weight: 400;line-height: normal;">
                                            Đơn giao nhanh</div>
                                        <div class="items">Shop thanh toán</div>
                                        <div class="items">Shop gửi đánh giá</div>
                                        <div class="items"
                                            style="border-radius: 5px;background: #FBC250;width:109px;padding: 5px 10px;margin-top:-10px;">
                                            Tài khoàn vàng</div>
                                        <div class="items">Áp mã freeship</div>
                                        <div class="items">Hà Nội</div>
                                    </div>
                                </div>
                                <div class=btn-receive-application-mobile style="display:flex;">
                                    <button type="button" class="btn btn-secondary fs14" data-dismiss="modal"
                                        style="border-radius: 5px;border: 1.5px solid #A6A4A4;background:none;color: #A6A4A4;font-style: normal;font-weight: 700;line-height: normal;height: 30px;margin-left: -30px;">Hủy</button>
                                    <button type="button" class="btn btn-primary fs14" data-toggle="modal"
                                        data-target="#exampleModalMobilell"
                                        style="border-radius: 5px;border: 1.5px solid #E0793F;background: #E0793F;color: #FFF;font-style: normal;font-weight: 700;line-height: normal;padding:5px 18px;margin-bottom: 18px;margin-left: 15px;height: 30px;">Nhận
                                        đơn</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal lưu ý -->
            <div class="modal fade" id="exampleModalMobilell" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog " role="document" style="width:100%;margin-left:5px;">
                    <div class="modal-content" style="padding:5%;">
                        <div class="modal-header" style="padding:0px 0px 0px 30px">
                            <div class="items" style="display:flex; padding-top:5px;padding-left:5px;">
                                <img src="{{ asset('viewsCustom/assets/images/warning.svg') }}" width:18.3px
                                    height:15.8px style="margin-bottom:25px;" />
                                <p class="fs16"
                                    style="color: #EB3131;font-style: normal;font-weight: 600;line-height: normal;padding-left:10px;">
                                    Lưu ý đơn hàng</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                    style="border: none;background:none; position: absolute;right: 17px;top: 22px;"><span
                                        aria-hidden="true"><img
                                            src="{{ asset('viewsCustom/assets/images/clone.svg') }}"></span> </button>
                            </div>
                        </div>

                        <div class="modal-body" style="display:flex;">
                            <div class="body-text" style=" width: 100%;">
                                <ul class="items fs12" style="list-style-type: disc;z-index:999;">
                                    <li style="margin-bottom:0px !important;list-style-type: disc "> • Người đặt không
                                        cần phải nhận hàng</li>
                                    <li style="margin-bottom:0px !important;"> • Người đặt không cần thanh toán cho đơn
                                        này</li>
                                    <li style="margin-bottom:0px !important;"> • Shop sẽ gửi ảnh, video sản phẩm và
                                        hướng dẫn đánh giá cho đơn hàng</li>
                                    <li style="margin-bottom:0px !important;"> • Yêu cầu tài khoản đặt là tài khoản hạng
                                        vàng đối với Shopee, đối với các nền tảng khác chỉ cần có avatar và tên người
                                        dùng thật</li>
                                    <li style="margin-bottom:0px !important;"> • Địa chỉ lên đơn là Hà Nội</li>
                                    <li
                                        style="padding-top:5px;color: #000;font-size: 12px;font-style: normal;font-weight: 700;line-height: normal;">
                                        <input type="checkbox" class="checkbox" required=""
                                            style="margin-bottom:5px;margin-right:8px;" />Nếu bạn tiếp tục, bạn phải
                                        tuân thủ theo chính sách của chúng tôi.
                                    </li>
                                </ul>
                                <div class="items" style="padding-top:17px;display:flex;padding-left:100px;">
                                    <a href="#"><button type="button" class="btn btn-secondary fs14"
                                            data-dismiss="modal"
                                            style="border-radius: 5px;border: 1.5px solid #A6A4A4;background:none;color: #A6A4A4;font-style: normal;font-weight: 700;line-height: normal;height:32px;width:65px;margin-left:-30px;">Hủy</button></a>
                                    <button type="button" class="btn btn-primary fs14"
                                        style="margin-left:15px;border-radius: 5px;border: 1.5px solid #E0793F;background: #E0793F;color: #FFF;font-style: normal;font-weight: 700;line-height: normal;padding:5px 18px;width:110px;height:32px;">Nhận
                                        đơn</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modals webside -->

            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog " role="document" style="width:100%;">
                    <div class="modal-content" style=" width:54rem;">
                        <div class="modal-header" style="">
                            <a href="https://www.facebook.com/buivushopee">
                                <div class="header-left-pp" style="display:flex;">
                                    <div class="header-left-pp__img">
                                        <img src="{{ asset('viewsCustom/assets/images/hinh1.png') }}"
                                            style="border: 1px solid rgba(0, 0, 0, 0.20);border-radius:50%; width:45px; height:45px;" />
                                    </div>
                                    <div class="header-left-pp__text"
                                        style="display:bock;margin-top:5px;padding-left:9px;">
                                        <div style="display:flex;">
                                            <div class="header-left-pp__text__top fs14"
                                                style="color: #000;font-style: normal;font-weight: 500;line-height: normal;">
                                                Korina</div>
                                            <img style="padding-left:2.8px;"
                                                src="{{ asset('viewsCustom/assets/images/tick.svg') }}" width:8.7px
                                                height:8.7px />
                                        </div>
                                        <div class="header-left-pp__text__bottom fs12"
                                            style="color: #A6A4A4;font-style: normal;font-weight: 400;line-height: normal;">
                                            22 giờ trước</div>
                                    </div>
                                </div>
                            </a>
                            <div class="header-right-pp" style="display:flex;padding-right:40%;">
                                <div><img src="{{ asset('viewsCustom/assets/images/Vector.svg') }}" width:15px
                                        height:15px style="margin-bottom:7px;" /></div>
                                <div class="fs15"
                                    style="color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;padding-left:8px;">
                                    4.5</div>
                                <div class="fs15"
                                    style="color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;">
                                    (25,5k đánh giá)</div>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                style="border: none;background:none;"><span aria-hidden="true"><img
                                        src="{{ asset('viewsCustom/assets/images/clone.svg') }}"></span> </button>
                        </div>
                        <div class="modal-body" style="display:flex;">
                            <div class="body-title" style="padding-right:10%;">
                                <div class="items">Đơn Seeding</div>
                                <div class="items">Trạng thái</div>
                                <div class="items">Hình thức giao nhận</div>
                                <div class="items">Vận chuyển</div>
                                <div class="items">Thanh toán</div>
                                <div class="items">Hình thức đánh giá</div>
                                <div class="items" style="width:130px;">Yêu cầu tài khoản đặt</div>
                                <div class="items">Áp mã</div>
                                <div class="items">Khu vực lên đơn</div>
                            </div>
                            <div class="body-content" style="text-align:right;">
                                <div class="items fs13 items-tiktok-webside"
                                    style="color: #FFF;font-style: normal;font-weight: 700;line-height: normal;border-radius: 5px;background: #000;padding:8px 25px ;width:90px;">
                                    Tiktok</div>
                                <div class="items fs13"
                                    style="color: rgba(38, 147, 0, 0.80);font-style: normal;font-weight: 700;line-height: normal;">
                                    Hoàn thành</div>
                                <div class="items">Không nhận hàng</div>
                                <div class="items fs13"
                                    style="color: #DE8C49;font-style: normal;font-weight: 700;line-height: normal;">Đơn
                                    giao nhanh</div>
                                <div class="items">Shop thanh toán</div>
                                <div class="items">Shop gửi đánh giá</div>
                                <div class="items"
                                    style="border-radius: 5px;background: #FBC250;width:130px;padding: 8px 20px;">Tài
                                    khoàn vàng</div>
                                <div class="items">Áp mã freeship</div>
                                <div class="items">Hà Nội</div>
                            </div>
                            <div class="body-text" style="padding-left:10%; width: 50%;">
                                <div class="items fs16"
                                    style="color: #269300;font-style: normal;font-weight: 600;line-height: normal;padding:12px 21px;border-radius: 5px;border: 1px solid #269300;width:200px;">
                                    Tiền công: 14. 500 đ</div>
                                <div class="items" style="display:flex; padding-top: 21px;">
                                    <img src="{{ asset('viewsCustom/assets/images/warning.svg') }}" width:18.3px
                                        height:15.8px style="margin-bottom:20px;" />
                                    <p class="fs16 "
                                        style="color: #EB3131;font-style: normal;font-weight: 600;line-height: normal;padding-left:10px;">
                                        Lưu ý đơn hàng</p>
                                </div>
                                <div class="items fs14"
                                    style="color: #303030;text-align: justify;font-style: normal;font-weight: 400;line-height: 164%; /* 22.96px */letter-spacing: 0.7px;">
                                    • Người đặt không cần phải nhận hàng <br>
                                    • Người đặt không cần thanh toán cho đơn này<br>
                                    • Shop sẽ gửi ảnh, video sản phẩm và hướng dẫn đánh giá cho đơn hàng <br>
                                    • Yêu cầu tài khoản đặt là tài khoản hạng vàng đối với Shopee, đối với các nền tảng
                                    khác chỉ cần có avatar và tên người dùng thật<br>
                                    • Địa chỉ lên đơn là Hà Nội<br>
                                    <input type="checkbox" class="checkbox" required=""
                                        style="margin-bottom:5px;margin-right:8px;font-weight: 700;" />Nếu bạn tiếp tục,
                                    bạn phải tuân thủ theo chính sách của chúng tôi.

                                </div>
                                <div class="items" style="padding-top:50px;display:flex;">
                                    <a href="#"><button type="button" class="btn btn-secondary fs14"
                                            data-dismiss="modal"
                                            style="border-radius: 5px;border: 1.5px solid #A6A4A4;background:none;color: #A6A4A4;font-style: normal;font-weight: 700;line-height: normal;">Hủy</button></a>
                                    <button type="button" class="btn btn-primary fs14"
                                        style="margin-left:30px;border-radius: 5px;border: 1.5px solid #E0793F;background: #E0793F;color: #FFF;font-style: normal;font-weight: 700;line-height: normal;padding:10px 25px;">Nhận
                                        đơn</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Reviews -->
            <div class="modal-reviews">
                <div class="modal fade" id="exampleModalReviewsContent" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content"
                            style="margin-left: 15px;width: 100% !important; margin-right: 10px;">
                            <div class="modal-header">
                                <div
                                    style="width:100%;height:55px;display: flex;align-items: center;padding-left:40px;">
                                    <div
                                        style="color: #E0793F;font-size: 18px;font-style: normal;font-weight: 500;line-height: normal;border-bottom:1px solid rgba(0, 0, 0, 0.11);padding-bottom:10px;">
                                        Đánh giá cộng đồng</div>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                    style="border: none;background:none;"><span aria-hidden="true"><img
                                            src="{{ asset('viewsCustom/assets/images/clone.svg') }}"></span> </button>
                            </div>
                            <div class="modal-body">
                                <div class="reviews" style="background: #fff;border-radius: 10px;padding-bottom: 10px">

                                    <div style="height: 100%;">
                                        <div style="margin-left:20px;margin-top:20px;">
                                            <div style="width:100%;">
                                                <div
                                                    style="justify-content: space-between;display: flex;align-items: center;">
                                                    <div style="display: inline-flex;align-items: center;gap: 10px;">
                                                        <div>
                                                            <img style="border: 1px solid rgba(0, 0, 0, 0.20);border-radius:50%; width:45px; height:45px;"
                                                                src="{{ asset('viewsCustom/assets/images/faces-clipart/pic-1.png') }}"
                                                                alt="">
                                                        </div>
                                                        <div style="display: block; width: 59.59%;">
                                                            <span
                                                                style="color: #000;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Trần
                                                                Tuấn Anh</span>
                                                            <span
                                                                style="color: rgba(166, 164, 164, 0.70);font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">2023/06/14
                                                                - 19:50</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="display: inline-flex;align-items: flex-start;gap: 5px;width: 12.33%;margin-left:auto;">
                                                        <span
                                                            style="color: #FBC250;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">5</span>
                                                        <img src="{{ asset('viewsCustom/assets/images/star.svg') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                style="width:100%;border-bottom:1px solid #D2D2CD;margin-top:10px;padding-bottom:20px;">
                                                <span>Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy
                                                    tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt!</span>
                                            </div>
                                        </div>

                                        <div style="margin-left:20px;margin-top:20px;">
                                            <div style="width:100%;">
                                                <div
                                                    style="justify-content: space-between;display: flex;align-items: center;">
                                                    <div style="display: inline-flex;align-items: center;gap: 10px;">
                                                        <div>
                                                            <img style="border: 1px solid rgba(0, 0, 0, 0.20);border-radius:50%; width:45px; height:45px;"
                                                                src="{{ asset('viewsCustom/assets/images/faces-clipart/pic-1.png') }}"
                                                                alt="">
                                                        </div>
                                                        <div style="display: block; width: 59.59%;">
                                                            <span
                                                                style="color: #000;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Trần
                                                                Tuấn Anh</span>
                                                            <span
                                                                style="color: rgba(166, 164, 164, 0.70)font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">2023/06/14
                                                                - 19:50</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="display: inline-flex;align-items: flex-start;gap: 5px;width: 12.33%;margin-left:auto;">
                                                        <span
                                                            style="color: #FBC250;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">5</span>
                                                        <img src="{{ asset('viewsCustom/assets/images/star.svg') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                style="width:100%;border-bottom:1px solid #D2D2CD;margin-top:10px;padding-bottom:20px;">
                                                <span>Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy
                                                    tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt!</span>
                                            </div>
                                        </div>

                                        <div style="margin-left:20px;margin-top:20px;">
                                            <div style="width:100%;">
                                                <div
                                                    style="justify-content: space-between;display: flex;align-items: center;">
                                                    <div style="display: inline-flex;align-items: center;gap: 10px;">
                                                        <div>
                                                            <img style="border: 1px solid rgba(0, 0, 0, 0.20);border-radius:50%; width:45px; height:45px;"
                                                                src="{{ asset('viewsCustom/assets/images/faces-clipart/pic-1.png') }}"
                                                                alt="">
                                                        </div>
                                                        <div style="display: block; width: 59.59%;">
                                                            <span
                                                                style="color: #000;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Trần
                                                                Tuấn Anh</span>
                                                            <span
                                                                style="color: rgba(166, 164, 164, 0.70);font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">2023/06/14
                                                                - 19:50</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="display: inline-flex;align-items: flex-start;gap: 5px;width: 12.33%;margin-left:auto;">
                                                        <span
                                                            style="color: #FBC250;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">5</span>
                                                        <img src="{{ asset('viewsCustom/assets/images/star.svg') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                style="width:100%;border-bottom:1px solid #D2D2CD;margin-top:10px;padding-bottom:20px;">
                                                <span>Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy
                                                    tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt!</span>
                                            </div>
                                        </div>

                                        <div style="margin-left:20px;margin-top:20px;">
                                            <div style="width:100%;">
                                                <div
                                                    style="justify-content: space-between;display: flex;align-items: center;">
                                                    <div style="display: inline-flex;align-items: center;gap: 10px;">
                                                        <div>
                                                            <img style="border: 1px solid rgba(0, 0, 0, 0.20);border-radius:50%; width:45px; height:45px;"
                                                                src="{{ asset('viewsCustom/assets/images/faces-clipart/pic-1.png') }}"
                                                                alt="">
                                                        </div>
                                                        <div style="display: block; width: 59.59%;">
                                                            <span
                                                                style="color: #000;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Trần
                                                                Tuấn Anh</span>
                                                            <span
                                                                style="color: rgba(166, 164, 164, 0.70);font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">2023/06/14
                                                                - 19:50</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="display: inline-flex;align-items: flex-start;gap: 5px;width: 12.33%;margin-left:auto;">
                                                        <span
                                                            style="color: #FBC250;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">5</span>
                                                        <img src="{{ asset('viewsCustom/assets/images/star.svg') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                style="width:100%;border-bottom:1px solid #D2D2CD;margin-top:10px;padding-bottom:20px;">
                                                <span>Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy
                                                    tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt!</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div style="text-align: center;">
                                        <span>Xem thêm <i style="margin-left:auto;font-size:20px;"
                                                class="ri-arrow-down-s-line"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- phần quảng cáo -->
            <div class=" content-ads index-web shadow-sm"
                style="margin-left:22px;width:200px;height:290px;background:#FFF;border-radius:10px;">
                <a href="https://shopee.vn/%C3%81o-thun-Unisex-m%C3%A1c-RealLife-cao-su-FKZ-Unisex-ph%C3%B4ng-tr%C6%A1n-nam-n%E1%BB%AF-tay-l%E1%BB%A1-oversize-form-r%E1%BB%99ng-i.183840366.23825993719?sp_atk=af391579-fcac-4eb1-b2ce-358e20fcc785&xptdk=af391579-fcac-4eb1-b2ce-358e20fcc785"
                    style="display:block;">
                    <div><img src="{{ asset('viewsCustom/assets/images/product-demo.svg') }}"
                            style="width:200px;height:200px;border-bottom: 1px #888888 !important;border-radius:10px 10px 0px 0px" />
                    </div>
                    <div
                        style="color: #000;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;width:169px;height:auto;padding-top:6px;margin-left:10px;text-align:left;">
                        Áo thun nam freesize Unisex</div>
                    <div class="ads-content" style="display:left !important;">
                        <div
                            style="border-radius: 3px 0px 0px 3px;border: 1px solid rgba(0, 0, 0, 0.50);border-right:none;width:31px;height:23px;margin-left:10px;color: #000;font-family: Inter;font-size: 12px;font-style: normal;font-weight: 400;line-height: normal;text-align:center;padding:3px;">
                            30%</div>
                        <div
                            style="border-radius: 0px 3px 3px 0px;border: 1px solid rgba(0, 0, 0, 0.50);width:56px;height:23px;color: rgba(0, 0, 0, 0.90);font-family: Inter;font-size: 12px;font-style: normal;font-weight: 700;line-height: normal;text-align:center;padding:3px;">
                            AC5F</div>
                        <div
                            style="color: #FFF;font-size: 13px;font-style: normal;font-weight: 400;line-height: normal;letter-spacing: 1.235px;border-radius: 3px;background: #E0793F;width:90px;height:23px;margin-left:9px;padding:4px;text-align:center;">
                            659.000 đ</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- reviews -->
    <div class="all-reviews-shop reviews" style="background: #fff;border-radius: 10px;padding-bottom: 10px">
        <div style="width:100%;height:55px;display: flex;align-items: center;padding-left:40px;">
            <div
                style="width:59.14%;color: #E0793F;font-size: 18px;font-style: normal;font-weight: 500;line-height: normal;border-bottom:1px solid rgba(0, 0, 0, 0.11);padding-bottom:10px;">
                Đánh giá cộng đồng</div>
        </div>
        <div style="height: 100%;">
            <div style="margin-left:20px;margin-top:20px;">
                <div style="width:100%;">
                    <div style="justify-content: space-between;display: flex;align-items: center;">
                        <div style="display: inline-flex;align-items: center;gap: 10px;">
                            <div>
                                <img style="border: 1px solid rgba(0, 0, 0, 0.20);border-radius:50%; width:45px; height:45px;"
                                    src="{{ asset('viewsCustom/assets/images/faces-clipart/pic-1.png') }}" alt="">
                            </div>
                            <div style="display: block; width: 59.59%;">
                                <span
                                    style="color: #000;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Trần
                                    Tuấn Anh</span>
                                <span
                                    style="color: rgba(166, 164, 164, 0.70);font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">2023/06/14
                                    - 19:50</span>
                            </div>
                        </div>
                        <div
                            style="display: inline-flex;align-items: flex-start;gap: 5px;width: 12.33%;margin-left:auto;">
                            <span
                                style="color: #FBC250;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">5</span>
                            <img src="{{ asset('viewsCustom/assets/images/star.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div style="width:100%;border-bottom:1px solid #D2D2CD;margin-top:10px;padding-bottom:20px;">
                    <span>Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy
                        tín. Chất lượng tốt!</span>
                </div>
            </div>

            <div style="margin-left:20px;margin-top:20px;">
                <div style="width:100%;">
                    <div style="justify-content: space-between;display: flex;align-items: center;">
                        <div style="display: inline-flex;align-items: center;gap: 10px;">
                            <div>
                                <img style="border: 1px solid rgba(0, 0, 0, 0.20);border-radius:50%; width:45px; height:45px;"
                                    src="{{ asset('viewsCustom/assets/images/faces-clipart/pic-1.png') }}" alt="">
                            </div>
                            <div style="display: block; width: 59.59%;">
                                <span
                                    style="color: #000;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Trần
                                    Tuấn Anh</span>
                                <span
                                    style="color: rgba(166, 164, 164, 0.70);font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">2023/06/14
                                    - 19:50</span>
                            </div>
                        </div>
                        <div
                            style="display: inline-flex;align-items: flex-start;gap: 5px;width: 12.33%;margin-left:auto;">
                            <span
                                style="color: #FBC250;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">5</span>
                            <img src="{{ asset('viewsCustom/assets/images/star.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div style="width:100%;border-bottom:1px solid #D2D2CD;margin-top:10px;padding-bottom:20px;">
                    <span>Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy
                        tín. Chất lượng tốt!</span>
                </div>
            </div>

            <div style="margin-left:20px;margin-top:20px;">
                <div style="width:100%;">
                    <div style="justify-content: space-between;display: flex;align-items: center;">
                        <div style="display: inline-flex;align-items: center;gap: 10px;">
                            <div>
                                <img style="border: 1px solid rgba(0, 0, 0, 0.20);border-radius:50%; width:45px; height:45px;"
                                    src="{{ asset('viewsCustom/assets/images/faces-clipart/pic-1.png') }}" alt="">
                            </div>
                            <div style="display: block; width: 59.59%;">
                                <span
                                    style="color: #000;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Trần
                                    Tuấn Anh</span>
                                <span
                                    style="color: rgba(166, 164, 164, 0.70);font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">2023/06/14
                                    - 19:50</span>
                            </div>
                        </div>
                        <div
                            style="display: inline-flex;align-items: flex-start;gap: 5px;width: 12.33%;margin-left:auto;">
                            <span
                                style="color: #FBC250;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">5</span>
                            <img src="{{ asset('viewsCustom/assets/images/star.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div style="width:100%;border-bottom:1px solid #D2D2CD;margin-top:10px;padding-bottom:20px;">
                    <span>Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy
                        tín. Chất lượng tốt!</span>
                </div>
            </div>

            <div style="margin-left:20px;margin-top:20px;">
                <div style="width:100%;">
                    <div style="justify-content: space-between;display: flex;align-items: center;">
                        <div style="display: inline-flex;align-items: center;gap: 10px;">
                            <div>
                                <img style="border: 1px solid rgba(0, 0, 0, 0.20);border-radius:50%; width:45px; height:45px;"
                                    src="{{ asset('viewsCustom/assets/images/faces-clipart/pic-1.png') }}" alt="">
                            </div>
                            <div style="display: block; width: 59.59%;">
                                <span
                                    style="color: #000;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Trần
                                    Tuấn Anh</span>
                                <span
                                    style="color: rgba(166, 164, 164, 0.70);font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">2023/06/14
                                    - 19:50</span>
                            </div>
                        </div>
                        <div
                            style="display: inline-flex;align-items: flex-start;gap: 5px;width: 12.33%;margin-left:auto;">
                            <span
                                style="color: #FBC250;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">5</span>
                            <img src="{{ asset('viewsCustom/assets/images/star.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div style="width:100%;border-bottom:1px solid #D2D2CD;margin-top:10px;padding-bottom:20px;">
                    <span>Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy
                        tín. Chất lượng tốt!</span>
                </div>
            </div>

        </div>
        <div style="text-align: center;">
            <span>Xem thêm <i style="margin-left:auto;font-size:20px;" class="ri-arrow-down-s-line"></i></span>
        </div>
    </div>

</div>
<style>
.modal {
    --bs-modal-margin: 0rem;
}

.content__body-content__act .items {

    margin-bottom: 15px;
}

.content__body-content__title .items {
    padding-bottom: 20%;
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

* {
    font-family: 'Lato'sans-serif !important;
}

ul .items li {
    list-style-type: square !important;
}

.body-text p {
    color: #303030;
    font-size: 12px;
    font-style: normal;
    font-weight: 400;
    line-height: 150%;
    /* 18px */
    letter-spacing: 0.36px;
}

@media (max-width: 2400px) {
    .see-more-info-shop {
        margin-left: 100px;
    }

    .all-header-info-shop {
        display: flex;
    }

    .header-right-text {
        padding-top: 32px;
        display: flex;
    }

    .info-shop {
        display: flex;
        height: 200px;
        border-radius: 10px;
    }

    .header-right-info-shop {
        padding-bottom: 15px;
    }

    .header-mid-text-info-shop {
        padding-left: 20px;
        padding-top: 50px;
    }

    .header-left-pp__img-info-shop {
        padding-left: 42px;
        padding-top: 24px;
    }

    .images-header-info-shop {
        width: 150px;
        height: 150px;
    }

    .all__info-shop {
        display: flex;
    }

    .header-right-text {
        margin-left: 60px;
    }

    .reviews {
        position: absolute;
        right: 16%;
        width: 320px;
    }

    .row {
        margin-left: 16px;
    }

    .body-title .items {
        color: #303030;
        font-size: 13px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        padding-bottom: 14px;
    }

    .body-content .items {
        color: #303030;
        font-size: 13px;
        font-style: normal;
        font-weight: 300;
        line-height: normal;
        margin-bottom: 10px;


    }

    .btn-receive-application button {
        width: 100px;
    }

    .see-more {
        position: absolute;
        top: 22px;
        right: 250px;
    }

    .modal-content {
        width: 850px !important;
    }

    .items-tiktok {
        margin-left: 19%;
    }

    .wage {
        margin-right: 25px;
        width: 131px;
    }

    .wage p {
        width: 193px;
        margin-right: 25px;
        margin-left: 0px;
    }

    .btn-receive-application {
        padding-bottom: 20px;
        padding-top: 94px;
        margin-left: 41%;
    }

    .header-right-pp {
        padding-left: 50px;
    }

    .items-tiktok-webside {
        margin-top: -5px;
        margin-left: 40px;
    }

}

@media (max-width: 1920px) {
    .see-more-info-shop {
        margin-left: 130px;
    }

    .header-right-text {
        margin-left: 80px;
    }

    .reviews {
        position: absolute;
        right: 12%;
    }

    .body-title .items {
        color: #303030;
        font-size: 13px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        padding-bottom: 14px;
    }

    .body-content .items {
        color: #303030;
        font-size: 13px;
        font-style: normal;
        font-weight: 300;
        line-height: normal;
        margin-bottom: 10px;


    }

    .btn-receive-application button {
        width: 100px;
    }

    .see-more {
        position: absolute;
        top: 22px;
        right: 250px;
    }

    .modal-content {
        width: 850px !important;
    }

    .wage p {
        width: 193px;
        margin-right: 25px;
        margin-left: 0px;
    }

    .btn-receive-application {
        padding-bottom: 20px;
        padding-top: 94px;
        margin-left: 41%;
    }

    .header-right-pp {
        padding-left: 3%;
    }

    .items-tiktok-webside {
        margin-top: -5px;
        margin-left: 40px;
    }

}

.modal-dialog {
    top: 10%;
    right: 10%;
}

.content__body-content__act {
    margin-left: 5%;
}

@media (min-width:360px) {
    .all-reviews-shop {
        display: none !important;
    }

    .modal-reviews {
        display: block !important;
    }

}

@media (min-width:1440px) {
    .all-reviews-shop {
        display: block !important;
    }

    .modal-reviews {
        display: none !important;
    }
}

@media (max-width: 650px) {
    .change-info-shop span {
        order: 1;
    }

    .change-info-shop {
        justify-content: flex-start !important;
    }

    .change-info-shop span {
        padding-left: 10px;
    }

    .header-right-text {
        display: grid;
        grid-template-columns: 50% 50%;

    }

    .info-1 {
        position: absolute;
    }

    .info-2 {
        position: absolute;
        right: 18px;
    }

    .header-left-pp__img-info-shop {
        padding-left: 10px;
        padding-top: 10px;
    }

    .all-reviews-shop {
        display: none !important;
    }

    .modal-reviews {
        display: block !important;
    }

    .images-header-info-shop {
        width: 140px;
        height: 140px;
    }

    .all-header-info-shop {}

    .info-shop {
        display: block;
        height: 300px;
        border-radius: 0px;
    }
}

@media (max-width:1440px) {
    .reviews {
        position: absolute;
        right: 0px;

    }

    .btn-receive-application {
        padding-bottom: 20px;
        padding-top: 94px;
        margin-left: 41%;
    }

    .wage {
        width: 151px;
    }

    .wage p {
        margin-right: 25px;
        margin-left: 0px;
    }

    .wage {}

    .see-more {
        position: absolute;
        top: 22px;
        right: 250px;
    }

}

@media (max-width:1439px) {
    .all__info-shop {
        display: block
    }

    .reviews {
        position: unset;
        width: 100%;
    }
}

@media (max-width: 1000px) {
    .header-right-text {
        margin-left: 0px;
    }

    .body-title {
        padding-right: 5% !important;
    }

    .body-content .items {
        margin-bottom: 11px;
    }

    .content__body-content__act {
        margin-left: 0px;
    }

    .card {
        width: 565px;
    }

    .fs15 {
        font-size: 14px;
    }

    .content__body-content__title .items {}

    .wage {
        margin-left: 10px;
    }

    .wage p {
        width: 193px;
        margin-left: 50px;
    }

    .btn-receive-application {

        padding-bottom: 20px;
        padding-top: 94px;
        padding-left: 50px;
    }

    .modal-content {
        width: 600px !important;
    }

    .modal-dialog {
        top: 0%;
        right: 7%;
    }

    .header-right-pp {
        padding-left: 0px;
    }

    .see-more {}
}

@media (max-width: 768px) {
    .row {
        margin-left: 0px;
    }

    .body-title {
        padding-right: 5% !important;
    }

    .body-content .items {
        margin-bottom: 11px;
    }

    .content__body-content__act {
        margin-left: 0px;
    }

    .card {
        width: 767px;
    }

    .fs15 {
        font-size: 14px;
    }

    .content__body-content__title .items {}

    .wage {
        margin-left: 10px;
    }

    .wage p {
        width: 193px;
        margin-left: -50px;
    }

    .btn-receive-application {

        padding-bottom: 20px;
        padding-top: 84px;
        margin-left: 0px;
    }

    .modal-content {
        width: 600px !important;
    }

    .modal-dialog {
        top: 0%;
        right: 7%;
    }

    .header-right-pp {
        padding-left: 0px;
    }

    .see-more {}
}

@media (max-width: 767px) {
    .header-modal-right-info-shop {
        position: absolute;
        right: 50px;
    }

    .row {
        margin-left: 0px;
    }

    .index-web {
        display: none;
    }

    .content-all {
        display: none !important;
    }

    .index-mobile {
        width: 48rem;
    }

    .card {

        width: 48rem;
    }

    .main-content {
        width: 100% !important;
    }

    .body-title {
        padding-right: 5% !important;
    }

    .container {
        margin-left: -16px;
        max-width: 767px !important;
    }

    .mobile-wage {
        padding-left: 40%;
    }

    .btn-receive-application-mobile {
        margin-left: 45%;
    }

    .body-content .items {
        margin-bottom: 13px;
    }

    .header-right-pp {
        position: absolute;
        right: 20px;
    }

    .see-more {
        top: 20px;
        right: 10px;
        position: absolute;
    }

    .modal-content {
        margin-left: -7px;
        width: 600px !important;
    }

    .modal-dialog {
        left: 0px;
        top: 10%;
    }
}

@media (max-width: 660px) {

    .index-mobile {
        width: 41.2rem;
    }

    .card {
        width: 41.2rem;
    }

    .mobile-wage {
        padding-left: 40%;
    }

    .btn-receive-application-mobile {
        margin-left: 45%;
    }

    .body-content .items {
        margin-bottom: 13px;
    }

    .header-right-pp {
        position: absolute;
        right: 20px;
    }

    .modal-content {
        margin-left: -7px;
        width: 550px !important;
    }

    .modal-dialog {
        left: 0px;
        top: 10%;
    }
}

@media (max-width: 460px) {

    .index-mobile {
        width: 28.75rem;
    }

    .content-dmk {
        width: 300px !important;
        left: 0%;
    }

    .card {
        width: 28.75rem;
    }

    .mobile-wage {
        padding-left: 35%;
    }

    .btn-receive-application-mobile {
        margin-left: 40%;
    }

    .modal-content {
        margin-left: -7px;
        width: 460px !important;
    }

}

@media (max-width: 414px) {
    .index-mobile {
        width: 26rem;
    }

    .card {
        width: 26rem;
    }

    .mobile-wage {
        padding-left: 30%;
    }

    .btn-receive-application-mobile {
        margin-left: 35%;
    }

    .header-right-pp {
        position: absolute;
        right: 20px;
    }

    .see-more {
        top: 45px;
        right: 10px;
        position: absolute;
    }

    .modal-content {
        margin-left: -7px;
        width: 420px !important;
    }

    .modal-dialog {
        left: 0px;
        top: 10%;

    }

}

@media (max-width: 393px) {
    .index-mobile {
        width: 24.5rem;
    }

    .card {
        width: 24.5rem;
    }

    .mobile-wage {
        padding-left: 30%;
    }

    .btn-receive-application-mobile {
        margin-left: 35%;
    }

    .header-right-pp {
        position: absolute;
        right: 20px;
    }

    .see-more {
        top: 45px;
        right: 10px;
        position: absolute;
    }

    .modal-content {
        margin-left: -7px;
        width: 395px !important;
    }

    .modal-dialog {
        left: 0px;
        top: 10%;

    }
}

@media (max-width: 375px) {
    .index-mobile {
        width: 23.5rem;
    }

    .card {
        width: 23.5rem;
    }

    .modal-content {
        margin-left: -7px;
        width: 380px !important;
    }

    .modal-dialog {
        left: 0px;
        top: 10%;

    }

}

@media (min-width: 768px) {
    .index-mobile {
        display: none;
    }

}

#sidebarRight {
    display: none;
}
</style>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

@endsection