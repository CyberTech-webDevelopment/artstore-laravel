<section class="sections">
    {{-- @dd($new_arrivals) --}}
    <div class="container-fluid" id="new-arrivals">
        <div class="row">

            <div class="col-md-3 left-div">
                <div class="img-div d-flex align-items-center justify-content-center">
                    <div class="new-2020">
                        <p>2020</p>
                        <p class=" text-capitalize sml-caps">new arrivals</p>
                    </div>
                    <img src="{{ asset('assets/images/anastasia.png') }}">
                </div>
            </div>

            <div class="col-lg-9 col-md-12 col-sm-12 right-div pr-0">
                <div class="w-100 d-flex sec-title bd-highlight">
                    <h3 class="text-capitalize sml-caps pr-2 pl-0 bd-highlight">new arrivals</h3>
                    <div class="pr-0 pt-2 flex-grow-1 bd-highlight"><hr width="100%" color='#6d4017'></div>
                </div>
                        <div class="row pr-0 pl-4 mr-0 pt-3">
                            @if (isset($new_arrivals))
                                @foreach ($new_arrivals as $elem)

                                <div class="col-6 col-xl-3 col-lg-3 col-md-6 col-sm-2 col-xs-2 br-1 right-div-item">
                                    <div>
                                       <div>
                                       <div class="transparent-bg-div d-flex" >
                                           <!-- <img src="images/andrijana1.png" class="img-fluid ps-abs-image"> -->
                                           <div class="pordz" style='background: url("/storage/product/{{$elem->product_head_images()}}"); background-size: cover'></div>
                                           <div class="icon-new-arrival ">
                                               <img src="{{ asset('assets/icons/icon-new-arrival.png') }}">
                                           </div>
                                           <div class="row pl-0 pr-0 hover-icons d-flex align-items-center bd-highlight">
                                               <div class="w-100 div-icons d-flex justify-content-center align-self-center bd-highlight">
                                                       <span class=""><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></span>
                                                       <span class="ml-3 "><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></span>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="description">
                                       <a href="{{ route('product',[ 'locale' => app()->getLocale(), 'slug' => $elem['slug_'. app()->getLocale()]]) }}" class="product_name_inhead"><p class="mb-0 mt-1">{{ str_cut($elem['name_'. app()->getLocale()],15) }}</p></a>

                                       <p class="mb-1">{{ $elem->product_author()->name }}</p>
                                           <div>
                                               <span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
                                               <span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
                                               <span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
                                               <span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
                                               <span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
                                          <span class="point">(48)</span>
                                           </div>
                                           <div class="d-flex flex-wrap justify-content-between mt-2">
                                          @if ($elem->percent == null)

                                            <div class="price">{{ $elem->price }}</div>

                                          @else

                                            <del class="price">{{ $elem->price }}</del>
                                            <div class="discount_price">{{ $elem->discounted_price() }}</div>


                                          @endif
                                             <div class="add-cart mr-2">Add to cart</div>
                                           </div>

                                   </div>
                                </div>
                               </div>

                                @endforeach


                            @endif


                        {{-- <div class="col-6 col-xl-3 col-lg-3 col-md-6 col-sm-2 col-xs-2 br-1 right-div-item">
                            <div >
                                <div class="transparent-bg-div d-flex" >
                                    <div class="pordz" style='background: url({{ asset('assets/images/andrijana2.png') }}); background-size: cover'></div>
                                    <!-- <img src="images/andrijana2.png" class="ps-abs-image"> -->
                                    <div class="icon-new-arrival">
                                        <img src="{{ asset('assets/icons/icon-new-arrival.png') }}">
                                    </div>
                                    <div class="row pl-0 pr-0 hover-icons d-flex align-items-center bd-highlight">
                                        <div class="w-100 div-icons d-flex justify-content-center align-self-center bd-highlight">
                                                <span class=""><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></span>
                                                <span class="ml-3 "><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></span>
                                        </div>
                                    </div>
                                </div>
                            <div class="description">
                                   <p class="mb-0 mt-1">Handmade Name</p>
                                   <p class="mb-1">Product owner name</p>
                                    <div>
                                        <span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
                                        <span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
                                        <span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
                                        <span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
                                        <span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
                                   <span class="point">(48)</span>
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-between mt-2">
                                   <div class="price">$120</div>
                                        <div class="add-cart mr-2">Add to cart</div>
                                    </div>
                            </div>
                        </div>
                        </div> --}}
                        {{-- <div class="col-6 col-xl-3 col-lg-3 col-md-6 col-sm-2 col-xs-2 br-1 right-div-item">
                            <div >
                                <div class="transparent-bg-div d-flex" >
                                    <!-- <img src="images/andrijana3.png" class="ps-abs-image"> -->
                                    <div class="pordz" style='background: url({{ asset('assets/images/andrijana3.png') }}); background-size: cover'></div>
                                    <div class="icon-new-arrival">
                                        <img src="{{ asset('assets/icons/icon-new-arrival.png') }}">
                                    </div>
                                    <div class="row pl-0 pr-0 hover-icons d-flex align-items-center bd-highlight">
                                        <div class="w-100 div-icons d-flex justify-content-center align-self-center bd-highlight">
                                                <span class=""><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></span>
                                                <span class="ml-3 "><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></span>
                                        </div>
                                    </div>
                                </div>
                            <div class="description">
                                   <p class="mb-0 mt-1">Handmade Name</p>
                                   <p class="mb-1">Product owner name</p>
                                    <div>
                                        <span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
                                        <span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
                                        <span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
                                        <span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
                                        <span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
                                   <span class="point">(48)</span>
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-between mt-2">
                                   <div class="price">$120</div>
                                        <div class="add-cart mr-2">Add to cart</div>
                                    </div>
                            </div>
                        </div>
                        </div> --}}
                        {{-- <div class="col-6 col-xl-3 col-lg-3 col-md-6 col-sm-2 col-xs-2 br-1 right-div-item">
                            <div >
                                <div class="transparent-bg-div d-flex" >
                                    <!-- <img src="images/andrijana4.png" class="ps-abs-image"> -->
                                    <div class="pordz" style='background: url({{ asset('assets/images/andrijana4.png') }}); background-size: cover'></div>
                                    <div class="icon-new-arrival">
                                        <img src="{{ asset('assets/icons/icon-new-arrival.png') }}">
                                    </div>
                                    <div class="row pl-0 pr-0 hover-icons d-flex align-items-center bd-highlight">
                                        <div class="w-100 div-icons d-flex justify-content-center align-self-center bd-highlight">
                                                <span class=""><img src="{{ asset('assets/icons/vector-search-wh.png') }}"></span>
                                                <span class="ml-3 "><img src="{{ asset('assets/icons/vector-heart-wh.png') }}"></span>
                                        </div>
                                    </div>
                                </div>
                            <div class="description">
                                   <p class="mb-0 mt-1">Handmade Name</p>
                                   <p class="mb-1">Product owner name</p>
                                    <div>
                                        <span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
                                        <span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
                                        <span><img src="{{ asset('assets/icons/vector-star.png') }}"></span>
                                        <span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
                                        <span><img src="{{ asset('assets/icons/vector-star-tr.png') }}"></span>
                                   <span class="point">(48)</span>
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-between mt-2">
                                   <div class="price">$120</div>
                                        <div class="add-cart mr-2">Add to cart</div>
                                    </div>
                            </div>
                        </div>
                        </div> --}}
                </div>
                <div class="div-view-all">
                   <button class="view-all">View All</button>
                </div>
            </div>
            <div class="border-bottom"></div>
            </div>

        </div>
    </div>
</section>



