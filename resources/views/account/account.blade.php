@extends('layouts.app')

@section('style')

    <!--====== Account Styles ======-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/account/welcome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/account/account-bar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/account/basket.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/account/favorites.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/account/last-views.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/account/messages.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/account/my-comments.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/account/settings-nav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/account/account-history.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/account/account-address.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/account/create-store.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/account/seller-add-products.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/account/delete-products.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/account/account-product.css') }}">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.7.16/fabric.min.js"></script>
@endsection


@section('content')

    @include('account.store_success')
    @include('account.store_edit_successfuly')
    @include('account.add-products-modal')
    <section class="pt-4 account-section">
        <div class="container-fluid account-container">
            <div class="row ">Homepage > My Account > Basket</div>
            <div class="row account-open-bar-row">
                <div class="account-open-bar mt-3 pt-2">
                    <img src="{{ asset('assets/icons/icon-user-mobile.svg') }}">
                </div>
            </div>
            <div class="row account-mobile-contents">
                @include('account.account-bar')


                <div class="col-lg-9 col-sm-12 col-xs-12 mt-3">
                    <div class="tab-content mt-0" id="v-pills-tabContent">
                        <!-- <div class="tab-pane fade show active" id="v-pills-welcome-buyer" role="tabpanel" aria-labelledby="v-pills-welcome-tab">
                            include "account/account-welcome-buyer.php";
                        </div> -->
                        <!--  -->
                        <div class="tab-pane fade show" id="v-pills-create-store" role="tabpanel"
                             aria-labelledby="v-pills-create-store-tab">
                            @include('account.create-store')

                        </div>

                        <!-- --------back if seller-> active class set seller------------------ -->
                        <div class="tab-pane fade show @if(Auth::user()->shop == false) active @endif"
                             id="v-pills-welcome-seller" role="tabpanel"
                             aria-labelledby="v-pills-welcome-tab">
                            @include('account.account-welcome-seller')

                        </div>


                        <div class="tab-pane fade show " id="v-pills-basket" role="tabpanel"
                             aria-labelledby="v-pills-basket-tab">
                            @include('account.basket')

                        </div>
                        <div class="tab-pane fade show @if(Auth::user()->shop == true) active @endif"
                             id="v-pills-products" role="tabpanel"
                             aria-labelledby="v-pills-products-tab">
                            @include('account.products')

                        </div>
                        <div class="tab-pane fade" id="v-pills-favorites" role="tabpanel"
                             aria-labelledby="v-pills-favorites-tab">
                            @include('account.favorites')

                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                             aria-labelledby="v-pills-messages-tab">
                            @include('account.messages')

                        </div>
                        <div class="tab-pane fade" id="v-pills-last-views" role="tabpanel"
                             aria-labelledby="v-pills-last-views-tab">
                            @include('account.last-views')

                        </div>
                        <div class="tab-pane fade" id="v-pills-purchases" role="tabpanel"
                             aria-labelledby="v-pills-purchases-tab">
                            @include('account.purchases')

                        </div>
                        <div class="tab-pane fade" id="v-pills-my-comments" role="tabpanel"
                             aria-labelledby="v-pills-my-comments-tab">
                            @include('account.my-comments')

                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                             aria-labelledby="v-pills-settings-tab">
                            @include('account.settings')

                        </div>
                        <div class="tab-pane fade" id="v-pills-seller-settings" role="tabpanel"
                             aria-labelledby="v-pills-seller-settings-tab">
                            @include('account.seller-settings')

                        </div>
                        <div class="tab-pane fade" id="v-pills-seller-add-products" role="tabpanel"
                             aria-labelledby="v-pills-seller-add-products-tab">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



@section('scripts')

    <!--====== Account Scripts ======-->
    <script src="{{asset('assets\js\account\basket.js')}}"></script>
    <script src="{{asset('assets\js\account\seller-setting.js')}}"></script>

    @if(Auth::check() && Auth::user()->shop == true)
        <script src="{{asset('assets\js\account\add-product.js')}}"></script>
    @endif
    @if(Auth::check() && Auth::user()->shop == false)
        <script src="{{asset('assets\js\account\account-welcome-seller.js')}}"></script>
    @endif
    <script src="{{asset('assets\js\account\account-settings-address.js')}}"></script>
    <script src="{{asset('assets\js\account\account-bar.js')}}"></script>
    <script src="{{asset('assets\js\account\account-product.js')}}"></script>
    <script>
        $('.h5-click').click(function () {
            $('#store-style').toggleClass('hide-style')
        })
        // $('.edit-h5-click').click(function () {
        //     alert()
        //     $('#edit-store-style').toggleClass('hide-style')
        // })
        $(document).on('click','.edit-h5-click',function (){

            $('#edit-store-style').toggleClass('hide-style')

        })

    </script>
    <!-- -----------select with checkbox----------------- -->

    <script>
        var options = [];

        $('.dropdown-menu a').on('click', function (event) {

            var $target = $(event.currentTarget),
                val = $target.attr('data-value'),
                $inp = $target.find('input'),
                idx;

            if ((idx = options.indexOf(val)) > -1) {
                options.splice(idx, 1);
                setTimeout(function () {
                    $inp.prop('checked', false)
                }, 0);
            } else {
                options.push(val);
                setTimeout(function () {
                    $inp.prop('checked', true)
                }, 0);
            }

            $(event.target).blur();

            console.log(options);
            return false;
        });
    </script>

@endsection
