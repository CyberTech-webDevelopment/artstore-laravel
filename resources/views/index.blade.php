@extends('layouts.app')

@section('style')
    <!--====== Index Styles ======-->
    <link rel="stylesheet" href="{{asset('assets\css\carusel\owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets\css\carusel\style.css')}}">
    <link rel="stylesheet" href="{{asset('assets\css\sections.css')}}">
    <link rel="stylesheet" href="{{asset('assets\css\carusel-vertical\carusel-vertical.css')}}">

    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

@section('content')


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
        @elseif(session('modal_type')[0] == 'success_email' || session('modal_type') == 'success_pass_change')

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

    @include('carusel.carusel')
    @include('sections.section-new-arrivals')
    @include('sections.section-hot-offers')
    @include('sections.bestseller')
    @include('sections.gifts')
    @include('sections.latest-products')
    @include('sections.from-our-blog')
@endsection

@section('scripts')

    <!--====== Index Scripts ======-->
    <script src="{{asset('assets\js\carusel\owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets\js\carusel\main.js')}}"></script>
    <script src="{{asset('assets\js\carusel-vertical\carusel-vertical.js')}}"></script>
    <script src="{{asset('assets\js\register-login\sign-up.js')}}"></script>
    <script src="{{asset('assets\js\register-login\sign-in.js')}}"></script>
    <script src="{{asset('assets\js\forgot-password\forgot-password.js')}}"></script>
    <script src="{{asset('assets\js\forgot-password\change-password.js')}}"></script>

@endsection
