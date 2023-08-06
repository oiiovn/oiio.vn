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
    <div  class="container-job"style="width: 1150px; height: 80px; background: white; border-radius: 10px;display:flex;">
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


</div>

<style>
        @media (max-width:768px) {
        .wrap-control-tab{
            width:100%;
        }
        .job-status-nav-tabs{
            gap: 0 !important;;
        }
        .job-title{
            display:none !important;
        }
        .wrap-control-tab::-webkit-scrollbar {
            height: 5px;
            /* Chiều cao của thanh cuộn */
        }
        .search-field-r{
            display: block !important;
        }
        .container-job{
            height: auto !important;
            width: 100% !important;
            display: block !important;
            margin-bottom: 10px !important;
            padding-bottom:25px !important;
        }
        .date{
            margin-left: 10px !important;
            margin-right: 35px !important;
            margin-top:25px !important;
        }
        .input-group-s{
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
        height:43px;
        border-radius: 10px;

    }

    .search-field-r {
        width: 475px;
        height: 50px;
        flex-shrink: 0;
        background: #FFF;
        backdrop-filter: blur(20px);
    }
    .form-control-s{
        backdrop-filter:none !important;
    }
    #sidebar-left {
        background-color: #FFF;
        height: 1500px;
    }
</style>