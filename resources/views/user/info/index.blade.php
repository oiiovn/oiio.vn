@extends('layout')

@section('content')

<!--<x-form type="post" :validate="true" enctype="multipart/form-data">
        <x-card>
            <input name="id" type="hidden" value="{{ $user->id }}" />
            <div class="img-info">
                <div class="cover-img" onclick="document.getElementById('file-cover_img').click();" @if(auth()->user()->getBackground()) style="background-image: url({{ asset($user->cover_photo) }})" @endif>
                    <input id="file-cover_img" type="file" name="cover_photo" class="d-none"></input>
                </div>
            </div>

            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">{{ __('Họ và tên') }}</label>
                    <x-input class="w-100" name="fullname" value="{{ $user->fullname }}" :required="true" />
                </div>
                <div class="mb-3">
                    <label class="form-label">{{ __('Tên tài khoản') }}</label>
                    <x-input class="w-100" name="username" value="{{ $user->username }}" :required="true" readonly />
                </div>
                <div class="mb-3">
                    <label class="form-label">{{ __('Email') }}</label>
                    <x-input-email class="w-100" name="email" value="{{ $user->email }}" readonly />
                </div>

                <div class="mb-3">
                    <label class="form-label">{{ __('Số điện thoại') }}</label>
                    <x-input-phone class="w-100" name="phone" value="{{ $user->phone }}" :required="true" readonly />
                </div>

                <div class="mb-3">
                    <label class="form-label">{{ __('Giới tính') }}</label>
                    <x-select name="gender" :required="true">
                        <x-option value="" :title="__('Chọn giới tính')" />
                        @if(auth()->user()->hasGender())
                        @foreach ($gender as $key => $value)
                        <x-option :option="$user->gender->value" :value="$key" :title="__($value)" />
                        @endforeach
                        @else
                        @foreach ($gender as $key => $value)
                        <x-option :option="$value" :value="$key" :title="__($value)" />
                        @endforeach
                        @endif
                    </x-select>
                </div>

                {{-- <div>
                    <div class="row">
                        <div class="col-12 col-md-4 mb-3">
                            <label class="form-label">{{ __('Tỉnh') }}</label>
                <x-select name="province_id" :required="true">
                    @if(auth()->user()->hasProvince())
                    <x-option value="{{$user->province_id}}" :title="__($user->province->name)" />
                    @else
                    <x-option value="" :title="__('Chọn tỉnh thành')" />
                    @endif

                    @foreach($province as $value)
                    <x-option value="{{ $value->id }}" :title="__($value->name)" />
                    @endforeach
                </x-select>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label class="form-label">{{ __('Quận/huyện') }}</label>
                <x-select name="district_id" :required="true">
                    @if(auth()->user()->hasDistrict())
                    <x-option value="{{$user->district_id}}" :title="__($user->district->name)" />
                    @else
                    <x-option value="" :title="__('Chọn quận huyện')" />
                    @endif
                </x-select>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label class="form-label">{{ __('Xã') }}</label>
                <x-select name="ward_id" :required="true">
                    @if(auth()->user()->hasWard())
                    <x-option value="{{$user->ward_id}}" :title="__($user->ward->name)" />
                    @else
                    <x-option value="" :title="__('Chọn xã phường')" />
                    @endif
                </x-select>
            </div>
            </div>
            </div> --}}

            <x-button type="submit" class="btn-orange w-100">Cập nhật thông tin tài khoản</x-button>
            </div>
        </x-card>
    </x-form> -->


<!-- 
<x-form type="post" action="{{ route('user.contact.update') }}" :validate="true">
    <input name="user_id" type="hidden" value="{{ auth()->user()->id }}" hidden />
    <x-card>
        <x-slot name="header">
            <span class="text-white"><i class="fa-solid fa-address-book me-2" aria-hidden="true"></i>
                <span class="">Liên hệ</span>
            </span>
        </x-slot>

        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">{{ __('Địa chỉ') }}</label>
                <x-input class="w-100" name="address" value="{{ $user->contact->address ?? '' }}" placeholder="Nhập địa chỉ" />
            </div>
            <div class="mb-3">
                <label class="form-label">{{ __('Facebook') }}</label>
                <x-input class="w-100" name="facebook" value="{{ $user->contact->facebook ?? '' }}" placeholder="Nhập liên kết facebook" />
            </div>
            <div class="mb-3">
                <label class="form-label">{{ __('Zalo') }}</label>
                <x-input class="w-100" name="zalo" value="{{ $user->contact->zalo ?? '' }}" placeholder="Nhập số điện thọai zalo" />
            </div>
            <x-button type="submit" class="btn-orange w-100">Lưu thông tin liên hệ</x-button>
        </div>
    </x-card>
</x-form> -->

<!-- <x-form id="form-resetpass" action="{{ route('user.password') }}" type="post" :validate="true">
    <input name="id" type="hidden" value="{{ $user->id }}" />
    <x-card>
        <x-slot name="header">
            <span class="text-white"><i class="fa fa-key me-2" aria-hidden="true"></i><span class="">Đổi mật khẩu</span></span>
        </x-slot>
        <div class="form-resetpass m-4">
            <div class="form-info">
                <label>Mật khẩu mới</label>
                <x-input id="new-password" type="password" name="password" />
                <span id="new-password-err" class="text-danger"></span>
            </div>
            <div class="form-info">
                <label>Nhập lại mật khẩu mới</label>
                <x-input id="re-password" type="password" name="re_password" />
                <span id="re-password-err" class="text-danger"></span>
            </div>
            <x-button type="submit" id="btn-resetpass" class="btn btn-orange w-100" disabled>
                Cập nhật
            </x-button>
        </div>
    </x-card>
