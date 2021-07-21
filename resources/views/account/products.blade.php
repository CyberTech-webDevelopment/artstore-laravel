{{-- str_cut('hjkhhkh',2) --}}
{{--@dd($products);--}}
<input type="hidden" id="account_route" value="{{ route('account',app()->getLocale()) }}">
@if(count($products) > 0)
<input type="hidden" id="selected_delete" value="{{ route('delete.selected', app()->getLocale()) }}">
<input type="hidden" id="current_delete" value="{{ route('delete.current', app()->getLocale()) }}">
<input type="hidden" id="short_edit_url" value="{{ route('edit.short',app()->getLocale()) }}">

    <div class="row justify-content-end add-new-product-row  pr-3">
        <div class="col-sm-6 col-md-6 col-lg-6 col-6 product_errors text-danger text-bold"></div>
        <button class="add-new-product text-strong mt-1 mr-3" data-toggle="modal" data-target=".add-product-modal">Add New Product
            +
        </button>
    </div>

    <table class="table seller-add-products table-responsive">

        <thead class="thead-lightorange">
        <tr>
            <th scope="col"><input type="checkbox" class="all_del"></th>
            <th scope="col" class="">Product</th>
            <th scope="col" class="text-center">Quantity</th>
            <th scope="col" class="text-center">Status</th>
            <th scope="col" class="text-center pl-0 pr-0">Basic Price</th>
            <th scope="col" class="text-center">Sale</th>
            {{-- <th scope="col" class="text-center">Photos</th> --}}
            <th scope="col" class="text-center">
                <button  disabled class="delete-all-products">Delete</button>
            </th>
        </tr>
        </thead>

        <tbody>

        @foreach ($products as $elem)
{{--             @dd($elem->product_type)--}}
            <tr id="product_{{$elem['id']}}">
                <th scope="row"><input type="checkbox" class="current_del" value="{{$elem['id']}}"></th>
                <td class="d-flex flex-nowrap ">
                    <div class="product-img-products"><img src="/storage/product/{{$elem->product_head_images()}}">
                    </div>
                    <div class="product-info pl-2">
                        <p class="text-capitalize sml-caps text-strong mb-0">{{ str_cut($elem['name_'. app()->getLocale()],15)  }}</p>
                        <div data-toggle="modal" data-target=".product-description" class="description-click">
                            {{ str_cut($elem['desc_'. app()->getLocale()],60)  }}
                        </div>
                    </div>
                </td>
                <td class="text-strong">
                    <div class="d-flex">
                        <button class="minus_short" data-prodid="{{$elem['id']}}">-</button>
                        <span class="pl-2 pr-2 quantity_short_edit">{{ $elem['quantity'] }}</span>
                        <button class="plus_short" data-prodid="{{$elem['id']}}">+</button>
                        <input type="hidden" name="count_short" value="{{ $elem['quantity'] }}"
                               class="product_count_short_edit">
                    </div>
                </td>
                <td class="text-center text-strong">
                    <button value="1" data-productid="product_{{$elem['id']}}"
                            @if($elem['status'] == 1) class="active-product active_variant text-strong" name="active"
                            @else class="inactive-product active_variant text-strong" @endif>Active
                    </button>
                    <button value="0" data-productid="product_{{$elem['id']}}"
                            @if($elem['status'] == 0 || $elem['quantity'] == 0) class="active-product active_variant text-strong"
                            name="active" @else class="inactive-product active_variant text-strong" @endif>Inactive
                    </button>
                </td>
                <td class="text-strong">
                    <div class="d-flex">
                        <label>$ </label>
                        <input type="text" name="price" value="{{ $elem['price'] }}" class="sale-inp ml-2 price_short">
                    </div>
                </td>
                <td class="text-strong">
                    <div class="d-flex">
                        <label>% </label>
                        <input type="text" name="percent"
                               value="@if($elem['percent'] != null){{ $elem['percent'] }}@endif"
                               class="sale-inp ml-2 percent_short">


                    </div>
                    <span class="prices_cost_short"></span>
                </td>
                <td class="text-strong">
                    <input type="hidden" id="more_edit_url" value="{{ route('edit.more',app()->getLocale()) }}">
{{--                    data-toggle="modal" data-target=".edit_product"--}}
                    <button class="download text-strong edit_more" data-editedid="{{$elem['id']}}">Edit More</button>
                    <button class="delete-product text-strong mt-2" value="{{$elem['id']}}" data-toggle="modal" data-target=".delete-prd">
                        Delete
                    </button>
                    <button class="save-product text-strong mt-2" data-toggle="modal" data-target=".save-prd"
                            value="{{$elem['id']}}">Save
                    </button>
                </td>
            </tr>

        @endforeach

        </tbody>
    </table>

    {{-- Pagination --}}

    {{ $products->links('vendor.pagination.pagination') }}

    <!-- -----------------modal-for edit product ------------ -->

    <div class="modal fade save-prd" tabindex="-1" aria-labelledby="save-prd" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="text-center mr-0 text-strong">Edit product details</h5>
                    <button type="button" id="close_question_save" class="close" data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true"><img src="{{asset('assets/icons/close.png')}}"></span>
                    </button>
                </div>
                <div class="modal-body product-description-body ml-auto mr-auto pt-3 pb-3">
                    <input type="hidden" id="current_product" value="">
                    <div class="mt-3 text-center"><img src="{{asset('assets/icons/success.png')}}" class="img-delete">
                    </div>
                    <div class="mt-2 text-center ">
                        Are you sure you want to save this changeses the store?
                    </div>
                    <div class=" mt-2  text-center">
                        <div class="text-center mt-4 mb-4">
                            <button class="cancel" data-dismiss="modal">Cancel</button>
                            <button class="delete save_confirm ml-4">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- -----------------modal-for delete product ------------ -->

    <div class="modal fade delete-prd" tabindex="-1" aria-labelledby="delete-prd" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" id="close_del" aria-label="Close">
                        <span aria-hidden="true"><img src="{{asset('assets/icons/close.png')}}"></span>
                    </button>
                </div>
                <div class="modal-body product-description-body ml-auto mr-auto pt-3 pb-3">
                    <div class="mt-3 text-center"><img src="{{asset('assets/icons/delete-icon.png')}}"
                                                       class="img-delete"></div>
                    <div class="mt-2 text-center delete_text_current">
                        Are you sure you want to remove this item(s) from the store? If the product is removed, it already will be impossible to restore. If you
                        want remove this item, you can deactivate it.
                    </div>
                    <div class="mt-2 text-center delete_text_all" style="display: none">
                        Are you sure you want to remove all products from the store? If the all products are removing,its already
                        will be impossible to restore  If you want removed all items, you can deactivate its.
                    </div>
                    <div class=" mt-2  text-center">
                        <div class="text-center mt-4 mb-4">
                            <button class="cancel cancel_del" data-dismiss="modal">Cancel</button>
                            <button class="delete delete-multi ml-4">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@else

    <div class="row justify-content-center flex-column align-items-center add-new-product-row mt-2 pr-3">
        <div class="col-sm-6 col-md-6 col-lg-6 col-6 product_empty d-flex justify-content-center text-bold">

            You are dont have products

        </div>
        <button class="add-new-product text-strong" @if(Auth::user()->shop == true)  data-toggle="modal" data-target=".add-product-modal"
                @else href="#v-pills-welcome-seller" data-toggle="pill" aria-selected="false" role="tab"
                aria-controls="v-pills-welcome-seller" @endif>Add New Product
            +
        </button>

    </div>

@endif


