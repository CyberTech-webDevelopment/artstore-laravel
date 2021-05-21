@extends('layouts.app')

@section('style')
    <!--====== Index Styles ======-->
    <link rel="stylesheet" href="{{asset('assets\css\carusel\owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets\css\carusel\style.css')}}">
    <link rel="stylesheet" href="{{asset('assets\css\sections.css')}}">
    <link rel="stylesheet" href="{{asset('assets\css\carusel-vertical\carusel-vertical.css')}}">

    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

{{-- @dd(Auth::user()); --}}
@section('content')
    {{--    <div class="container">--}}
    {{--        <div class="row justify-content-center">--}}
    {{--            <div class="col-md-8">--}}
    {{--                <div class="card">--}}
    {{--                    <div class="card-header">{{ __('Dashboard') }}</div>--}}

    {{--                    <div class="card-body">--}}
    {{--                        @if (session('status'))--}}
    {{--                            <div class="alert alert-success" role="alert">--}}
    {{--                                {{ session('status') }}--}}
    {{--                            </div>--}}
    {{--                        @endif--}}

    {{--                        {{ __('You are logged in!') }}--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
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
