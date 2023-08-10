<div style="margin-bottom:20px;">
    <div style=" display: flex;width:87.56%;">
        <label  style="width:100%;"for="">{{ $attribute->name }}:</label>
        @if($attribute->desc)
            <span class="text-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="{{ __($attribute->desc) }}">
                <i class="fa-solid fa-lightbulb-on"></i>
            </span>
        @endif
        <x-select style="border-radius: 5px;border: 1px solid rgba(48, 48, 48, 0.21);height:46px;" class="select-attribute-option" name="attribute_option_id[{{$attribute->id}}]" :required="true">
            <x-select-option :data-price="0" :title="__('Vui lòng chọn')" />
            @foreach ($attribute->options as $option)
                <x-select-option :data-price="$option->price" :value="$option->id" :title="$option->name"/>
            @endforeach
        </x-select>
        
    </div>
</div>
