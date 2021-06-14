@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/about-us1.css') }}">
@endsection
@section('content')

<div class="container >">
    <div class="caps">about us</div>
    <div class="main">
        <div class="d-flex justify-content-between main-flex">
            <div class="m-img">
                <img src="{{ asset('assets/images/about.png') }}" alt="about">

                <div class="about-absolute">
                    <div class="abs-image">
                        <img src="{{ asset('assets/images/Welcome.png') }}" alt="">
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
            <div class="check-two">
                <div class="checked color1 d-flex">
                    <div class='circle1'><img src="{{ asset('assets/icons/bi_check.png') }}" alt=""></div>
                    <div class='check-text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                </div>
                <div class="checked color2 d-flex">
                    <div class='circle2'><img src="{{ asset('assets/icons/bi_check.png') }}" alt=""></div>
                    <div class='check-text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                </div>
                <div class="checked color1 d-flex">
                    <div class='circle1'><img src="{{ asset('assets/icons/bi_check.png') }}" alt=""></div>
                    <div class='check-text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                </div>
                <div class="checked color2 d-flex">
                    <div class='circle2'><img src="{{ asset('assets/icons/bi_check.png') }}" alt=""></div>
                    <div class='check-text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                </div>
                <div class="checked color1 d-flex">
                    <div class='circle1'><img src="{{ asset('assets/icons/bi_check.png') }}" alt=""></div>
                    <div class='check-text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                </div>
                <div class="checked color2 d-flex">
                    <div class='circle2'><img src="{{ asset('assets/icons/bi_check.png') }}" alt=""></div>
                    <div class='check-text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                </div>

            </div>
        </div>
    </div>

@endsection
