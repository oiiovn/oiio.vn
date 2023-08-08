@extends('layout')

@section('content')
<div style="width:150%;">
    <div style="margin-bottom:20px;display:flex;"><a
            style="color: #000;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;">Lịch sử mua
            code</a>
        <span
            style="color: #000;font-size: 22px;font-style: normal;font-weight: 500;line-height: normal;padding-left:5px;padding-right:5px;">
            > </span>
        <a style="color: #000;font-size: 20px;font-style: normal;font-weight: 300;line-height: normal;"
            href="{{ route('sim-code') }}">Mua code</a>
    </div>
    <div style="display:flex;">
        <div style="width: 1150px;height: 227px;border-radius: 10px;background: #FFF;">
            <div style="margin-top:20px;margin-left:10px;"><span
                    style="color: #E0793F;font-size: 22px;font-style: normal;font-weight: 700;line-height: normal;">Danh
                    sách code đã mua</span>
            </div>

        </div>
    </div>
</div>
@endsection
<style>
#sidebarRight {
    display: none;
}

#sidebar-Left {
    height: 1150px !important;
}

* {
    font-family: 'Lato'sans-serif !important;
}
</style>