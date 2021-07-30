@extends('layouts.app')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/account/basket.css') }}">

@endsection

@section('content')
    <div class="container site-basket-container">
        <input type="hidden" id="single_store_basket" value="{{ route('basket.single.store',app()->getLocale()) }}">
        <input type="hidden" id="checked_basket_url" value="{{ route('basket.checkeds.product',app()->getLocale()) }}">
        <input type="hidden" id="in_order_route" value="{{ route('add.order',app()->getLocale()) }}">
        <input type="hidden" id="basket_route" value="{{ route('basket',app()->getLocale()) }}">
        @if(count($baskets_stores) > 0)
            <div class="row">

                <div class="mt-5 col-12 col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap baskets_stores">


                    @foreach($baskets_stores as $store)
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 cur_store">

                            <label class="font-weight-bold">
                                <input type="radio" name="basket_stores" value="{{ $store->id }}"
                                       class="in_store_basket" value="1"/>
                                {{ $store->name }}
                            </label>

                        </div>
                    @endforeach


                </div>


            </div>
            <div id="store_products">
                @include("site-basket")

            </div>
        @else
            <div class="row justify-content-center">

                <h1>You are dont have added product(s) in your Cart </h1>

            </div>

        @endif


    </div>



@endsection

