<?php

namespace App\Helpers;

class BankHelper
{
    public static function getBankLogoPath($bankName)
    {
        // Đường dẫn tới hình ảnh mặc định
        $defaultLogoPath = asset('path/to/default_logo.png');
    
        // Dự đoán đường dẫn đến logo của ngân hàng dựa trên tên ngân hàng
        $bankLogoPath = asset("path/to/logos/{$bankName}.png");
    
        // Kiểm tra xem logo của ngân hàng có tồn tại hay không
        if (file_exists(public_path("path/to/logos/{$bankName}.png"))) {
            return $bankLogoPath;
        } else {
            // Nếu không tìm thấy logo, trả về logo mặc định
            return $defaultLogoPath;
        }
    }
    
}