</x-form> -->
<div class="container-content"
    style="width: 134.42%; background:transparent; margin-left: 24px; margin-right: 40px; position: relative;border-radius: 10px;">
    <x-form type="post" :validate="true" enctype="multipart/form-data">
        <input name="id" type="hidden" value="{{ $user->id }}" />
        <div class="container-content-avatar" style="width:100%;">
            <div class="img-info" style="border-radius: 10px;">
                <div class="cover-img" onclick="document.getElementById('file-cover_img').click();" @if(auth()->
                    user()->getBackground()) style="background-image: url({{ asset($user->cover_photo) }})" @endif>
                    <input id="file-cover_img" type="file" name="cover_photo" class="d-none"></input>
                    <img id="edit" src="{{ asset('viewsCustom/assets/images/edit-ic-tron.svg') }}" alt=""
                        style="position: absolute; top: 0; right: 0; background-color: rgba(255, 255, 255, 0.5); border-radius:10px; padding: 5px;margin-right: 15px;margin-top:15px; filter: drop-shadow(0px 7px 8px rgba(0, 0, 0, 0.24));" />
                </div>
            </div>
            <div class="profile"
                style="background: #fff;width: 34%;height:336px;border-radius: 10px;position:absolute;top:154px;right:19px; filter: drop-shadow(0px 7px 8px rgba(0, 0, 0, 0.24));">
                <div style="display: block;width: 100%;text-align:center;padding-top:20px;">
                    <div class="profile-img">
                        <div style="display: block; position: relative;">
                            <img onclick="document.getElementById('file-avatar').click();" id="avatar-img"
                                src="{{ asset(auth()->user()->getAvatar()) }}" class="img-fluid" />
                            <img id="edit" onclick="document.getElementById('file-avatar').click();"
                                src="{{ asset('viewsCustom/assets/images/edit-ic-tron.svg') }}" alt=""
                                style="position: absolute; bottom: 0; right:30%; background-color: rgba(255, 255, 255, 0.5); border-radius: 100%; padding: 5px; margin-bottom: 8px; margin-right: 8px; filter: drop-shadow(0px 7px 8px rgba(0, 0, 0, 0.24));" />
                        </div>
                        <input id="file-avatar" name="avatar" type="file" class="d-none"></input>

                    </div>
                    <p
                        style="margin-top:15px;width:100%;color: #000;font-family:'Lato' sans-serif;font-size: 20px;font-style: normal;font-weight: 600;line-height: normal;">
                        {{ auth()->user()->fullname ?? auth()->user()->username }}</p>

                </div>
                <div class="content-profile">
                    <div class="content-item-profile">
                        <img src="{{ asset('viewsCustom/assets/images/mail.svg') }}" alt="">
                        <p class="">{{ $user->email }}</p>
                    </div>

                    <div class="content-item-profile">
                        <img src="{{ asset('viewsCustom/assets/images/phone.svg') }}" alt="">
                        <p class="">{{ $user->phone }}</p>
                    </div>
                </div>
                <div class="box-us-rt" style="display:none;">
                    <div style="display: flex;">
                        <!-- Đoạn mã HTML -->
                        <div class="box-us" id="box-us"
                            style="font-family:'Lato'sans-serif;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;margin-right: 24px;border-radius:10px;background: #E0793F;width: 135px;padding:15px;border:none;color:#fff;display:flex;justify-content: center;align-items: center;gap:5px;">
                            <img src="{{ asset('viewsCustom/assets/images/edit-info-ic.svg') }}" alt="">
                            <span>Chỉnh sửa</span>
                        </div>

                        <div class="box-rt" id="box-rt"
                            style="font-family:'Lato'sans-serif;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;border-radius:10px;background: #FBC250;width: 135px;padding:15px;border:none;color:#fff;display:flex;justify-content: center;align-items: center;gap:5px;">
                            <span>Đánh giá</span>
                            <img src="{{ asset('viewsCustom/assets/images/rating.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-box"
            style=" background:transparent;margin-right: 20px;display: flex;justify-content: space-between;border-radius: 10px;margin-bottom:68px;height: 100%;margin-top:24px;">
            <div class="container-tr-rt" style="background:transparent;width:63.54%;border-radius: 10px;">
                <div class="container-info"
                    style="background: #fff;width:100%;height:391px;margin-bottom:20px;border-radius: 10px;">
                    <div style="width:100%;height:55px;display: flex;align-items: center;padding-left:40px;">
                        <div
                            style="width:29.41%;color: #E0793F;font-family: 'Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 800;line-height: normal;border-bottom:1px solid rgba(0, 0, 0, 0.11);padding-bottom:10px;">
                            Thông tin cá nhân</div>
                        <div
                            style="display: flex;align-items: center;justify-content: center; margin-left:auto;margin-right:10px;margin-top:20px;">
                            <x-button type="submit" class=""
                                style="background-color:#E0793F; border-radius:10px; padding:10px; filter: drop-shadow(0px 7px 8px rgba(0, 0, 0, 0.24));color:#fff;display: flex;align-items: baseline;gap:10px;">
                                <!-- <img id="edit" src="{{ asset('viewsCustom/assets/images/edit-info-ic.svg') }}" alt="" /> -->
                                Lưu
                            </x-button>
                        </div>
                    </div>
                    <div class="content-edit-info" style="width:100%;height: 336px;display:block;">
                        <input name="user_id" type="hidden" value="{{ $user->id }}" hidden />
                        <div style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;">
                            <label>{{ __('Họ và tên') }}</label>
                            <input type="text" name="fullname" value="{{ $user->fullname }}"
                                style="width: 65%;margin-left:auto;">
                        </div>
                        <div style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;">
                            <label>{{ __('Tên tài khoản') }}</label>
                            <input type="text" name="username" value="{{ $user->username }}"
                                style="width: 65%;margin-left:auto;">
                        </div>
                        <div style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;">
                            <label>{{ __('Email') }}</label>
                            <input type="text" name="email" value="{{ $user->email }}"
                                style="width: 65%;margin-left:auto;">
                        </div>
                        <div style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;">
                            <label>{{ __('Số điện thoại') }}</label>
                            <input type="text" name="phone" value="{{ $user->phone }}"
                                style="width: 65%;margin-left:auto;">
                        </div>
                        @if(auth()->user()->hasBankAccount())
                        @foreach($user->bankAccount as $value)
                        <div style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;">
                            <label>{{ __('Tài khoản ngân hàng') }}</label>
                            <input type="text" name="namebank"
                                value="{{ $value->account_number }} - {{ $value->bank_name }}"
                                style="width: 65%;margin-left:auto;">
                        </div>
                        @endforeach
                        @endif
                        <div style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;">
                            <label>{{ __('Tên shop') }}</label>
                            <input type="text" name="nameshop" value="{{ $user->name_shop }}"
                                style="width: 65%;margin-left:auto;">
                            <!--cần đổ dữ liệu-->
                        </div>
                    </div>

                </div>
                <div class="container-transaction" style="background: #fff;width:100%;border-radius: 10px;">
                    <div class="container-title" style="height: 200px;padding-left:40px;margin-bottom:20px;">
                        <div class="title-tr"
                            style="width:29.41%;color: #E0793F;font-family: 'Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 800;line-height: normal;border-bottom:1px solid rgba(0, 0, 0, 0.11);padding-bottom:10px;margin-bottom:28px;padding-top:20px;">
                            Giao dịch cá nhân</div>
                        {{-- Tìm kiếm --}}
                        <div class="search-field-x d-none d-md-block" style="border-radius: 10px;margin-bottom:20px;">
                            <form class="d-flex align-items-center h-100" action="#">
                                <div class="input-group-s" style="border-radius:5px;">
                                    <input type="text" class="form-control-s"
                                        value="{{isset($_GET['search'])?$_GET['search']:""}}"
                                        placeholder="Nhập mã giao dịch..."
                                        style="margin:17px 30px 16px 0;color: rgba(86, 86, 86, 0.50);font-family: Lato;font-size: 14px;font-style: normal;font-weight: 400;line-height: normal;padding:0 0.75rem;">
                                    <div style="position: relative;border-left: 1px solid #3333;align-items: center;justify-content: center;display: flex;width: 20%;margin-left: auto;"
                                        class="input-group-prepend-s bg-transparent">
                                        <img src="{{ asset('icon/search.svg') }}" alt="logo">
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="list-tr"
                            style="height:auto;width:100%;margin-left:28.5px;display: inline-flex;align-items: flex-start;gap:35px;">
                            <li style="height:29px;display: flex;justify-content: center;align-items: center;"
                                class="active">
                                <a href="#">Lịch sử giao dịch</a>
                            </li>
                            <li style="height:29px;display: flex;justify-content: center;align-items: center;">
                                <a href="#">Lịch sử nạp tiền</a>
                            </li>
                            <li style="height:29px;display: flex;justify-content: center;align-items: center;">
                                <a href="#">Lịch sử rút tiền</a>
                            </li>
                            <li style="height:29px;display: flex;justify-content: center;align-items: center;">
                                <a href="#" id="showModal">Tháng<i style="margin-left:5px;font-size:20px;"
                                        class="ri-arrow-down-s-line"></i></a>
                            </li> <!-- Modal -->
                            <div class="modal-overlay hidden" id="myModalOverlay"></div>
                            <div class="modal hidden modal-distance" id="myModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content-info">
                                        <div class="modal-header" style="background: #E0793F;color:#FFF;">
                                            <h5 class="modal-title">
                                                <div class="pagination" style="margin-left:40px;">
                                                    <a href="#">&laquo;</a>
                                                    <a class="active" href="#">2023</a>
                                                    <a href="#">&raquo;</a>
                                                </div>
                                            </h5>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Nội dung modal -->
                                            <div class="body-list-date"
                                                style="display: inline-flex;flex-direction: column;align-items: center;gap: 24px;justify-content: center;margin-left:95px;">
                                                <a href="#">Tháng 1</a>
                                                <a href="#">Tháng 2</a>
                                                <a href="#">Tháng 3</a>
                                                <a href="#">Tháng 4</a>
                                                <a href="#">Tháng 5</a>
                                                <a href="#">Tháng 6</a>
                                                <a href="#">Tháng 7</a>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button style="background:transparent;border:none;" type="button"
                                                class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">Hủy</span>
                                            </button>
                                            <button type="button" class="btn" style="color:#E0793F;">Xác nhận</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div style="height: 100%;">
                        @php
                        // Lấy thông tin người dùng hiện tại từ dòng 252 đến dòng 257
                        $currentUser = Auth::user();
                        // Khởi tạo TransactionRepository và lấy lịch sử giao dịch của người dùng hiện tại
                        $transactionRepository = new \App\Repositories\Transactions\TransactionRepository();
                        $transactions = $transactionRepository->getQueryBuilderWithRelations()->where('user_id',
                        $currentUser->id)->get();
                        @endphp

                        @foreach($transactions as $transaction)
                        <div class="item-tr"
                            style="margin-bottom:32px;width:88.52%;background:#fff;height: 133px;margin-left:40px;border-radius: 8px;border: 1px solid #D2D2CD;box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.15);display:flex;justify-content: space-between;padding-left:24px;padding-right:34px;padding-top:18px;">
                            <div class="content-bank" style="display:block;">
                                <span
                                    style="display:flex;justify-content: flex-start;align-items: baseline;color: #000;font-family: 'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 700;line-height: normal;letter-spacing: 2.88px;">{{ $transaction->code }}</span>
                                <span
                                    style="margin-top:10px;gap:10px;display:flex;justify-content: flex-start;align-items: baseline;">Loại
                                    giao dịch: <p style="margin-top: 5px;">{{ $transaction->type->description()  }}</p>
                                    </span>
                                <span
                                    style="gap:10px;display:flex;justify-content: flex-start;align-items: baseline;">Trạng
                                    thái: <p style="color: #269300;font-weight: 700;">
                                        {{ $transaction->status->description() }}</p></span>
                                <!-- <span class="d-lg-flex d-block">Mã giao dịch VNPAY: <b class="text-dark">{{ $transaction->code_vnpay }}</b></span>
                                    <span class="d-lg-flex d-block">Mã ngân hàng: <b class="text-dark">{{ $transaction->bank }}</b></span> -->
                            </div>
                            <div class="content-money"
                                style="display: inline-flex;flex-direction: column;align-items: flex-end;gap: 14px;">
                                @php
                                $color = $transaction->amount > 0 ? '#269300' : '#EB3131';
                                @endphp
                                <span
                                    style="display:flex;justify-content: flex-end;align-items: baseline;font-family: 'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 700;line-height: normal;letter-spacing: 1.6px;color:{!! $color !!}">
                                    {{ $transaction->type->value == 2 ? "-" : "" }}{{ format_price($transaction->amount) }}</span>
                                <span style="gap:10px;display:flex;justify-content: flex-end;align-items: baseline;">Phí
                                    giao dịch: <p style="color:#EB3131;margin-bottom:0;">
                                        {{ format_price($transaction->fee) }}</p></span>
                                <span
                                    style="gap:10px;display:flex;justify-content: flex-start;align-items: baseline;color: #A6A4A4;font-size: 12px;font-weight: 500;letter-spacing: 1.2px;">{{ format_datetime($transaction->created_at) }}</span>
                            </div>
                        </div>
                        @endforeach
                        <div style="text-align: center;">
                            <span>Xem thêm <i style="margin-left:auto;font-size:20px;"
                                    class="ri-arrow-down-s-line"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div style="width: 34.46%;border-radius: 10px;margin-top: 220px;">

                <div class="container-rating" style="background: #fff;width:100%;border-radius: 10px;">
                    <div style="width:100%;height:55px;display: flex;align-items: center;padding-left:40px;">
                        <div
                            style="width:59.14%;color: #E0793F;font-family: 'Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 800;line-height: normal;border-bottom:1px solid rgba(0, 0, 0, 0.11);padding-bottom:10px;">
                            Đánh giá cộng đồng</div>
                    </div>
                    <div style="height: 100%;">
                        <div style="width:83.43%;padding-left:40px;margin-top:20px;">
                            <div style="width:100%;">
                                <div style="justify-content: space-between;display: flex;align-items: center;">
                                    <div style="display: inline-flex;align-items: center;gap: 10px;">
                                        <div>
                                            <img width="45px" height="45px"
                                                src="{{ asset('viewsCustom/assets/images/faces-clipart/pic-1.png') }}"
                                                alt="">
                                        </div>
                                        <div style="display: block; width: 59.59%;">
                                            <span
                                                style="color: #000;font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Trần
                                                Tuấn Anh</span>
                                            <span
                                                style="color: rgba(166, 164, 164, 0.70);font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">2023/06/14
                                                - 19:50</span>
                                        </div>
                                    </div>
                                    <div
                                        style="display: inline-flex;align-items: flex-start;gap: 5px;width: 12.33%;margin-left:auto;">
                                        <span
                                            style="color: #FBC250;font-family:' Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">5</span>
                                        <img src="{{ asset('viewsCustom/assets/images/star.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div
                                style="width:100%;border-bottom:1px solid #D2D2CD;margin-top:10px;padding-bottom:20px;">
                                <span>Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng
                                    tốt! Shop uy tín. Chất lượng tốt!</span>
                            </div>
                        </div>

                        <div style="width:83.43%;padding-left:40px;margin-top:20px;">
                            <div style="width:100%;">
                                <div style="justify-content: space-between;display: flex;align-items: center;">
                                    <div style="display: inline-flex;align-items: center;gap: 10px;">
                                        <div>
                                            <img width="45px" height="45px"
                                                src="{{ asset('viewsCustom/assets/images/faces-clipart/pic-1.png') }}"
                                                alt="">
                                        </div>
                                        <div style="display: block; width: 59.59%;">
                                            <span
                                                style="color: #000;font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Trần
                                                Tuấn Anh</span>
                                            <span
                                                style="color: rgba(166, 164, 164, 0.70);font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">2023/06/14
                                                - 19:50</span>
                                        </div>
                                    </div>
                                    <div
                                        style="display: inline-flex;align-items: flex-start;gap: 5px;width: 12.33%;margin-left:auto;">
                                        <span
                                            style="color: #FBC250;font-family:' Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">5</span>
                                        <img src="{{ asset('viewsCustom/assets/images/star.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div
                                style="width:100%;border-bottom:1px solid #D2D2CD;margin-top:10px;padding-bottom:20px;">
                                <span>Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng
                                    tốt! Shop uy tín. Chất lượng tốt!</span>
                            </div>
                        </div>

                        <div style="width:83.43%;padding-left:40px;margin-top:20px;">
                            <div style="width:100%;">
                                <div style="justify-content: space-between;display: flex;align-items: center;">
                                    <div style="display: inline-flex;align-items: center;gap: 10px;">
                                        <div>
                                            <img width="45px" height="45px"
                                                src="{{ asset('viewsCustom/assets/images/faces-clipart/pic-1.png') }}"
                                                alt="">
                                        </div>
                                        <div style="display: block; width: 59.59%;">
                                            <span
                                                style="color: #000;font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Trần
                                                Tuấn Anh</span>
                                            <span
                                                style="color: rgba(166, 164, 164, 0.70);font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">2023/06/14
                                                - 19:50</span>
                                        </div>
                                    </div>
                                    <div
                                        style="display: inline-flex;align-items: flex-start;gap: 5px;width: 12.33%;margin-left:auto;">
                                        <span
                                            style="color: #FBC250;font-family:' Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">5</span>
                                        <img src="{{ asset('viewsCustom/assets/images/star.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div
                                style="width:100%;border-bottom:1px solid #D2D2CD;margin-top:10px;padding-bottom:20px;">
                                <span>Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng
                                    tốt! Shop uy tín. Chất lượng tốt!</span>
                            </div>
                        </div>

                        <div style="width:83.43%;padding-left:40px;margin-top:20px;">
                            <div style="width:100%;">
                                <div style="justify-content: space-between;display: flex;align-items: center;">
                                    <div style="display: inline-flex;align-items: center;gap: 10px;">
                                        <div>
                                            <img width="45px" height="45px"
                                                src="{{ asset('viewsCustom/assets/images/faces-clipart/pic-1.png') }}"
                                                alt="">
                                        </div>
                                        <div style="display: block; width: 59.59%;">
                                            <span
                                                style="color: #000;font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Trần
                                                Tuấn Anh</span>
                                            <span
                                                style="color: rgba(166, 164, 164, 0.70);font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">2023/06/14
                                                - 19:50</span>
                                        </div>
                                    </div>
                                    <div
                                        style="display: inline-flex;align-items: flex-start;gap: 5px;width: 12.33%;margin-left:auto;">
                                        <span
                                            style="color: #FBC250;font-family:' Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">5</span>
                                        <img src="{{ asset('viewsCustom/assets/images/star.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div
                                style="width:100%;border-bottom:1px solid #D2D2CD;margin-top:10px;padding-bottom:20px;">
                                <span>Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng
                                    tốt! Shop uy tín. Chất lượng tốt!</span>
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

    </x-form>
