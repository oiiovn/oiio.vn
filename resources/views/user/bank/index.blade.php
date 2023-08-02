@extends('layout')

@section('content')

@if(auth()->user()->hasBankAccount())

@endif

<x-form type="post" :validate="true">
    <input name="user_id" type="hidden" value="{{ $user->id }}" hidden />
    <div style="height: 589px;flex-shrink: 0;border-radius: 10px;background: #FFF;">
        <div style="width:100%;height:55px;display: flex;align-items: center;padding-left:40px;">
            <div style="width:59.14%;color: #E0793F;font-family: 'Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 800;line-height: normal;border-bottom:1px solid rgba(0, 0, 0, 0.11);padding-bottom:10px;padding-top:38px;">Tạo thông tin tài khoản ngân hàng</div>
        </div>
        <div style="width:100%;margin-top:20px;">
            <div>
                <div style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;margin-bottom:21px;">
                    <label>{{ __('Tên tài khoản') }}</label>
                    <x-input style="width: 65%;margin-left:auto;width: 387px;margin-right:50px;height: 46px;flex-shrink: 0;border-radius: 5px;border: 1px solid rgba(48, 48, 48, 0.21);" name="account_name" placeholder="Nhập tên tài khoản ngân hàng" :required="true" />
                </div>
            </div>
            <div>
                <div style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;margin-bottom:21px;">
                    <label>{{ __('Số tài khoản') }}</label>
                    <x-input style="width: 65%;margin-left:auto;width: 387px;margin-right:50px;height: 46px;flex-shrink: 0;border-radius: 5px;border: 1px solid rgba(48, 48, 48, 0.21);" type="number" name="account_number" placeholder="Nhập số tài khoản ngân hàng" :required="true" />
                </div>
            </div>
            <div>
                <div style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;margin-bottom:21px;">
                    <label>{{ __('Tên ngân hàng') }}</label>
                    <x-select style="width: 65%;margin-left:auto;width: 387px;margin-right:50px;height: 46px;flex-shrink: 0;border-radius: 5px;border: 1px solid rgba(48, 48, 48, 0.21);" name="bank_name" :required="true">
                        <option value="">Chọn ngân hàng</option>
                        <option value="Bank A">Ngân hàng A</option>
                        <option value="Bank B">Ngân hàng B</option>
                        <option value="Bank C">Ngân hàng C</option>
                        <!-- Thêm các tùy chọn cho các ngân hàng khác -->
                    </x-select>

                </div>
            </div>
            @foreach($user->bankAccount as $value)
            <div style="display: flex;align-items: flex-start;gap: 20px;padding-left:38px;overflow-x:auto;margin-bottom:40px;margin-top:36px;">
                <div style="width: 325px;height: 165px;flex-shrink: 0;border-radius: 10px;border: 1px solid #A6A4A4;background: #FFF;box-shadow: 0px 4px 6px 0px rgba(0, 0, 0, 0.15);">
                    <div style="width:100%;height: 44px; display: flex;justify-content: space-between;padding-left:20px;padding-right:20px;align-items: center;border-bottom:1px solid #CCCCCC;">
                            <span class="">{{ $value->bank_name }}</span>
                            <span style="margin-left:auto;">
                                <a href="#">
                                    <img src="{{ asset('viewsCustom/assets/images/edit.svg') }}" alt="">
                                </a>
                                <a href="{{ route('user.bank.delete', $value->id) }}">
                                    <img src="{{ asset('viewsCustom/assets/images/delete.svg') }}" alt="">
                                   </span>
                            </a>
                    </div>
                    <div style="width: 100%;display:flex;padding-left:20px; align-items: center;padding-top:15px;">
                        <div style="display: block;">
                            <span style="display: flex; align-items: baseline;gap:10px;height: 19px;margin-bottom:12px;">Tên tài khoản: <p>{{ $value->account_name }}</p></span>
                            <span style="display: flex; align-items: baseline;gap:10px;height: 19px;margin-bottom:12px;">Số tài khoản: <p>{{ $value->account_number }}</p></span>
                            <span style="display: flex; align-items: baseline;gap:10px;height: 19px;">Ngân hàng: <p>{{ $value->bank_name }}</p></span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div>
                <button type="submit" class="btn" style="display: inline-flex;padding: 10px 20px;justify-content:center;align-items: center;border-radius: 5px;background: #E0793F;color:#FFF;margin-left:565px;">Tạo thông tin ngân hàng</button>
            </div>
        </div>
    </div>
</x-form>

@endsection
<style>

</style>