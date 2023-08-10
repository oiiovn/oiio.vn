<input style="color: #CFCFCF;width:100%;height: 55px;flex-shrink: 0;border-radius: 5px;border: 1px solid #C7C6C1;color: #CFCFCF;font-family:' Lato' sans-serif;font-size: 14px;font-style: normal;font-weight: 400;line-height: 22px;" type="email" 
{{ $attributes
    ->class(['form-control'])
    ->merge([
        'placeholder' => __('Nhập email'),
        'data-parsley-type-message' => __('Trường này phải là email.')
    ])->merge($isRequired())
}}>