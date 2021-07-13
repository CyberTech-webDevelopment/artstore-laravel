@extends('layouts.app')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/account/basket.css') }}">

@endsection

@section('content')
    <div class="container">

        <table class="mt-4 table table-responsive">
            <thead class="thead-lightorange">
            <tr>
                <th scope="col"></th>
                <th scope="col">@lang('account_basket.basket.product')</th>
                <th scope="col">@lang('account_basket.basket.quantity')</th>
                <th scope="col">@lang('account_basket.basket.status')</th>
                <th scope="col">@lang('account_basket.basket.edit')</th>
                <th scope="col">@lang('account_basket.basket.price')</th>
                <th scope="col">@lang('account_basket.basket.total')</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <th scope="row"><input type="checkbox" name=""></th>
                <td class="d-flex flex-nowrap ">
                    <div class="product-img"><img src="{{ asset('assets/images/andrijana1.png') }}"></div>
                    <div class="product-info pl-2">
                        <p class="text-capitalize sml-caps text-strong mb-0">Handemade name</p>
                        <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry
                        </div>
                    </div>
                </td>
                <td>
                    <button class="minus">-</button>
                    <span class="pl-2 pr-2 quantity">1</span>
                    <button class="plus">+</button>
                </td>
                <td class="text-success text-strong">Available</td>
                <td><img src="{{ asset('assets/icons/edit.png') }}"></td>
                <td><s>$220</s></td>
                <td class="text-strong">$140</td>
            </tr>
            <tr>
                <th scope="row"><input type="checkbox" name=""></th>
                <td class="d-flex flex-nowrap ">
                    <div class="product-img"><img src="{{ asset('assets/images/andrijana1.png') }}"></div>
                    <div class="product-info pl-2">
                        <p class="text-capitalize sml-caps text-strong mb-0">Handemade name</p>
                        <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry
                        </div>
                    </div>
                </td>
                <td>
                    <button class="minus">-</button>
                    <span class="pl-2 pr-2 quantity">1</span>
                    <button class="plus">+</button>
                </td>
                <td class="text-danger text-strong">Not Available</td>
                <td><img src="{{ asset('assets/icons/edit.png') }}"></td>
                <td>$220</td>
                <td class="text-strong">$140</td>
            </tr>
            </tbody>
        </table>


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


    </div>



@endsection




@section('scripts')

@endsection
