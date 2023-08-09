<div class="card-body p-0" style="background: #E9E9E9;">
    <div class="job-title" style="color: black; font-size: 18px; font-family: 'Lato' sans-serif; font-weight: 700; word-wrap: break-word">Đơn hàng cần xử lý</div>
    <div class="wrap-control-tab pb-2 pt-3">
        <div class="job-status-nav-tabs d-flex border-b">
            <div class="nav-item">
                <span class="job-status-number-test">0</span> <!--chỗ này chưa đổ dữ liệu-->
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
                <span class="job-status-number position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{ $value['number'] }}
                    <span class="visually-hidden">unread messages</span>
                </span>
                @endif
            </div>
            @endforeach
        </div>
    </div>
    <div class="container-job" style="width: 1150px; height: 80px; background: white; border-radius: 10px;display:flex;">
        {{-- Tìm kiếm --}}
        <div class="search-field-r d-none d-md-block" style="border-radius: 10px;">
            <form class="d-flex align-items-center" action="#">
                <div class="input-group-s" style="margin-top: 14px;margin-left:32px;border-radius:5px;">
                    <input type="text" class="form-control-s" placeholder="Tìm kiếm mã đơn, v.v" style="margin:17px 30px 16px 0;color: rgba(86, 86, 86, 0.50);font-family: Lato;font-size: 14px;font-style: normal;font-weight: 400;line-height: normal;padding:0 0.75rem;">
                    <div style="position: relative;border-left: 1px solid #3333;align-items: center;justify-content: center;display: flex;width: 20%;margin-left: auto;" class="input-group-prepend-s bg-transparent">
                        <img src="{{ asset('icon/search.svg') }}" alt="logo">
                    </div>
                </div>
            </form>
        </div>
        {{-- Ngày giờ --}}
        <div class="date d-flex" style="margin-top: 15px;height:50px;margin-left:auto;margin-right:23px;border:1px solid #3333;border-radius:10px;display:flex;justify-content:space-between;align-items:center;">
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
<div class="container-step" style="width:136.80%;max-width: 1156px;height:auto;"><!-- mô phỏng frontend chưa đổ dữ liệu, khi đổ có thể mang qua file jobs/show.blade.php-->
    <div class="title-step" style=" height: 64px;width: 100%;display: flex;align-items: center;">
        <div style="width:auto;height:auto;display:flex;gap: 10px; align-items: center;">
            <a href="#">
                <img src="{{ asset('viewsCustom/assets/images/arrow-left-small.svg') }}" alt="">
            </a>
            <span style="color: #000;font-family:' Lato' sans-serif;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;">Đơn huỷ</span>
        </div>
    </div>
    <div class="content-step" style=" height:auto;width: 100%;display: flex;margin-bottom: 20px;">
        <div class="step-process" style="width: 75.95%;background: #fff;border-radius: 10px;padding: 24px 28px;">
            <div style="width: 100%;height: 62px;display: flex;justify-content: space-between;align-items: center;">
                <div class="process-title" style="color: #000;font-family:' Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">
                    Quy trình xử lý</div>
                <div class="process-title" style="display: flex; gap:10px;align-items: center;">
                    <span style="color: #E0793F;font-family:' Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 800;line-height: normal;">
                        Vui lòng liên hệ Shop để đặt đơn</span>
                    <a href="#"><img src="{{ asset('viewsCustom/assets/images/arrow-right.svg') }}" alt=""></a>
                </div>
            </div>
            <!--đổ backend quá trình xử lí thẻ <ul> tại đây-->
            <ul class="list-step"style="height:250px;"></ul>
            <div class="vote-step" style="float:right;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="width:142px;height:33px;border-radius: 5px;background: #E0793F;display:inline-flex;padding: 7px 20px;justify-content: center;align-items: center;border:none;"><a style="color: #FFF;font-family:'Lato'sans-serif;font-size: 14px;font-style: normal;font-weight: 700;line-height: normal;" href="#">Đánh giá shop</a></button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="border:none;padding-bottom:0;">
                            <h5 class="modal-title" id="exampleModalLongTitle" style="color: #000;font-family: 'Lato' sans-serif;font-size: 20px;font-style: normal;font-weight: 600;line-height: normal;">Đánh giá shop</h5>
                            <button style="border:none;background: transparent;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span style="font-size:30px;flex-shrink: 0;color:#A6A4A4;" aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="padding-top:0;padding-bottom:0;">
                            <div style="display:flex;align-items: center;margin-bottom:10px;">
                                <div class="label-rating" style="width:100px;">
                                    <label style="color: #000;text-align: center;font-family: 'Lato'sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;" class="control-label">{{ __('Vote sao') }}:</label>
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
                            </div>
                            <div class="modal-comment" style="width: 100%;margin-bottom:10px;">
                                <textarea style="padding:15px 18px;width: 100%;height: 103px;flex-shrink: 0;border-radius: 8px;border: 1px solid rgba(48, 48, 48, 0.20);" placeholder="Đánh giá Shop Korina"></textarea>
                            </div>
                            <div class="modal-tag" style="width:100%;">
                                <ul class="tags" style="display:block;gap: 10px;width: 100%;">
                                    <li style="border-radius: 15px;display: inline-flex;padding: 10px 15px;justify-content: center;align-items: center;border: 1.5px solid #D9D9D9;">
                                        <a style="color: #000;text-align: center;font-family:'Lato'sans-serif;font-size: 13px;font-style: normal;font-weight: 400;line-height: normal;" href="#" class="tag">Shop uy tín.</a>
                                    </li>
                                    <li style="border-radius: 15px;display: inline-flex;padding: 10px 15px;justify-content: center;align-items: center;border: 1.5px solid #D9D9D9;">
                                        <a style="color: #000;text-align: center;font-family:'Lato'sans-serif;font-size: 13px;font-style: normal;font-weight: 400;line-height: normal;" href="#" class="tag">Shop trả lời nhanh.</a>
                                    </li>
                                    <li style="border-radius: 15px;display: inline-flex;padding: 10px 15px;justify-content: center;align-items: center;border: 1.5px solid #D9D9D9;">
                                        <a style="color: #000;text-align: center;font-family:'Lato'sans-serif;font-size: 13px;font-style: normal;font-weight: 400;line-height: normal;" href="#" class="tag">Hướng dẫn tận tình.</a>
                                    </li>
                                    <li style="border-radius: 15px;display: inline-flex;padding: 10px 15px;justify-content: center;align-items: center;border: 1.5px solid #D9D9D9;">
                                        <a style="color: #000;text-align: center;font-family:'Lato'sans-serif;font-size: 13px;font-style: normal;font-weight: 400;line-height: normal;" href="#" class="tag">Đơn hàng giao nhanh.</a>
                                    </li>
                                    <li style="border-radius: 15px;display: inline-flex;padding: 10px 15px;justify-content: center;align-items: center;border: 1.5px solid #D9D9D9;">
                                        <a style="color: #000;text-align: center;font-family:'Lato'sans-serif;font-size: 13px;font-style: normal;font-weight: 400;line-height: normal;" href="#" class="tag">Hướng dẫn tận tình.</a>
                                    </li>
                                    <li style="border-radius: 15px;display: inline-flex;padding: 10px 15px;justify-content: center;align-items: center;border: 1.5px solid #D9D9D9;">
                                        <a style="color: #000;text-align: center;font-family:'Lato'sans-serif;font-size: 13px;font-style: normal;font-weight: 400;line-height: normal;" href="#" class="tag">Shop uy tín.</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer" style="border:none;">
                            <button style="width: 100%;background:#E0793F;border:none;border-radius:5px;" type="button" class="btn btn-primary" id="button-addon2">Đánh giá shop</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="step-info" style="width: 22.58%;height:auto;display: block;margin-left:17px;">
            <div style="background:#fff;width:100%;height: 186px;margin-bottom: 20px;border-radius: 10px;">
                <div style="display: inline-flex;justify-content: center;align-items: center;gap: 5px;margin-top:38px;padding-left:24px;">
                    <div style="display: flex;flex-direction: column;justify-content: center;align-items: flex-start;gap: 5px;">
                        <div style="display: flex;align-items: start;gap:15px;">
                            <img src="{{ asset('viewsCustom/assets/images/mail.svg') }}" alt="">
                            <p class="">vubui@gmail.com</p>
                        </div>

                        <div style="display: flex;align-items: start;gap:15px;">
                            <img src="{{ asset('viewsCustom/assets/images/phone.svg') }}" alt="">
                            <p class="">0123456789</p>
                        </div>
                    </div>
                </div>
                <div style="display:block;padding-left:60px;">
                    <button style="margin-bottom:10px;width:142px;height:33px;border-radius: 5px;background: #0D6EFD;display: flex;padding: 7px 20px;justify-content: center;align-items: center;border:none;"><a style="color: #FFF;font-family:'Lato'sans-serif;font-size: 14px;font-style: normal;font-weight: 700;line-height: normal;" href="#">Nhắn tin</a></button>
                </div>
            </div>
            <div style="background:#fff;width:100%;height: 199px;border-radius: 10px;">
                <div style="width:100%;display:block;padding-left:14px;padding-top:24px;border-bottom:1px solid #D9D9D9;padding-bottom:30px;">
                    <div style="display: flex;width:100%;justify-content:space-between;">
                        <span style="margin-bottom:28px;color: #000;font-family:'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Tiền công:</span>
                        <p style="color: #000;text-align: right;font-family: Lato;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;letter-spacing: 1.28px;color: #000;"><!-- đổ backend money --></p>
                    </div>
                    <div style="display: flex;width:100%;justify-content:space-between;">
                        <span style="color: #000;font-family:'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Tiền cọc:</span>
                        <p style="color: #000;text-align: right;font-family: Lato;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;letter-spacing: 1.28px;color: #000;"><!-- đổ backend money --></p>
                    </div>
                </div>
                <div style="width:100%;display:block;padding-left:14px;align-items: center;padding-top:26px;">
                    <div style="display: flex;width:100%;">
                        <span style="color: #000;font-family:'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Tổng:</span>
                        <p style="color: #000;text-align: right;font-family: Lato;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;letter-spacing: 1.28px;color: #E0793F;"><!-- đổ backend money --></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="step-info-mb" style="width:73%; height:auto;display:none;padding:15px;height: 157px;">
        <div class="info-mb" style="background:#fff;width:100%;margin-bottom: 20px;border-radius: 10px;">
            <div style="display: inline-flex;justify-content: center;align-items: center;gap: 5px;margin-top:38px;">
                <div style="display: flex;flex-direction: column;justify-content: center;align-items: flex-start;gap: 5px;">
                    <div style="display: flex;align-items: start;gap:10px;">
                        <img src="{{ asset('viewsCustom/assets/images/phone.svg') }}" style="width: 20px;height: 20px;" alt="">
                        <p class="phone-mb" style="color: #000;text-align: center;font-family: Lato;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;letter-spacing: 1.28px;">0123456789</p>
                    </div>
                </div>
            </div>
            <div class="btn-info-mb" style="display:block;padding-left:60px;">
                <button style="margin-bottom:10px;border-radius: 5px;background: #0D6EFD;display: flex;padding: 7px 40px;justify-content: center;align-items: center;border:none;"><a style="color: #FFF;font-family:'Lato'sans-serif;font-size: 16px;font-style: normal;font-weight: 700;line-height: normal;" href="#">Nhắn tin</a></button>
            </div>
        </div>
        <div class="money-mb" style="background:#fff;width:100%;border-radius: 10px;">
            <div style="width:100%;display:block;border-bottom:1px solid #D9D9D9;padding-bottom:15px;">
                <div style="display: flex;width:100%;justify-content:space-between;">
                    <span style="margin-bottom:28px;color: #000;font-family:'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Tiền công:</span>
                    <p style="color: #000;text-align: right;font-family: Lato;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;letter-spacing: 1.28px;color: #000;"><!-- đổ backend money --></p>
                </div>
                <div style="display: flex;width:100%;justify-content:space-between;">
                    <span style="color: #000;font-family:'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Tiền cọc:</span>
                    <p style="color: #000;text-align: right;font-family: Lato;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;letter-spacing: 1.28px;color: #000;"><!-- đổ backend money --></p>
                </div>
            </div>
            <div style="width:100%;display:block;align-items: center;padding-top:15px;">
                <div style="display: flex;width:100%;">
                    <span style="color: #000;font-family:'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Tổng:</span>
                    <p style="color: #000;text-align: right;font-family: Lato;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;letter-spacing: 1.28px;color: #E0793F;"><!-- đổ backend money --></p>
                </div>
            </div>
        </div>
    </div>
    <div class="content-list-step" style="height:467px;width: 100%;margin-top:10px;"> <!-- Đổ backend danh sách đơn hàng được trong quá trình xử lí-->
        <div class="container-list" style="width: 75.95%;background: #fff;height: 481px;border-radius: 10px;">
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
        <!-- Mobile -->
        <table class="index-mobile" style="width:100%;background: #fff;display:none;height: 467px;">
            <tr class="content__body-header" style="display:flex;padding-left:10px;padding-top:10px;padding-right:10px;">
                <th class="header-left-pp" style="display:flex;">
                    <a href="https://www.facebook.com/buivushopee" style="display:flex;">
                        <div class="header-left-pp__img">
                            <img src="{{ asset('viewsCustom/assets/images/hinh1.png') }}" style="border: 1px solid rgba(0, 0, 0, 0.20);border-radius:50%;width:45px; height:45px ;" />
                        </div>
                        <div class="header-left-pp__text" style="display:bock;padding-left:9px;margin-top:5px;">
                            <div style="display:flex;">
                                <div class="header-left-pp__text__top fs16" style="color: #000;font-style: normal;font-weight: 500;line-height: normal;max-width:200px;">
                                    <b>Korina</b>
                                </div>
                                <img style="padding-left:4px;" src="{{ asset('viewsCustom/assets/images/tick.svg') }}" width:8.7px height:8.7px />
                            </div>
                            <div style="display:flex;">
                                <div class="header-left-pp__text__bottom fs12" style="color: #A6A4A4;font-style: normal;font-weight: 400;line-height: normal;width:100px;">
                                    22 giờ trước</div>
                            </div>
                        </div>
                    </a>
                    <div class="header-right-pp" style="display:flex;padding-top:10px;">
                        <div><img src="{{ asset('viewsCustom/assets/images/Vector.svg') }}" style="margin-top:-15px;width:15px; height:15px;" /></div>
                        <div class="fs12" style="color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;padding-left:8px;">
                            4.5</div>
                        <div class="fs12" style="color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;padding-left:3px;">
                            (25,5k đánh giá)</div>
                    </div>

                </th>
            </tr>
            <tr class="mobile-wage" style="margin-left:80px;display:flex;justify-content: center;margin-bottom:10px;">
                <td>
                    <div class="fs13" style="color: #269300;font-style: normal;font-weight: 800;line-height: normal;border-radius: 5px;border: 1px solid #269300;height: 40px;text-align:center;padding:12px;align-item:center;width:168px;">
                        Tiền công: 14. 500 đ</div>
                </td>
            </tr>
            <tr class="mobile-modal-body" style="display:flex;padding-left: 10px;padding-right: 10px;" data-toggle="modal" data-target="#exampleModalMobile">
                <td class="body-title" style="width:150px;">
                    <div class="items-col1">Đơn Seeding</div>
                    <div class="items-col1">Trạng thái</div>
                    <div class="items-col1" style="width:170px;">Hình thức giao nhận</div>
                    <div class="items-col1">Vận chuyển</div>
                    <div class="items-col1">Thanh toán</div>
                    <div class="items-col1">Hình thức đánh giá</div>
                    <div class="items-col1" style="width:170px;">Yêu cầu tài khoản đặt</div>
                    <div class="items-col1">Áp mã</div>
                    <div class="items-col1">Khu vực lên đơn</div>
                </td>
                <td class="body-content" style="text-align:right;position: absolute;right: 20px;">
                    <button class="items-col2 fs14 items-tiktok" style="border:none;color: #FFF;font-style: normal;font-weight: 400;line-height: normal;border-radius: 5px;background: #000;padding:5px 25px ;width:100px;">
                        Tiktok</button>
                    <div class="items-col2 fs13" style="color: rgba(38, 147, 0, 0.80);font-style: normal;font-weight: 400;line-height: normal;">Hoàn
                        thành</div>
                    <div class="items-col2">Không nhận hàng</div>
                    <div class="items-col2 fs13" style="color: #DE8C49;font-style: normal;font-weight: 400;line-height: normal;">
                        Đơn giao nhanh</div>
                    <div class="items-col2">Shop thanh toán</div>
                    <div class="items-col2">Shop gửi đánh giá</div>
                    <button class="items-col2" style="border:none;color:#fff;border-radius: 5px;background: #FBC250;width:130px;padding: 5px 10px;margin-top:-10px;">Tài
                        khoản vàng</button>
                    <div class="items-col2">Áp mã freeship</div>
                    <div class="items-col2">Hà Nội</div>
                </td>

            </tr>
            <tr>
                <th style="text-align: center;position:absolute;bottom:20px;left:38%;">
                    <button type="button" class="btn btn-primary fs14" data-toggle="modal" data-target="#exampleModalMobile" style="border-radius: 5px;border: 1.5px solid #E0793F;background: #E0793F;color: #FFF;font-style: normal;font-weight: 700;line-height: normal;padding:10px 18px;margin-bottom: 18px;">Nhận
                        đơn</button>
                </th>
            </tr>
        </table>
        <!-- Modals mobile -->
        <div class="modal fade" id="exampleModalMobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <table class="modal-content" style="padding:5%;">
                    <tr class="modal-header" style="padding:0px 0px 0px 30px">
                        <th class="items" style="display:flex; padding-top:5px;padding-left:5px;">
                            <img src="{{ asset('viewsCustom/assets/images/warning.svg') }}" style="margin-bottom:25px; width:18.3px;height:15.8px;border: 1px solid rgba(0, 0, 0, 0.20);border-radius:50%;" />
                            <p class="fs16" style="color: #EB3131;font-style: normal;font-weight: 600;line-height: normal;padding-left:10px;">
                                Lưu ý đơn hàng</p>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border: none;background:none; position: absolute;right: 17px;top: 22px;"><span aria-hidden="true"><img src="{{ asset('viewsCustom/assets/images/clone.svg') }}"></span>
                            </button>
                        </th>
                    </tr>

                    <tr class="modal-body" style="display:flex;">
                        <td class="body-text" style=" width: 100%;">
                            <ul class="items fs12" style="list-style-type: disc;z-index:999;">
                                <li style="margin-bottom:0px !important;list-style-type: disc "> • Người đặt không cần phải
                                    nhận hàng</li>
                                <li style="margin-bottom:0px !important;"> • Người đặt không cần thanh toán cho đơn này</li>
                                <li style="margin-bottom:0px !important;"> • Shop sẽ gửi ảnh, video sản phẩm và hướng dẫn
                                    đánh giá cho đơn hàng</li>
                                <li style="margin-bottom:0px !important;"> • Yêu cầu tài khoản đặt là tài khoản hạng vàng
                                    đối với Shopee, đối với các nền tảng khác chỉ cần có avatar và tên người dùng thật</li>
                                <li style="margin-bottom:0px !important;"> • Địa chỉ lên đơn là Hà Nội</li>
                                <li style="padding-top:5px;color: #000;font-size: 12px;font-style: normal;font-weight: 700;line-height: normal;">
                                    <input type="checkbox" class="checkbox" required="" style="margin-bottom:5px;margin-right:8px;" />Nếu bạn tiếp tục, bạn phải tuân thủ
                                    theo chính sách của chúng tôi.
                                </li>
                            </ul>
                            <div class="items" style="padding-top:17px;display:flex;">
                                <a href="#"><button type="button" class="btn btn-secondary fs14" data-dismiss="modal" style="border-radius: 5px;border: 1.5px solid #A6A4A4;background:none;color: #A6A4A4;font-style: normal;font-weight: 700;line-height: normal;height:32px;width:65px;">Hủy</button></a>
                                <button type="button" class="btn btn-primary fs14" style="margin-left:15px;border-radius: 5px;border: 1.5px solid #E0793F;background: #E0793F;color: #FFF;font-style: normal;font-weight: 700;line-height: normal;padding:5px 18px;width:110px;height:32px;">Nhận
                                    đơn</button>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>



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
        .list-step{
            height: 100px !important;;
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
        .content-list-step{
            width: 73% !important;
        }
        .index-mobile{
            display:block !important;
        }
        .items-col2{
            margin-bottom:5px !important;
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
        font-family: 'Lato' sans-serif;
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