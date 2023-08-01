@extends('layout')
@push('libs-css')
    <link href="{{ asset('libs/Parsley.js-2.9.2/style.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="page-create-order" style="display:block;">
        <div class="header-create-order" style="margin-top:20px;">
            <span style="color: #000;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;">Tạo đơn Seeding</span>
        </div>
        <div class="content-create-order" style="display:flex;margin-top:25px;">
            <div class="content-left_create-order" style="padding-left:24px;padding-top:30px;width:87.5%;background:#fff;border-radius:5px;">
                <div class="items-1" style="display: flex;">
                    <div style="width:170px;">
                        <span style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Chọn sàn</span>
                    </div> 
                    <div style="display:flex;padding-left:185px;">
                        <input class=""  type="radio" name="check-box" checked="checked">
                        <span style="padding-left:15px;">Shopee</span>
                    </div>
                    <div style="display:flex;padding-left:35px;">
                        <input class=""  type="radio" name="check-box" checked="checked" style="">
                        <span style="padding-left:15px;">Tiktok</span>
                    </div>                   
                    <div style="display:flex;padding-left:35px;">
                        <input class=""  type="radio" name="check-box" checked="checked">
                        <span style="padding-left:15px;">Lazada</span>
                    </div> 
                </div>
                <div class="items-2" style="display: flex;padding-top:47px;">
                    <div style="width:170px;">
                        <span style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Khu vực lên đơn</span>
                    </div> 
                    <div style="display:flex;padding-left:185px;">
                        <form>
                            <div class="dropdown">
                                <input type="text" name="myInput6" placeholder="Vui lòng chọn" readonly>
                                <a class="dropdown-icon"  alt="Dropdown Icon"><i class="fa-solid fa-caret-down"></i></a>
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
                <div class="items-3"style="display: flex;padding-top:47px;">
                <div style="width:170px;">
                        <span style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Yêu cầu tài khoản đặt</span>
                    </div> 
                    <div style="display:flex;padding-left:185px;">
                        <form>
                            <div class="dropdown">
                                <input type="text" name="myInput2" placeholder="Vui lòng chọn" readonly>
                                <a class="dropdown-icon"  alt="Dropdown Icon"><i class="fa-solid fa-caret-down"></i></a>
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
                <div class="items-4"style="display: flex;padding-top:47px;">
                <div style="width:170px;">
                        <span style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Hình thức đánh giá</span>
                    </div> 
                    <div style="display:flex;padding-left:185px;">
                        <form>
                            <div class="dropdown">
                                <input type="text" name="myInput3" placeholder="Vui lòng chọn" readonly>
                                <a class="dropdown-icon"  alt="Dropdown Icon"><i class="fa-solid fa-caret-down"></i></a>
                                <ul class="dropdown-list">
                                    <li>Shop gửi đánh giá</li>
                                    <li>Tự đánh giá</li>
                                    <li>Chỉ đánh giá 5 sao</li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="items-5"style="display: flex;padding-top:47px;">
                <div style="width:170px;">
                        <span style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Áp mã</span>
                    </div> 
                    <div style="display:flex;padding-left:185px;">
                        <form>
                            <div class="dropdown">
                                <input type="text" name="myInput4" placeholder="Vui lòng chọn" readonly>
                                <a class="dropdown-icon"  alt="Dropdown Icon"><i class="fa-solid fa-caret-down"></i></a>
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
                <div class="items-6"style="display: flex;padding-top:47px;">
                <div style="width:170px;">
                        <span style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Thanh toán</span>
                    </div> 
                    <div style="display:flex;padding-left:185px;">
                        <form>
                            <div class="dropdown">
                                <input type="text" name="myInput5" placeholder="Vui lòng chọn" readonly>
                                <a class="dropdown-icon"  alt="Dropdown Icon"><i class="fa-solid fa-caret-down"></i></a>
                                <ul class="dropdown-list">
                                    <li>Shop thanh toán</li>                                
                                </ul>
                            </div>
                        </form>
                    </div>    
                </div>
            </div>
            <div class="content-right_create-order" style=" width:412px; height:auto;">
                <div style="display:grid;grid-template-columns: 50% 50%;">
                    <div class="items-1" style="    display: block;padding-top: 20px;padding-left: 26px;margin-right: 8px;background: #fff;height: 150px;">
                        <div style="width:170px;">
                            <span style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Vận chuyển</span>
                        </div> 
                        <div style="display:block;padding-top:20px;">
                            <input class=""  type="radio" name="check-box-vt" checked="checked-vt">
                            <span style="padding-left:15px;">Đơn giao nhanh</span>
                        </div>
                        <div style="display:flex;padding-top:26px;">
                            <input class=""  type="radio" name="check-box-vt" checked="checked-vt" style="">
                            <span style="padding-left:15px;">Hoả tốc</span>
                        </div>                                        
                    </div>
                    <div class="items-2" style="display: block;padding-top: 20px;margin-left: 8pxpx;background: #fff;height: 150px;padding-left: 26px;position: relative;">
                        <div style="width:170px;">
                            <span style="color: #000;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Hình thức giao nhận</span>
                        </div> 
                        <div style="display:block;padding-top:20px;">
                            <input class=""  type="radio" name="check-box-gh" checked="checked-gh">
                            <span style="padding-left:15px;">Nhận hàng</span>
                        </div>
                        <div style="display:flex;padding-top:26px;">
                            <input class=""  type="radio" name="check-box-gh" checked="checked-gh" style="">
                            <span style="padding-left:15px;">Không nhận hàng</span>
                        </div>                                        
                    </div>
                </div>
                <div style="padding-top:20px;padding-left:26px;background:#fff;position:relative;margin-top:16px;;height:240px;;"> 
                    <div style="display:flex;">
                        <div>
                        Phí dịch vụ:
                        </div>
                        <div style="position: absolute;right: 26px;">
                        0 đ
                        </div>
                    </div>
                    <div style="display:flex;padding-top:22px;padding-bottom:22px;">
                        <div>
                        Tiền cọc:
                        </div>
                        <div style="position: absolute;right: 26px;">
                        0 đ
                        </div>
                    </div>
                    <div style="display:block;padding-top:22px;border-top:1px solid #D9D9D9;">
                        <div style="display:flex;">
                            <div>Tổng phí:</div>
                            <div style="position: absolute;right: 26px;">0 đ</div>
                        </div>
                        <a href="#"><div style="border-radius: 5px;background: #E0793F;margin-top:22px;height:39px;text-align: center;margin-right: 26px;padding:10px;margin-bottom:22px;">
                           <span style="color: #FFF;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;padding:10px 0px;">Đăng đơn</span>
                        </div></a>
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
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const dropdownIcons = document.querySelectorAll('.dropdown-icon');
    const dropdownLists = document.querySelectorAll('.dropdown-list');
    const inputs = document.querySelectorAll('input[name^="myInput"]');
    
    dropdownIcons.forEach(function(icon, index) {
      icon.addEventListener('click', function() {
        dropdownLists[index].style.display = dropdownLists[index].style.display === 'none' ? 'block' : 'none';
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
@endpush

<style>
    #sidebarRight{
        display:none;
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
  }
  
  .dropdown-list li:hover {
    background-color: #e2e2e2;
  }
  @media (min-width: 390px) {
    /* .content-right_create-order{
            position:absolute;
            bottom:67px;
        } */
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

    /* Các kiểu dáng cho màn hình 1440px */
    @media (min-width: 1440px) {
        .content-create-order {
            width: 100.5%;
        }
        .content-right_create-order{
            position:absolute;
            right:18px;
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
</style>
<script>
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