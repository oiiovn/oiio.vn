<div class="card-body p-0" style="background: #E9E9E9;">
    <div style="color: black; font-size: 22px; font-family: 'Lato' sans-serif; font-weight: 700; word-wrap: break-word">Đơn hàng cần xử lý</div>
    <div class="wrap-control-tab pb-2 pt-3">
        <div class="job-status-nav-tabs d-flex border-b">
            <div class="nav-item">
                <span>Tất cả đơn</span>
                <span class="job-status-number-test">0</span> <!--chỗ này chưa đổ dữ liệu-->
            </div>
            @foreach ($job_status[$type] as $key => $value)
            <div @class([ 'nav-item' , 'position-relative' , 'active'=> $key == $current_status
                ])
                role="button"
                data-route="{{ route($route_name, $key) }}">
                {{ $value['text'] }}
                <span class="job-status-number-test">{{ $value['number'] }}</span>
                @if($value['number'])
                <span class="job-status-number position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{ $value['number'] }}
                    <span class="visually-hidden">unread messages</span>
                </span>
                @endif
            </div>
            @endforeach
        </div>
    </div>
    <div style="width: 1150px; height: 80px; background: white; border-radius: 10px;margin-top:10px;display:flex;">
        {{-- Tìm kiếm --}}
        <div class="search-field-r d-none d-md-block" style="border-radius: 10px;">
            <form class="d-flex align-items-center h-100" action="#">
                <div class="input-group-s" style="margin-top: 25px;margin-left:32px;border-radius:5px;">
                    <input type="text" class="form-control-s" placeholder="Tìm kiếm mã đơn, v.v" style="margin:17px 30px 16px 0;color: rgba(86, 86, 86, 0.50);font-family: Lato;font-size: 14px;font-style: normal;font-weight: 400;line-height: normal;padding:0 0.75rem;">
                    <div style="position: relative;border-left: 1px solid #3333;align-items: center;justify-content: center;display: flex;width: 20%;margin-left: auto;" class="input-group-prepend-s bg-transparent">
                        <img src="{{ asset('icon/search.svg') }}" alt="logo">
                    </div>
                </div>
            </form>
        </div>
        {{-- Ngày giờ --}}
        <div class="date d-flex" style="margin-left:auto;margin-right:23px;">
            <div class="date-start d-flex justify-content-center align-items-center">
                <div class="date-content" style="margin-right:20px;">
                    <label>Từ ngày:</label>
                </div>
                <div class="date-input">
                    <input type="date">
                </div>
            </div>
            <div class="date-end d-flex justify-content-center align-items-center">
                <div class="date-content" style="margin-left:20px;margin-right:20px;">
                    <label>Đến ngày:</label>
                </div>
                <div class="date-input">
                    <input type="date">
                </div>
            </div>
        </div>
    </div>


</div>


