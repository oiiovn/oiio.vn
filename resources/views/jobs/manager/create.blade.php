
@extends('layout')
@push('libs-css')
<link href="{{ asset('libs/Parsley.js-2.9.2/style.css') }}" rel="stylesheet">
@endpush
@section('content')
<div style="width: 136%;">
    <div style="margin-bottom:25px;">
            <span class="title-create-job"style="color: #000;font-family: 'Lato' san serif;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;">{{ __('Tạo đơn Seeding') }}</span>
    </div>
    <div>
        <x-form class="row" type="post" :action="route('job.manager.store')" :validate="true">
            <div style="width:62.94%;margin-right:16px;">

                    <div style="background: #fff;padding-top:30px;padding-left:24px;padding:34px;border-radius:5px;">
                        @each('admin.jobs.partials.select-attribute-options', $attributes, 'attribute')
                    </div>
            </div>
            <div style="width:35.67%;">
                <div style="background: #fff;border-radius:5px;padding:20px;">
                        @include('jobs.partials.table-attribute')
                        <x-button type="submit" class="w-100" style="border-radius:5px;background: #E0793F;color:#fff;">{{ __('Đăng đơn') }}</x-button>
                </div>
            </div>
        </x-form>
    </div>
</div>
@endsection
@push('libs-js')
<script src="{{ asset('libs/Parsley.js-2.9.2/parsley.min.js') }}"></script>
<style>
    #sidebarRight {
    display: none;
}
#sidebar-left{
    height: 1500px;
}
.row{
    margin-left:auto !important;
}
</style>
@endpush
@push('custom-js')
<script>
function calTotalMoneyAttr() {
    var total = 0;
    $('.select-attribute-option').each(function(i, obj) {
        total += Number($(obj).find('option:selected').data('price'));
    });
    return total;
}

function totalMoneyProduct() {
    var total = Number($("input[name='money_product']").val());
    return total ? total : 0;
}

function updateTotal() {
    $(".total").text(formatPrice(totalMoneyProduct() + calTotalMoneyAttr()));
}
$(document).ready(function(e) {
    $("input[name='money_product']").change(function(e) {
        $(".money-product").text(formatPrice(totalMoneyProduct()));
        updateTotal();
    })
    $(".select-attribute-option").change(function(e) {
        $(".total-money").text(formatPrice(calTotalMoneyAttr()));
        updateTotal();
    })
});
</script>
@endpush
