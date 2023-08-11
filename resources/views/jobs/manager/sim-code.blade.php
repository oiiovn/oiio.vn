@extends('layout')

@section('content')
<div style="margin-bottom:20px;display:flex;"><a
        style="color: #E0793F;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;">Mua
        code</a>
    <span
        style="color: #000;font-size: 22px;font-style: normal;font-weight: 500;line-height: normal;padding-left:5px;padding-right:5px;">
        | </span>
    <a style="color: #000;font-size: 20px;font-style: normal;font-weight: 500;line-height: normal;"
        href="{{ route('history-sim-code') }}">Lịch sử mua
        code</a>
</div>
<div class="outside-sim-code" style="width:150%;">
    <div class="all-sim-code" style="display:flex;">
        <div class="all-app-sim-code" style="height: auto;border-radius: 10px;background: #FFF;">
            <div style="margin-top:20px;margin-left:10px;"><span
                    style="color: #E0793F;font-size: 22px;font-style: normal;font-weight: 800;line-height: normal;">Danh
                    sách ứng dụng</span>
            </div>
            <div style="margin-top:20px;">
                <div class="search-field-s d-none d-md-block"
                    style="width: 54.5%;margin-left:20px;    display: block !important;">
                    <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group-s">
                            <input type="text" class="form-control-s" placeholder="Tìm kiếm">
                            <div style="position: relative;border-left: 1px solid #3333;align-items: center;justify-content: center;display: flex;width: 20%;margin-left: auto;"
                                class="input-group-prepend-s bg-transparent">
                                <img src="{{ asset('icon/search.svg') }}" alt="logo">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="sim-code_content" style="margin-top:25px;height:auto;margin-left:10px;">
                <div class="grid-item-sim-code">
                    <div style="margin-left:9px;margin-top:8px;"><img
                            src="{{ asset('viewsCustom/assets/images/icon-fb.svg') }}"
                            style="width:30px; height:30px;" />
                    </div>
                    <div style="display:block;margin-right:9px;margin-top:4px;">
                        <div class="text-app-sim-code"
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            Facebook</div>
                        <div
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            1.5/sim</div>
                    </div>
                </div>
                <div class="grid-item-sim-code">
                    <div style="margin-left:9px;margin-top:8px;"><img
                            src="{{ asset('viewsCustom/assets/images/icon-shoppe.svg') }}"
                            style="width:30px; height:30px;" />
                    </div>
                    <div style="display:block;margin-right:9px;margin-top:4px;">
                        <div class="text-app-sim-code"
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            Shopee/shopee pay</div>
                        <div
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            1.3/sim</div>
                    </div>
                </div>
                <div class="grid-item-sim-code">
                    <div style="margin-left:9px;margin-top:8px;"><img
                            src="{{ asset('viewsCustom/assets/images/icon-tinder.svg') }}"
                            style="width:30px; height:30px;" />
                    </div>
                    <div style="display:block;margin-right:9px;margin-top:4px;">
                        <div class="text-app-sim-code"
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            Tinder</div>
                        <div
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            1/sim</div>
                    </div>
                </div>
                <div class="grid-item-sim-code">
                    <div style="margin-left:9px;margin-top:8px;"><img
                            src="{{ asset('viewsCustom/assets/images/icon-talk.svg') }}"
                            style="width:30px; height:30px;" />
                    </div>
                    <div style="display:block;margin-right:9px;margin-top:4px;">
                        <div class="text-app-sim-code"
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            KakaoTalk</div>
                        <div
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            1/sim</div>
                    </div>
                </div>
                <div class="grid-item-sim-code">
                    <div style="margin-left:9px;margin-top:8px;"><img
                            src="{{ asset('viewsCustom/assets/images/icon-gmail.svg') }}"
                            style="width:30px; height:30px;" />
                    </div>
                    <div style="display:block;margin-right:9px;margin-top:4px;">
                        <div class="text-app-sim-code"
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            Gmail/Google/Youtube</div>
                        <div
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            1.3/sim</div>
                    </div>
                </div>
                <div class="grid-item-sim-code">
                    <div style="margin-left:9px;margin-top:8px;"><img
                            src="{{ asset('viewsCustom/assets/images/icon-telegram.svg') }}"
                            style="width:30px; height:30px;" />
                    </div>
                    <div style="display:block;margin-right:9px;margin-top:4px;">
                        <div class="text-app-sim-code"
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            Telegram</div>
                        <div
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            4/sim</div>
                    </div>
                </div>
                <div class="grid-item-sim-code">
                    <div style="margin-left:9px;margin-top:8px;"><img
                            src="{{ asset('viewsCustom/assets/images/icon-lazada.svg') }}"
                            style="width:30px; height:30px;" />
                    </div>
                    <div style="display:block;margin-right:9px;margin-top:4px;">
                        <div class="text-app-sim-code"
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            Lazada</div>
                        <div
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            1/sim</div>
                    </div>
                </div>
                <div class="grid-item-sim-code">
                    <div style="margin-left:9px;margin-top:8px;"><img
                            src="{{ asset('viewsCustom/assets/images/icon-go88.svg') }}"
                            style="width:30px; height:30px;" />
                    </div>
                    <div style="display:block;margin-right:9px;margin-top:4px;">
                        <div class="text-app-sim-code"
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            Go88/Nn88</div>
                        <div
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            1.3/sim</div>
                    </div>
                </div>
                <div class="grid-item-sim-code">
                    <div style="margin-left:9px;margin-top:8px;"><img
                            src="{{ asset('viewsCustom/assets/images/icon-yahoo.svg') }}"
                            style="width:30px; height:30px;" />
                    </div>
                    <div style="display:block;margin-right:9px;margin-top:4px;">
                        <div class="text-app-sim-code"
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            Yahoo</div>
                        <div
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            4/sim</div>
                    </div>
                </div>
                <div class="grid-item-sim-code">
                    <div style="margin-left:9px;margin-top:8px;"><img
                            src="{{ asset('viewsCustom/assets/images/icon-intagram.svg') }}"
                            style="width:30px; height:30px;" />
                    </div>
                    <div style="display:block;margin-right:9px;margin-top:4px;">
                        <div class="text-app-sim-code"
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            Instagram</div>
                        <div
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            1/sim</div>
                    </div>
                </div>
                <div class="grid-item-sim-code">
                    <div style="margin-left:9px;margin-top:8px;"><img
                            src="{{ asset('viewsCustom/assets/images/icon-zalo.svg') }}"
                            style="width:30px; height:30px;" />
                    </div>
                    <div style="display:block;margin-right:9px;margin-top:4px;">
                        <div class="text-app-sim-code"
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            Zalo</div>
                        <div
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            1.3/sim</div>
                    </div>
                </div>
                <div class="grid-item-sim-code">
                    <div style="margin-left:9px;margin-top:8px;"><img
                            src="{{ asset('viewsCustom/assets/images/icon-microsoft.svg') }}"
                            style="width:30px; height:30px;" />
                    </div>
                    <div style="display:block;margin-right:9px;margin-top:4px;">
                        <div class="text-app-sim-code"
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            Microsoft/hotmail</div>
                        <div
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            4/sim</div>
                    </div>
                </div>
                <div class="grid-item-sim-code">
                    <div style="margin-left:9px;margin-top:8px;"><img
                            src="{{ asset('viewsCustom/assets/images/icon-taobao.svg') }}"
                            style="width:30px; height:30px;" />
                    </div>
                    <div style="display:block;margin-right:9px;margin-top:4px;">
                        <div class="text-app-sim-code"
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            Taobao/1688</div>
                        <div
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;;">
                            1/sim</div>
                    </div>
                </div>
                <div class="grid-item-sim-code">
                    <div style="margin-left:9px;margin-top:8px;"><img
                            src="{{ asset('viewsCustom/assets/images/icon-tiktok.svg') }}"
                            style="width:30px; height:30px;" />
                    </div>
                    <div style="display:block;margin-right:9px;margin-top:4px;">
                        <div class="text-app-sim-code"
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            Tiktok</div>
                        <div
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            1.3/sim</div>
                    </div>
                </div>
                <div class="grid-item-sim-code">
                    <div style="margin-left:9px;margin-top:8px;"><img
                            src="{{ asset('viewsCustom/assets/images/icon-texas-poker.svg') }}"
                            style="width:30px; height:30px;" />
                    </div>
                    <div style="display:block;margin-right:9px;margin-top:4px;">
                        <div class="text-app-sim-code"
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            Texas Poker</div>
                        <div
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            4/sim</div>
                    </div>
                </div>
                <div class="grid-item-sim-code">
                    <div style="margin-left:9px;margin-top:8px;"><img
                            src="{{ asset('viewsCustom/assets/images/icon-b52.svg') }}"
                            style="width:30px; height:30px;" />
                    </div>
                    <div style="display:block;margin-right:9px;margin-top:4px;">
                        <div class="text-app-sim-code"
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            B52/Win79/PQ88</div>
                        <div
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            1/sim</div>
                    </div>
                </div>
                <div class="grid-item-sim-code">
                    <div style="margin-left:9px;margin-top:8px;"><img
                            src="{{ asset('viewsCustom/assets/images/icon-tark.svg') }}"
                            style="width:30px; height:30px;" />
                    </div>
                    <div style="display:block;margin-right:9px;margin-top:4px;">
                        <div class="text-app-sim-code"
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            Escape from Tark</div>
                        <div
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            1.3/sim</div>
                    </div>
                </div>
                <div class="grid-item-sim-code">
                    <div style="margin-left:9px;margin-top:8px;"><img
                            src="{{ asset('viewsCustom/assets/images/icon-ku-casino.svg') }}"
                            style="width:30px; height:30px;" />
                    </div>
                    <div style="display:block;margin-right:9px;margin-top:4px;">
                        <div class="text-app-sim-code"
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            Ku Casino/KUBETO</div>
                        <div
                            style="color: #000;text-align: right;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">
                            4/sim</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="get-number" style="height:560px;border-radius: 10px;background: #FFF;">
            <div style="margin-left:43px;margin-top:28px;margin-bottom:20px;"><span
                    style="color: #E0793F;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;">Bấm
                    để lấy số</span></div>
            <div>
                <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}"
                    style="display:flex;width:100%;">
                    <div class="dl-f" style="width: 90%;margin:auto;">
                        <label
                            style="color: rgba(0, 0, 0, 0.70);text-align: center;font-size: 16px;font-style: normal;font-weight: 700;line-height: normal;z-index:2;"
                            class="form-label title-ip-1">{{ __('Nhà mạng') }}</label>
                        <div style="display:block;" class="length-ip">
                            <div class="mb-3 w-form pd-form f-create-shop">
                                <div class="dropdown" style="width:100%;">
                                    <x-input class="w-100 height-ip" name="myInput"
                                        placeholder="Chọn nhà mạng để lấy số" required
                                        style="color: rgba(0, 0, 0, 0.70);display: flex;width: 600px;width: 100% !important;align-items: center;flex-shrink: 0;" />
                                    <a class="dropdown-icon" alt="Dropdown Icon"><img
                                            src="{{ asset('viewsCustom/assets/images/down-small.svg') }}"
                                            style="width:25px;height:25px;" /></a>
                                    <ul class="dropdown-list">
                                        <li>Mobi</li>
                                        <li>Vina</li>
                                        <li>Viettel</li>
                                        <li>VNMB</li>
                                        <li>Viettel</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </x-form>
                <x-form type="post" :validate="true" action="{{ route('user.post_shop') }}"
                    style="display:flex;width:100%;">
                    <div class="dl-f" style="width: 90%;margin:auto;">
                        <label
                            style="color: rgba(0, 0, 0, 0.70);text-align: center;font-size: 16px;font-style: normal;font-weight: 700;line-height: normal;"
                            class="form-label title-ip-2">{{ __('Đầu số') }}</label>
                        <div style="display:block;" class="length-ip">
                            <div class="mb-3 w-form pd-form f-create-shop">
                                <x-input class="w-100 height-ip" name="name_shop" placeholder="Ex: 0399,0925,097"
                                    :required="true"
                                    style="color: rgba(0, 0, 0, 0.70);display: flex;width: 600px;width: 100% !important;align-items: center;flex-shrink: 0;" />
                            </div>
                        </div>
                    </div>
                </x-form>
            </div>
            <div style="margin-left:43px;margin-top:20px;margin-bottom:20px;"><span
                    style="color: #000;font-size: 16px;font-style: normal;font-weight: 700;line-height: normal;">Thường
                    Dùng</span></div>
            <div class="buy-speed" style="display: grid;grid-template-columns: auto auto;margin-left:43px;">
                <div
                    style="width: 156px;height: 46px;border-radius: 5px;border: 1px solid gray;margin-bottom:20px;display:flex;padding-left:9px;padding-top:8px;">
                    <img src="{{ asset('viewsCustom/assets/images/icon-lazada.svg') }}"
                        style="width:30px; height:30px;" />
                    <span style="margin-left:10px;">lazada</span>
                </div>
                <div
                    style="width: 156px;height: 46px;border-radius: 5px;border: 1px solid gray;margin-bottom:20px;display:flex;padding-left:9px;padding-top:8px;">
                    <img src="{{ asset('viewsCustom/assets/images/icon-lazada.svg') }}"
                        style="width:30px; height:30px;" />
                    <span style="margin-left:10px;">Facebook</span>
                </div>
                <div
                    style="width: 156px;height: 46px;border-radius: 5px;border: 1px solid gray;margin-bottom:20px;display:flex;padding-left:9px;padding-top:8px;">
                    <img src="{{ asset('viewsCustom/assets/images/icon-shoppe.svg') }}"
                        style="width:30px; height:30px;" />
                    <span style="margin-left:10px;">Shopee/Shop...</span>
                </div>
                <div
                    style="width: 156px;height: 46px;border-radius: 5px;border: 1px solid gray;margin-bottom:20px;display:flex;padding-left:9px;padding-top:8px;">
                    <img src="{{ asset('viewsCustom/assets/images/icon-intagram.svg') }}"
                        style="width:30px; height:30px;" />
                    <span style="margin-left:10px;">Instagram</span>
                </div>
                <div
                    style="width: 156px;height: 46px;border-radius: 5px;border: 1px solid gray;margin-bottom:20px;display:flex;padding-left:9px;padding-top:8px;">
                    <img src="{{ asset('viewsCustom/assets/images/icon-zalo.svg') }}"
                        style="width:30px; height:30px;" />
                    <span style="margin-left:10px;">Zalo</span>
                </div>
                <div
                    style="width: 156px;height: 46px;border-radius: 5px;border: 1px solid gray;margin-bottom:20px;display:flex;padding-left:9px;padding-top:8px;">
                    <img src="{{ asset('viewsCustom/assets/images/icon-gmail.svg') }}"
                        style="width:30px; height:30px;" />
                    <span style="margin-left:10px;">Gmail/Googl...</span>
                </div>
                <div
                    style="width: 156px;height: 46px;border-radius: 5px;border: 1px solid gray;margin-bottom:20px;display:flex;padding-left:9px;padding-top:8px;">
                    <img src="{{ asset('viewsCustom/assets/images/icon-talk.svg') }}"
                        style="width:30px; height:30px;" />
                    <span style="margin-left:10px;">KakaoTalk</span>
                </div>
                <div
                    style="width: 156px;height: 46px;border-radius: 5px;border: 1px solid gray;margin-bottom:20px;display:flex;padding-left:9px;padding-top:8px;">
                    <img src="{{ asset('viewsCustom/assets/images/icon-telegram.svg') }}"
                        style="width:30px; height:30px;" />
                    <span style="margin-left:10px;">Telegram</span>
                </div>
            </div>
        </div>
    </div>
    <div class="all-bought" style="height:auto;border-radius: 10px;background: #FFF;margin-bottom:20px;">
        <div style="padding-left:20px;padding-top:20px;padding-bottom:20px;"><span class="title-history-buy">Tin
                nhắn sẽ tự động xuất hiện, bạn không cẩn tải lại trang</span>
        </div>
        <div class="border-history-buy-sim-code"
            style="width: 90%;height: 60px;border-radius: 5px;border: 1px solid #CBCBC6;margin:auto;display:flex;    justify-content: space-around;">
            <span style="margin-top:15px;width:150px;">Tên ứng dụng</span>
            <span style="margin-top:15px;">Số điện thoại</span>
            <span style="margin-top:15px;">Code</span>
            <span style="margin-top:15px;">Trạng thái</span>
            <span style="margin-top:15px;">Thời gian</span>
        </div>
        <div class="all-text-history">
            <div class="items-bought">
                <div style="display:flex;width:150px;">
                    <img src="{{ asset('viewsCustom/assets/images/icon-lazada.svg') }}"
                        style="width:30px; height:30px;" />
                    <span style="margin-left:10px;">lazada</span>
                </div>
                <div style="width: 120px;"><span
                        style="color: #000;text-align: center;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;letter-spacing: 0.84px;">09012345678</span>
                </div>
                <div></div>
                <div><span
                        style="color: #FBC250;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Đợi
                        tin nhắn</span></div>
                <div><span
                        style="color: #565656;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;letter-spacing: 1.4px;">13:53:42</span>
                </div>
            </div>
            <div class="items-bought">
                <div style="display:flex;width:150px;">
                    <img src="{{ asset('viewsCustom/assets/images/icon-zalo.svg') }}"
                        style="width:30px; height:30px;" />
                    <span style="margin-left:10px;">Zalo</span>
                </div>
                <div style="width: 120px;"><span
                        style="color: #000;text-align: center;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;letter-spacing: 0.84px;">09002343478</span>
                </div>
                <div></div>
                <div><span
                        style="color: #FBC250;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Đợi
                        tin nhắn</span></div>
                <div><span
                        style="color: #565656;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;letter-spacing: 1.4px;">13:53:42</span>
                </div>
            </div>
            <div class="items-bought">
                <div style="display:flex;width:150px;">
                    <img src="{{ asset('viewsCustom/assets/images/icon-shoppe.svg') }}"
                        style="width:30px; height:30px;" />
                    <span style="margin-left:10px;">Shoppe</span>
                </div>
                <div style="width: 120px;"><span
                        style="color: #000;text-align: center;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;letter-spacing: 0.84px;">09002343478</span>
                </div>
                <div></div>
                <div><span
                        style="color: #FBC250;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Đợi
                        tin nhắn</span></div>
                <div><span
                        style="color: #565656;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;letter-spacing: 1.4px;">13:53:42</span>
                </div>
            </div>
            <div class="items-bought">
                <div style="display:flex;width:150px;">
                    <img src="{{ asset('viewsCustom/assets/images/icon-fb.svg') }}" style="width:30px; height:30px;" />
                    <span style="margin-left:10px;">Facebook</span>
                </div>
                <div style="width: 120px;"><span
                        style="color: #000;text-align: center;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;letter-spacing: 0.84px;">09002323478</span>
                </div>
                <div></div>
                <div><span
                        style="color: #FBC250;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Đợi
                        tin nhắn</span></div>
                <div><span
                        style="color: #565656;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;letter-spacing: 1.4px;">13:53:42</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