</div>
<!-- <div class="d-flex flex-column" style="width:139%;max-width:1150px; height: 100%; background: #FFF; border-radius: 10px;flex-shrink: 0;margin-top:25px;">
    <div class="job-list" style="display: block;padding:28px 38px;">
        <div class="label-list" style="margin-bottom:25px;color: #000;font-family: 'Lato' sans-serif;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;word-wrap: break-word">
            <span>Tất cả đơn</span>
        </div>
        <div class="col-list">
            <div class="col-grid d-grid" style="background: rgba(165.75, 164.37, 164.37, 0.15);border-radius: 5px;border: 0.50px #CBCBC6 solid;padding-left:1.75rem;">
                <div class="col-name">
                    <div class="col-item">Shop</div>
                </div>
                <div class="col-title d-flex">
                    <div class="col-item">Số điện thoại</div>
                    <div class="col-item">Loại đơn hàng</div>
                    <div class="col-item">Tiền công</div>
                    <div class="col-item">Trạng thái</div>
                    <div class="col-item" style="margin-right: 47px;margin-left: -10px;">ID đơn hàng</div>
                    <div class="col-item" style="margin-left: 70px;margin-right: 0 !important;">Thời gian</div>
                </div>
            </div>
        </div>

        <div class="col-list">
            <div class="col-grid d-grid" style="border-bottom: 1px solid rgba(0, 0, 0, 0.20);display: flex;height: 80px;justify-content: center;align-items: center;">
                <div class="col-name">
                    <div class="col-item">
                        <div class="col-item-info d-flex align-items-center" style="gap: 5px;">
                            <img src="{{ asset('viewsCustom/assets/images/hinh1.png') }}" alt="" style="width: 45px;height: 45px;">
                            <span>Korina</span>
                            <i class="fa-regular fa-circle-check text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="col-title" style="display: -webkit-inline-box;align-items: center;justify-content:center;margin-right: 53px;">
                    <div class="col-item">09012345678</div>
                    <div class="col-item" style="display: inline-flex;padding: 8px 22px;justify-content: center;align-items: center;color: #FFF;border-radius: 5px;background: #FB6815;">Shopee</div>
                    <div class="col-item">14.500 đ</div>
                    <div class="col-item">Đã nhận</div>
                    <div class="col-item">230725VXU7WUJC</div>
                    <div class="col-item">26/06/2023</div>
                </div>
            </div>
        </div>

        <div class="col-list">
            <div class="col-grid d-grid" style="border-bottom: 1px solid rgba(0, 0, 0, 0.20);display: flex;height: 80px;justify-content: center;align-items: center;">
                <div class="col-name">
                    <div class="col-item">
                        <div class="col-item-info d-flex align-items-center" style="gap: 5px;">
                            <img src="{{ asset('viewsCustom/assets/images/hinh5.png') }}" alt="">
                            <span>Làn Sóng xanh</span>
                        </div>
                    </div>
                </div>
                <div class="col-title" style="display: -webkit-inline-box;align-items: center;justify-content:center;margin-right: 53px;">
                    <div class="col-item">09012345678</div>
                    <div class="col-item" style="display: inline-flex;padding: 8px 22px;justify-content: center;align-items: center;color: #FFF;border-radius: 5px;background:#FD0FD0;">Lazada</div>
                    <div class="col-item">50.000 đ</div>
                    <div class="col-item">Đánh giá</div>
                    <div class="col-item">230725VXU7WUJC</div>
                    <div class="col-item">26/06/2023</div>
                </div>
            </div>
        </div>

        <div class="col-list">
            <div class="col-grid d-grid" style="border-bottom: 1px solid rgba(0, 0, 0, 0.20);display: flex;height: 80px;justify-content: center;align-items: center;">
                <div class="col-name">
                    <div class="col-item">
                        <div class="col-item-info d-flex align-items-center" style="gap: 5px;">
                            <img src="{{ asset('viewsCustom/assets/images/hinh6.png') }}" alt="">
                            <span>Văn và Những...</span>
                        </div>
                    </div>
                </div>
                <div class="col-title" style="display: -webkit-inline-box;align-items: center;justify-content:center;margin-right: 53px;">
                    <div class="col-item">09012345678</div>
                    <div class="col-item" style="display: inline-flex;padding: 8px 22px;justify-content: center;align-items: center;color: #FFF;border-radius: 5px;background: #FB6815;">Shopee</div>
                    <div class="col-item">14.500 đ</div>
                    <div class="col-item">Hoàn thành</div>
                    <div class="col-item">230725VXU7WUJC</div>
                    <div class="col-item">26/06/2023</div>
                </div>
            </div>
        </div>

        <div class="col-list">
            <div class="col-grid d-grid" style="border-bottom: 1px solid rgba(0, 0, 0, 0.20);display: flex;height: 80px;justify-content: center;align-items: center;">
                <div class="col-name">
                    <div class="col-item">
                        <div class="col-item-info d-flex align-items-center" style="gap: 5px;">
                            <img src="{{ asset('viewsCustom/assets/images/hinh4.png') }}" alt="">
                            <span>Lamo store</span>
                        </div>
                    </div>
                </div>
                <div class="col-title" style="display: -webkit-inline-box;align-items: center;justify-content:center;margin-right: 53px;">
                    <div class="col-item">09012345678</div>
                    <div class="col-item" style="display: inline-flex;padding: 8px 22px;justify-content: center;align-items: center;color: #FFF;border-radius: 5px;background: #000;">Tiktok</div>
                    <div class="col-item">14.500 đ</div>
                    <div class="col-item">Đã nhận</div>
                    <div class="col-item">230725VXU7WUJC</div>
                    <div class="col-item">26/06/2023</div>
                </div>
            </div>
        </div>

        <div class="col-list">
            <div class="col-grid d-grid" style="border-bottom: 1px solid rgba(0, 0, 0, 0.20);display: flex;height: 80px;justify-content: center;align-items: center;">
                <div class="col-name">
                    <div class="col-item">
                        <div class="col-item-info d-flex align-items-center" style="gap: 5px;">
                            <img src="{{ asset('viewsCustom/assets/images/hinh3.png') }}" alt="">
                            <span>SD Design 1</span>
                        </div>
                    </div>
                </div>
                <div class="col-title" style="display: -webkit-inline-box;align-items: center;justify-content:center;margin-right: 53px;">
                    <div class="col-item">09012345678</div>
                    <div class="col-item" style="display: inline-flex;padding: 8px 22px;justify-content: center;align-items: center;color: #FFF;border-radius: 5px;background: #FD0FD0;">Lazada</div>
                    <div class="col-item">14.500 đ</div>
                    <div class="col-item">Chờ đặt</div>
                    <div class="col-item">230725VXU7WUJC</div>
                    <div class="col-item">26/06/2023</div>
                </div>
            </div>
        </div>

        <div class="col-list">
            <div class="col-grid d-grid" style="border-bottom: 1px solid rgba(0, 0, 0, 0.20);display: flex;height: 80px;justify-content: center;align-items: center;">
                <div class="col-name">
                    <div class="col-item">
                        <div class="col-item-info d-flex align-items-center" style="gap: 5px;">
                            <img src="{{ asset('viewsCustom/assets/images/hinh2.png') }}" alt="">
                            <span>Sakura</span>
                        </div>
                    </div>
                </div>
                <div class="col-title" style="display: -webkit-inline-box;align-items: center;justify-content:center;margin-right: 53px;">
                    <div class="col-item">09012345678</div>
                    <div class="col-item" style="display: inline-flex;padding: 8px 22px;justify-content: center;align-items: center;color: #FFF;border-radius: 5px;background: #000;">Tiktok</div>
                    <div class="col-item">14.500 đ</div>
                    <div class="col-item">Chờ đặt</div>
                    <div class="col-item">230725VXU7WUJC</div>
                    <div class="col-item">26/06/2023</div>
                </div>
            </div>
        </div>

        <div class="col-list">
            <div class="col-grid d-grid" style="border-bottom: 1px solid rgba(0, 0, 0, 0.20);display: flex;height: 80px;justify-content: center;align-items: center;">
                <div class="col-name">
                    <div class="col-item">
                        <div class="col-item-info d-flex align-items-center" style="gap: 5px;">
                            <img src="{{ asset('viewsCustom/assets/images/hinh1.png') }}" alt="">
                            <span>Korina</span>
                            <i class="fa-regular fa-circle-check text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="col-title" style="display: -webkit-inline-box;align-items: center;justify-content:center;margin-right: 53px;">
                    <div class="col-item">09012345678</div>
                    <div class="col-item" style="display: inline-flex;padding: 8px 22px;justify-content: center;align-items: center;color: #FFF;border-radius: 5px;background: #FB6815;">Shopee</div>
                    <div class="col-item">14.500 đ</div>
                    <div class="col-item">Đánh giá</div>
                    <div class="col-item">230725VXU7WUJC</div>
                    <div class="col-item">26/06/2023</div>
                </div>
            </div>
        </div>

        <div class="col-list">
            <div class="col-grid d-grid" style="border-bottom: 1px solid rgba(0, 0, 0, 0.20);display: flex;height: 80px;justify-content: center;align-items: center;">
                <div class="col-name">
                    <div class="col-item">
                        <div class="col-item-info d-flex align-items-center" style="gap: 5px;">
                            <img src="{{ asset('viewsCustom/assets/images/hinh3.png') }}" alt="">
                            <span>SD Design 1</span>
                        </div>
                    </div>
                </div>
                <div class="col-title" style="display: -webkit-inline-box;align-items: center;justify-content:center;margin-right: 53px;">
                    <div class="col-item">09012345678</div>
                    <div class="col-item" style="display: inline-flex;padding: 8px 22px;justify-content: center;align-items: center;color: #FFF;border-radius: 5px;background: #FB6815;">Shopee</div>
                    <div class="col-item">14.500 đ</div>
                    <div class="col-item">Đã nhận</div>
                    <div class="col-item">230725VXU7WUJC</div>
                    <div class="col-item">26/06/2023</div>
                </div>
            </div>
        </div>

        <div class="col-list">
            <div class="col-grid d-grid" style="border-bottom: 1px solid rgba(0, 0, 0, 0.20);display: flex;height: 80px;justify-content: center;align-items: center;">
                <div class="col-name">
                    <div class="col-item">
                        <div class="col-item-info d-flex align-items-center" style="gap: 5px;">
                            <img src="{{ asset('viewsCustom/assets/images/hinh4.png') }}" alt="">
                            <span>Lamo store</span>
                        </div>
                    </div>
                </div>
                <div class="col-title" style="display: -webkit-inline-box;align-items: center;justify-content:center;margin-right: 53px;">
                    <div class="col-item">09012345678</div>
                    <div class="col-item" style="display: inline-flex;padding: 8px 22px;justify-content: center;align-items: center;color: #FFF;border-radius: 5px;background: #000;">Tiktok</div>
                    <div class="col-item">14.500 đ</div>
                    <div class="col-item">Đã nhận</div>
                    <div class="col-item">230725VXU7WUJC</div>
                    <div class="col-item">26/06/2023</div>
                </div>
            </div>
        </div>

        <div class="col-list">
            <div class="col-grid d-grid" style="border-bottom: 1px solid rgba(0, 0, 0, 0.20);display: flex;height: 80px;justify-content: center;align-items: center;">
                <div class="col-name">
                    <div class="col-item">
                        <div class="col-item-info d-flex align-items-center" style="gap: 5px;">
                            <img src="{{ asset('viewsCustom/assets/images/hinh4.png') }}" alt="">
                            <span>Lamo store</span>
                        </div>
                    </div>
                </div>
                <div class="col-title" style="display: -webkit-inline-box;align-items: center;justify-content:center;margin-right: 53px;">
                    <div class="col-item">09012345678</div>
                    <div class="col-item" style="display: inline-flex;padding: 8px 22px;justify-content: center;align-items: center;color: #FFF;border-radius: 5px;background: #FB6815;">Shopee</div>
                    <div class="col-item">14.500 đ</div>
                    <div class="col-item">Đã nhận</div>
                    <div class="col-item">230725VXU7WUJC</div>
                    <div class="col-item">26/06/2023</div>
                </div>
            </div>
        </div>

        <div class="pagination d-flex align-items-center">
            <a href="#">&laquo;</a>
            <a href="#"class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </div>
    <div style="width: 100%;height: 100%;background-color:#fff;">
            <div style="height: 68px;"></div>
    </div>
