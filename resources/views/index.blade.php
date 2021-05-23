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
        @if(session('modal_type')[0] == 'check_email')

            <script>
                setTimeout(function(){

                    $(document).ready(function () {
                        $('#s12').trigger('click');
                    });

                }, 500);

            </script>
        @elseif(session('modal_type')[0] == 'success_email')
            @dd(session('modal_type')[0])
        @endif
{{--        @dd(session('modal_type')[0]);--}}
    @endif
    {{--    End Modal checking--}}
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
