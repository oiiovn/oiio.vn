<li @class([
    "step-item",
    "active" => $history->status == $job_status
])>
    <div class="m-0 d-flex justify-content-between flex-nowrap gap-3">
        <div class="">
            <span>{{ $history->status->description() }} </span>
            @if($history->canEdit() && $is_access)
                <x-button id="editHistoryJob" type="button" class="btn btn-sm btn-outline-warning" 
                        data-desc="{{ $history->desc }}" 
                        data-bs-toggle="modal" 
                        data-bs-target="#modalEditHistoryJob">
                        {{ __('Sửa') }}
                </x-button>
            @endif
        </div>
        <span class="text-muted">
            <small>{{ format_datetime($history->created_at) }}</small>
        </span>    
    </div>
    @if($history->hasMoneyProductAddition())
        {{--<span>{{ __('Tiền cọc: :money', ['money' => format_price($money_product_addition)]) }} </span>--}}
    @endif
    <div style="display:flex;">
        
        <div style="padding-left:3px;" class="text-muted">Mô tả :{{ $history->desc }}</div>
    </div>
</li>
<!-- <div class="container-step" style="width:136.80%;max-width: 1156px;height:auto;">
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
            <ul class="list-step"style="height:250px;"></ul>
            <div class="vote-step" style="float:right;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="width:142px;height:33px;border-radius: 5px;background: #E0793F;display:inline-flex;padding: 7px 20px;justify-content: center;align-items: center;border:none;"><a style="color: #FFF;font-family:'Lato'sans-serif;font-size: 14px;font-style: normal;font-weight: 700;line-height: normal;" href="#">Đánh giá shop</a></button>
            </div>

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
                        <p style="color: #000;text-align: right;font-family: Lato;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;letter-spacing: 1.28px;color: #000;"></p>
                    </div>
                    <div style="display: flex;width:100%;justify-content:space-between;">
                        <span style="color: #000;font-family:'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Tiền cọc:</span>
                        <p style="color: #000;text-align: right;font-family: Lato;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;letter-spacing: 1.28px;color: #000;"></p>
                    </div>
                </div>
                <div style="width:100%;display:block;padding-left:14px;align-items: center;padding-top:26px;">
                    <div style="display: flex;width:100%;">
                        <span style="color: #000;font-family:'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Tổng:</span>
                        <p style="color: #000;text-align: right;font-family: Lato;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;letter-spacing: 1.28px;color: #E0793F;"></p>
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
                    <p style="color: #000;text-align: right;font-family: Lato;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;letter-spacing: 1.28px;color: #000;"></p>
                </div>
                <div style="display: flex;width:100%;justify-content:space-between;">
                    <span style="color: #000;font-family:'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Tiền cọc:</span>
                    <p style="color: #000;text-align: right;font-family: Lato;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;letter-spacing: 1.28px;color: #000;"></p>
                </div>
            </div>
            <div style="width:100%;display:block;align-items: center;padding-top:15px;">
                <div style="display: flex;width:100%;">
                    <span style="color: #000;font-family:'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Tổng:</span>
                    <p style="color: #000;text-align: right;font-family: Lato;font-size: 16px;font-style: normal;font-weight: 600;line-height: normal;letter-spacing: 1.28px;color: #E0793F;"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="content-list-step" style="height:467px;width: 100%;margin-top:10px;">
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
                    <div class="fs13" style="color: #269300;font-style: normal;font-weight: 800;line-height: normal;border-radius: 5px;border: 1px solid #269300;height: 40px;text-align:center;padding:12px;align-items:center;width:168px;">
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
</div> -->