<div class="card-body p-0" style="background: #E9E9E9;">
    <div class="job-title"
        style="color: black; font-size: 18px; font-family: 'Lato' sans-serif; font-weight: 700; word-wrap: break-word">
        Đơn hàng cần xử lý</div>
    <div class="wrap-control-tab pb-2 pt-3">
        <div class="job-status-nav-tabs d-flex border-b">
            <div class="nav-item">
                <span class="job-status-number-test">0</span>
                <!--chỗ này chưa đổ dữ liệu-->
                <span>Tất cả đơn</span>
            </div>
            @foreach ($job_status[$type] as $key => $value)
            <div @class([ 'nav-item' , 'position-relative' , 'active'=> $key == $current_status
                ])
                role="button"
                data-route="{{ route($route_name, $key) }}">
                <span class="job-status-number-test">{{ $value['number'] }}</span>
                {{ $value['text'] }}
                @if($value['number'])
                <span
                    class="job-status-number position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{ $value['number'] }}
                    <span class="visually-hidden">unread messages</span>
                </span>
                @endif
            </div>
            @endforeach
        </div>
    </div>
    <div class="container-job"
        style="width: 1150px; height: 80px; background: white; border-radius: 10px;display:flex;">
        {{-- Tìm kiếm --}}
        <div class="search-field-r d-none d-md-block" style="border-radius: 10px;">
            <form class="d-flex align-items-center" action="#">
                <div class="input-group-s" style="margin-top: 14px;margin-left:32px;border-radius:5px;">
                    <input type="text" class="form-control-s" placeholder="Tìm kiếm mã đơn, v.v"
                        style="margin:17px 30px 16px 0;color: rgba(86, 86, 86, 0.50);font-family: Lato;font-size: 14px;font-style: normal;font-weight: 400;line-height: normal;padding:0 0.75rem;">
                    <div style="position: relative;border-left: 1px solid #3333;align-items: center;justify-content: center;display: flex;width: 20%;margin-left: auto;"
                        class="input-group-prepend-s bg-transparent">
                        <img src="{{ asset('icon/search.svg') }}" alt="logo">
                    </div>
                </div>
            </form>
        </div>
        {{-- Ngày giờ --}}
        <div class="date d-flex"
            style="margin-top: 15px;height:50px;margin-left:auto;margin-right:23px;border:1px solid #3333;border-radius:10px;display:flex;justify-content:space-between;align-items:center;">
            <div class="date-start d-flex justify-content-center align-items-center">
                <div class="date-input">
                    <input type="date" style="border:none;padding-left: 15px;">
                </div>
            </div>
            <div>-</div>
            <div class="date-end d-flex justify-content-center align-items-center">
                <div class="date-input">
                    <input type="date" style="border:none;padding-right: 15px;">
                </div>
            </div>
        </div>
    </div>


</div>