</div> -->

<div style="width:136.80%;max-width: 1156px;height:auto;"><!-- mô phỏng frontend chưa đổ dữ liệu, khi đổ có thể mang qua file jobs/show.blade.php-->
    <div style=" height: 64px;width: 100%;display: flex;align-items: center;">
        <div style="width:auto;height:auto;display:flex;gap: 10px; align-items: center;">
            <a href="#">
                <img src="{{ asset('viewsCustom/assets/images/arrow-left-small.svg') }}" alt="">
            </a>
            <span style="color: #000;font-family:' Lato' sans-serif;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;">Đơn huỷ</span>
        </div>
    </div>
    <div style=" height: 481px;width: 100%;display: flex;margin-bottom: 20px;">
        <div style="width: 75.95%;background: #fff;height: 481px;border-radius: 10px;padding: 24px 28px;">
            <div style="width: 100%;height: 62px;display: flex;justify-content: space-between;align-items: center;">
                <div style="color: #000;font-family:' Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">
                    Quy trình xử lý</div>
                <div style="display: flex; gap:10px;">
                    <span style="color: #E0793F;font-family:' Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 800;line-height: normal;">
                        Vui lòng liên hệ Shop để đặt đơn</span>
                    <a href="#"><img src="{{ asset('viewsCustom/assets/images/arrow-right.svg') }}" alt=""></a>
                </div>
            </div>
            <!--đổ backend quá trình xử lí thẻ <ul> tại đây-->

        </div>
        <div style="width: 22.58%;height:auto;display: block;margin-left:17px;">
            <div style="background:#fff;width:100%;height: 186px;margin-bottom: 20px;border-radius: 10px;">
                <div style="display: inline-flex;justify-content: center;align-items: center;gap: 5px;margin-top:23px;padding-left:24px;">
                    <a href="#"><img style="border-radius: 45px;" src="{{ asset('viewsCustom/assets/images/hinh2.png') }}" width="45px" height="45px"></a>
                    <div style="display: flex;flex-direction: column;justify-content: center;align-items: flex-start;gap: 5px;">
                        <span style="color: #000;text-align: center;font-family:'Lato'sans-serif;font-size: 14px;font-style: normal;font-weight: 400;line-height: normal;">Shop Sakura</span>
                        <span style="color: #000;text-align: center;font-family:'Lato'sans-serif;font-size: 14px;font-style: normal;font-weight: 400;line-height: normal;letter-spacing: 1.12px;">09012345678</span>
                    </div>
                </div>
                <div style="display:block;padding-left:60px;margin-top:24px;">
                    <button style="margin-bottom:10px;width:142px;height:33px;border-radius: 5px;background: #0D6EFD;display: flex;padding: 7px 20px;justify-content: center;align-items: center;border:none;"><a style="color: #FFF;font-family:'Lato'sans-serif;font-size: 14px;font-style: normal;font-weight: 700;line-height: normal;" href="#">Nhắn tin</a></button>
                    <button style="width:142px;height:33px;border-radius: 5px;background: #E0793F;display:inline-flex;padding: 7px 20px;justify-content: center;align-items: center;border:none;"><a style="color: #FFF;font-family:'Lato'sans-serif;font-size: 14px;font-style: normal;font-weight: 700;line-height: normal;" href="#">Đánh giá shop</a></button>
                </div>
            </div>
            <div style="background:#fff;width:100%;height: 199px;border-radius: 10px;">
                <div style="width:100%;display:block;padding-left:14px;padding-top:24px;border-bottom:1px solid #D9D9D9;padding-bottom:30px;">
                    <div style="display: flex;width:100%;justify-content:space-between;">
                        <span style="margin-bottom:28px;color: #000;font-family:'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Phí dịch vụ:</span><p style="color: #000;text-align: right;font-family: Lato;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;letter-spacing: 1.28px;color: #000;"><!-- đổ backend money --></p>
                    </div>
                    <div style="display: flex;width:100%;justify-content:space-between;">
                        <span style="color: #000;font-family:'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Tiền cọc:</span><p style="color: #000;text-align: right;font-family: Lato;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;letter-spacing: 1.28px;color: #000;"><!-- đổ backend money --></p>
                    </div>
                </div>
                <div style="width:100%;display:block;padding-left:14px;align-items: center;padding-top:26px;">
                    <div style="display: flex;width:100%;">
                        <span style="color: #000;font-family:'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Tổng phí:</span><p style="color: #000;text-align: right;font-family: Lato;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;letter-spacing: 1.28px;color: #E0793F;"><!-- đổ backend money --></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height:467px;width: 100%;"> <!-- Đổ backend danh sách đơn hàng được trong quá trình xử lí-->
        <div style="width: 75.95%;background: #fff;height: 481px;border-radius: 10px;">
            <div style="width: 100%;padding-left:25px;padding-top:15px;">
                <div class="modal-header">
                    <div class="header-left-pp" style="display:flex;">
                        <div class="header-left-pp__img">
                            <img src="{{ asset('viewsCustom/assets/images/hinh1.png') }}" width:45px height:45px />
                        </div>
                        <div class="header-left-pp__text" style="display:bock;margin-top:5px;padding-left:9px;">
                            <div style="display:flex;">
                                <div class="header-left-pp__text__top fs14" style="color: #000;font-style: normal;font-weight: 500;line-height: normal;">Korina</div>
                                <img style="padding-left:2.8px;" src="{{ asset('viewsCustom/assets/images/tick.svg') }}" width:8.7px height:8.7px />
                            </div>
                            <div class="header-left-pp__text__bottom fs13" style="color: #A6A4A4;font-style: normal;font-weight: 400;line-height: normal;">22 giờ trước</div>
                        </div>
                    </div>
                    <div class="header-right-pp" style="display:flex;padding-right:50%;">
                        <div><img src="{{ asset('viewsCustom/assets/images/Vector.svg') }}" width:15px height:15px style="margin-bottom:7px;" /></div>
                        <div class="fs15" style="color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;padding-left:8px;">4.5</div>
                        <div class="fs15" style="color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;">(25,5k đánh giá)</div>
                    </div>
                </div>
                <div style="display:flex;justify-content: space-between;width: 100%;margin-top:13.5px;">
                    <div style="display: flex;justify-content: space-between;width: 40%;">
                        <div class="body-title" style="width: auto;">
                            <div class="items" style="color: #303030; font-family: 'Lato', sans-serif; font-size: 15px; font-style: normal; font-weight: 700; line-height: normal; margin-bottom: 23px; width: 143px;">Đơn Seeding</div>
                            <div class="items" style="color: #303030; font-family: 'Lato', sans-serif; font-size: 15px; font-style: normal; font-weight: 700; line-height: normal; margin-bottom: 23px; width: 143px;">Trạng thái</div>
                            <div class="items" style="color: #303030; font-family: 'Lato', sans-serif; font-size: 15px; font-style: normal; font-weight: 700; line-height: normal; margin-bottom: 23px; width: 143px;">Hình thức giao nhận</div>
                            <div class="items" style="color: #303030; font-family: 'Lato', sans-serif; font-size: 15px; font-style: normal; font-weight: 700; line-height: normal; margin-bottom: 23px; width: 143px;">Vận chuyển</div>
                            <div class="items" style="color: #303030; font-family: 'Lato', sans-serif; font-size: 15px; font-style: normal; font-weight: 700; line-height: normal; margin-bottom: 23px; width: 143px;">Thanh toán</div>
                            <div class="items" style="color: #303030; font-family: 'Lato', sans-serif; font-size: 15px; font-style: normal; font-weight: 700; line-height: normal; margin-bottom: 23px; width: 143px;">Hình thức đánh giá</div>
                            <div class="items" style="color: #303030; font-family: 'Lato', sans-serif; font-size: 15px; font-style: normal; font-weight: 700; line-height: normal; width: 170px; margin-bottom: 23px;">Yêu cầu tài khoản đặt</div>
                            <div class="items" style="color: #303030; font-family: 'Lato', sans-serif; font-size: 15px; font-style: normal; font-weight: 700; line-height: normal; margin-bottom: 23px; width: 143px;">Áp mã</div>
                            <div class="items" style="color: #303030; font-family: 'Lato', sans-serif; font-size: 15px; font-style: normal; font-weight: 700; line-height: normal; margin-bottom: 23px; width: 143px;">Khu vực lên đơn</div>
                        </div>


                        <div class="body-content" style="text-align: right;width: 130px;">
                            <button class="items fs13 items-tiktok-webside" style="font-family: 'Lato', sans-serif; color: #FFF; font-style: normal; font-weight: 700; line-height: normal; border-radius: 5px; background: #000; padding: 8px 25px; border: none; margin-bottom: 23px;">Tiktok</button>
                            <div class="items" style="font-size: 13px; font-style: normal; font-weight: 700; line-height: normal; font-family: 'Lato', sans-serif; color: rgba(38, 147, 0, 0.80); margin-bottom: 23px;">Hoàn thành</div>
                            <div class="items" style="font-size: 13px; font-style: normal; font-weight: 700; line-height: normal; font-family: 'Lato', sans-serif; margin-bottom: 23px;">Không nhận hàng</div>
                            <div class="items" style="font-size: 13px; font-style: normal; font-weight: 700; line-height: normal; font-family: 'Lato', sans-serif; color: #DE8C49; margin-bottom: 23px;">Đơn giao nhanh</div>
                            <div class="items" style="font-size: 13px; font-style: normal; font-weight: 700; line-height: normal; font-family: 'Lato', sans-serif; margin-bottom: 23px;">Shop thanh toán</div>
                            <div class="items" style="font-size: 13px; font-style: normal; font-weight: 700; line-height: normal; font-family: 'Lato', sans-serif; margin-bottom: 23px;">Shop gửi đánh giá</div>
                            <button class="items" style="font-family: 'Lato', sans-serif; border: none; font-size: 13px; font-style: normal; font-weight: 700; line-height: normal; border-radius: 5px; background: #FBC250; display: inline-flex; padding: 8px 20px; justify-content: center; align-items: center; color: #fff; margin-bottom: 23px;">Tài khoản vàng</button>
                            <div class="items" style="font-size: 13px; font-style: normal; font-weight: 700; line-height: normal; font-family: 'Lato', sans-serif; margin-bottom: 23px;">Áp mã freeship</div>
                            <div class="items" style="font-size: 13px; font-style: normal; font-weight: 700; line-height: normal; font-family: 'Lato', sans-serif; margin-bottom: 23px;">Hà Nội</div>


                        </div>

                    </div>
                    <div style="width:50%;padding-right:24px;margin-left:auto;">
                        <div class="items fs16" style="color: #269300;font-style: normal;font-weight: 600;line-height: normal;padding:12px 21px;border-radius: 5px;border: 1px solid #269300;width:200px;"> Tiền công: 14. 500 đ</div>
                        <div class="items" style="display:flex; padding-top: 21px;">
                            <img src="{{ asset('viewsCustom/assets/images/warning.svg') }}" width:18.3px height:15.8px style="margin-bottom:20px;" />
                            <p class="fs16 font-lato" style="color: #EB3131;font-style: normal;font-weight: 600;line-height: normal;padding-left:10px;">Lưu ý đơn hàng</p>
                        </div>
                        <div class="items fs14" style="color: #303030;text-align: justify;font-style: normal;font-weight: 400;line-height: 164%; /* 22.96px */letter-spacing: 0.7px;"> • Người đặt không cần phải nhận hàng <br>
                            • Người đặt không cần thanh toán cho đơn này<br>
                            • Shop sẽ gửi ảnh, video sản phẩm và hướng dẫn đánh giá cho đơn hàng <br>
                            • Yêu cầu tài khoản đặt là tài khoản hạng vàng đối với Shopee, đối với các nền tảng khác chỉ cần có avatar và tên người dùng thật<br>
                            • Địa chỉ lên đơn là Hà Nội<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    body {
        padding-bottom: 68px;
    }

    .col-grid {
        max-width: 1073px;
        width: 100%;
        height: 60px;
        grid-template-columns: 20% 80%;
        padding: 20px 10px;
    }

    .col-item {
        color: #565656;
        font-family: Lato;
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    .col-title .col-item {
        font-size: 14px;
        margin-right: 65px;
        color: #565656;
        align-items: center;
        display: flex;
    }


    .pagination a {
        color: black;
        margin-top: 20px;
        transform: translateX(350px);
        padding: 8px 16px;
        text-decoration: none;
        transition: background-color .3s;
    }

    .pagination a.active {
        background-color: #E0793F;
        color: white;
        border-radius: 5px;
    }

    .pagination a:hover:not(.active) {
        background-color: #ddd;
        border-radius: 5px;
    }
</style>
<style>
    .nav-item {
        padding: 10px;
    }

    /* @media (min-width: 768px){
    .col-md-9 {
        flex: 0 0 auto;
        width: 1150px;
        }
    } */
    input::-webkit-calendar-picker-indicator {
        color: #696969;
        width: 18.333px;
        height: 18.333px;
        cursor: pointer;
        flex-shrink: 0;
    }

    #sidebarRight {
        display: none;
    }

    .card {
        background: none !important;
    }

    .date-content label {
        color: #000;
        font-family: 'Lato' sans-serif;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    .date-input input[type='date'] {
        width: 184px;
        height: 50px;
        flex-shrink: 0;
        border-radius: 5px;
        border: 1px solid #A6A4A4;
        padding-left: 10px;
        padding-right: 10px;
    }

    .search-field-r {
        width: 475px;
        height: 50px;
        flex-shrink: 0;
        background: #FFF;
        backdrop-filter: blur(20px);
    }

    #sidebar-left {
        background-color: #FFF;
        height: 1500px;
    }
</style>