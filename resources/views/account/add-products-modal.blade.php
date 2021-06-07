<!-- ----------------------modal add product------------------------------ -->
{{--@dump($all_materials)--}}
<div class="modal fade add-product-modal" tabindex="-1" id="add-product-modal" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between">
                <div class="modal-title text-strong" id="exampleModalLongTitle">Add Product</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{asset('assets/icons/close.png')}}"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row pl-1 pr-0">
                    <div class="canvas-cont hide ml-auto mr-auto" tabindex="3">
                        <canvas id="canvas"></canvas>
                        <div class="ml-1 edit-img">
                            <button id="crop-image"><i class='fas fa-crop' style='font-size:24px'></i></button>
                            <p></p>
                            <button class="delete-image"><img src="{{asset('assets/icons/close.png')}}"></button>
                        </div>
                    </div>
                    <div class="d-flex col-4 uploade-image">
                        <div class="modal-drag-photo py-4 input-file-trigger text-center">
                            <div class="text-center"><img src="{{asset('assets/icons/upload.png')}}"></div>
                            <div class="font-size-14 text-center pt-3">Drag photo to upload</div>
                            <div class="font-size-14 text-center">or</div>
                            <label for="fileupload" class="browse font-size-12 text-strong" id='labelFU' tabindex="0">
                                Browse
                                <input class="input-file" id="fileupload" name="files" type="file" multiple>
                            </label>
                            <div id='divHabilitSelectors'
                                 class="input-file-container text-center pt-2 input-file-trigger"></div>
                        </div>
                        <div></div>
                    </div>
                    <div id="image-cont" class="d-flex"></div>
                </div>
                <div class="row pl-3 pr-0 mt-3">
                    <div class="inputs-group pl-0 pr-0">
                        <input type="" name="name_en" placeholder="Product Name_English" class="pt-3">
                        <input type="" name="desc_en" placeholder="Description_English" class="pt-3">
                        <input type="" name="detail_en" placeholder="Product Details_English" class="pt-3">
                        <input type="" name="name_ru" placeholder="Product Name_Russian" class="pt-3">
                        <input type="" name="desc_ru" placeholder="Description_Russian" class="pt-3">
                        <input type="" name="detail_ru" placeholder="Product Details_Russian" class="pt-3">
                        <input type="" name="name_am" placeholder="Product Name_Armenian" class="pt-3">
                        <input type="" name="desc_am" placeholder="Description_Armenian" class="pt-3">
                        <input type="" name="detail_am" placeholder="Product Details_Armenian" class="pt-3">
                        {{--                        <input type="" name="" placeholder="Detail 2" class="pt-3">--}}
                        {{--                        <input type="" name="" placeholder="Detail 3" class="pt-3">--}}
                    </div>
                    <div class="row pl-0 pr-0 mt-3 select-group-1">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-10">
                            <label>Category</label>
                            <input type="hidden" id="sel_cat_route"
                                   value="{{route('menu.submenu',app()->getLocale())}}">
                            <input type="hidden" id="sel_sub_cat_route"
                                   value="{{ route('sub_menu.sub_cat',app()->getLocale()) }}">
                            <input type="hidden" id="cur_lang" value="{{ app()->getLocale() }}">


                            <select id="select-menu">
                                <option class="add_product_menu">Select Category</option>
                                @foreach($menu as $m)
                                    <option name="menu" class="add_product_menu"
                                            data-menu-id='{{ $m['id'] }}'>{{ $m['menu_name_' . app()->getLocale()] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-10">
                            <label>Subcategory</label>
                            <div class="button-group">
                                <button class="dropdown-toggle" data-toggle="dropdown"><span
                                        class="caret">Select Sub_menu</span></button>
                                <ul class="dropdown-menu" id="list_sub_menu">

                                </ul>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-10">
                            <label>Type</label>

                            <select id="select_sub_category">
                                <option class="add_product_menu">Select Type</option>
                                {{--                                @foreach($menu->sub_categories as $cat)--}}
                                {{--                                    <option name="sub_category" class="add_product_menu"--}}
                                {{--                                            data-menu-id='{{ $cat['id'] }}'>{{ $cat['name_category' . app()->getLocale()] }}</option>--}}
                                {{--                                @endforeach--}}
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-10 text-center">
                            <label>Quantity</label>
                            <div class="d-flex text-center">
                                <div class="ml-auto mr-auto">
                                    <button class="minus">-</button>
                                    <span class="pl-2 pr-2 quantity">1</span>
                                    <button class="plus">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pl-0 pr-0 mt-4 select-group-2">
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-10">
                            <label>Price</label>
                            <div class="d-flex">
                                <span class="pr-2">$</span>
                                <input type="text" id="price_product" name="price">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-10">
                            <label>Sale Price</label>
                            <div class="d-flex">
                                <span class="pr-2">%</span>
                                <div>
                                    <input type="text" id="price_product" name="percent">
                                    {{--                                    <div><input type="radio" name=""><label class="pl-2">Hot Offer</label></div>--}}
                                    {{--                                    <div><input type="radio" name=""><label class="pl-2">Spetial Offer</label></div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-10">
                            <label>Size</label>

                            <!-- --------------------select with checkbox------------ -->
                            <!-- <div class="multiselect">
                <div class="selectBox" onclick="showCheckboxes()">
                  <select>
                  </select>
                  <div class="overSelect"></div>
                </div>
                <div id="checkboxes">
                  <label for="one">
                    <input type="checkbox" class="mr-2 ml-2" id="one" />Xs</label>
                  <label for="two">
                    <input type="checkbox" class="mr-2 ml-2" id="two" />S</label>
                  <label for="three">
                    <input type="checkbox" class="mr-2 ml-2" id="three" />M</label>
                    <label for="for">
                    <input type="checkbox" class="mr-2 ml-2" id="for" />L</label>
                    <label for="five">
                    <input type="checkbox" class="mr-2 ml-2" id="five" />XXL</label>
                </div>
              </div> -->


                            <div class="dropdown">
                                <div
                                    class="dropdown-item dropdown-first-item text-strong d-flex justify-content-between pl-0 pr-1 pb-0 pt-0" id="size_all_content">
                                    <div class="w-100 mr-1" id="sizes_opening">Sizes</div>
                                    <div id="sizes_slack"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                                <div class=" dropdown-menu hide menu-first-item pt-0 pb-0 sizes"
                                     style="position: relative;">
                                    @foreach($all_sizes as $k => $v)
                                        <div class="dropdown-item single_size_group">
                                            <div
                                                class="dropdown-item dropdown-second-item text-strong d-flex justify-content-between pt-0 pb-0 pl-0 pr-0" id="size_second_item">
                                                <div class="single_key">{{ $k }}</div>
                                                <div class="single_key"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                            </div>
                                            <div class=" dropdown-menu hide menu-second-item sizes_content"
                                                 style="position: relative;" >
                                                @foreach($v as $el)
                                                    <li class="mr-1 small sizes_small" data-table-name="{{ $k }}" tabIndex="-1">
                                                        <input type="checkbox"/>{{ $el['size'] }}</li>


                                                @endforeach

                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>



                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-10">
                            <label>Color</label>
                            <select id="select-color">
                                <option class="add_product_color">Select Color</option>
                                @foreach($all_colors as $c)
                                    <option name="menu" class="add_product_menu"
                                            data-color-id='{{ $c['id'] }}'>{{ $c['color_name_' . app()->getLocale()] }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-10">
                            <label>Material</label>
                            <div class="dropdown">
                                <div
                                    class="dropdown-item dropdown-first-item text-strong d-flex justify-content-between pl-0 pr-1 pb-0 pt-0" id="size_all_content">
                                    <div class="w-100 mr-1" id="sizes_opening">Materials</div>
                                    <div id="sizes_slack"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                </div>
                                <div class="w-100 dropdown-menu hide menu-first-item pt-0 pb-0"
                                     style="position: relative;">
                                    @foreach($all_materials as $k => $v)
                                        <div class="dropdown-item" id="single_size_group">
                                            <div
                                                class="dropdown-item dropdown-second-item text-strong d-flex justify-content-between pt-2 pb-2 pl-3 pr-1" id="size_second_item">
                                                <div class="single_key">{{ $k }}</div>
                                                <div class="single_key"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                            </div>
                                            <div class="w-100 dropdown-menu hide menu-second-item"
                                                 style="position: relative;"  id="sizes_content">
                                                @foreach($v as $el)
                                                    <li class="mr-1 small sizes_small" data-table-name="{{ $k }}" tabIndex="-1">
                                                        <input type="checkbox"/>{{ $el['material_'. app()->getLocale()] }}</li>


                                                @endforeach

                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="d-flex justify-content-center mt-4 mb-5">
                    <button id="add-product" class="text-strong" data-toggle="modal"
                            data-target=".product-successfully-aded" data-dismiss="modal" aria-label="Close">Add Product
                    </button>
                </div>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{asset('assets/icons/close.png')}}"></span>
                </button>
            </div>
            <div class="modal-body product-description-body ml-auto mr-auto pt-3 pb-3 text-center">
                <div class=" mt-2"><img src="{{asset('assets/icons/success.png')}}"></div>
                <div class="text-center mt-4 text-in-modal text-strong">
                    Dear user, the product has been added to the "store name" store. It will be for sale after checking
                    the Artstore moderator. You will receive a message about that.
                </div>
                <div class="text-center mt-4 mb-4">
                    <button class="again-add-product text-strong" data-toggle="modal" data-target=".add-product-modal"
                            data-dismiss="modal" aria-label="Close">Add Product
                    </button>
                </div>
                <div class="go-to-product text-strong" data-toggle="modal" data-dismiss="modal" aria-label="Close">
                    <a class="nav-link d-flex go-to-product text-center justify-content-between acount-bar-item acount-bar-type-item"
                       data-type="seller" data-name="products" id="v-pills-products-tab" data-toggle="pill"
                       href="#v-pills-products" role="tab" aria-controls="v-pills-products" aria-selected="true">
                        <div class="font-size-16">Go to Products</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