<!-- mô phỏng frontend chưa đổ dữ liệuƯ-->
<!-- <div class="container-job-list d-flex flex-column" style="width:139%;max-width:1150px; height: 100%; background: #FFF; border-radius: 10px;flex-shrink: 0;margin-top:25px;">
    <div class="job-list" style="display: block;padding:28px 38px;">
        <div class="label-list" style="margin-bottom:25px;color: #000;font-family: 'Lato' sans-serif;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;word-wrap: break-word">
            <span>1051 Tất cả đơn</span>
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
    <div class="job-list-mobile" style="width:88%;padding-top:20px;height:100%;display:none;margin-left: 15px;">
        <div class="list-item-mb">
            <div class="job-item-mb"style="background:#fff;width:100%;height:133px;display:flex;justify-content:center;align-items:center;border-radius: 8px;border: 1px solid #D2D2CD;box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.15);">
                <div class="job-col-mb"style="width:100%;display:block;">
                    <div style="height:50px;display:flex;align-items:center;gap:5px;margin-left:10px;">
                        <img src="{{ asset('viewsCustom/assets/images/hinh1.png') }}" alt="">
                        <div>
                            <div>
                                <span>Korina</span>
                                <i class="fa-regular fa-circle-check text-primary"></i>
                            </div>
                            <span style="color: #565656;font-family:'Lato'sans-serif;font-size: 11px;font-style: normal;font-weight: 400;line-height: normal;letter-spacing: 1.1px;">26/06/2023</span>
                        </div>
                    </div>
                    <div style="height:50px;display: flex;justify-content: space-between;width:88%;margin-left:10px;padding-top:10px;gap:10px;">
                        <div style="height:33px;display: inline-flex;padding: 8px 22px;justify-content: center;align-items: center;border-radius: 5px;background: #FB6815;color: #FFF;font-family:'Lato'sans-serif;font-size: 14px;font-style: normal;font-weight: 700;line-height: normal;">Shopee</div>
                        <div style="height:33px;display: flex;padding: 12px 20px;justify-content: center;align-items: center;flex-shrink: 0;border-radius: 5px;border: 1px solid #269300;color: #269300;font-family:'Lato'sans-serif;font-size: 12px;font-style: normal;font-weight: 800;line-height: normal;letter-spacing: 0.66px;">1.000.000 đ</div>
                    </div>
                </div>
                <div class="job-col-mb"style="width:135px;">
                    <div style="text-align:right;display: block;height:100px;float:right;padding-top:27px;margin-right:10px;">
                        <span style="color: #565656;font-family:'Lato'sans-serif;font-size: 12px;font-style: normal;font-weight: 500;line-height: normal;">230725VXU7WUJC</span>
                        <span style="max-width:100px;color: #565656;font-family:'Lato'sans-serif;font-size: 12px;font-style: normal;font-weight: 700;line-height: normal;">Đã nhận</span>
                        <span style="max-width:100px;color: #000;font-family:'Lato'sans-serif;font-size: 12px;font-style: normal;font-weight: 500;line-height: normal;letter-spacing: 0.72px;">09012345678</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="list-item-mb">
            <div class="job-item-mb"style="background:#fff;width:100%;height:133px;display:flex;justify-content:center;align-items:center;border-radius: 8px;border: 1px solid #D2D2CD;box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.15);">
                <div class="job-col-mb"style="width:100%;display:block;">
                    <div style="height:50px;display:flex;align-items:center;gap:5px;margin-left:10px;">
                        <img src="{{ asset('viewsCustom/assets/images/hinh1.png') }}" alt="">
                        <div>
                            <div>
                                <span>Korina</span>
                                <i class="fa-regular fa-circle-check text-primary"></i>
                            </div>
                            <span style="color: #565656;font-family:'Lato'sans-serif;font-size: 11px;font-style: normal;font-weight: 400;line-height: normal;letter-spacing: 1.1px;">26/06/2023</span>
                        </div>
                    </div>
                    <div style="height:50px;display: flex;justify-content: space-between;width:88%;margin-left:10px;padding-top:10px;gap:10px;">
                        <div style="height:33px;display: inline-flex;padding: 8px 22px;justify-content: center;align-items: center;border-radius: 5px;background: #FB6815;color: #FFF;font-family:'Lato'sans-serif;font-size: 14px;font-style: normal;font-weight: 700;line-height: normal;">Shopee</div>
                        <div style="height:33px;display: flex;padding: 12px 20px;justify-content: center;align-items: center;flex-shrink: 0;border-radius: 5px;border: 1px solid #269300;color: #269300;font-family:'Lato'sans-serif;font-size: 12px;font-style: normal;font-weight: 800;line-height: normal;letter-spacing: 0.66px;">1.000.000 đ</div>
                    </div>
                </div>
                <div class="job-col-mb"style="width:135px;">
                    <div style="text-align:right;display: block;height:100px;float:right;padding-top:27px;margin-right:10px;">
                        <span style="color: #565656;font-family:'Lato'sans-serif;font-size: 12px;font-style: normal;font-weight: 500;line-height: normal;">230725VXU7WUJC</span>
                        <span style="max-width:100px;color: #565656;font-family:'Lato'sans-serif;font-size: 12px;font-style: normal;font-weight: 700;line-height: normal;">Đã nhận</span>
                        <span style="max-width:100px;color: #000;font-family:'Lato'sans-serif;font-size: 12px;font-style: normal;font-weight: 500;line-height: normal;letter-spacing: 0.72px;">09012345678</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="list-item-mb">
            <div class="job-item-mb"style="background:#fff;width:100%;height:133px;display:flex;justify-content:center;align-items:center;border-radius: 8px;border: 1px solid #D2D2CD;box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.15);">
                <div class="job-col-mb"style="width:100%;display:block;">
                    <div style="height:50px;display:flex;align-items:center;gap:5px;margin-left:10px;">
                        <img src="{{ asset('viewsCustom/assets/images/hinh1.png') }}" alt="">
                        <div>
                            <div>
                                <span>Korina</span>
                                <i class="fa-regular fa-circle-check text-primary"></i>
                            </div>
                            <span style="color: #565656;font-family:'Lato'sans-serif;font-size: 11px;font-style: normal;font-weight: 400;line-height: normal;letter-spacing: 1.1px;">26/06/2023</span>
                        </div>
                    </div>
                    <div style="height:50px;display: flex;justify-content: space-between;width:88%;margin-left:10px;padding-top:10px;gap:10px;">
                        <div style="height:33px;display: inline-flex;padding: 8px 22px;justify-content: center;align-items: center;border-radius: 5px;background: #FB6815;color: #FFF;font-family:'Lato'sans-serif;font-size: 14px;font-style: normal;font-weight: 700;line-height: normal;">Shopee</div>
                        <div style="height:33px;display: flex;padding: 12px 20px;justify-content: center;align-items: center;flex-shrink: 0;border-radius: 5px;border: 1px solid #269300;color: #269300;font-family:'Lato'sans-serif;font-size: 12px;font-style: normal;font-weight: 800;line-height: normal;letter-spacing: 0.66px;">1.000.000 đ</div>
                    </div>
                </div>
                <div class="job-col-mb"style="width:135px;">
                    <div style="text-align:right;display: block;height:100px;float:right;padding-top:27px;margin-right:10px;">
                        <span style="color: #565656;font-family:'Lato'sans-serif;font-size: 12px;font-style: normal;font-weight: 500;line-height: normal;">230725VXU7WUJC</span>
                        <span style="max-width:100px;color: #565656;font-family:'Lato'sans-serif;font-size: 12px;font-style: normal;font-weight: 700;line-height: normal;">Đã nhận</span>
                        <span style="max-width:100px;color: #000;font-family:'Lato'sans-serif;font-size: 12px;font-style: normal;font-weight: 500;line-height: normal;letter-spacing: 0.72px;">09012345678</span>
                    </div>
                </div>
            </div>
        </div>
                     <div style="text-align: center;">
                        <span><i style="margin-left:auto;font-size:20px;color:#E0793F;" class="ri-arrow-down-s-line"></i></span>
                    </div>
        
    </div>
    
    <div style="width: 100%;height:100%;background-color:#fff;">
            <div style="height: 68px;"></div>
    </div>
