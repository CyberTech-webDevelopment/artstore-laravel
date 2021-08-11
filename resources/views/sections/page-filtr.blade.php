{{--@dump(Request::get('sub_menu'))--}}
@if(count($filtr_products) > 0)
    <div class="main-flex-item-color">
        <input type="hidden" id="cat_type_filtr" value="{{$filtr_products['cat_type']}}">
        <input type="hidden" id="cat_id_filtr" value="{{$cat_id}}">

        {{--   Filtr Percent Type     --}}
        @if($filtr_products['percent'] == null)
            <div class="row mt-2">
                <div class="col-sm-10 col-lg-10 col-10 col-md-10">
                    <label class="text-strong text-uppercase"><u>Price Type</u></label>
                    <div class="form-check">
                        <input class="form-check-input filtr_option" type="radio" value="1" name="filter_discount"
                               id="discount">
                        <label class="form-check-label text-strong" for="discount">
                            Discounted
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input filtr_option" type="radio" value="2" name="filter_discount"
                               id="none_discount"
                        >
                        <label class="form-check-label text-strong" for="none_discount">
                            Original Price
                        </label>
                    </div>
                </div>
            </div>
        @endif
        {{--  End Filtr Percent Type     --}}
        {{--        Filtr SubMenu--}}
        @if($filtr_products['sub_menu'] != null)
            <div class="row mt-2">
                <div class="col-12 col-md-12 col-lg-12">
                    <label class="text-strong text-uppercase"><u>@lang('add-product.product.category')</u></label>
                    <select class="select-menu filtr_option filtr_catergory_select list_sub_menu" id="filtr_sub_menu"
                            name="filtr_sub_menu">
                        <option class="add_product_menu" value="0">@lang('add-product.product.sel_cat')</option>
                        @foreach($current_sub_menues as $m)
                            <option name="menu"
                                    @if((isset($filtr_options['sub_menu']) && $filtr_options['sub_menu'] == $m['id']) || (Request::get('sub_menu') != null && Request::get('sub_menu') == $m['id'])) selected
                                    @endif value="{{ $m['id'] }}" class="add_product_menu"
                                    data-menu-id='{{ $m['id'] }}'>{{ $m['sub_menu_name_' . app()->getLocale()] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        @endif
        {{--        End Filtr SubMenu--}}
        {{--        Filtr Type--}}

        @if($filtr_products['sub_cat'] != null)

            <div class="row mt-2">

                <div class="col-12 d-flex flex-column col-md-12 col-lg-12">
                    <label class="text-strong text-uppercase"><u>@lang('add-product.product.type')</u></label>
                    <select class="filtr_catergory_select filtr_option" id="filtr_type" name="filtr_type">
                        <option value="0">@lang('add-product.product.sel_type')</option>
                        @if(count($current_sub_cats) > 0)
                            @foreach($current_sub_cats as $cats)
                                <option
                                    value='{{ $cats->id }}'>{{$cats['name_category_' . app()->getLocale()]}}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
        @endif
        {{--        End Filtr Type--}}
        {{--            Filtr Size--}}
        @if($filtr_products['size'] != null)
            <div class="row mt-2">
                <div class="col-12 col-sm-12 col-lg-12">
                    <label class="text-strong text-uppercase"><u>@lang('add-product.product.size')</u></label>

                    <!-- --------------------select with checkbox------------ -->

                    <div class="dropdown filtr_dropdow_option">
                        <div
                            class="dropdown-item dropdown-first-item text-strong d-flex justify-content-between pl-0 pr-1 pb-0 pt-0"
                            id="option_all_content_filtr">
                            <div class="w-100 mr-1"
                                 id="option_opening_filtr">@lang('add-product.product.size')</div>
                            <div id="option_slack_filtr"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class=" dropdown-menu_dynamic hide menu-first-item pt-0 pb-0 sizes"
                             style="position: relative;">
                            @foreach($all_sizes as $k => $v)
                                <div class="dropdown-item single_option_group_filtr">
                                    <div

                                        class="dropdown-item dropdown-second-item text-strong d-flex justify-content-between pt-0 pb-0 pl-0 pr-0"
                                        id="option_second_item_filtr">
                                        <div class="single_key_filtr">{{ $k }}</div>
                                        <div class="single_key_filtr"><i class="fa fa-angle-right"
                                                                         aria-hidden="true"></i></div>
                                    </div>
                                    <div class="dropdown-menu hide menu-second-item option_content_filtr"
                                         style="position: relative;">
                                        @foreach($v as $el)
                                            <li class="mr-1 small sizes_small"
                                                data-table-name="{{ $k }}"
                                                tabIndex="-1">
                                                <input type="checkbox" class="filtr_option size_check size_filtr"
                                                       name="size_filtr"
                                                       value="{{ $el['id'] }}"/>{{ $el['size'] }}</li>


                                        @endforeach

                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{--            End Filtr Size--}}
        {{--            Filtr Material--}}
        @if($filtr_products['material'] != null)
            <div class="row mt-2">
                <div class="col-12 col-sm-12 col-lg-12">
                    <label class="text-strong text-uppercase"><u>@lang('add-product.product.material')</u></label>

                    <!-- --------------------select with checkbox------------ -->


                    <div class="dropdown filtr_dropdow_option">
                        <div
                            class="dropdown-item dropdown-first-item text-strong d-flex justify-content-between pl-0 pr-1 pb-0 pt-0"
                            id="option_all_content_filtr">
                            <div class="w-100 mr-1"
                                 id="option_opening_filtr">@lang('add-product.product.material')</div>
                            <div id="option_slack_filtr"><i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class=" dropdown-menu_dynamic hide menu-first-item pt-0 pb-0 materials"
                             style="position: relative;">
                            @foreach($all_materials as $k => $v)
                                <div class="dropdown-item single_option_group_filtr">
                                    <div

                                        class="dropdown-item dropdown-second-item text-strong d-flex justify-content-between pt-0 pb-0 pl-0 pr-0"
                                        id="option_second_item_filtr">
                                        <div class="single_key_filtr">{{ $k }}</div>
                                        <div class="single_key_filtr"><i class="fa fa-angle-right"
                                                                         aria-hidden="true"></i></div>
                                    </div>
                                    <div class="dropdown-menu hide menu-second-item option_content_filtr"
                                         style="position: relative;">
                                        @foreach($v as $el)
                                            <li class="mr-1 small sizes_small"
                                                data-table-name="{{ $k }}"
                                                tabIndex="-1">
                                                <input type="checkbox"
                                                       class="filtr_option material_check material_filtr"
                                                       name="material_filtr"
                                                       value="{{ $el['id'] }}"/>
                                                {{ $el['material_'.app()->getLocale()] }}
                                            </li>


                                        @endforeach

                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{--            End Filtr Material--}}
        {{--            Filtr Color--}}
        @if($filtr_products['color'] != null)

            <div class="row mt-2">

                <div class="col-12 d-flex flex-column col-md-12 col-lg-12">
                    <label class="text-strong text-uppercase"><u>@lang('add-product.product.color')</u></label>
                    <select class="filtr_catergory_select filtr_option" id="filtr_color" name="filtr_color">
                        <option value="0">@lang('add-product.product.sel_color')</option>
                        @foreach($all_colors as $c)
                            <option
                                value='{{ $c['id'] }}'>{{$c['color_name_' . app()->getLocale()]}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        @endif

        {{--            End Filtr Color--}}
        {{--            Filtr Gender --}}
        @if($filtr_products['gender'] == null)
            <div class="row mt-2">
                <div class="col-sm-12 col-lg-12 col-12 col-md-12">
                    <label class="text-strong text-uppercase"><u>@lang('add-product.product.by_gender')</u></label>
                    @foreach($genders as $g)
                        <div class="form-check">
                            <input class="form-check-input filtr_option" type="radio" value="{{ $g->id }}"
                                   name="filter_gender"
                                   @if($g->id == 1) id="male"
                                   @elseif($g['id'] == 2)  id="female" @else id="child" @endif>
                            <label class="form-check-label text-strong" @if($g->id == 1) for="male"
                                   @elseif($g->id == 2)  for="female" @else for="child" @endif >
                                {{ $g['name_'.app()->getLocale()] }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        {{--            End Filtr Gender--}}
        {{--        Filtr Price--}}
        <div class="row mt-2 flex-column">

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex flex-column">
                <label class="text-strong text-uppercase"><u>Price</u></label>
                <div style="width:100%" class="d-flex">
                    <input type="text" name="start_cost" id="start_cost" class="form-control filtr_option"> -

                    <input type="text" name="end_cost" id="end_cost" class="form-control filtr_option">

                </div>

            </div>

        </div>

        {{--        End Filtr Price--}}
    </div>
    <form id="filtr_options">

    </form>
@endif
