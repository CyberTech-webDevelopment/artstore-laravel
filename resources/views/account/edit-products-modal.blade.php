<!-- ----------------------modal add product------------------------------ -->
<button type="button" style="display: none" data-toggle="modal" data-target=".product-successfully-aded"
        data-dismiss="modal" aria-label="Close" id="open_success_modal">Open_Success
</button>
<button type="button" style="display: none" data-toggle="modal" data-target=".edit_product"
        data-dismiss="modal" aria-label="Close" id="open_edit_modal">Edit_Modal
</button>
{{-- aria-label="Close"        data-toggle="modal"                                     value="Add Product" data-dismiss="modal"
                                  data-target=".product-successfully-aded"--}}
{{-- @if(isset($product))
@dump($product->product_colors)
@endif --}}
<div class="modal fade edit_product" tabindex="-1" id="edit-product-modal" role="dialog"
     aria-labelledby="exampleModalCenterTitle_edit" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between">
                <div class="modal-title text-strong"
                     id="exampleModalLongTitle">@lang('add-product.product.edit_title')</div>
                <button type="button" class="close" id="close_add_model_edit" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{asset('assets/icons/close.png')}}"></span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('edit.morepost',app()->getLocale()) }}" method="post"
                      enctype="multipart/form-data"
                      id="editproduct_form">
                    <input type="hidden" id="more_post_edit" value="{{ route('edit.morepost',app()->getLocale()) }}">
                    @csrf
                    @if(isset(Auth::user()->store) && isset($product))
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="store_id" value="{{ Auth::user()->store->id }}">

                    @endif
                    <div class="row pl-1 pr-0">
                        <div class="canvas-cont_edit_pr hide ml-auto mr-auto" tabindex="2">
                            <canvas id="canvas_edit_pr"></canvas>
                            <div class="ml-1 edit-img">
                                <div id="crop-image_edit_pr"><i class='fas fa-crop' style='font-size:24px'></i></div>
                                <p></p>
                                <div class="delete-image_edit_pr"><img src="{{asset('assets/icons/close.png')}}"></div>
                            </div>
                        </div>
                        <div class="d-flex col-4 uploade-image_edit_pr">
                            <div class="capital_img"></div>
                            <div class="modal-drag-photo_edit_pr py-4 input-file-trigger_edit_pr text-center">
                                <div class="text-center"><img src="{{asset('assets/icons/upload.png')}}"></div>
                                <div class="font-size-14 text-center pt-3">@lang('add-product.product.drag_drop')</div>
                                <div
                                    class="font-size-14 text-center">{{ app()->getLocale()=='en' ? 'or' : ( app()->getLocale()=='ru' ? '??????' : ( app()->getLocale()=='am' ? '??????' : 'or')) }}</div>
                                <label for="fileupload_edit_pr" class="browse font-size-12 text-strong" id='labelFU'
                                       tabindex="0">
                                    @lang('add-product.product.browse')
                                    <input class="input-file" id="fileupload_edit_pr" name="file" type="file" multiple>

                                </label>
                                <div id='divHabilitSelectors'
                                     class="input-file-container text-center pt-2 input-file-trigger_edit_pr"></div>
                            </div>

                        </div>
                        <div id="image-cont_edit_pr" class="d-flex"></div>
                    </div>
                    <div class="row pl-3 pr-0 mt-3">
                        <div class="inputs-group pl-0 pr-0">
                            <input type="" name="name_en" @if(isset($product)) value="{{ $product['name_en'] }}"
                                   @endif placeholder="@lang('add-product.product.name_en')"
                                   class="pt-3">
                            <input type="" name="desc_en" @if(isset($product)) value="{{ $product['desc_en'] }}"
                                   @endif placeholder="@lang('add-product.product.desc_en')"
                                   class="pt-3">
                            <input type="" name="detail_en" @if(isset($product)) value="{{ $product['detail_en'] }}"
                                   @endif placeholder="@lang('add-product.product.detail_en')"
                                   class="pt-3">
                            <input type="" name="name_ru" @if(isset($product)) value="{{ $product['name_ru'] }}"
                                   @endif placeholder="@lang('add-product.product.name_ru')"
                                   class="pt-3">
                            <input type="" name="desc_ru" @if(isset($product)) value="{{ $product['desc_ru'] }}"
                                   @endif placeholder="@lang('add-product.product.desc_ru')"
                                   class="pt-3">
                            <input type="" name="detail_ru" @if(isset($product)) value="{{ $product['detail_ru'] }}"
                                   @endif placeholder="@lang('add-product.product.detail_ru')"
                                   class="pt-3">
                            <input type="" name="name_am" @if(isset($product)) value="{{ $product['name_am'] }}"
                                   @endif placeholder="@lang('add-product.product.name_am')"
                                   class="pt-3">
                            <input type="" name="desc_am" @if(isset($product)) value="{{ $product['desc_am'] }}"
                                   @endif placeholder="@lang('add-product.product.desc_am')"
                                   class="pt-3">
                            <input type="" name="detail_am" @if(isset($product)) value="{{ $product['detail_am'] }}"
                                   @endif placeholder="@lang('add-product.product.detail_ru')"
                                   class="pt-3">

                        </div>
                        <input type="hidden" id="sel_cat_route_edit"
                               value="{{route('menu.submenu',app()->getLocale())}}">
                        <input type="hidden" id="sel_sub_cat_route_edit"
                               value="{{ route('sub_menu.sub_cat',app()->getLocale()) }}">
                        <input type="hidden" id="cur_lang_edit" value="{{ app()->getLocale() }}">
                        <div class="row types_container">

                            @include('account.categories-section')

                        </div>

                        <div class="row pl-0 pr-0 mt-4 justify-content-around align-items-end select-group-2 ">
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-10 text-center">

                                <label>@lang('add-product.product.custom_material')</label>
                                <input type="text" id="custom_material"

                                       @if (isset($product) && $product->custom_material != null)
                                       value="{{ $product->custom_material}}"
                                       @endif

                                       name="custom_material">
                            </div>
                            {{-- last row product_add --}}


                            <div class="p-0 col-lg-2 col-md-2 col-sm-6 col-xs-10">
                                <label>@lang('add-product.product.by_gender')</label>

                                <select id="select_gender" name="gender">
                                    <option class="add_product_menu"

                                            @if (isset($product) && $product->gender_id != 0 )

                                            value="{{ $product->gender_id }}">{{ $product->product_gender()->name }}

                                        @else

                                            value="0">@lang('add-product.product.by_gender')

                                        @endif
                                    </option>
                                    @foreach ($genders as $g)

                                        @if (isset($product) && $g->id != $product->gender_id)

                                            <option class="add_product_menu"
                                                    value="{{ $g->id }}">{{ $g->name }}</option>

                                        @endif


                                    @endforeach


                                </select>
                            </div>
                            <div class="p-0 col-lg-2 col-md-2 col-sm-6 col-xs-10 d-flex align-items-center">
                                <div class="form-check-input_gift">
                                    <input class="form-check-input_gift_check" name="gift"
                                           type="checkbox"
                                           @if (isset($product) && $product->gift == 1)
                                           checked
                                           @endif
                                           value="1"
                                           id="gift_check">
                                    <label class="form-check-label" for="gift_check">
                                        @lang('add-product.product.gift_for')
                                    </label>
                                </div>
                            </div>
                            <div class="p-0 col-lg-2 col-md-2 col-sm-6 col-xs-10 d-flex align-items-center flex-column"
                            ">
                            <label>@lang('add-product.product.quantity')</label>
                            <div class="d-flex text-center">
                                <div class="ml-auto d-flex mr-auto">
                                    <div class="minus_edit">-</div>
                                    <span
                                        class="pl-2 pr-2 quantity">@if(isset($product)) {{ $product->total_count }} @endif</span>
                                    <div class="plus_edit">+</div>
                                    <input type="hidden" name="count"
                                           @if(isset($product)) value="{{$product->total_count}}"
                                           @endif id="product_count_edit">
                                </div>
                            </div>
                        </div>
                        <div class="p-0 col-lg-2 col-md-2 col-sm-6 col-xs-10">
                            <label class="ml-3">@lang('add-product.product.price')</label>
                            <div class="d-flex">
                                <span class="pr-2">$</span>
                                <input type="text" id="price_product"
                                       @if(isset($product)) value="{{$product->price}}" @endif name="price"
                                       class="price_ed">
                            </div>

                        </div>
                        <div
                            class="p-0 col-lg-2 col-md-2 col-sm-6 col-xs-10 text-center  @if (isset($product) && $product->percent != null) in_percent_margin @endif ">


                            <label class="ml-3">@lang('add-product.product.sel_price')</label>
                            <div class="d-flex">
                                <span class="pr-2">%</span>
                                <div>
                                    <input type="text" id="price_product"
                                           @if(isset($product) && $product->percent != null) value="{{$product->percent}}"
                                           @endif name="percent" class="percent_ed">
                                    {{--                                    <div><input type="radio" name=""><label class="pl-2">Hot Offer</label></div>--}}
                                    {{--                                    <div><input type="radio" name=""><label class="pl-2">Spetial Offer</label></div>--}}
                                </div>
                            </div>
                            <span class="prices_cost_edit">
                                   @if (isset($product) && $product->percent != null)
                                    {{ $product->discounted_price() }}
                                @endif
                                </span>
                        </div>
                    </div>
                    <div class="row pl-0 pr-0 mt-4 options_container">
                        @include('account.options-section')
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-12 d-flex justify-content-center">
                            <div
                                class="col-sm-6 col-md-6 col-lg-6 col-6 d-flex justify-content-center font-weight-bold font-size-16 text-danger product_errors">

                            </div>

                        </div>

                    </div>
                    <div class="row justify-content-center mt-4 mb-5">
                        <input type="submit" id="edit-product" value="@lang('add-product.product.edit_title')"
                               class="text-strong">


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- -----------------product successfully aded store name------------ -->

<div class="modal fade product-successfully-aded" tabindex="-1" aria-labelledby="product-description"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">

            </div>
            <div class="modal-body product-description-body ml-auto mr-auto pt-3 pb-3 text-center">
                <div class=" mt-2"><img src="{{asset('assets/icons/success.png')}}"></div>
                <div class="text-center mt-4 text-in-modal text-strong">
                    @lang('add-product.product.add_success_text')

                </div>
                <div class="text-center mt-4 mb-4">
                    <button class="again-add-product text-strong" data-toggle="modal" data-target=".add-product-modal"
                            data-dismiss="modal" aria-label="Close">@lang('add-product.product.add_title')
                    </button>
                </div>
                <div class="go-to-product text-strong" data-toggle="modal" data-dismiss="modal" aria-label="Close">
                    <a class="nav-link d-flex go-to-product text-center justify-content-between acount-bar-item acount-bar-type-item"
                       data-type="seller" data-name="products" id="v-pills-products-tab" data-toggle="pill"
                       href="#v-pills-products" role="tab" aria-controls="v-pills-products" aria-selected="true">
                        <div class="font-size-16">@lang('add-product.product.add_success_goto')</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

