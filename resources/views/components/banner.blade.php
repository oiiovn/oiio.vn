<x-card>

    <x-slot name="footer">
    <ul class="nav-r" style="width:100%;">
                <li class="nav-item" style="margin-left: 5px;margin-bottom: 10px;">
                    <span style="color: #000;font-size: 18px;font-style: normal;font-weight: 700;line-height: normal;">Cộng đồng đặt đơn</span>
                </li>
                <li class="nav-item" style="display:block;">
                    <div class="nav-link">
                        <span style="font-size: 14px;" class="menu-title">Số lượng shop: </span>
                        <div class="nav-content" style="margin-left:auto;display:flex;justify-content:center;">
                            <span style="font-size: 14px;color:#d0011b;padding-right:5px;" class="menu-title-wallet">
                                {{ number_format($count_shop + $settings['statistic_virtual_user_shop']) }}
                            </span>
                            <img style="color:#303030;width: 22px;height: 22px;align-items: center;" src="{{ asset('viewsCustom/assets/images/ic2.svg') }}" alt="">
                        </div>
                    </div>
                </li>
                <li class="nav-item" style="display:block;">
                    <div class="nav-link">
                        <span style="font-size: 14px;" class="menu-title">Số thành viên: </span>
                        <div class="nav-content" style="margin-left:auto;display:flex;justify-content:center;">
                            <span style="font-size: 14px;color:#d0011b;padding-right:5px;" class="menu-title-wallet">
                                {{ number_format($users->sum('total') + $settings['statistic_virtual_user_member']) }}
                            </span>
                            <img style="color:#303030;width: 22px;height: 22px;align-items: center;" src="{{ asset('viewsCustom/assets/images/ic6.svg') }}" alt="">
                        </div>
                    </div>
                </li>
                <li class="nav-item" style="display:block;">
                    <div class="nav-link">
                        <span style="font-size: 14px;" class="menu-title">Đơn hoàn thành: </span>
                        <div class="nav-content" style="margin-left:auto;display:flex;justify-content:center;">
                            <span style="font-size: 14px;color:#d0011b;padding-right:5px;" class="menu-title-wallet">
                                {{ number_format($count_job + $settings['statistic_virtual_job_complete']) }}
                            </span>
                            <img style="color:#303030;width: 22px;height: 22px;align-items: center;" src="{{ asset('viewsCustom/assets/images/ic3.svg') }}" alt="">
                        </div>
                    </div>
                </li>
            </ul>
    </x-slot>
</x-card>

<!-- @push('custom-js')
<script>
$(window).on('scroll', function() {
    var header = $('#test');
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        header.addClass('stuck-header');
    } else {
        header.removeClass('stuck-header');
    }
});
</script>
@endpush -->