</div> -->




</div>
<style>
@media (max-width:768px) {
    #row {
        margin-left: 11px !important;
    }

    .job-list {
        display: none !important;
    }

    .container-job-list {
        width: 100% !important;
        margin-top: 0 !important;
    }

    .container-job-list::-webkit-scrollbar {
        height: 5px;
    }

    .label-list {
        font-size: 16px !important;
    }

    .job-list-mobile {
        display: block !important;
    }

    .list-item-mb {
        margin-bottom: 20px;
    }

    .title-step {
        display: none !important;
    }

    .list-step {
        height: 100px !important;
        ;
    }

    .step-info {
        display: none !important;
    }

    .container-list {
        display: none !important;
    }

    .process-title span {
        display: none !important;
    }

    .process-title img {
        display: none !important;
    }

    .step-process {
        padding-left: 15px !important;
        padding-top: 0 !important;
        width: 73% !important;
        height: 250px !important;
        border-radius: 0 !important;
    }

    .process-title {
        font-size: 16px !important;
    }

    .vote-step {
        float: none !important;
    }

    .step-info-mb {
        display: flex !important;
        background: #fff;
    }

    .info-mb {
        border-radius: 0 !important;
    }

    .money-mb {
        border-radius: 0 !important;
    }

    .btn-info-mb {
        padding-left: 0 !important;
    }

    .content-list-step {
        width: 73% !important;
    }

    .index-mobile {
        display: block !important;
    }

    .items-col2 {
        margin-bottom: 5px !important;
    }
}

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
@media (max-width:768px) {
    .wrap-control-tab {
        width: 100%;
    }

    .job-status-nav-tabs {
        gap: 0 !important;
        ;
    }

    .job-title {
        display: none !important;
    }

    .wrap-control-tab::-webkit-scrollbar {
        height: 5px;
        /* Chiều cao của thanh cuộn */
    }

    .search-field-r {
        display: block !important;
    }

    .container-job {
        height: auto !important;
        width: 100% !important;
        display: block !important;
        margin-bottom: 10px !important;
        padding-bottom: 25px !important;
    }

    .date {
        margin-left: 10px !important;
        margin-right: 35px !important;
        margin-top: 25px !important;
    }

    .input-group-s {
        width: 75.17% !important;
        margin-left: 12px !important;
    }
}

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
    font-family: 'Lato'sans-serif;
    font-size: 16px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
}

.date-input input[type='date'] {
    height: 43px;
    border-radius: 10px;

}

.search-field-r {
    width: 475px;
    height: 50px;
    flex-shrink: 0;
    background: #FFF;
    backdrop-filter: blur(20px);
}

.form-control-s {
    backdrop-filter: none !important;
}

#sidebar-left {
    height: 1600px;
}
</style>