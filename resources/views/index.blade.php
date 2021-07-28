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


@endsection
