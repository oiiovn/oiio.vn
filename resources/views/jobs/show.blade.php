@extends('layout')
@push('libs-css')
    <link href="{{ asset('libs/Parsley.js-2.9.2/style.css') }}" rel="stylesheet">
@endpush
@section('content')
    <x-card>
        <div class="card-body">
            <ul class="steps steps-orange steps-counter steps-vertical">
                @foreach ($job->histories as $history)
                    @include('jobs.step.item', [
                        'history' => $history,
                        'job_status' => $job->status,
                        'money_product_addition' => $job->money_product_addition,
                        'is_access' => $job->canEditHistory(),
                    ])
                @endforeach
                @include('jobs.step.next', [
                    'job' => $job,
                ])
            </ul>
            @if ($job->isStatusComplete())
                <div class="mt-3 text-end">
                    @if ($job->isAuthShop())
                        <x-link class="btn btn-orange" :href="route('info.user_detail', $job->worker->slug)" :title="__('Đánh giá CTV')" />
                    @else
                        <x-link class="btn btn-orange" :href="route('info.shop_detail', $job->shop->slug)" :title="__('Đánh giá shop')" />
                    @endif
                </div>
            @endif
        </div>
    </x-card>
    @if ($job->isAuthShop() && $job->worker)
        @include('jobs.partials.info-worker', ['worker' => $job->worker])
    @elseif ($job->isAuthWorker() && $job->worker)
        @include('jobs.partials.info-shop', ['shop' => $job->shop])
    @endif
    <div class="wrap-job-detail">
        <x-loops.jobs.item :job="$job">
            <x-slot name="header">
                @include('jobs.loop.job-simple-header', ['show_full' => !$job->isAuthShop()])
            </x-slot>
            @include('jobs.partials.table-attribute', [
                'total_money' => $job->money,
                'money_product' => $job->money_product,
                'money_product_addition' => $job->money_product_addition,
                'total' => $job->money + $job->money_product + $job->money_product_addition,
            ])
            <div class="d-flex justify-content-between mt-3">
                @if ($job->isAuthShop())
                    <x-button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                        data-bs-target="#modalCloneJob">
                        {{ __('Sao chép') }}
                    </x-button>
                @endif
                @if ($job->canCancel())
                    <x-button type="button" class="btn btn-sm btn-danger user-cancel-job ms-auto" :data-id="$job->id"
                        data-bs-toggle="modal" data-bs-target="#modalCancelJob">
                        {{ __('Hủy đơn') }}
                    </x-button>
                @endif
            </div>
        </x-loops.jobs.item>
    </div>
    @include('modals.modal-cancel-job')
    @include('modals.modal-clone-job')
    @includeWhen($job->canEditHistory(), 'modals.modal-edit-history-job')
@endsection
@push('libs-js')
    <script src="{{ asset('libs/Parsley.js-2.9.2/parsley.min.js') }}"></script>
@endpush
@push('custom-js')
    <script>
        $(document).ready(function(e) {
            $('.user-cancel-job').click(function(e) {
                $("#modalFormCancelJob input[name='id']").val($(this).data('id'));
            });
            $('#editHistoryJob').click(function(e) {
                $("#modalEditHistoryJob textarea[name='desc']").val($(this).data('desc'));
            });
        });
    </script>
@endpush

