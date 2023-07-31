
<div class="card-body p-0" style="background: #E9E9E9;">
    <div style="color: black; font-size: 22px; font-family: 'Lato' sans-serif; font-weight: 700; word-wrap: break-word">Đơn hàng cần xử lý</div>
    <div class="wrap-control-tab pb-2 pt-3">
        <div class="job-status-nav-tabs d-flex border-b">
            <div class="nav-item">
                <span>Tất cả đơn</span>
                <span class="job-status-number">10000</span>
            </div>
            @foreach ($job_status[$type] as $key => $value)
            <div @class([ 'nav-item' , 'position-relative' , 'active'=> $key == $current_status
                ])
                role="button"
                data-route="{{ route($route_name, $key) }}">
                {{ $value['text'] }}
                <span class="job-status-number">{{ $value['number'] }}</span>
                <!-- @if($value['number'])
                        <span class="job-status-number position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{ $value['number'] }}
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    @endif -->
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
<div class="d-flex flex-column" style="width:139%;max-width:1150px; height: 100%; background: #FFF; border-radius: 10px;flex-shrink: 0;margin-top:25px;">
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
</div>
<style>
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
    .nav-item{
        padding:10px;
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
    #sidebarRight{
        display:none;
    }
    .card{
        background: none !important;
    }
    .date-content label{
        color: #000;
        font-family: 'Lato' sans-serif;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }
    .date-input input[type='date']{
        width: 184px;
        height: 50px;
        flex-shrink: 0;
        border-radius: 5px;
        border: 1px solid #A6A4A4;
        padding-left:10px;
        padding-right: 10px;
    }
    .search-field-r {
        width: 475px;
        height: 50px;
        flex-shrink: 0;
        background: #FFF;
        backdrop-filter: blur(20px);
    }
</style>