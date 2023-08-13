@extends('layout')

@section('content')
<div style="width:150%;">
    <div style="margin-bottom:20px;display:flex;"><a
            style="color: #000;font-size: 20px;font-style: normal;font-weight: 500;line-height: normal;"
            href="{{ route('sim-code') }}">Mua
            code</a>
        <span
            style="color: #000;font-size: 22px;font-style: normal;font-weight: 500;line-height: normal;padding-left:5px;padding-right:5px;">
            | </span>
        <a style="color: #E0793F;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;">Lịch sử mua
            code</a>
    </div>

    <div style="width: 1150px;height: 227px;border-radius: 10px;background: #FFF;">
        <div style="margin-top:20px;margin-left:20px;"><span
                style="color: #E0793F;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;">Danh
                sách code đã mua</span>
        </div>
        <div style="display:flex;margin-top:20px;margin-left:20px;justify-content: space-between;width:50%;">
            <div style="padding-top:10px;"><span
                    style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Từ
                    ngày</span>
            </div>
            <div><input type="date"
                    style="width: 184px;height: 50px;flex-shrink: 0;border-radius: 5px;border: 1px solid #A6A4A4;padding-right:10px;padding-left:10px;">
            </div>
            <div style="padding-top:10px;"><span
                    style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Đến
                    ngày</span>
            </div>
            <div><input type="date"
                    style="width: 184px;height: 50px;flex-shrink: 0;border-radius: 5px;border: 1px solid #A6A4A4;padding-right:10px;padding-left:10px;"">
            </div>  
        </div> 
        <div style=" width:100%;height:46px;margin-top:20px;display:flex;">
                <div style="padding-left:20px;padding-right:20px;padding-top:10px;">Ứng dụng</div>
                <div>
                    <form>
                        <div class="dropdown">
                            <input
                                style="width: 324px;border-radius:5px;height:46px;padding-left:10px;border: 1px solid rgba(48, 48, 48, 0.21);"
                                type="text" name="myInput4" placeholder="Vui lòng chọn" readonly>
                            <a class="dropdown-icon" alt="Dropdown Icon"><img
                                    src="{{ asset('viewsCustom/assets/images/down-small.svg') }}" /></a>
                            <ul class="dropdown-list">
                                <li>Không áp mã</li>
                                <li>Áp mã freeship</li>
                                <li>Áp mã sàn</li>
                                <li>Áp mã shop</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div style="padding-left:20px;padding-right:20px;padding-top:10px;">Trạng thái</div>
                <div>
                    <form>
                        <div class="dropdown">
                            <input
                                style="width: 324px;border-radius:5px;height:46px;padding-left:10px;border: 1px solid rgba(48, 48, 48, 0.21);"
                                type="text" name="myInput4" placeholder="Vui lòng chọn" readonly>
                            <a class="dropdown-icon" alt="Dropdown Icon"><img
                                    src="{{ asset('viewsCustom/assets/images/down-small.svg') }}" /></a>
                            <ul class="dropdown-list">
                                <li>Không áp mã</li>
                                <li>Áp mã freeship</li>
                                <li>Áp mã sàn</li>
                                <li>Áp mã shop</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div><button
                        style="border-radius: 5px;background: #E0793F;height:46px;text-align: center;margin-left:20px;width:166px;border:none;">
                        <span
                            style="color: #FFF;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;padding:10px 0px;">Tìm
                            kiếm</span>
                    </button>
                </div>
            </div>
        </div>
        <div style="display:flex;margin-top:40px;margin-left:20px;">
            <span>Hiện</span>


            <div class="dropdown" style="margin-left:10px;margin-right:10px;">
                <input
                    style="width: 66px;border-radius:5px;height:28px;padding-left:10px;border: 1px solid rgba(48, 48, 48, 0.21);"
                    type="text" name="myInput4" placeholder="1" readonly>
                <a class="dropdown-icon" alt="Dropdown Icon"><img
                        src="{{ asset('viewsCustom/assets/images/down-small.svg') }}" /></a>
                <ul class="dropdown-list" style="width:66px;">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                </ul>
            </div>

            <span>Mục</span>

        </div>
        <div style="background:#fff;margin-top:20px;width:1150px;padding-top: 20px;padding-bottom: 20px;">
            <div style="width: 90%;height: 60px;border-radius: 5px;border: 1px solid #CBCBC6;margin:auto;display:flex;">
                <span style="margin-top:15px;margin-left: 43px;">Tên ứng dụng</span>
                <span style="margin-top:15px;margin-left: 120px;">Số điện thoại</span>
                <span style="margin-top:15px;margin-left: 100px;">Code</span>
                <span style="margin-top:15px;margin-left: 160px;">Phí</span>
                <span style="margin-top:15px;margin-left: 100px;">Trạng thái</span>
                <span style="margin-top:15px;margin-left: 90px;">Thời gian</span>
            </div>
            <div
                style="padding-top:20px;display:flex;width: 90%;margin: auto;justify-content: space-around;height: 70px;border-bottom: 1px solid gray;">
                <div style="display:flex;width:150px;">
                    <img src="{{ asset('viewsCustom/assets/images/icon-lazada.svg') }}"
                        style="width:30px; height:30px;" />
                    <span style="margin-left:10px;">Lazada</span>
                </div>
                <div style="width: 120px;"><span
                        style="color: #000;text-align: center;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;letter-spacing: 0.84px;">09002343478</span>
                </div>
                <div><span
                        style="color: #565656;text-align: center;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">230725VXU7WUJC</span>
                </div>
                <div><span
                        style="color: #565656;text-align: center;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">14.500
                        đ</span>
                </div>
                <div><span
                        style="color: #FBC250;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Đợi
                        tin nhắn</span></div>
                <div><span
                        style="color: #565656;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;letter-spacing: 1.4px;">13:53:42</span>
                </div>
            </div>
            <div
                style="padding-top:20px;display:flex;width: 90%;margin: auto;justify-content: space-around;height: 70px;border-bottom: 1px solid gray;">
                <div style="display:flex;width:150px;">
                    <img src="{{ asset('viewsCustom/assets/images/icon-zalo.svg') }}"
                        style="width:30px; height:30px;" />
                    <span style="margin-left:10px;">Zalo</span>
                </div>
                <div style="width: 120px;"><span
                        style="color: #000;text-align: center;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;letter-spacing: 0.84px;">09002343478</span>
                </div>
                <div><span
                        style="color: #565656;text-align: center;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">230725VXU7WUJC</span>
                </div>
                <div><span
                        style="color: #565656;text-align: center;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">14.500
                        đ</span>
                </div>
                <div><span
                        style="color: #FBC250;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Đợi
                        tin nhắn</span></div>
                <div><span
                        style="color: #565656;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;letter-spacing: 1.4px;">13:53:42</span>
                </div>
            </div>
            <div
                style="padding-top:20px;display:flex;width: 90%;margin: auto;justify-content: space-around;height: 70px;border-bottom: 1px solid gray;">
                <div style="display:flex;width:150px;">
                    <img src="{{ asset('viewsCustom/assets/images/icon-shoppe.svg') }}"
                        style="width:30px; height:30px;" />
                    <span style="margin-left:10px;">Shoppe</span>
                </div>
                <div style="width: 120px;"><span
                        style="color: #000;text-align: center;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;letter-spacing: 0.84px;">09002343478</span>
                </div>
                <div><span
                        style="color: #565656;text-align: center;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">230725VXU7WUJC</span>
                </div>
                <div><span
                        style="color: #565656;text-align: center;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">14.500
                        đ</span>
                </div>
                <div><span
                        style="color: #FBC250;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Đợi
                        tin nhắn</span></div>
                <div><span
                        style="color: #565656;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;letter-spacing: 1.4px;">13:53:42</span>
                </div>
            </div>
            <div
                style="padding-top:20px;display:flex;width: 90%;margin: auto;justify-content: space-around;height: 70px;border-bottom: 1px solid gray;">
                <div style="display:flex;width:150px;">
                    <img src="{{ asset('viewsCustom/assets/images/icon-fb.svg') }}" style="width:30px; height:30px;" />
                    <span style="margin-left:10px;">Facebook</span>
                </div>
                <div style="width: 120px;"><span
                        style="color: #000;text-align: center;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;letter-spacing: 0.84px;">09002323478</span>
                </div>
                <div><span
                        style="color: #565656;text-align: center;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">230725VXU7WUJC</span>
                </div>
                <div><span
                        style="color: #565656;text-align: center;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;">14.500
                        đ</span>
                </div>
                <div><span
                        style="color: #FBC250;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal;">Đợi
                        tin nhắn</span></div>
                <div><span
                        style="color: #565656;font-size: 14px;font-style: normal;font-weight: 500;line-height: normal;letter-spacing: 1.4px;">13:53:42</span>
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
        width: 66px;
        padding-left: 15px;
    }

    .dropdown-list li:hover {
        background-color: #e2e2e2;
    }
    </style>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdownIcons = document.querySelectorAll('.dropdown-icon');
        const dropdownLists = document.querySelectorAll('.dropdown-list');
        const inputs = document.querySelectorAll('input[name^="myInput"]');

        dropdownIcons.forEach(function(icon, index) {
            icon.addEventListener('click', function() {
                dropdownLists[index].style.display = dropdownLists[index].style.display ===
                    'none' ?
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