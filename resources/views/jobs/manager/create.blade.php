<link href='https://unpkg.com/css.gg@2.0.0/icons/css/chevron-down.css' rel='stylesheet'>
<!-- font-end mới -->
@extends('layout')
@push('libs-css')
<link href="{{ asset('libs/Parsley.js-2.9.2/style.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="page-create-order" style="display:block;">
    <div class="header-create-order">
        <span style="color: #000;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;">Tạo đơn
            Seeding</span>
    </div>
    <div class="content-create-order">
        <div class="content-left_create-order" style="width:87.5%;background:#fff;margin-bottom:20px;">
            <div class="items-1" style="display: flex;">
                <div class="chon-san">
                    <div style="width:170px;">
                        <span
                            style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Chọn
                            sàn</span>
                    </div>
                    <div class="items-chon-san" style="display:flex;">
                        <div class="items-sp" style="display:flex;">
                            <input class="" type="radio" name="check-box" checked="checked"
                                style="background-color: orange;">
                            <span style="padding-left:15px;">Shopee</span>
                        </div>
                        <div class="radio-pd" style="display:flex;">
                            <input class="" type="radio" name="check-box">
                            <span style="padding-left:15px;">Tiktok</span>
                        </div>
                        <div class="radio-pd" style="display:flex; margin-right:10px;">
                            <input class="" type="radio" name="check-box">
                            <span style="padding-left:15px;">Lazada</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="items-2">
                <div style="width:170px;">
                    <span
                        style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Khu
                        vực lên đơn</span>
                </div>
                <div class="pdl" style="display:flex;">
                    <form>
                        <div class="dropdown">
                            <input
                                style="width: 300px;border-radius:5px;height:45px;padding-left:10px;border: 1px solid rgba(48, 48, 48, 0.21);"
                                type="text" name="myInput6" placeholder="Vui lòng chọn" readonly>
                            <a class="dropdown-icon" alt="Dropdown Icon"> <img
                                    src="{{ asset('viewsCustom/assets/images/down-small.svg') }}" /></a>
                            <ul class="dropdown-list">
                                <li>Tỉnh lẻ</li>
                                <li>Hồ Chí Minh</li>
                                <li>Hà Nội</li>
                                <li>Đà Nẳng</li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
            <div class="items-3">
                <div style="width:170px;">
                    <span
                        style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Yêu
                        cầu tài khoản đặt</span>
                </div>
                <div class="pdl" style="display:flex;">
                    <form>
                        <div class="dropdown">
                            <input
                                style="width: 300px;border-radius:5px;height:45px;padding-left:10px;border: 1px solid rgba(48, 48, 48, 0.21);"
                                type="text" name="myInput2" placeholder="Vui lòng chọn" readonly>
                            <a class="dropdown-icon" alt="Dropdown Icon"><img
                                    src="{{ asset('viewsCustom/assets/images/down-small.svg') }}" /></a>
                            <ul class="dropdown-list">
                                <li>Tài khoản thường</li>
                                <li>Tài khoản bạc</li>
                                <li>Tài khoản vàng</li>
                                <li>Tài khoản kim cương</li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
            <div class="items-4">
                <div style="width:170px;">
                    <span
                        style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Hình
                        thức đánh giá</span>
                </div>
                <div class="pdl" style="display:flex;">
                    <form>
                        <div class="dropdown">
                            <input
                                style="width: 300px;border-radius:5px;height:45px;padding-left:10px;border: 1px solid rgba(48, 48, 48, 0.21);"
                                type="text" name="myInput3" placeholder="Vui lòng chọn" readonly>
                            <a class="dropdown-icon" alt="Dropdown Icon"><img
                                    src="{{ asset('viewsCustom/assets/images/down-small.svg') }}" /></a>
                            <ul class="dropdown-list">
                                <li>Shop gửi đánh giá</li>
                                <li>Tự đánh giá</li>
                                <li>Chỉ đánh giá 5 sao</li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
            <div class="items-5">
                <div style="width:170px;">
                    <span
                        style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Áp
                        mã</span>
                </div>
                <div class="pdl" style="display:flex;">
                    <form>
                        <div class="dropdown">
                            <input
                                style="width: 300px;border-radius:5px;height:45px;padding-left:10px;border: 1px solid rgba(48, 48, 48, 0.21);"
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
            </div>
            <div class="items-6">
                <div style="width:170px;">
                    <span
                        style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Thanh
                        toán</span>
                </div>
                <div class="pdl" style="display:flex;">
                    <form>
                        <div class="dropdown">
                            <input
                                style="width: 300px;border-radius:5px;height:45px;padding-left:10px;border: 1px solid rgba(48, 48, 48, 0.21);"
                                type="text" name="myInput5" placeholder="Vui lòng chọn" readonly>
                            <a class="dropdown-icon" alt="Dropdown Icon"><img
                                    src="{{ asset('viewsCustom/assets/images/down-small.svg') }}" /></a>
                            <ul class="dropdown-list">
                                <li>Shop thanh toán</li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="content-right_create-order" style=" width:412px; height:auto;">
            <div class="vt-order-shop">
                <div class="items-1" style="padding-top: 20px;padding-left: 16px;background: #fff;border-radius:8px;">
                    <div style="width:170px;">
                        <span
                            style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Vận
                            chuyển</span>
                    </div>
                    <div class="radio-1">
                        <input class="" type="radio" name="check-box-vt" checked="checked-vt">
                        <span style="padding-left:15px;">Đơn giao nhanh</span>
                    </div>
                    <div class="radio-2">
                        <input class="" type="radio" name="check-box-vt">
                        <span style="padding-left:15px;">Hoả tốc</span>
                    </div>
                </div>
                <div class="items-2"
                    style="padding-top: 20px;background: #fff;padding-left: 16px;position: relative;border-radius:8px;">
                    <div style="width:170px;">
                        <span
                            style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Hình
                            thức giao nhận</span>
                    </div>
                    <div class="radio-1">
                        <input class="" type="radio" name="check-box-gh" checked="checked-gh">
                        <span style="padding-left:15px;">Nhận hàng</span>
                    </div>
                    <div class="radio-2">
                        <input type="radio" name="check-box-gh">
                        <span style="padding-left:15px;">Không nhận hàng</span>
                    </div>
                </div>
            </div>
            <div class="service-charge"
                style="padding-top:20px;padding-left:16px;background:#fff;position:relative;margin-top:16px;;height:262px;border-radius:8px;">
                <div style="display:flex;">
                    <div>
                        Phí dịch vụ:
                    </div>
                    <div style="position: absolute;right: 34px;">
                        0 đ
                    </div>
                </div>
                <div style="display:flex;padding-top:22px;padding-bottom:22px;">
                    <div>
                        Tiền cọc:
                    </div>
                    <div style="position: absolute;right: 34px;">
                        0 đ
                    </div>
                </div>
                <div style="display:block;padding-top:22px;border-top:1px solid #D9D9D9;">
                    <div style="display:flex;">
                        <div>Tổng phí:</div>
                        <div style="position: absolute;right: 34px;">0 đ</div>
                    </div>
                    <a href="#">
                        <div
                            style="border-radius: 5px;background: #E0793F;margin-top:22px;height:39px;text-align: center;margin-right: 26px;padding:10px;margin-bottom:22px;">
                            <span
                                style="color: #FFF;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;padding:10px 0px;">Đăng
                                đơn</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('libs-js')
