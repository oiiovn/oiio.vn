@extends('layout')

@section('content')

@if(auth()->user()->hasBankAccount())

@endif

<x-form type="post" :validate="true" :action="route('bank.account')">
    <input name="user_id" type="hidden" value="{{ $user->id }}" hidden />
    <div class="container-bank" style="height: 589px;flex-shrink: 0;border-radius: 10px;background: #FFF;">
        <div style="width:100%;height:55px;display: flex;align-items: center;padding-left:40px;">
            <div class="title-bank" style="width:59.14%;color: #E0793F;font-family: 'Lato' sans-serif;font-size: 18px;font-style: normal;font-weight: 800;line-height: normal;border-bottom:1px solid rgba(0, 0, 0, 0.11);padding-bottom:10px;padding-top:38px;">Tạo thông tin tài khoản ngân hàng</div>
        </div>
        <div style="width:100%;margin-top:20px;">
            <div>
                <div class="container-info-bank" style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;margin-bottom:21px;">
                    <label>{{ __('Tên tài khoản') }}</label>
                    <x-input style="width: 45%;margin-left:auto;margin-right:50px;height: 46px;flex-shrink: 0;border-radius: 5px;border: 1px solid rgba(48, 48, 48, 0.21);" name="account_name" placeholder="VD: NGUYEN VAN A" :required="true" />
                </div>
            </div>
            <div>
                <div class="container-info-bank" style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;margin-bottom:21px;">
                    <label>{{ __('Số tài khoản') }}</label>
                    <x-input style="width: 45%;margin-left:auto;margin-right:50px;height: 46px;flex-shrink: 0;border-radius: 5px;border: 1px solid rgba(48, 48, 48, 0.21);" type="text" name="account_number" placeholder="VD: 0000 0000 0000 0000"  />
                </div>
            </div>
            <div>
                <div class="container-info-bank" style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;margin-bottom:21px;">
                    <label>{{ __('Tên ngân hàng') }} </label>
                    @php
                            $response = Http::get('https://api.vietqr.io/v2/banks');
                            $data = $response->json();
                            $breeds = $data['data'];
                    @endphp
                    <select class="custom-select" id="inputGroupSelect01" name="bank_name" required style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;margin-bottom:21px;">
                    <option selected style="height: 51.3333px;margin-left:40px;display: flex;align-items:center;margin-bottom:21px;">Choose...</option>
                    @foreach ($breeds as $breed)
                        <option value="{{ $breed['shortName'] }}" data-img-src="{{ $breed['logo'] }}">
                            {{ $breed['shortName'] }}
                        </option>
                    @endforeach
                </select>

                </div>
            </div>
            <div style="display: flex;align-items: flex-start;gap: 20px;padding-left:38px;overflow-x:auto;margin-bottom:20px;margin-top:36px;">
                @foreach($user->bankAccount as $value)
                <div style="padding-bottom:20px;">
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
            </div>
            <div>
                <button type="submit" class="btn" style="display: inline-flex;padding: 10px 20px;justify-content:center;align-items: center;border-radius: 5px;background: #E0793F;color:#FFF;margin-left:565px;">Tạo thông tin ngân hàng</button>
            </div>
        </div>
    </div>
</x-form>

<style>
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var selectElement = document.getElementById("inputGroupSelect01");
        var imageElement = document.getElementById("bankImage"); // ID của thẻ hình ảnh

        selectElement.addEventListener("change", function() {
            var selectedOption = selectElement.options[selectElement.selectedIndex];
            var imgUrl = selectedOption.getAttribute("data-img-src");

            if (imgUrl) {
                imageElement.src = imgUrl;
            } else {
                // Nếu không có đường dẫn hình ảnh, có thể ẩn hình ảnh hoặc thực hiện thao tác khác
                imageElement.src = ""; // Hoặc gán cho hình ảnh trống
            }
        });
    });
</script>

<script>
    
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /*when an item is clicked, update the original select box,
                and the selected item:*/
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });

            // Lấy đường dẫn ảnh từ thuộc tính data-img-src của tùy chọn
            var imgSrc = selElmnt.options[j].getAttribute("data-img-src");

            // Tạo thẻ img và gắn vào phần tử DIV (c)
            var img = document.createElement("img");
            img.src = imgSrc;
            img.style.width = "70px"; // Định dạng kích thước ảnh
            img.style.height = "20px";

            // Gắn thẻ img vào phần tử DIV (c) - Trước hoặc sau văn bản, tùy vào yêu cầu hiển thị của bạn
            c.insertBefore(img, c.firstChild); // Hoặc c.appendChild(img);

            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }

    function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }

    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
</script>

@endsection