@if(isset($store_orders) && count($store_orders) > 0)
<table class="table">
    <thead class="thead-lightorange">
    <tr>
        <th scope="col"><input type="checkbox" class="all_store_order" name="all_store_order"></th>
        <th scope="col">Order</th>
        <th scope="col">Order Date</th>
        <th scope="col">Order Count</th>
        <th scope="col">Status</th>
        <th scope="col">Total</th>
        <th scope="col" class="pr-1">
            <button id="delete-history" class="text-strong">Delete</button>
        </th>
    </tr>
    </thead>

    <tbody>

        @foreach($store_orders as $order)
            {{--            @dd($order->order_product)--}}
            <tr>
                <th scope="row"><input type="checkbox" class="store_order_check" name="store_order" value="{{ $order->id }}"></th>
                <td class="d-flex flex-nowrap ">
                    <div class="product-img"><img src="/storage/product/{{$order->order_product->product_head_images()}}"></div>
                    <div class="product-info-history pl-2">
                        <p>{{ str_cut($order->order_product['name_'.app()->getLocale()],25) }}</p>
                        {{--                        <p>QTY: 1</p>--}}
                    </div>
                </td>
                <td>
                    {{ $order->created_at }}
                </td>
                <td class="">{{ $order->quantity }}</td>
                <td>Placed</td>
                <td>{{ $order->order_total_cost() }}</td>
                <td class="text-strong"></td>
            </tr>
        @endforeach



    </tbody>
</table>
{{ $store_orders->links('vendor.pagination.pagination-order') }}
@endif
<!-- ------------pagination--------------------------- -->

{{--<div class="row mt-5 mb-5 page-row">--}}

{{--    <nav aria-label="Page navigation example ml-auto mr-auto" id="favorites-pages">--}}
{{--        <ul class="pagination">--}}
{{--            <li class="page-item">--}}
{{--                <a class="page-link" href="#" aria-label="Previous">--}}
{{--                    <span aria-hidden="true">&laquo;</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--            <li class="page-item"><a class="page-link" href="#">4</a></li>--}}
{{--            <li class="page-item"><a class="page-link" href="#">5</a></li>--}}
{{--            <li class="page-item"><a class="page-link" href="#">...</a></li>--}}
{{--            <li class="page-item"><a class="page-link" href="#">52</a></li>--}}
{{--            <li class="page-item">--}}
{{--                <a class="page-link" href="#" aria-label="Next">--}}
{{--                    <span aria-hidden="true">&raquo;</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </nav>--}}
{{--</div>--}}
