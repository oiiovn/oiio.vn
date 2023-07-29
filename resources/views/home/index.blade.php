@extends('layout')

@section('top-section')
    <x-banner/>
@endsection

@section('content')
<!-- đã thêm quảng cáo dưới content -->
    <div id="jobList" style="display:flex;"> 
       <div style="width:71.9%">@each('jobs.loop.job-simple', $jobs, 'job', 'others.empty-data')</div> 
       <div class=" content-ads index-web shadow-sm" style="margin-left:22px;width:200px;height:290px;background:#FFF;border-radius:10px;">
                                        <a href="https://shopee.vn/%C3%81o-thun-Unisex-m%C3%A1c-RealLife-cao-su-FKZ-Unisex-ph%C3%B4ng-tr%C6%A1n-nam-n%E1%BB%AF-tay-l%E1%BB%A1-oversize-form-r%E1%BB%99ng-i.183840366.23825993719?sp_atk=af391579-fcac-4eb1-b2ce-358e20fcc785&xptdk=af391579-fcac-4eb1-b2ce-358e20fcc785" style="display:block;">
                                    <div><img src="{{ asset('viewsCustom/assets/images/product-demo.svg') }}" style="width:200px;height:200px;border-bottom: 1px #888888 !important;border-radius:10px 10px 0px 0px" /></div>
                                    <div style="color: #000;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;width:169px;height:auto;padding-top:6px;margin-left:10px;text-align:left;">Áo thun nam freesize Unisex</div>
                                    <div class="ads-content"  style="display:left !important;">
                                        <div style="border-radius: 3px 0px 0px 3px;border: 1px solid rgba(0, 0, 0, 0.50);border-right:none;width:31px;height:23px;margin-left:10px;color: #000;font-family: Inter;font-size: 12px;font-style: normal;font-weight: 400;line-height: normal;text-align:center;padding:3px;">30%</div>
                                        <div style="border-radius: 0px 3px 3px 0px;border: 1px solid rgba(0, 0, 0, 0.50);width:56px;height:23px;color: rgba(0, 0, 0, 0.90);font-family: Inter;font-size: 12px;font-style: normal;font-weight: 700;line-height: normal;text-align:center;padding:3px;">AC5F</div>                                     
                                        <div style="color: #FFF;font-size: 13px;font-style: normal;font-weight: 400;line-height: normal;letter-spacing: 1.235px;border-radius: 3px;background: #E0793F;width:90px;height:23px;margin-left:9px;padding:4px;text-align:center;">659.000 đ</div>
                                    </div>
                                </a>
                                </div> 
    </div>
    @include('others.effect-loadmore')
    @include('modals.modal-receive-job')
@endsection

@push('custom-js')
    @include('scripts.job-load-more')
    <script>
        $(document).on('click', '.user-receive-job', function(e){
            $("#modalFormReceiveJob input[name='code']").val($(this).data('code'));
        });
    </script>
@endpush