<div id="tableTotalMoney" style="width:100%;">
    <div>
        <div style="display: flex;justify-content: space-between;margin-bottom:20px;">
            <span>{{ __('Phí dịch vụ') }}</span>
            <span class="total-money">{{ format_price($total_money ?? 0) }}</span>
        </div>
        <div style="display: flex;justify-content: space-between;margin-bottom:10px;border-bottom:1px solid #3333;padding-bottom:20px;">
            <span>{{ __('Tiền cọc') }}</span>
            <span class="money-product-addition">{{ format_price($money_product_addition ?? 0) }}</span>
        </div>
        <div class="fw-bold" style="display: flex;justify-content: space-between;margin-bottom:10px;">
            <span>{{ __('Tổng phí') }}</span>
            <span class="total">{{ format_price($total ?? 0) }}</span>
        </div>
    </div>
</div>