#sidebarRight {
    display: none;
}

#sidebar-Left {
    height: 1150px !important;
}

* {
    font-family: 'Lato'sans-serif !important;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-icon {
    position: absolute;
    right: 5px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
}

.dropdown-list {
    position: absolute;
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    padding: 5px;
    display: none;
    list-style-type: none;
    margin: 0;
    z-index: 1;
}

.dropdown-list li {
    cursor: pointer;
    width: 200px;
    padding-left: 15px;
}

.dropdown-list li:hover {
    background-color: #e2e2e2;
}

@media(max-width:2400px) {
    .get-number {
        margin-left: 23px;
        width: 450px;
    }

    .outside-sim-code {
        display: block;
    }

    .all-app-sim-code {
        width: 681px;
    }

    .grid-item-sim-code {
        width: 196px;
        height: 46px;
        margin-left: 10px;
        margin-bottom: 20px;
        border: 1px solid gray;
        border-radius: 5px;
        display: flex;
        justify-content: space-between;
    }

    .all-bought {
        width: 1160px;
        margin-top: 20px;
    }

    .sim-code_content {
        display: grid;
        grid-template-columns: auto auto auto;
    }

    .title-history-buy {
        color: #303030;
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }

    .items-bought {
        padding-top: 20px;
        display: flex;
        width: 90%;
        margin: auto;
        justify-content: space-around;
        height: 70px;
        border-bottom: 1px solid gray;
    }
}

@media(max-width:1200px) {
    .all-sim-code {
        display: flex;
        flex-direction: column-reverse;
    }

    .get-number {
        margin-left: 0px;
        margin-bottom: 20px;
    }

    .outside-sim-code {
        display: flex;
        flex-direction: column-reverse;
    }

    .title-history-buy {
        font-size: 13px;
    }

    .border-history-buy-sim-code {
        display: none !important;
    }
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
        width: 90px;
    }

    .title-ip-2 {
        position: absolute;
        top: -12px;
        left: 40px;
        background: #fff;
        width: 70px
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
        width: 90px
    }

    .title-ip-2 {
        position: absolute;
        top: -12px;
        left: 100px;
        background: #fff;
        width: 70px
    }

}

