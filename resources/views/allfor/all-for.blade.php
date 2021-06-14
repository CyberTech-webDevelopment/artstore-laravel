@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/all-for.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/carousel-all-for/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/carousel-all-for/style.css') }}">
@endsection
@section('content')

    <div class="container >">
        <div class="back-home pt-2">
            Homepage &gt; <span class='top-und'>Blog</span>
        </div>
        <div class="d-flex first-flex">
            <div class="grad">
                <img class="gradimg" src="{{ asset('assets/images/all-for/all-for-text.png') }}" alt="">
                <p class="gradtext">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                </p>
            </div>
            <!-- Slide -->
            <div class="slideshow-container">
                <div class="m-sl">
                    <img class='slidesimg' src="{{ asset('assets/images/all-for/all-for1.png') }}" alt="">
                </div>
                <div class="m-sl">
                    <img class='slidesimg' src="{{ asset('assets/images/all-for/all-for2.png') }}" alt="">
                </div>
                <div class="m-sl">
                    <img class='slidesimg' src="{{ asset('assets/images/all-for/all-for3.png') }}" alt="">
                </div>
                <div class="m-sl">
                    <img class='slidesimg' src="{{ asset('assets/images/all-for/all-for4.png') }}" alt="">
                </div>
                <div class="m-sl">
                    <img class='slidesimg' src="{{ asset('assets/images/all-for/all-for5.png') }}" alt="">
                </div>
                <div class='dots'>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
        </div>
        <div class="d-flex bord-flex justify-content-between">
            <div class="border-bot"></div>
            <div class="caps abs">New</div>
            <div class="border-bot"></div>
        </div>
        <div class="d-flex bord-flex2 justify-content-between">
            <div class="border-bot2"></div>
            <div class="border-bot2"></div>
        </div>
        <!-- Carousel -->

        @include('allfor.carousel')
        <div class="d-flex bord-flex3">
            <div class="border-bot3"></div>
        </div>
        <!-- Flex part -->
        <div class="d-flex bigflex flex-wrap">
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex1.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex2.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex3.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex4.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex1.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex1.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex2.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex3.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex4.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex1.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex1.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex2.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex3.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex4.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex1.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex1.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex2.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex3.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex4.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex1.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex1.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex2.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex3.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex4.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="bigflex-item">
                <div class="item-inner">
                    <div class='rel-hov'>
                        <img src="{{ asset('assets/images/all-for/imgflex1.png') }}" alt="" class='img-main'>
                        <div class="abs-center">
                            <img src="{{ asset('assets/icons/vector-search-wh.png') }}" alt="" class='abs-width'>
                            <img src="{{ asset('assets/icons/vector-heart-wh.png') }}" alt="" class='abs-width abs-left'>
                        </div>

                    </div>
                    <div class="img-add">
                        <div class='bold-hov1'>Handmade Name</div>
                        <div class='hov-owner1'>Product-owner-Name</div>
                        <div class='hov-stars1'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='width:15px; display:inline;'>
                            <span class='num-stars1'>(48)</span>
                            <div class='cart'>
                                <span class='bold-hov1'>120$</span>
                                <span class="addToCart1">Add to Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        <!-- ---------------------pagination------------ -->
        <div class="col-md-12 pb-2 pt-5 mb-5 pagination-cont">
            <nav>
                <ul class="pagination">
                    <li class="page-item prev">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class=" page-link" href="">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>

                    <li class="page-item next">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

@endsection
@section('scripts')
     <script src="{{ asset('assets/js/carousel-all-for/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('assets/js/carousel-all-for/main.js') }}"></script>
     <script src="{{ asset('assets/js/carousel-all-for/all-for.js') }}"></script>
@endsection
