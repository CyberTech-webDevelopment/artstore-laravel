{{--<div class="total-cont d-flex justify-content-between">--}}
    <div></div>
    <div class="col-5 d-flex flex-wrap justify-content-end">
        <div class="flex-wrap col-7 mr-0  ">
            <div class="d-flex justify-content-between">
                <span>@lang('account_basket.basket.total_price'):</span>
                <span>${{ $basket_order_cost }}</span>
            </div>
            <div class="d-flex justify-content-between">
                <span>@lang('account_basket.basket.ogut'):</span>
                <span>${{ $basket_order_cost }}</span>
            </div>
            <div class="d-flex justify-content-between">
                <span>@lang('account_basket.basket.shipping'):</span>
                <span>$0</span>
            </div>
        </div>
        <div class="col-12 d-flex flex-wrap justify-content-end mt-3">
            <div class="d-flex justify-content-between">
                <span>@lang('account_basket.basket.how_pay')</span>
                <button id="select-pay" class="btn dropdown-toggle pt-0 ml-2" type="button"
                        data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu">
                    <div class="pl-2"><input type="radio" name="card"><label class="pl-2">Credit Card</label>
                    </div>
                    <div class="pl-2"><input type="radio" name="card"><label class="pl-2">Cash</label></div>
                    <div class="pl-2"><input type="radio" name="card"><label class="pl-2">PayPal</label></div>
                    <div class="pl-2"><input type="radio" name="card"><label class="pl-2">IDram</label></div>
                </div>
            </div>
            <div class="mt-3 justify-content-end ml-0 mb-4">
                <button class="p-checkout" data-current-store="{{ $store_id }}">@lang('account_basket.basket.porcend_checkout')</button>
            </div>
        </div>
    </div>
{{--</div>--}}
