@extends('layout')

@section('content')
<div style="display:flex;width:150%;">
    <div style="width: 681px;height: 535px;border-radius: 10px;background: #FFF;">
        <div style="margin-top:20px;margin-left:20px;"><span
                style="color: #E0793F;font-size: 22px;font-style: normal;font-weight: 800;line-height: normal;">Danh
                sách ứng dụng</span>
        </div>
        <div style="margin-top:20px;">
            <div class="search-field-s d-none d-md-block" style="width: 54.5%;margin-left:20px;">
                <form class="d-flex align-items-center h-100" action="#">
                    <div class="input-group-s">
                        <input type="text" class="form-control-s" placeholder="Tìm kiếm">
                        <div style="position: relative;border-left: 1px solid #3333;align-items: center;justify-content: center;display: flex;width: 20%;margin-left: auto;"
                            class="input-group-prepend-s bg-transparent">
                            <img src="{{ asset('icon/search.svg') }}" alt="logo">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="sim-code_content"
            style="display: grid;grid-template-columns: auto auto auto;margin-top:25px;height:410px;">
            <div class="grid-item"
                style="width:196px;heigth:46px;margin-left:20px;margin-bottom:20px;border: 1px solid gray; border-radius:5px;">
                1</div>
            <div class="grid-item"
                style="width:196px;heigth:46px;margin-left:20px;margin-bottom:20px;border: 1px solid gray; border-radius:5px;">
                2</div>
            <div class="grid-item"
                style="width:196px;heigth:46px;margin-left:20px;margin-bottom:20px;border: 1px solid gray; border-radius:5px;">
                3</div>
            <div class="grid-item"
                style="width:196px;heigth:46px;margin-left:20px;margin-bottom:20px;border: 1px solid gray; border-radius:5px;">
                4</div>
            <div class="grid-item"
                style="width:196px;heigth:46px;margin-left:20px;margin-bottom:20px;border: 1px solid gray; border-radius:5px;">
                5</div>
            <div class="grid-item"
                style="width:196px;heigth:46px;margin-left:20px;margin-bottom:20px;border: 1px solid gray; border-radius:5px;">
                6</div>
            <div class="grid-item"
                style="width:196px;heigth:46px;margin-left:20px;margin-bottom:20px;border: 1px solid gray; border-radius:5px;">
                7</div>
            <div class="grid-item"
                style="width:196px;heigth:46px;margin-left:20px;margin-bottom:20px;border: 1px solid gray; border-radius:5px;">
                8</div>
            <div class="grid-item"
                style="width:196px;heigth:46px;margin-left:20px;margin-bottom:20px;border: 1px solid gray; border-radius:5px;">
                9</div>
            <div class="grid-item"
                style="width:196px;heigth:46px;margin-left:20px;margin-bottom:20px;border: 1px solid gray; border-radius:5px;">
                1</div>
            <div class="grid-item"
                style="width:196px;heigth:46px;margin-left:20px;margin-bottom:20px;border: 1px solid gray; border-radius:5px;">
                2</div>
            <div class="grid-item"
                style="width:196px;heigth:46px;margin-left:20px;margin-bottom:20px;border: 1px solid gray; border-radius:5px;">
                3</div>
            <div class="grid-item"
                style="width:196px;heigth:46px;margin-left:20px;margin-bottom:20px;border: 1px solid gray; border-radius:5px;">
                4</div>
            <div class="grid-item"
                style="width:196px;heigth:46px;margin-left:20px;margin-bottom:20px;border: 1px solid gray; border-radius:5px;">
                5</div>
            <div class="grid-item"
                style="width:196px;heigth:46px;margin-left:20px;margin-bottom:20px;border: 1px solid gray; border-radius:5px;">
                6</div>
            <div class="grid-item"
                style="width:196px;heigth:46px;margin-left:20px;margin-bottom:20px;border: 1px solid gray; border-radius:5px;">
                7</div>
            <div class="grid-item"
                style="width:196px;heigth:46px;margin-left:20px;margin-bottom:20px;border: 1px solid gray; border-radius:5px;">
                8</div>
            <div class="grid-item"
                style="width:196px;heigth:46px;margin-left:20px;margin-bottom:20px;border: 1px solid gray; border-radius:5px;">
                9</div>
        </div>
    </div>
    <div style="width:410px;height:305px;border-radius: 10px;background: #FFF;margin-left:23px;">

    </div>
</div>
@endsection
<style>
#sidebarRight {
    display: none;
}
</style>