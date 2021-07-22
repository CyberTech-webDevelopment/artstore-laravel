<div class="row pl-0 pr-0 mt-4 select-group-3">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-10">
        <label>@lang('add-product.product.size')</label>

        <!-- --------------------select with checkbox------------ -->


        <div class="dropdown">
            <div
                class="dropdown-item dropdown-first-item text-strong d-flex justify-content-between pl-0 pr-1 pb-0 pt-0"
                id="size_all_content">
                <div class="w-100 mr-1"
                     id="sizes_opening">@lang('add-product.product.size')</div>
                <div id="sizes_slack"><i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
            </div>
            <div class=" dropdown-menu_dynamic hide menu-first-item pt-0 pb-0 sizes"
                 style="position: relative;">
                @foreach($all_sizes as $k => $v)
                    <div class="dropdown-item single_size_group">
                        <div
                            class="dropdown-item dropdown-second-item text-strong d-flex justify-content-between pt-0 pb-0 pl-0 pr-0"
                            id="size_second_item">
                            <div class="single_key">{{ $k }}</div>
                            <div class="single_key"><i class="fa fa-angle-right"
                                                       aria-hidden="true"></i></div>
                        </div>
                        <div class=" dropdown-menu hide menu-second-item sizes_content"
                             style="position: relative;">
                            @foreach($v as $el)
                                <li class="mr-1 small sizes_small"
                                    data-table-name="{{ $k }}"
                                    tabIndex="-1">
{{--                                    name="size[{{$k}}][]"--}}
                                    <input type="checkbox" class="size_check"
                                           value="{{ $el['id'] }}"/>{{ $el['size'] }}</li>


                            @endforeach

                        </div>
                    </div>
                @endforeach


            </div>
        </div>

    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-10">
        <label>@lang('add-product.product.color')</label>
        <div class="button-group">
            <button class="dropdown-toggle justify-content-between product_white_button"
                    data-toggle="dropdown"><span
                    class="caret">@lang('add-product.product.sel_color')</span></button>
            <ul class="dropdown-menu list_colors">
                @foreach($all_colors as $c)
                    <li class="small d-flex align-items-center" tabIndex="-1"><input
                            value="{{ $c['id'] }}"
                            class="mr-1 color_check"
                            type="checkbox"/>
                        {{ $c['color_name_' . app()->getLocale()] }}
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-10">
        <label>@lang('add-product.product.material')</label>
        <div class="dropdown">
            <div
                class="dropdown-item dropdown-first-item text-strong d-flex justify-content-between pl-0 pr-1 pb-0 pt-0"
                id="size_all_content">
                <div class="w-100 mr-1"
                     id="sizes_opening">@lang('add-product.product.material')</div>
                <div id="sizes_slack"><i class="fa fa-angle-right" aria-hidden="true"></i>
                </div>
            </div>
            <div class="dropdown-menu_dynamic hide menu-first-item pt-0 pb-0"
                 style="position: relative;">
                @foreach($all_materials as $k => $v)
                    <div class="dropdown-item single_size_group">
                        <div
                            class="dropdown-item dropdown-second-item text-strong d-flex justify-content-between pt-0 pb-0 pl-0 pr-0"
                            id="size_second_item">
                            <div class="single_key">{{ $k }}</div>
                            <div class="single_key"><i class="fa fa-angle-right"
                                                       aria-hidden="true"></i></div>
                        </div>
                        <div class="w-100 dropdown-menu hide menu-second-item sizes_content"
                             style="position: relative;">
                            @foreach($v as $el)
                                <li class="mr-1 small sizes_small"
                                    data-table-name="{{ $k }}"
                                    tabIndex="-1">
{{--                                    name="material[{{$k}}][]"--}}
                                    <input
                                        type="checkbox"
                                        class="material_check"
                                        value="{{ $el['id'] }}"/>{{ $el['material_'. app()->getLocale()] }}
                                </li>


                            @endforeach

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-10 text-center">
        {{--                                <label>@lang('add-product.product.custom_material')</label>--}}
        {{--                                <input type="text" id="custom_material" name="custom_material">--}}

        <label>@lang('add-product.product.quantity')</label>
        <div class="d-flex text-center">
            <div class="ml-auto d-flex mr-auto">
                <div class="minus_p">-</div>
                <span class="pl-2 pr-2 quantity">1</span>
                <div class="plus_p">+</div>
                <input type="hidden" value="1" class="product_count">
            </div>
        </div>

    </div>
    <div
        class="col-1 col-lg-1 col-md-1 col-sm-1 col-xs-10 d-flex align-items-end justify-content-end">

             <span class="options_plus">
                   <i class="fas fa-plus-circle"></i>
             </span>
    </div>
</div>