<script src="{{ asset('libs/Parsley.js-2.9.2/parsley.min.js') }}"></script>
@endpush
@push('custom-js')
@endpush
<style>
* {
    font-family: 'Lato'sans-serif !important;
}

#sidebarRight {
    display: none;
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

@media (min-width:769px) {
    .chon-san {
        display: flex;
    }

    .items-2 {
        display: flex;
        padding-top: 30px;
    }

    .items-3 {
        display: flex;
        padding-top: 10px;
    }

    .items-4 {
        display: flex;
        padding-top: 10px;
    }

    .items-5 {
        display: flex;
        padding-top: 10px;
    }

    .items-6 {
        display: flex;
        padding-top: 10px;
    }

    .items-sp {
        padding-left: 185px;
    }

    .header-create-order {
        margin-top: 20px;
    }

    .content-left_create-order {
        padding-top: 30px;
    }

    .content-create-order {
        margin-top: 25px;
    }
}

@media(max-width:768px) {
    .content-create-order {
        margin-top: 10px;
    }

    .content-left_create-order {
        padding-top: 0px;
        padding-left: 10px;
    }


    .header-create-order {
        margin-top: 0px;
        margin-left: 16px;
    }

    .pdl {
        padding-top: 15px;
        justify-content: center;
    }

    .items-chon-san {
        padding-top: 15px;
    }

    .items-2 {
        display: block;
        padding-top: 20px;
    }

    .items-3 {
        display: block;
        padding-top: 20px;
    }

    .items-4 {
        display: block;
        padding-top: 20px;
    }

    .items-5 {
        display: block;
        padding-top: 20px;
    }

    .items-6 {
        display: block;
        padding-top: 20px;
    }

    .chon-san {
        display: block;
    }

    .vt-order-shop {
        display: grid !important;
        grid-template-columns: 45% 45%;
        justify-content: space-evenly;
    }

    .vt-order-shop .items-1 {
        height: 150px !important;
        display: block !important;
        margin-right: 8px !important;
        padding-left: 10px !important;
    }

    .vt-order-shop .items-2 {
        height: 150px !important;
        display: block !important;
        padding-left: 10px !important;
    }

    .radio-1 {
        margin-left: 0px !important;
        margin-right: 0px !important;

        padding-top: 20px !important;
    }

    .radio-2 {
        padding-top: 26px !important;
        display: block !important;

    }
}

