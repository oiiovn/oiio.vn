
@yield('change-pass')
<!-- Modal đổi mật khẩu -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="">
  <div class="modal-dialog" role="document">
    <div class=" content-dmk " style="margin-left: auto;margin-right: auto;">
      <div class="modal-header" style="border:none;">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #000;font-size: 20px;font-style: normal;font-weight: 600;line-height: normal;">Cập nhật mật khẩu của bạn</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"  style="border: none;background:none;"><span aria-hidden="true"><img src="{{ asset('viewsCustom/assets/images/clone.svg') }}" ></span> </button>

      </div>
      <div class="modal-body" style="padding-top:9px;">
        <div>
            <div>
                Nhập mật khẩu mới
            </div>
            <div>
            <input id="password" class="form-control form-control-flush h55 w100" type="password" name="password" placeholder="Mật khẩu"
                                       style=" flex-shrink: 0; border-radius: 5px; border: 1px solid #C7C6C1; font-family: 'Lato', sans-serif;"/>
            </div>
        </div>
        <div style="padding-top:24px;">
            <div>
                Nhập lại mật khẩu mới
            </div>
            <div>
            <input id="password" class="form-control form-control-flush h55 w100" type="password" name="password" placeholder="Nhập lại mật khẩu"
                                       style=" flex-shrink: 0; border-radius: 5px; border: 1px solid #C7C6C1; font-family: 'Lato', sans-serif;"/>
            </div>
        </div>
    
      </div>
      <div class="modal-footer" style="border:none;">
        <button type="button" class="" style="border-radius: 5px;background: #E0793F;width:90%;margin-left:5%;margin-right:5%;border:none;height:40px;"><span style="color: #FFF;font-size: 13px;font-style: normal;font-weight: 700;line-height: normal;">Cập nhật</span></button>
      </div>
    </div>
  </div>
</div>
<script>
    // Hàm này được gọi khi modal được hiển thị
    $('#exampleModalLongTitle').on('shown.bs.modal', function () {
        // Đặt focus vào input đầu tiên trong modal (nếu có)
        $('#password').focus();
    });

    // Hàm này được gọi khi người dùng click vào button "Cập nhật"
    function capNhatMatKhau() {
        // Xử lý logic cập nhật mật khẩu ở đây
        // Lưu ý: Bạn cần viết logic xử lý đổi mật khẩu tại đây
        // Sau khi xử lý xong, bạn có thể ẩn modal bằng cách gọi:
        // $('#exampleModalLong').modal('hide');
    }
</script>