</div>

<!-- Modal 1 -->
<div class="modal-box" id="modal-us">
    <div class="modal-content-box">
        <!-- Nội dung của modal 1 ở đây -->
        <div style="display: flex;justify-content: space-between;align-items: baseline;">
            <div class="title-tr"
                style="padding-top:0;width:29.41%;color: #E0793F;font-family: 'Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 800;line-height: normal;border-bottom:1px solid rgba(0, 0, 0, 0.11);padding-bottom:10px;margin-bottom:28px;">
                Thông tin cá nhân</div>
            <span class="close-box" id="closeModalUS">&times</span>
        </div>
        <div class="content-edit-info">
            <x-form type="post" :validate="true" enctype="multipart/form-data">
                <input name="user_id" type="hidden" value="{{ $user->id }}" hidden />
                <div style="margin-bottom:29px;">
                    <div style="height: 51.3333px;display: flex;align-items:center;">
                        <label>{{ __('Họ và tên') }}</label>
                        <input type="text" name="fullname" value="{{ $user->fullname }}"
                            style="width: 65%;margin-left:auto;">
                    </div>
                </div>
                <div style="margin-bottom:29px;">
                    <div style="height: 51.3333px;display: flex;align-items:center;">
                        <label>{{ __('Tên tài khoản') }}</label>
                        <input type="text" name="username" value="{{ $user->username }}"
                            style="width: 65%;margin-left:auto;">
                    </div>
                </div>
                <div style="margin-bottom:29px;">
                    <div style="height: 51.3333px;display: flex;align-items:center;">
                        <label>{{ __('Email') }}</label>
                        <input type="text" name="email" value="{{ $user->email }}" style="width: 65%;margin-left:auto;">
                    </div>
                </div>
                <div style="margin-bottom:29px;">
                    @if(auth()->user()->hasBankAccount())
                    @foreach($user->bankAccount as $value)
                    <div style="height: 51.3333px;display: flex;align-items:center;">
                        <label>{{ __('Tài khoản ngân hàng') }}</label>
                        <input type="text" name="namebank"
                            value="{{ $value->account_number }} - {{ $value->bank_name }}"
                            style="width: 65%;margin-left:auto;">
                    </div>
                    @endforeach
                    @endif
                    <div style="margin-bottom:29px;">
                        <div style="height: 51.3333px;display: flex;align-items:center;">
                            <label>{{ __('Tên shop') }}</label>
                            <input type="text" name="nameshop" value="{{ $user->name_shop }}"
                                style="width: 65%;margin-left:auto;">
                            <!--cần đổ dữ liệu-->
                        </div>
                    </div>
                    <div>

                    </div>
                    <button type="submit"
                        style="background:#E0793F;border:none;color:#fff;border-radius:5px;width:100%;padding: 15px 129px;">Lưu</button>
                </div>
            </x-form>
        </div>
    </div>


