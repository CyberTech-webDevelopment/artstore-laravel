@extends('layouts.app')
@section('style')
     <link rel="stylesheet" href="{{ asset('assets/css/bestseller.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="back-home pt-2">
            Homepage &gt; <span class='top-und'>Hot Offer</span>
        </div>

        <div class="subs-caption"><div class="caps">bestseller</div></div>
    <!--Top Flex part -->
    <div class="top-flex d-flex justify-content-between flex-wrap">
        <div class='topflex-absolute-background'>

        </div>
        <div class="topflex-item">
            <img src="{{ asset('assets/images/all-for/all-for2.png') }}" alt="" class='topfles-image'>
            <img src="{{ asset('assets/images/all-for/bestseller 1.svg') }}" alt="" class='best-icon-abs'>
        </div>
        <div class="topflex-item">
            <img src="{{ asset('assets/images/all-for/all-for2.png') }}" alt="" class='topfles-image'>
            <img src="{{ asset('assets/images/all-for/bestseller 1.svg') }}" alt="" class='best-icon-abs'>
        </div>
        <div class="topflex-item">
            <img src="{{ asset('assets/images/all-for/all-for2.png') }}" alt="" class='topfles-image'>
            <img src="{{ asset('assets/images/all-for/bestseller 1.svg') }}" alt="" class='best-icon-abs'>
        </div>
        <div class="topflex-item">
            <img src="{{ asset('assets/images/all-for/all-for2.png') }}" alt="" class='topfles-image'>
            <img src="{{ asset('assets/images/all-for/bestseller 1.svg') }}" alt="" class='best-icon-abs'>
        </div>
        <div class="topflex-item">
            <img src="{{ asset('assets/images/all-for/all-for2.png') }}" alt="" class='topfles-image'>
            <img src="{{ asset('assets/images/all-for/bestseller 1.svg') }}" alt="" class='best-icon-abs'>
        </div>
        <div class="topflex-item">
            <img src="{{ asset('assets/images/all-for/all-for2.png') }}" alt="" class='topfles-image'>
            <img src="{{ asset('assets/images/all-for/bestseller 1.svg') }}" alt="" class='best-icon-abs'>
        </div>
        <div class="topflex-item">
            <img src="{{ asset('assets/images/all-for/all-for2.png') }}" alt="" class='topfles-image'>
            <img src="{{ asset('assets/images/all-for/bestseller 1.svg') }}" alt="" class='best-icon-abs'>
        </div>
        <div class="topflex-item">
            <img src="{{ asset('assets/images/all-for/all-for2.png') }}" alt="" class='topfles-image'>
            <img src="{{ asset('assets/images/all-for/bestseller 1.svg') }}" alt="" class='best-icon-abs'>
        </div>
        <div class="topflex-item">
            <img src="{{ asset('assets/images/all-for/all-for2.png') }}" alt="" class='topfles-image'>
            <img src="{{ asset('assets/images/all-for/bestseller 1.svg') }}" alt="" class='best-icon-abs'>
        </div>
        <div class="topflex-item">
            <img src="{{ asset('assets/images/all-for/all-for2.png') }}" alt="" class='topfles-image'>
            <img src="{{ asset('assets/images/all-for/bestseller 1.svg') }}" alt="" class='best-icon-abs'>
        </div>

    </div>
    <!-- sort by -->
    <div class="sortby mb-5 pb-5">
        <div class="abs-sortby">
         <div class="sortby-text mr-2">Sort by</div>
         <div class="sortby-select">
             <div class='abs-checked none'><i class="fas fa-check-circle"></i></div>
            <select class="select-sortby">
                <option value='Highest Price'>Highest Price</option>
                <option value='Lowest Price'>Lowest Price</option>
                <option value='Most Recent'>Most Recent</option>
                <option value='A to Z'>A to Z </option>
                <option value='Z to A' selected>Z to A</option>
                <option value='Rating'>Rating</option>
            </select>
         </div>

        </div>
    </div>
    <script>
        $('.select-sortby').on('click', function() {
            var selval = $(this).val();
            $('.abs-checked').toggleClass("none");

            if(selval=='Highest Price'){
                $('.abs-checked').css('top', '12px');

            }


        });




    </script>


    <!--Main Flex part -->

        <div class="main-flex d-flex justify-content-between mt-3">
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
    {{-- <script src="{{ asset('assets/{{ asset('assets/js/hot-offer.js') }}"></script> --}}
@endsection
