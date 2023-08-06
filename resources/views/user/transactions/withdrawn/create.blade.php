
@extends('layout')

@section('content')
<x-form type="post" action="{{ route('transaction.withdrawn.store') }}" :validate="true">
    <div class="container-widthdrawn"style="background:#fff;border-radius:5px;padding:1.5rem 20px;">
        <div style="margin-bottom:20px;">
            <span class="title-widthdrawn" style="color: #000;font-family: Lato;font-size: 20px;font-style: normal;font-weight: 700;line-height: normal;"><span class="">Tạo lệnh rút tiền</span></span>
        </div>
        <div class="">
            <input type="hidden" name="user_id" value="{{ $user->id }}" />
            <div class="mb-3">
                <div class="form-label">
                    <span style="margin-right:210px;color: #000;font-family: 'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">{{ __('Số dư: ') }}</span>
                    <b class="price__color">{{ format_price($user->wallet->amount) }}</b> 
                </div>
            </div>
            <div class="content-widthdrawn mb-3" style="display: flex;align-items: center;width: 100%;">
                <div class="title-money-wd">
                    <label style="margin-right:109px;color: #000;font-family: 'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">{{ __('Nhập số tiền cần rút') }}</label>
                </div>
                <div>
                    <x-input style="width: 387px;height: 46px;flex-shrink: 0;" name="amount" placeholder="VD: 50.000 đ" min="100000" max="{{ $user->wallet->amount }}" :required="true" onchange="this.value = formatPrice(this.value)" />
                </div>
            </div>
            <div class="content-widthdrawn mb-3 d-flex align-items-center">
                <div class="title-money-wd">                
                    <label style="margin-right:67px;color: #000;font-family: 'Lato' sans-serif;font-size: 16px;font-style: normal;font-weight: 500;line-height: normal;">Chọn tài khoản ngân hàng</label>
                </div>
                <div>
                    <select class="select-custom"style="width:387px; height: 46px; flex-shrink: 0; border-radius: 5px; border: 1px solid rgba(48, 48, 48, 0.21);">
                        @foreach ($user->bankAccount as $item)
                        <option value="{{ $item->id }}">{{ $item->bank_name }} - {{ $item->account_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- @each('user.transactions.withdrawn.include.bank-row', $user->bankAccount, 'item')  -->
            <x-button type="submit" class="btn-widthdrawn btn-orang" style="display: inline-flex;padding: 10px 20px;justify-content:center;align-items: center;border-radius: 5px;background: #E0793F;color:#FFF;margin-left:610px;">
                Tạo lệnh rút tiền</x-button>
        </div>
    </div>
    <div style="width: 100%;height:68px;background-color:#e9e9e9;">
        <div style="height: 68px;"></div>
    </div>
</x-form>
<style>
    @media (max-width:768px) {
        #row{
            margin-left:0 !important;
            margin-top: 0 !important;
        }
        .container-widthdrawn{
            width:100% !important;
            height: 100% !important;
        }
        .content-widthdrawn{
            display: block !important;
        }
        .content-widthdrawn input[type=text]{
            width: 95% !important ;
        }
        .select-custom{
            width: 95% !important;
        }
        .title-money-wd label {
            margin-right: 0 !important;
        }
        .title-money-wd{
            margin-bottom: 10px;
        }
        .form-label span{
            margin-right:20px !important;
        }
        .btn-widthdrawn{
            margin-left:0 !important;
            width: 100% !important;
            justify-content: center !important;
        }
    }
     .card-list {
                    display: block;
                    align-items: center;
                    justify-content: center;
                    width: 807px;
                    height: 495px;
                    flex-shrink: 0;
                }

                .card-content {
                    display: grid;
                    grid-template-columns: 50% 50%;
                    justify-content: center;
                    align-items: center;
                    margin-bottom: 35px;
                    margin-left: 75px;
                }

                .card-item {
                    width: 100%;
                    margin-top: 2vh;
                    margin-bottom: 2vh;
                }

                .card-item button {
                    cursor: pointer;
                    color: #E0793F;
                    font-family: Lato;
                    font-size: 32px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: normal;
                    letter-spacing: 3.2px;
                    align-items: center;
                    justify-content: center;
                    display: flex;
                    width: 290px;
                    height: 80px;
                    border-radius: 8px;
                    border: 1px solid rgba(48, 48, 48, 0.20);
                }

                .card-item button:hover {
                    opacity: 0.8;
                    border: 2px solid #269300;
                }

                .card-item button:focus {
                    color: #E0793F !important;
                    border: 2px solid #269300 !important;
                }

                .card-item button:hover .tick {
                    opacity: 1 !important;
                }

                .card-warning {
                    display: inline-flex;
                    align-items: flex-start;
                    gap: 20px;
                    margin-left: 25px;
                }

                .tick {
                    transition: .5s ease;
                    /* opacity: 0; */
                    opacity: 0;
                    position: absolute;
                    margin-left: 290px;
                    margin-top: -35px;
                    transform: translate(-50%, -50%);
                    -ms-transform: translate(-50%, -50%);
                    text-align: center;
                }

                .item-logo {
                    width: 108px;
                    height: 70px;
                    flex-shrink: 0;
                }
</style>
@endsection