@media(max-width:395px) {
    .get-number {
        width: 393px;
    }

    .buy-speed {
        margin-left: 0px !important;
        justify-content: space-evenly;
    }

    .all-app-sim-code {
        width: 393px;
    }

    .sim-code_content {
        display: grid;
        grid-template-columns: auto auto;
    }

    .grid-item-sim-code {
        width: 150px;
    }

    .text-app-sim-code {
        max-width: 100px;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    .all-text-history {
        display: grid;
        grid-template-columns: auto auto;
    }

    .all-bought {
        width: 393px;
    }

    .items-bought {
        padding-top: 20px;
        display: block;
        width: 100%;
        margin: auto;
        border: 1px solid gray;
        height: auto;
    }
}

.form-control:focus {
    border: 2px solid #d0011b !important;
    box-shadow: none !important;
}
</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropdownIcons = document.querySelectorAll('.dropdown-icon');
    const dropdownLists = document.querySelectorAll('.dropdown-list');
    const inputs = document.querySelectorAll('input[name^="myInput"]');

    dropdownIcons.forEach(function(icon, index) {
        icon.addEventListener('click', function() {
            dropdownLists[index].style.display = dropdownLists[index].style.display === 'none' ?
                'block' : 'none';
        });
    });

    dropdownLists.forEach(function(list, index) {
        const options = list.querySelectorAll('li');
        options.forEach(function(option) {
            option.addEventListener('click', function() {
                inputs[index].value = option.textContent;
                list.style.display = 'none';
            });
        });
    });
});
</script>