</div>

<!-- Modal 2 -->
<div class="modal-box" id="modal-rt">
    <div class="modal-content-box">
        <!-- Nội dung của modal 2 ở đây -->
        <div style="display: flex;justify-content: space-between;align-items: baseline;">
            <div class="title-tr"
                style="padding-top:0;width:29.41%;color: #E0793F;font-family: 'Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 800;line-height: normal;border-bottom:1px solid rgba(0, 0, 0, 0.11);padding-bottom:10px;margin-bottom:28px;">
                Đánh giá cộng đồng</div>
            <span class="close-box" id="closeModalRT">&times</span>
        </div>
        <div style="width: 100%;height:100%;">
            <div style="width:100%;padding-left:20px;margin-top:20px;">
                <div style="width:100%;">
                    <div style="justify-content: space-between;display: flex;align-items: center;">
                        <div style="display: inline-flex;align-items: center;gap: 10px;">
                            <div>
                                <img width="45px" height="45px"
                                    src="{{ asset('viewsCustom/assets/images/faces-clipart/pic-1.png') }}" alt="">
                            </div>
                            <div style="display: block; width: 59.59%;">
                                <span
                                    style="color: #000;font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Trần
                                    Tuấn Anh</span>
                                <span
                                    style="color: rgba(166, 164, 164, 0.70);font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">2023/06/14
                                    - 19:50</span>
                            </div>
                        </div>
                        <div
                            style="display: inline-flex;align-items: flex-start;gap: 5px;width: 12.33%;margin-left:auto;">
                            <span
                                style="color: #FBC250;font-family:' Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">5</span>
                            <img src="{{ asset('viewsCustom/assets/images/star.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div style="width:100%;border-bottom:1px solid #D2D2CD;margin-top:10px;padding-bottom:20px;">
                    <span>Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy
                        tín. Chất lượng tốt!</span>
                </div>
            </div>
            <div style="width:100%;padding-left:20px;margin-top:20px;">
                <div style="width:100%;">
                    <div style="justify-content: space-between;display: flex;align-items: center;">
                        <div style="display: inline-flex;align-items: center;gap: 10px;">
                            <div>
                                <img width="45px" height="45px"
                                    src="{{ asset('viewsCustom/assets/images/faces-clipart/pic-1.png') }}" alt="">
                            </div>
                            <div style="display: block; width: 59.59%;">
                                <span
                                    style="color: #000;font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Trần
                                    Tuấn Anh</span>
                                <span
                                    style="color: rgba(166, 164, 164, 0.70);font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">2023/06/14
                                    - 19:50</span>
                            </div>
                        </div>
                        <div
                            style="display: inline-flex;align-items: flex-start;gap: 5px;width: 12.33%;margin-left:auto;">
                            <span
                                style="color: #FBC250;font-family:' Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">5</span>
                            <img src="{{ asset('viewsCustom/assets/images/star.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div style="width:100%;border-bottom:1px solid #D2D2CD;margin-top:10px;padding-bottom:20px;">
                    <span>Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy
                        tín. Chất lượng tốt!</span>
                </div>
            </div>
            <div style="width:100%;padding-left:20px;margin-top:20px;">
                <div style="width:100%;">
                    <div style="justify-content: space-between;display: flex;align-items: center;">
                        <div style="display: inline-flex;align-items: center;gap: 10px;">
                            <div>
                                <img width="45px" height="45px"
                                    src="{{ asset('viewsCustom/assets/images/faces-clipart/pic-1.png') }}" alt="">
                            </div>
                            <div style="display: block; width: 59.59%;">
                                <span
                                    style="color: #000;font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Trần
                                    Tuấn Anh</span>
                                <span
                                    style="color: rgba(166, 164, 164, 0.70);font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">2023/06/14
                                    - 19:50</span>
                            </div>
                        </div>
                        <div
                            style="display: inline-flex;align-items: flex-start;gap: 5px;width: 12.33%;margin-left:auto;">
                            <span
                                style="color: #FBC250;font-family:' Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">5</span>
                            <img src="{{ asset('viewsCustom/assets/images/star.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div style="width:100%;border-bottom:1px solid #D2D2CD;margin-top:10px;padding-bottom:20px;">
                    <span>Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy
                        tín. Chất lượng tốt!</span>
                </div>
                <div style="text-align: center;">
                    <span>Xem thêm <i style="margin-left:auto;font-size:20px;" class="ri-arrow-down-s-line"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop" id="modalBackdrop"></div>
