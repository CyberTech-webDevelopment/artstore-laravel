@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/bestseller.css') }}">
@endsection
@section('content')
    <div class="container" id="current-category-page">

        @include('category-page-content')

    </div>

@endsection
@section('scripts')
    {{-- <script src="{{ asset('assets/{{ asset('assets/js/hot-offer.js') }}"></script> --}}
@endsection