@media (min-width: 390px) {
    .content-left_create-order {
        padding-left: 10px;
    }

    .row {
        margin-left: 0px !important;
    }

    .container {
        max-width: none !important;
    }

    .content-create-order {
        display: block;
    }

    .vt-order-shop {
        display: block;

    }

    .content-right_create-order {
        width: 100% !important;
    }

    .vt-order-shop .items-1 {
        height: 50px;
        display: flex;
        margin-right: 0px;

    }

    .vt-order-shop .items-2 {
        display: flex;
        height: 50px;
    }


}

@media (max-width:450px) {
    .radio-pd {
        padding-left: 10px;
    }

    .pdl {
        margin-right: 25px;
    }

    .service-charge {
        width: 95%;
        margin-left: 7px;
    }

}

@media (min-width:451px) {
    .radio-pd {
        padding-left: 35px;
    }
}

/* Các kiểu dáng phản ứng */
@media (max-width: 768px) {
    .content-create-order {
        width: 100%;
        margin-right: 0;
        margin-bottom: 20px;
    }


    .content-left_create-order {
        width: 100%;
    }

    .content-right_create-order {
        width: 100%;
        height: auto;
        margin-top: 20px;
    }

    .items-1,
    .items-2,
    .items-3,
    .items-4,
    .items-5,
    .items-6 {
        padding-left: 0 !important;
        padding-top: 10px;
    }

    .dropdown-icon {
        right: 10px;
    }
}

@media (min-width:768px) {
    .pdl {
        padding-left: 185px;
    }

    .content-left_create-order {
        padding-left: 24px;
    }
}

/* Các kiểu dáng cho màn hình 1440px */
@media (min-width: 1440px) {
    .content-left_create-order {
        border-radius: 8px;
    }

    .row {
        margin-left: 16px !important;
    }

    .content-create-order {
        display: flex;
    }

    .vt-order-shop {
        display: grid;
        grid-template-columns: 50% 50%;
    }

    .vt-order-shop .items-1 {
        height: 150px;
        display: block !important;
        margin-right: 8px !important;
    }

    .vt-order-shop .items-2 {
        height: 150px;
        display: block;
    }

    .radio-1 {
        margin-left: 0px;
        margin-right: 0px;

        padding-top: 20px !important;
    }

    .radio-2 {
        padding-top: 26px;
        display: block;

    }

    .content-right_create-order {
        width: 412px !important;
    }

    .content-create-order {
        width: 100.5%;
    }

    .content-right_create-order {
        flex: 1;
        margin-left: 16px;
    }
}

@media (min-width: 1540px) {
    .content-create-order {
        width: 110%;
    }
}

/* Các kiểu dáng cho màn hình 1920px */
@media (min-width: 1920px) {
    .content-create-order {
        width: 133%;
    }
}

@media (max-width:1390px) {
    .content-left_create-order {
        width: 100% !important;
    }
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
document.addEventListener('DOMContentLoaded', function() {
    const dropdownIcon = document.querySelector('.dropdown-icon');
    const dropdownList = document.querySelector('.dropdown-list');
    const options = document.querySelectorAll('.dropdown-list li');
    const inputField = document.querySelector('input[name="myInput"]');

    dropdownIcon.addEventListener('click', function() {
        dropdownList.style.display = dropdownList.style.display === 'none' ? 'block' : 'none';
    });

    options.forEach(function(option) {
        option.addEventListener('click', function() {
            inputField.value = option.textContent;
            dropdownList.style.display = 'none';
        });
    });
});
</script>