<!-- Đoạn mã JavaScript -->
<script>
// Lấy thẻ div box-us và box-rt bằng cách sử dụng id
const boxUS = document.getElementById('box-us');
const boxRT = document.getElementById('box-rt');

// Lấy thẻ modal-us và modal-rt bằng cách sử dụng id
const modalUS = document.getElementById('modal-us');
const modalRT = document.getElementById('modal-rt');

// Lấy lớp phủ bằng cách sử dụng id
const modalBackdrop = document.getElementById('modalBackdrop');

// Lấy nút đóng modal cho modal-us và modal-rt
const closeModalUS = document.getElementById('closeModalUS');
const closeModalRT = document.getElementById('closeModalRT');

// Gán sự kiện click cho box-us
boxUS.addEventListener('click', function() {
    modalUS.classList.add('show');
    modalBackdrop.classList.add('show');
});

// Gán sự kiện click cho box-rt
boxRT.addEventListener('click', function() {
    modalRT.classList.add('show');
    modalBackdrop.classList.add('show');
});

// Gán sự kiện click cho nút đóng modal-us
closeModalUS.addEventListener('click', function() {
    modalUS.classList.remove('show');
    modalBackdrop.classList.remove('show');
});

// Gán sự kiện click cho nút đóng modal-rt
closeModalRT.addEventListener('click', function() {
    modalRT.classList.remove('show');
    modalBackdrop.classList.remove('show');
});

