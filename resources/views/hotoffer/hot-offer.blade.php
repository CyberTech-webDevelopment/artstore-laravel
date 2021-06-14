@extends('layouts.app')
@section('style')
   <link rel="stylesheet" href="{{ asset('assets/css/hot-offer.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/carousel-all-for/owl.carousel.min.css') }}">
   <link rel="stylesheet" href="{{ asset('assets/css/carousel-all-for/style-hot-offer.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="back-home pt-2">
            Homepage &gt; <span class='top-und'>Hot Offer</span>
        </div>
        <div class="d-flex hotOfferCont">
            <img src="{{ asset('assets/images/all-for/hot 1.png') }}" alt="" class="abs-hot-offer">

            <div class="hotOfferItem hot-1">
                11:45:12
            </div>
            <div class="hotOfferItem hot-2">
                23:45:12
            </div>
        </div>
        <!-- Carousel -->
         @include('hotoffer.carousel-hot-offers')
        <!-- Subscribe -->
    </div>

    <div class="subscribe">
        <h3 class="subs-caption caps">subscribe for newsletter</h3>
        <div class="subs-div">

                <input type="text" name="email" placeholder="Your e-mail address" class="inp-email" id='enter-email'>
                <button class="but-submit" id='subscribe-email'>
                    Subscribe here <span class='mar-left'><i class="fas fa-arrow-right"></i><span>
                </button>
                <div id='result-message'>

                </div>

        </div>
    </div>
    <!-- Flex part -->
    <div class="container">
        <div class="main-flex d-flex justify-content-between">
            <div class="main-flex-item-color">
                <!-- should be completed -->
            </div>
            <div class="d-flex bigflex flex-wrap">
                <!-- item -->
                <div class="bigflex-item">
                    <div class="item-inner">
                        <img src="{{ asset('assets/images/all-for/hot 1.png') }}" alt="" class="item-img-hot">
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
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <span class='num-stars1'>(48)</span>
                                <div class='cart'>
                                    <span class='bold-hov2'>120$</span>
                                    <span class="addToCart1">Add to Cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="bigflex-item">
                    <div class="item-inner">
                        <img src="{{ asset('assets/images/all-for/hot 1.png') }}" alt="" class="item-img-hot">
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
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <span class='num-stars1'>(48)</span>
                                <div class='cart'>
                                    <span class='bold-hov2'>120$</span>
                                    <span class="addToCart1">Add to Cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="bigflex-item">
                    <div class="item-inner">
                        <img src="{{ asset('assets/images/all-for/hot 1.png') }}" alt="" class="item-img-hot">
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
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <span class='num-stars1'>(48)</span>
                                <div class='cart'>
                                    <span class='bold-hov2'>120$</span>
                                    <span class="addToCart1">Add to Cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="bigflex-item">
                    <div class="item-inner">
                        <img src="{{ asset('assets/images/all-for/hot 1.png') }}" alt="" class="item-img-hot">
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
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <span class='num-stars1'>(48)</span>
                                <div class='cart'>
                                    <span class='bold-hov2'>120$</span>
                                    <span class="addToCart1">Add to Cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="bigflex-item">
                    <div class="item-inner">
                        <img src="{{ asset('assets/images/all-for/hot 1.png') }}" alt="" class="item-img-hot">
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
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <span class='num-stars1'>(48)</span>
                                <div class='cart'>
                                    <span class='bold-hov2'>120$</span>
                                    <span class="addToCart1">Add to Cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="bigflex-item">
                    <div class="item-inner">
                        <img src="{{ asset('assets/images/all-for/hot 1.png') }}" alt="" class="item-img-hot">
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
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <span class='num-stars1'>(48)</span>
                                <div class='cart'>
                                    <span class='bold-hov2'>120$</span>
                                    <span class="addToCart1">Add to Cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="bigflex-item">
                    <div class="item-inner">
                        <img src="{{ asset('assets/images/all-for/hot 1.png') }}" alt="" class="item-img-hot">
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
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <span class='num-stars1'>(48)</span>
                                <div class='cart'>
                                    <span class='bold-hov2'>120$</span>
                                    <span class="addToCart1">Add to Cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="bigflex-item">
                    <div class="item-inner">
                        <img src="{{ asset('assets/images/all-for/hot 1.png') }}" alt="" class="item-img-hot">
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
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <span class='num-stars1'>(48)</span>
                                <div class='cart'>
                                    <span class='bold-hov2'>120$</span>
                                    <span class="addToCart1">Add to Cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="bigflex-item">
                    <div class="item-inner">
                        <img src="{{ asset('assets/images/all-for/hot 1.png') }}" alt="" class="item-img-hot">
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
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <span class='num-stars1'>(48)</span>
                                <div class='cart'>
                                    <span class='bold-hov2'>120$</span>
                                    <span class="addToCart1">Add to Cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="bigflex-item">
                    <div class="item-inner">
                        <img src="{{ asset('assets/images/all-for/hot 1.png') }}" alt="" class="item-img-hot">
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
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <span class='num-stars1'>(48)</span>
                                <div class='cart'>
                                    <span class='bold-hov2'>120$</span>
                                    <span class="addToCart1">Add to Cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="bigflex-item">
                    <div class="item-inner">
                        <img src="{{ asset('assets/images/all-for/hot 1.png') }}" alt="" class="item-img-hot">
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
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <span class='num-stars1'>(48)</span>
                                <div class='cart'>
                                    <span class='bold-hov2'>120$</span>
                                    <span class="addToCart1">Add to Cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="bigflex-item">
                    <div class="item-inner">
                        <img src="{{ asset('assets/images/all-for/hot 1.png') }}" alt="" class="item-img-hot">
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
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <img src="{{ asset('assets/icons/vector-star-tr.png') }}" alt="" style='display:inline;'>
                                <span class='num-stars1'>(48)</span>
                                <div class='cart'>
                                    <span class='bold-hov2'>120$</span>
                                    <span class="addToCart1">Add to Cart</span>
                                </div>
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
        <script src="{{ asset('assets/js/carousel-all-for/main-hot-offer.js') }}"></script>
        <script src="{{ asset('assets/js/hot-offer.js') }}"></script>
    @endsection

