{{--    <div class="container">--}}
@if(isset($store_basket) && count($store_basket) > 0)
    <table class="mt-4 table table-responsive">
        <thead class="thead-lightorange">
        <tr>
            <th scope="col"></th>
            <th scope="col">@lang('account_basket.basket.product')</th>
            <th scope="col">@lang('account_basket.basket.quantity')</th>
            <th scope="col">@lang('account_basket.basket.status')</th>
            <th scope="col">@lang('account_basket.basket.price')</th>
            <th scope="col">@lang('account_basket.basket.total')</th>
            <th scope="col">@lang('account_basket.basket.edit')</th>

        </tr>
        </thead>

        <tbody>
     <div class="row justify-content-center">
         <p class="font-weight-bold text-danger" id="basket_action_message"></p>
     </div>

        @foreach ($store_basket as $elem)
            {{--        @dd($elem->basket_product($elem->product_id)->name_am)--}}
            <tr>
                <th scope="row"><input type="checkbox" value="{{ $elem->id }}" name=""></th>
                <td class="d-flex flex-nowrap ">
                    <div class="product-img"><img
                            src="/storage/product/{{$elem->basket_product($elem->product_id)->product_head_images()}}">
                    </div>
                    <div class="product-info pl-2">
                        <p class="text-capitalize sml-caps text-strong mb-0">{{ str_cut($elem->basket_product($elem->product_id)['name_'. app()->getLocale()],15)  }}</p>
                        <div>
                            {{ str_cut($elem->basket_product($elem->product_id)['desc_'. app()->getLocale()],60)  }}
                        </div>
                    </div>
                </td>
                <td>
                    <input type="hidden" name="count_basket" value="{{$elem->quantity}}" id="product_count_basket">
                    <button class="minus_basket">-</button>
                    <span class="pl-2 pr-2 quantity">{{ $elem->quantity }}</span>
                    <button class="plus_basket">+</button>
                </td>


                @if($elem->basket_product($elem->product_id)->percent != null)
                    <td class="text-success text-strong">Available</td>
                    <td class="text-strong">{{ $elem->basket_product($elem->product_id)->discounted_price() }}</td>
                    <td class="text-strong">{{ $elem->product_total_price($elem->basket_product($elem->product_id)->discounted_price()) }}</td>
                @else
                    <td class="text-danger text-strong">Not Available</td>
                    <td class="text-strong">{{ $elem->basket_product($elem->product_id)->price }}</td>
                    <td class="text-strong">{{ $elem->product_total_price($elem->basket_product($elem->product_id)->price) }}</td>
                @endif

                <td>
                    <div class="dropdown">
                        <button class="dropdown-toggle" id="action_cart" type="button" data-toggle="dropdown">
                            <img src="{{ asset('assets/icons/edit.png') }}">
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu" id="basket_action">

                            <li class="edit_basket" data-route-id="{{ route('edit.basket',app()->getLocale()) }}"
                                value="{{ $elem->id }}"><a>Edit</a>
                            </li>
                            <li class="delete_basket" data-route-id="{{ route('delete.basket', app()->getLocale()) }}"
                                value="{{ $elem->id }}"><a>Delete</a>
                            </li>

                        </ul>
                    </div>

                </td>


            </tr>

        @endforeach

        </tbody>
    </table>

    {{ $store_basket->links('vendor.pagination.pagination-basket') }}
    <div class="total-cont d-flex justify-content-between">
        <div></div>
        <div class="col-5 d-flex flex-wrap justify-content-end">
            <div class="flex-wrap col-7 mr-0  ">
                <div class="d-flex justify-content-between">
                    <span>@lang('account_basket.basket.total_price'):</span>
                    <span>$140</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>@lang('account_basket.basket.ogut'):</span>
                    <span>$140</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span>@lang('account_basket.basket.shipping'):</span>
                    <span>$20</span>
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
                    <button class="p-checkout">@lang('account_basket.basket.porcend_checkout')</button>
                </div>
            </div>
        </div>
    </div>
@endif

{{--    </div>--}}