// Đóng modal khi người dùng nhấp chuột bên ngoài nội dung modal-us
window.addEventListener('click', function(event) {
    if (event.target == modalBackdrop) {
        modalUS.classList.remove('show');
        modalRT.classList.remove('show');
        modalBackdrop.classList.remove('show');
    }
});
</script>


<style>
.content-edit-info button {
    color: #000;
    font-family: 'Lato'sans-serif;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}

.content-edit-info label {
    color: #000;
    font-family: 'Lato'sans-serif;
    font-size: 16px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
}

/* Đoạn mã CSS */
/* Ẩn modal và lớp phủ mặc định */
.modal-box,
.modal-backdrop {
    display: none;
}

/* Hiển thị lớp phủ mờ khi modal được hiển thị */
.modal-box.show,
.modal-backdrop.show {
    display: block;
}

/* Hiển thị nội dung modal giữa màn hình */
.modal-content-box {
    position: absolute;
    top: 5%;
    margin-left: 20px;
    width: 370px;
    background-color: white;
    padding: 20px;
    z-index: 9999;
    border-radius: 10px;
    /* Đặt z-index lớn hơn lớp phủ để modal nằm trên cùng */
}

/* Nút đóng modal */
.close-box {
    font-size: 50px;
    cursor: pointer;
}

