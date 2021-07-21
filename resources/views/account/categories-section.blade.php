<div class="row pl-0 pr-0 mt-3 select-group-1">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-10">
        <label>@lang('add-product.product.category')</label>
        <select class="select-menu">
            <option class="add_product_menu">@lang('add-product.product.sel_cat')</option>
            @foreach($menu as $m)
                <option name="menu" class="add_product_menu"
                        data-menu-id='{{ $m['id'] }}'>{{ $m['menu_name_' . app()->getLocale()] }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-10">
        <label>@lang('add-product.product.sub_cat')</label>
        <div class="button-group">
            <button class="dropdown-toggle product_white_button justify-content-between"
                    data-toggle="dropdown"><span
                    class="caret">@lang('add-product.product.sel_sub_cat')</span></button>
            <ul class="dropdown-menu list_sub_menu">

            </ul>
        </div>

    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-10">
        <label>@lang('add-product.product.type')</label>
        <input type="hidden" id="selesct_default_lang"
               value="@lang('add-product.product.sel_type')">
        <select class="select_sub_category" name="type[]">
            <option class="add_product_menu"
                    value="">@lang('add-product.product.sel_type')</option>

        </select>
        <span class="type_plus">
               <i class="fas fa-plus-circle"></i>
        </span>

    </div>

</div>
