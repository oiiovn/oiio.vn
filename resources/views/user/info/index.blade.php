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
<div style="width: 134.42%; background:transparent; margin-left: 24px; margin-right: 40px; position: relative;border-radius: 10px;">
    <x-form type="post" :validate="true" enctype="multipart/form-data">
        <input name="id" type="hidden" value="{{ $user->id }}" />
        <div style="width:100%;">
            <div class="img-info" style="border-radius: 10px;">
                <div class="cover-img" onclick="document.getElementById('file-cover_img').click();" @if(auth()->user()->getBackground()) style="background-image: url({{ asset($user->cover_photo) }})" @endif>
                    <input id="file-cover_img" type="file" name="cover_photo" class="d-none"></input>
                    <img id="edit" src="{{ asset('viewsCustom/assets/images/edit-ic-tron.svg') }}" alt="" style="position: absolute; top: 0; right: 0; background-color: rgba(255, 255, 255, 0.5); border-radius:10px; padding: 5px;margin-right: 15px;margin-top:15px; filter: drop-shadow(0px 7px 8px rgba(0, 0, 0, 0.24));" />
                </div>
            </div>
            <div style="background: #fff;width: 34%;height:336px;border-radius: 10px;position:absolute;top:154px;right:19px;">
                    <div style="display: block;width: 100%;text-align:center;padding-top:20px;">
                        <div class="profile-img">
                            <div style="display: block; position: relative;">
                                <img onclick="document.getElementById('file-avatar').click();" id="avatar-img" src="{{ asset(auth()->user()->getAvatar()) }}" class="img-fluid" />
                                <img id="edit" onclick="document.getElementById('file-avatar').click();" src="{{ asset('viewsCustom/assets/images/edit-ic-tron.svg') }}" alt="" style="position: absolute; bottom: 0; right:110px; background-color: rgba(255, 255, 255, 0.5); border-radius: 100%; padding: 5px; margin-bottom: 8px; margin-right: 8px; filter: drop-shadow(0px 7px 8px rgba(0, 0, 0, 0.24));" />
                            </div>
                            <input id="file-avatar" name="avatar" type="file" class="d-none"></input>

                        </div>
                        <p style="margin-top:15px;width:100%;color: #000;font-family:'Lato' sans-serif;font-size: 20px;font-style: normal;font-weight: 600;line-height: normal;">{{ auth()->user()->fullname ?? auth()->user()->username }}</p>

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
                    <div class="btn-profile">
                        <!-- <button type="submit">Nhắn tin</button> -->
                    </div>
                </div>
        </div>


        <div style=" background:transparent;margin-right: 20px;display: flex;justify-content: space-between;border-radius: 10px;margin-bottom:68px;height: 100%;margin-top:24px;">
            <div style="background:transparent;width:63.54%;border-radius: 10px;">
                <div style="background: #fff;width:100%;height:391px;margin-bottom:20px;border-radius: 10px;">
                    <div style="width:100%;height:55px;display: flex;align-items: center;padding-left:40px;">
                        <div style="width:29.41%;color: #E0793F;font-family: 'Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 800;line-height: normal;border-bottom:1px solid rgba(0, 0, 0, 0.11);padding-bottom:10px;">Thông tin cá nhân</div>
                        <div style="display: flex;align-items: center;justify-content: center; margin-left:auto;margin-right:10px;margin-top:20px;">
                            <x-button type="submit" class="" style="background-color:#E0793F; border-radius:10px; padding:10px; filter: drop-shadow(0px 7px 8px rgba(0, 0, 0, 0.24));color:#fff;display: flex;align-items: baseline;gap:10px;">
                                <!-- <img id="edit" src="{{ asset('viewsCustom/assets/images/edit-info-ic.svg') }}" alt="" /> -->
                                Lưu
                            </x-button>
                        </div>
                    </div>
                    <div class="content-edit-info" style="width:100%;height: 336px;display:block;">
                    <input name="user_id" type="hidden" value="{{ $user->id }}" hidden />
                        <div style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;">
                            <label>{{ __('Họ và tên') }}</label>
                            <input type="text" name="fullname" value="{{ $user->fullname }}" style="width: 65%;margin-left:auto;">
                        </div>
                        <div style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;">
                            <label>{{ __('Tên tài khoản') }}</label>
                            <input type="text" name="username" value="{{ $user->username }}" style="width: 65%;margin-left:auto;">
                        </div>
                        <div style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;">
                            <label>{{ __('Email') }}</label>
                            <input type="text" name="email" value="{{ $user->email }}" style="width: 65%;margin-left:auto;">
                        </div>
                        <div style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;">
                            <label>{{ __('Số điện thoại') }}</label>
                            <input type="text" name="phone" value="{{ $user->phone }}" style="width: 65%;margin-left:auto;">
                        </div>
                        @if(auth()->user()->hasBankAccount())
                        @foreach($user->bankAccount as $value)
                        <div style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;">
                            <label>{{ __('Tài khoản ngân hàng') }}</label>
                            <input type="text" name="namebank" value="{{ $value->account_number }} - {{ $value->bank_name }}" style="width: 65%;margin-left:auto;"> 
                        </div>
                        @endforeach
                        @endif
                        <div style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;">
                            <label>{{ __('Tên shop') }}</label>
                            <input type="text" name="nameshop" value="{{ $user->name_shop }}" style="width: 65%;margin-left:auto;"><!--cần đổ dữ liệu-->
                        </div>
                    </div>

                </div>
                <div style="background: #fff;width:100%;border-radius: 10px;">
                    <div style="height: 109px;padding-left:40px;margin-bottom:35px;">
                        <div style="width:29.41%;color: #E0793F;font-family: 'Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 800;line-height: normal;border-bottom:1px solid rgba(0, 0, 0, 0.11);padding-bottom:10px;margin-bottom:28px;padding-top:20px;">Giao dịch cá nhân</div>
                        <div style="height: 29px;width:100%;margin-left:28.5px;display: inline-flex;align-items: flex-start;gap:35px;">
                            <li style="height:29px;display: flex;justify-content: center;align-items: center;" class="active">
                                <a href="#">Lịch sử giao dịch</a>
                            </li>
                            <li style="height:29px;display: flex;justify-content: center;align-items: center;">
                                <a href="#">Lịch sử nạp tiền</a>
                            </li>
                            <li style="height:29px;display: flex;justify-content: center;align-items: center;">
                                <a href="#">Lịch sử rút tiền</a>
                            </li>
                            <li style="height:29px;display: flex;justify-content: center;align-items: center;">
                                <a href="#">Tháng</a>
                                <i style="margin-left:auto;font-size:20px;" class="ri-arrow-down-s-line"></i>
                            </li>
                        </div>
                    </div>
                    <div style="height: 100%;">
                    @php
                        // Lấy thông tin người dùng hiện tại từ dòng 252 đến dòng 257
                        $currentUser = Auth::user(); 
                        // Khởi tạo TransactionRepository và lấy lịch sử giao dịch của người dùng hiện tại
                        $transactionRepository = new \App\Repositories\Transactions\TransactionRepository();
                        $transactions = $transactionRepository->getQueryBuilderWithRelations()->where('user_id', $currentUser->id)->get();
                        @endphp

                        @foreach($transactions as $transaction)
                        <div style="margin-bottom:32px;width:88.52%;background:#fff;height: 150px;margin-left:40px;border-radius: 8px;border: 1px solid #D2D2CD;box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.15);display:flex;justify-content: space-between;padding-left:24px;padding-right:34px;padding-top:18px;">
                            <div class="content-bank" style="display:block;">
                                <span style="display:flex;justify-content: flex-start;align-items: baseline;color: #000;font-family: 'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 700;line-height: normal;letter-spacing: 2.88px;">{{ $transaction->code }}</span>
                                <span style="margin-top:10px;gap:10px;display:flex;justify-content: flex-start;align-items: baseline;">Loại giao dịch: <p>{{ $transaction->type->description()  }}</p></span>
                                <span style="gap:10px;display:flex;justify-content: flex-start;align-items: baseline;">Trạng thái: <p style="color: #269300;font-weight: 700;">{{ $transaction->status->description() }}</p></span>
                                <!-- <span class="d-lg-flex d-block">Mã giao dịch VNPAY: <b class="text-dark">{{ $transaction->code_vnpay }}</b></span>
                                    <span class="d-lg-flex d-block">Mã ngân hàng: <b class="text-dark">{{ $transaction->bank }}</b></span> -->
                                <span style="gap:10px;display:flex;justify-content: flex-start;align-items: baseline;color: #A6A4A4;font-size: 12px;font-weight: 500;letter-spacing: 1.2px;">{{ format_datetime($transaction->created_at) }}</span>
                            </div>
                            <div class="content-money" style="display: inline-flex;flex-direction: column;align-items: flex-end;gap: 14px;">
                                <span style="display:flex;justify-content: flex-end;align-items: baseline;color: #269300;font-family: 'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 700;line-height: normal;letter-spacing: 1.6px;color:#EB3131;">{{$transaction->type->value == 2 ? "-" : ""}}{{ format_price($transaction->amount) }}</span>
                                <span style="gap:10px;display:flex;justify-content: flex-end;align-items: baseline;">Phí giao dịch: <p style="color:#EB3131;">-{{ format_price($transaction->fee) }}</p></span>
                                <span style="gap:10px;display:flex;justify-content: flex-end;align-items: baseline;">Ví tiền: <p>{{ format_price(auth()->user()->wallet()->value('amount')) }}</p></span>
                            </div>
                        </div>
                        @endforeach
                        <div style="text-align: center;">
                            <span>Xem thêm <i style="margin-left:auto;font-size:20px;" class="ri-arrow-down-s-line"></i></span>
                        </div>
                    </div>
                </div>
            </div>
                
            <div style="width: 34.46%;border-radius: 10px;margin-top: 220px;">

                <div style="background: #fff;width:100%;border-radius: 10px;">
                    <div style="width:100%;height:55px;display: flex;align-items: center;padding-left:40px;">
                        <div style="width:59.14%;color: #E0793F;font-family: 'Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 800;line-height: normal;border-bottom:1px solid rgba(0, 0, 0, 0.11);padding-bottom:10px;">Đánh giá cộng đồng</div>
                    </div>
                    <div style="height: 100%;">
                        <div style="width:83.43%;padding-left:40px;margin-top:20px;">
                            <div style="width:100%;">
                                <div style="justify-content: space-between;display: flex;align-items: center;">
                                    <div style="display: inline-flex;align-items: center;gap: 10px;">
                                        <div>
                                            <img width="45px" height="45px" src="{{ asset('viewsCustom/assets/images/faces-clipart/pic-1.png') }}" alt="">
                                        </div>
                                        <div style="display: block; width: 59.59%;">
                                            <span style="color: #000;font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Trần Tuấn Anh</span>
                                            <span style="color: rgba(166, 164, 164, 0.70);font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">2023/06/14 - 19:50</span>
                                        </div>
                                    </div>
                                    <div style="display: inline-flex;align-items: flex-start;gap: 5px;width: 12.33%;margin-left:auto;">
                                        <span style="color: #FBC250;font-family:' Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">5</span>
                                        <img src="{{ asset('viewsCustom/assets/images/star.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div style="width:100%;border-bottom:1px solid #D2D2CD;margin-top:10px;padding-bottom:20px;">
                                <span>Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt!</span>
                            </div>
                        </div>

                        <div style="width:83.43%;padding-left:40px;margin-top:20px;">
                            <div style="width:100%;">
                                <div style="justify-content: space-between;display: flex;align-items: center;">
                                    <div style="display: inline-flex;align-items: center;gap: 10px;">
                                        <div>
                                            <img width="45px" height="45px" src="{{ asset('viewsCustom/assets/images/faces-clipart/pic-1.png') }}" alt="">
                                        </div>
                                        <div style="display: block; width: 59.59%;">
                                            <span style="color: #000;font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Trần Tuấn Anh</span>
                                            <span style="color: rgba(166, 164, 164, 0.70);font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">2023/06/14 - 19:50</span>
                                        </div>
                                    </div>
                                    <div style="display: inline-flex;align-items: flex-start;gap: 5px;width: 12.33%;margin-left:auto;">
                                        <span style="color: #FBC250;font-family:' Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">5</span>
                                        <img src="{{ asset('viewsCustom/assets/images/star.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div style="width:100%;border-bottom:1px solid #D2D2CD;margin-top:10px;padding-bottom:20px;">
                                <span>Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt!</span>
                            </div>
                        </div>

                        <div style="width:83.43%;padding-left:40px;margin-top:20px;">
                            <div style="width:100%;">
                                <div style="justify-content: space-between;display: flex;align-items: center;">
                                    <div style="display: inline-flex;align-items: center;gap: 10px;">
                                        <div>
                                            <img width="45px" height="45px" src="{{ asset('viewsCustom/assets/images/faces-clipart/pic-1.png') }}" alt="">
                                        </div>
                                        <div style="display: block; width: 59.59%;">
                                            <span style="color: #000;font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Trần Tuấn Anh</span>
                                            <span style="color: rgba(166, 164, 164, 0.70);font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">2023/06/14 - 19:50</span>
                                        </div>
                                    </div>
                                    <div style="display: inline-flex;align-items: flex-start;gap: 5px;width: 12.33%;margin-left:auto;">
                                        <span style="color: #FBC250;font-family:' Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">5</span>
                                        <img src="{{ asset('viewsCustom/assets/images/star.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div style="width:100%;border-bottom:1px solid #D2D2CD;margin-top:10px;padding-bottom:20px;">
                                <span>Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt!</span>
                            </div>
                        </div>

                        <div style="width:83.43%;padding-left:40px;margin-top:20px;">
                            <div style="width:100%;">
                                <div style="justify-content: space-between;display: flex;align-items: center;">
                                    <div style="display: inline-flex;align-items: center;gap: 10px;">
                                        <div>
                                            <img width="45px" height="45px" src="{{ asset('viewsCustom/assets/images/faces-clipart/pic-1.png') }}" alt="">
                                        </div>
                                        <div style="display: block; width: 59.59%;">
                                            <span style="color: #000;font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Trần Tuấn Anh</span>
                                            <span style="color: rgba(166, 164, 164, 0.70);font-family: 'Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">2023/06/14 - 19:50</span>
                                        </div>
                                    </div>
                                    <div style="display: inline-flex;align-items: flex-start;gap: 5px;width: 12.33%;margin-left:auto;">
                                        <span style="color: #FBC250;font-family:' Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">5</span>
                                        <img src="{{ asset('viewsCustom/assets/images/star.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div style="width:100%;border-bottom:1px solid #D2D2CD;margin-top:10px;padding-bottom:20px;">
                                <span>Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt! Shop uy tín. Chất lượng tốt!</span>
                            </div>
                        </div>
                                
                    </div>
                    <div style="text-align: center;">
                        <span>Xem thêm <i style="margin-left:auto;font-size:20px;" class="ri-arrow-down-s-line"></i></span>
                    </div>
                </div>
                
            </div>

        </div>
    </x-form>