/* Thiết lập lớp phủ */
.modal-backdrop {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 9998;
    /* Đặt z-index thấp hơn modal để lớp phủ nằm dưới cùng */
}

@media (max-width:768px) {
    .container-content {
        width: 100% !important;
        margin: 0 !important;

    }

    .img-info {
        width: 100%;
    }

    .cover-img {
        width: 100%;
        height: 183px;
        flex-shrink: 0;
    }

    .container-info {
        display: none;
    }

    .search-field-x {
        display: block !important;
        width: 87.91% !important;
    }

    .container-box {
        display: block !important;
        margin-top: 300px !important;
        margin-right: 0 !important;
    }

    .container-tr-rt {
        width: 100% !important;
    }

    .list-tr {
        margin-left: 0 !important;
        overflow-x: scroll;
        overflow-y: hidden;
        width: 450px !important;
        gap: 20px !important;
        padding-bottom: 10px !important;
    }

    .title-tr {
        width: 55% !important;
        margin-bottom: 20px !important;
    }

    .list-tr li a {
        width: 150px !important;
    }

    ::-webkit-scrollbar {
        height: 8px;
    }

    .container-rating {
        display: none;
    }

    .item-tr {
        padding-left: 9px !important;
        padding-right: 9px !important;
        margin-left: 25px !important;
    }

    .modal-distance {
        top: 60% !important;
        left: 62% !important;
    }

    .container-title {
        padding-left: 28px !important;
    }

    .profile {
        width: 350px !important;
        height: 350px !important;
        top: 10% !important;
        right: 6% !important;
    }

    .box-us-rt {
        display: block !important;
        padding-left: 27px;
    }

    #avatar-img {
        width: 130px;
        height: 130px;
    }

    .profile p {
        margin-top: 0 !important;
        font-size: 18px !important;
    }

    .content-item-profile p {
        font-size: 16px !important;
    }

    #row {
        margin-left: 0 !important;
        margin-top: 0 !important;
    }
}

/* Pagination links */
.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    color: #FFF;
    font-family: 'Lato'sans-serif;
    font-size: 18px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}