<div style="width:136.80%;max-width: 1156px;height:auto;"><!-- mô phỏng frontend chưa đổ dữ liệu, khi đổ có thể mang qua file jobs/show.blade.php-->
    <div style=" height: 64px;width: 100%;display: flex;align-items: center;">
        <div style="width:auto;height:auto;display:flex;gap: 10px; align-items: center;">
            <a href="#">
                <img src="{{ asset('viewsCustom/assets/images/arrow-left-small.svg') }}" alt="">
            </a>
            <span style="color: #000;font-family:' Lato' sans-serif;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;">Đơn huỷ</span>
        </div>
    </div>
    <div style=" height:auto;width: 100%;display: flex;margin-bottom: 20px;">
        <div style="width: 75.95%;background: #fff;border-radius: 10px;padding: 24px 28px;">
            <div style="width: 100%;height: 62px;display: flex;justify-content: space-between;align-items: center;">
                <div style="color: #000;font-family:' Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">
                    Quy trình xử lý</div>
                <div style="display: flex; gap:10px;align-items: center;">
                    <span style="color: #E0793F;font-family:' Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 800;line-height: normal;">
                        Vui lòng liên hệ Shop để đặt đơn</span>
                    <a href="#"><img src="{{ asset('viewsCustom/assets/images/arrow-right.svg') }}" alt=""></a>
                </div>
            </div>
                <ul style="height:257px;margin-bottom: 0px;"> <!--đổ backend quá trình xử lí thẻ <ul> tại đây--></ul>
            <div style="float:right;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"style="width:142px;height:33px;border-radius: 5px;background: #E0793F;display:inline-flex;padding: 7px 20px;justify-content: center;align-items: center;border:none;"><a style="color: #FFF;font-family:'Lato'sans-serif;font-size: 14px;font-style: normal;font-weight: 700;line-height: normal;" href="#">Đánh giá shop</a></button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header" style="border:none;padding-bottom:0;">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="color: #000;font-family: 'Lato' sans-serif;font-size: 20px;font-style: normal;font-weight: 600;line-height: normal;">Đánh giá shop</h5>
                    <button style="border:none;background: transparent;"type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                            <a style="color: #000;text-align: center;font-family:'Lato'sans-serif;font-size: 13px;font-style: normal;font-weight: 400;line-height: normal;" href="#" class="tag">Shop uy tín.</a></li>
                            <li style="border-radius: 15px;display: inline-flex;padding: 10px 15px;justify-content: center;align-items: center;border: 1.5px solid #D9D9D9;">
                            <a style="color: #000;text-align: center;font-family:'Lato'sans-serif;font-size: 13px;font-style: normal;font-weight: 400;line-height: normal;" href="#" class="tag">Shop trả lời nhanh.</a></li>
                            <li style="border-radius: 15px;display: inline-flex;padding: 10px 15px;justify-content: center;align-items: center;border: 1.5px solid #D9D9D9;">
                            <a style="color: #000;text-align: center;font-family:'Lato'sans-serif;font-size: 13px;font-style: normal;font-weight: 400;line-height: normal;" href="#" class="tag">Hướng dẫn tận tình.</a></li>
                            <li style="border-radius: 15px;display: inline-flex;padding: 10px 15px;justify-content: center;align-items: center;border: 1.5px solid #D9D9D9;">
                            <a style="color: #000;text-align: center;font-family:'Lato'sans-serif;font-size: 13px;font-style: normal;font-weight: 400;line-height: normal;" href="#" class="tag">Đơn hàng giao nhanh.</a></li>
                            <li style="border-radius: 15px;display: inline-flex;padding: 10px 15px;justify-content: center;align-items: center;border: 1.5px solid #D9D9D9;">
                            <a style="color: #000;text-align: center;font-family:'Lato'sans-serif;font-size: 13px;font-style: normal;font-weight: 400;line-height: normal;" href="#" class="tag">Hướng dẫn tận tình.</a></li>
                            <li style="border-radius: 15px;display: inline-flex;padding: 10px 15px;justify-content: center;align-items: center;border: 1.5px solid #D9D9D9;">
                            <a style="color: #000;text-align: center;font-family:'Lato'sans-serif;font-size: 13px;font-style: normal;font-weight: 400;line-height: normal;" href="#" class="tag">Shop uy tín.</a></li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer"style="border:none;">
                    <button style="width: 100%;background:#E0793F;border:none;border-radius:5px;"type="button" class="btn btn-primary"id="button-addon2">Đánh giá shop</button>
                </div>
                
                </div>
            </div>
            </div>
        </div>
        <div style="width: 22.58%;height:auto;display: block;margin-left:17px;">
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