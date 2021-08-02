@if(isset($user_orders) && count($user_orders) > 0)
    <table class="table">
        <thead class="thead-lightorange">
        <tr>
            <th scope="col"><input type="checkbox" class="all_store_order" name="all_store_order"></th>
            <th scope="col">Order</th>
            <th scope="col">Order Date</th>
            <th scope="col">Order Count</th>
            <th scope="col">Status</th>
            <th scope="col">Total</th>
            <th scope="col" class="pr-1">Options</th>
            <th>
                <button disabled id="delete-history" class="text-strong">Delete</button>
            </th>

        </tr>
        </thead>

        <tbody>

        @foreach($user_orders as $order)
            {{--            @dd($order->order_product)--}}
            <tr>
                <th scope="row"><input type="checkbox" class="store_order_check" name="store_order"
                                       value="{{ $order->id }}"></th>
                <td class="d-flex flex-nowrap ">
                    <div class="product-img"><img
                            src="/storage/product/{{$order->order_product->product_head_images()}}"></div>
                    <div class="product-info-history pl-2">
                        <p>{{ str_cut($order->order_product['name_'.app()->getLocale()],25) }}</p>
                        {{--                        <p>QTY: 1</p>--}}
                    </div>
                </td>
                <td>
                    {{ $order->created_at }}
                </td>
                <td class="">{{ $order->quantity }}</td>
                <td>
                    @if($order->status == 0)
                        Waiting
                    @endif
                </td>
                <td>{{ $order->order_total_cost() }}</td>
                <td class="text-strong">
                    @if($order->options_id != null)
                        {{--                        @dd($order->product_order_option())--}}
                        @if($order->product_order_option()->size != null)
                            {{$order->product_order_option()->size_option['size']}}/
                        @endif
                        @if($order->product_order_option()->material != null)
                            {{$order->product_order_option()->material_option['material_'.app()->getLocale()]}}/
                        @endif
                        @if($order->product_order_option()->color != null)
                            {{$order->product_order_option()->color_option['color_name_'.app()->getLocale()]}}
                        @endif
                    @endif
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{ $user_orders->links('vendor.pagination.pagination-user-order') }}
@endif
<!-- ------------pagination--------------------------- -->