/* Style the active/current link */
.pagination a.active {
    color: white;
}

/* Add a grey background color on mouse-over */
.pagination a:hover:not(.active) {
    background-color: #fff;
    color: #000;
}

li a {
    color: #303030;
    font-family: 'Lato'sans-serif;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}

li a:hover {
    color: #E0793F;
}

.active a:hover {
    color: #fff;
}

.active a {
    border-radius: 20px;
    background: #E0793F;
    color: #fff;
    display: flex;
    padding: 5px 10px;
    align-items: flex-end;
    gap: 5px;
}

.content-bank span {
    color: #000;
    font-family: ' Lato'sans-serif;
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
}

.content-money span {
    color: #000;
    font-family: 'Lato'sans-serif;
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
}

.content-bank p {
    font-weight: 700;
}

.content-money p {
    font-weight: 700;
}

#sidebarRight {
    display: none;
}

.content-profile {
    display: inline-flex;
    flex-direction: column;
    align-items: flex-start;
    margin-left: 41px;
}

.content-item-profile {
    display: flex;
    align-items: start;
    gap: 15px;
}

.content-item-profile p {
    color: #000;
    font-family: 'Lato'sans-serif;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}

.btn-profile {
    text-align: center;
}

.btn-profile button {
    width: 117px;
    height: 33px;
    flex-shrink: 0;
    border-radius: 5px;
    background: #0D6EFD;
    color: #FFF;
    font-family: 'Lato'sans-serif;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    border: none;
    margin-top: 35px;
}

.content-edit-info input {
    padding-left: 15px;
    color: #000;
    font-family: 'Lato'sans-serif;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    padding-top: 10px;
    padding-bottom: 10px;
    background: #FFF;
    border-radius: 5px;
    border-bottom: 1px solid #A6A4A4;
    border-top: none;
    border-left: none;
    border-right: none;
}


.profile-img {
    z-index: 1;
    position: relative;
    bottom: 0 !important;
    left: 0 !important;
    width: 100%;
    height: 150px;
    display: block !important;
    cursor: pointer;
}

#avatar-img {
    text-align: center;
    filter: drop-shadow(0px 7px 8px rgba(0, 0, 0, 0.24));
    border: 1px solid rgba(0, 0, 0, 0.20) !important;
}

.cover-img {
    cursor: pointer;
    position: relative;
    background-image: url(https://c4.wallpaperflare.com/wallpaper/428/45/96/digital-illustration-landscape-artwork-sunset-hd-wallpaper-preview.jpg);
    background-size: cover;
    border-radius: 10px;
}

#edit:hover {
    opacity: 0.8;
}

.search-field-x {
    width: 370px;
    margin-bottom: 23px;
    height: 50px;
    flex-shrink: 0;
    background: #FFF;
    backdrop-filter: blur(20px);
}

/* Lớp phủ */
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    /* Màu nền và độ mờ */
    z-index: 9999;
    /* Đảm bảo lớp phủ hiển thị trên tất cả các phần tử khác */
    display: none;
    /* Ẩn lớp phủ mặc định */
}

/* Định dạng modal */
.modal-distance {
    /* Màu nền modal */
    border-radius: 5px;
    /* Đổ bóng cho modal */
    position: fixed;
    top: 70%;
    left: 55%;
    transform: translate(-50%, -50%);
    z-index: 10000;
    /* Đảm bảo modal hiển thị trên lớp phủ */
    display: none;
    /* Ẩn modal mặc định */
}

.modal-content-info {
    position: relative;
    display: flex;
    flex-direction: column;
    /* width: 100%; */
    width: 283px;
    height: 452px;
    color: var(--bs-modal-color);
    pointer-events: auto;
    background-color: var(--bs-modal-bg);
    background-clip: padding-box;
    border: var(--bs-modal-border-width) solid var(--bs-modal-border-color);
    border-radius: var(--bs-modal-border-radius);
    outline: 0;
}

.body-list-date a {
    color: #000;
    font-family: 'Lato'sans-serif;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}

.body-list-date a:hover {
    font-weight: 700;
    color: #FB6815;
}
</style>
<!-- Đảm bảo rằng bạn đã bao gồm thư viện jQuery trong trang web của bạn -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    $('#showModal').click(function() {
        $('#myModalOverlay, #myModal').fadeIn(); /* Hiển thị lớp phủ và modal */
    });

    $('.modal .close, .modal-overlay').click(function() {
        $('#myModalOverlay, #myModal').fadeOut(); /* Ẩn lớp phủ và modal */
    });
});
</script>

<script>
// --> Xử lí cập nhật avartar và cover-photo
let avatar = document.getElementById('avatar-img');
let cover_img = document.querySelector(".cover-img");
let file_avatar = document.getElementById('file-avatar');
let file_coverimg = document.getElementById('file-cover_img');


file_avatar.addEventListener("change", (e) => {
    let file = e.target.files[0];
    let reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = function() {
        let base64Image = reader.result;
        avatar.src = base64Image;
    };
})

file_coverimg.addEventListener("change", (e) => {
    let file = e.target.files[0];
    let reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = function() {
        let base64Image = reader.result;
        cover_img.style.backgroundImage = `url("${base64Image}")`;
    };
})
</script>

<script src="/viewsCustom/assets/js/cropper.min.js"></script>
@endsection