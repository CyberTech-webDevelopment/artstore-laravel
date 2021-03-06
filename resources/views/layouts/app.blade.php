<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link rel="icon" href="{{ asset('assets\images\logo.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\css\style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\css\navbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\css\subnav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\css\mobile-navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\css\register-login\modal.css') }}">
    {{--    <link rel="stylesheet" href="{{ asset('css\app.css') }}">--}}

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    @yield('style')
</head>
<body>
<div id="app">
    {{--    @dump(Auth::user()->id)--}}
    @include('nav.nav-group')
    @include('nav.mobile-navbar')
    {{--   *****  Modals *****  --}}
    @include('register-login.register-login-modals')
    @include('product.product-message')
    <input type="hidden" id="add_basket_route" value="{{ route('add.basket',app()->getLocale()) }}">
    <input type="hidden" id="current_route" value="{{ Route::currentRouteName() }}">
{{--    <input type="hidden" id="category_page_route" value="{{route()}}">--}}
    <input type="hidden" id="sel_sub_cat_route"
           value="{{ route('sub_menu.sub_cat',app()->getLocale()) }}">
    <input type="hidden" id="cur_lang" value="{{ app()->getLocale() }}">

    <main>
        @yield('content')
    </main>

    @if ($errors->has('email') || $errors->has('password'))

        <script>
            setTimeout(function () {
                $(document).ready(function () {
                    $('#nav-sign-in').trigger('click');
                });
            }, 500);
        </script>

    @endif

    {{--    Modals Checking --}}
    @if(session()->has('modal_type'))
        {{--        @dump(session('modal_type'))--}}
        @if(session('modal_type')[0] == 'check_email')

            <script>
                setTimeout(function () {

                    $(document).ready(function () {
                        $('#s12').trigger('click');
                    });

                }, 500);

            </script>
        @elseif(session('modal_type')[0] == 'register_failed')
            {{--@dump('register_failed')--}}
            <script>
                setTimeout(function () {

                    $(document).ready(function () {
                        $('#sign-up').trigger('click');
                    });

                }, 500);

            </script>
        @elseif(session('modal_type')[0] == 'success_email' || session('modal_type') == 'success_pass_change' )

            <script>
                setTimeout(function () {

                    $(document).ready(function () {
                        $('#nav-sign-in').trigger('click');
                    });

                }, 500);

            </script>
        @elseif(session('modal_type')[0] == 'time_end')

            <script>
                setTimeout(function () {

                    $(document).ready(function () {
                        $('#s12_time').trigger('click');
                    });

                }, 500);

            </script>
        @elseif(session('modal_type')[0] == 'time_end_reset')

            <script>
                setTimeout(function () {

                    $(document).ready(function () {
                        $('#s12_time_reset').trigger('click');
                    });

                }, 500);

            </script>

        @elseif(session('modal_type')[0] == 'send_password')

            <script>
                setTimeout(function () {

                    $(document).ready(function () {
                        $('#s12_reset').trigger('click');
                    });

                }, 500);

            </script>
        @elseif(session('modal_type') == 'confirm_no_match')

            <script>
                setTimeout(function () {

                    $(document).ready(function () {
                        $('#s11').trigger('click');
                    });

                }, 500);

            </script>
        @elseif(session('modal_type') == 'conn_error')

            <script>
                setTimeout(function () {

                    $(document).ready(function () {
                        $('#s12_con').trigger('click');
                    });

                }, 500);

            </script>

        @elseif(session('modal_type')[0] == 'success_reset')

            <script>
                setTimeout(function () {

                    $(document).ready(function () {
                        $('#s11').trigger('click');
                    });

                }, 500);

            </script>
        @endif
    @elseif(session('modal_type') == 'no_reset_email' || session()->has('error_reset'))

        <script>
            setTimeout(function () {

                $(document).ready(function () {
                    $('#forgot-password').trigger('click');
                });

            }, 500);

        </script>

    @endif
    {{--    End Modal checking--}}
    @include('footer.footer')

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"--}}
{{--        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"--}}
{{--        crossorigin="anonymous"></script>--}}
<script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
<script src="{{asset('assets\js\navbar.js')}}"></script>
<script src="{{asset('assets\js\mobile-navbar.js')}}"></script>
<script src="{{asset('assets\js\footer.js')}}"></script>
<script src="{{asset('assets\js\register-login\sign-up.js')}}"></script>
<script src="{{asset('assets\js\register-login\sign-in.js')}}"></script>
<script src="{{asset('assets\js\forgot-password\forgot-password.js')}}"></script>
<script src="{{asset('assets\js\forgot-password\change-password.js')}}"></script>
<script src="{{asset('assets\js\user_basket.js')}}"></script>
<script src="{{asset('assets\js\filter.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>
@if(Auth::check())
    <script>
        {{--window.Laravel = {--}}
        {{--    'csrfToken': '{{ csrf_token() }}',--}}
        {{--    'user': '{{Auth::user()->id}}'--}}
        {{--};--}}
        // var userId = document.getElementById('auth_id').value;
        // 'order-channel'

        {{--window.Laravel = {--}}
        {{--    'csrfToken': '{{ csrf_token() }}',--}}
        {{--    'user': '{{Auth::user()->id}}'--}}
        {{--};--}}

        window.Echo.channel(`order.{{Auth::user()->id}}`)
            .listen('.ordered', (e) => {
                let available_orders_count = parseInt($('.order_count').text());
                let new_count = available_orders_count + parseInt(e.order.quantity)
                $('.order_count').text(new_count);
                console.log(e.order);
            });
    </script>
@endif
@yield('scripts')
</body>
</html>