</div>
<style>

    li a {
        color: #303030;
        font-family: 'Lato' sans-serif;
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
        font-family: ' Lato' sans-serif;
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    .content-money span {
        color: #000;
        font-family: 'Lato' sans-serif;
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
        font-family: 'Lato' sans-serif;
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
        font-family: 'Lato' sans-serif;
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
        font-family: 'Lato' sans-serif;
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
        border: none !important;
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
</style>

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

    //Validate reset password
    let newPassword = document.querySelector('#new-password')
    let rePassword = document.querySelector('#re-password')
    let newPassword_err = document.querySelector('#new-password-err')
    let rePassword_err = document.querySelector('#re-password-err')
    let form_resetPassword = document.querySelector('#form-resetpass')
    let btnResetpass = document.querySelector('#btn-resetpass')

    newPassword.addEventListener('input', (e) => {
        let passwordRegex = /^(?=.*[a-zA-Z]).{8,}$/;
        if (!passwordRegex.test(e.target.value)) {
            newPassword_err.textContent = 'Mật khẩu tối thiểu phải có 8 kí tự và ít nhất một chữ cái.';
        } else {
            newPassword_err.textContent = '';
        }
    })


    rePassword.addEventListener('input', (e) => {

        if (e.target.value === newPassword.value) {

            rePassword_err.textContent = '';
        } else if (e.target.value == '') {
            rePassword_err.textContent = '';
        } else {
            rePassword_err.textContent = 'Mật khẩu chưa khớp với mật khẩu ở trên.';
        }
    })

    form_resetPassword.addEventListener('input', () => {
        // Check if all fields are valid
        if (newPassword_err.textContent === '' && rePassword_err.textContent === '' && rePassword.value !== '') {
            btnResetpass.disabled = false;
        } else {
            btnResetpass.disabled = true;
        }
    });
</script>
<script src="/public/viewsCustom/assets/js/cropper.min.js"></script>
@endsection