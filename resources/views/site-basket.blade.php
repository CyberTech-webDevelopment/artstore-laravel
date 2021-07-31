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
            <th scope="col">@lang('account_basket.basket.options')</th>
            <th scope="col">@lang('account_basket.basket.edit')</th>

        </tr>
        </thead>

        <tbody>
        <div class="row justify-content-center">
            <p class="font-weight-bold text-danger" id="basket_action_message"></p>
        </div>

        @foreach ($store_basket as $elem)
{{--            @dd($elem->product_basket_option()['material'])--}}
            {{--                    @dump($elem);--}}
            <tr>

                <th scope="row"><input type="checkbox" class="select_basket_product"
                                       data-store-id="{{ $elem->store_id }}" value="{{ $elem->id }}" name=""></th>
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
                    <td class="text-strong total_price">{{ $elem->product_total_price($elem->basket_product($elem->product_id)->discounted_price()) }}</td>
                @else
                    <td class="text-danger text-strong">Not Available</td>
                    <td class="text-strong">{{ $elem->basket_product($elem->product_id)->price }}</td>
                    <td class="text-strong total_price">{{ $elem->product_total_price($elem->basket_product($elem->product_id)->price) }}</td>
                @endif
                <td>
                    {{--                                        @dd($elem)--}}
                    @if($elem->options_id != null)
                        <select disabled class="current_basket_option">

                            <option value="{{ $elem->product_basket_option()->id }}"
                                    class="cur_basket_option">@if($elem->product_basket_option()['size'] != null){{ $elem->product_basket_option()->size_option['size'] }}
                                /@endif @if($elem->product_basket_option()['material'] != null){{ $elem->product_basket_option()->material_option['material'] }}
                                /@endif @if($elem->product_basket_option()['color'] != null){{ $elem->product_basket_option()->color_option['color'] }} @endif
                            </option>

                        </select>
                    @endif

                </td>
                <td>
                    <div class="dropdown">
                        <button class="dropdown-toggle" id="action_cart" type="button" data-toggle="dropdown">
                            <img src="{{ asset('assets/icons/edit.png') }}">
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu" id="basket_action">

                            <li class="edit_basket" data-route-id="{{ route('edit.basket',app()->getLocale()) }}"
                                value="{{ $elem->id }}" data-option-id="{{ $elem->options_id }}"><a>Edit</a>
                            </li>
                            <li class="delete_basket" data-route-id="{{ route('delete.basket', app()->getLocale()) }}"
                                value="{{ $elem->id }}" data-option-id="{{ $elem->options_id }}"><a>Delete</a>
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
{{--        @dump($basket_order_cost)--}}
        @include("basket-order-info")
    </div>

@endif

{{--    </div>--}}

