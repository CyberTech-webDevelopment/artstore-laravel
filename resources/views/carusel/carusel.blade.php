<!-- ======= Carusel ======= -->
<section id="testimonials" class=" ">
    <div class="container-fluid">
        <div class="row">

            <div class="container-carusel index-carousel">
                <h3 class="text-center "
                    style="font-family:'Aniyah Personal Use Regular';font-weight:normal;font-size:42px">Welcome</h3>
                <p class="text-center p">We sell only handmade products. Here you can find whatever you need, or sell
                    your unique handmade works.</p>
                @if (isset($stores) && count($stores) <= 4)
                    <div class="col-12 col-md-12 col-sm-12 col-lg-12 d-flex stores_min_count">
                        @foreach ($stores as $store)


                            <div class="testimonial-item_min">
                                <div class="row-d">
                                    <div class="collect-card carusel-card">
                                        <div class="img-card">
                                            <div class="transparent-div_min ">
                                                <div class=" d-flex bd-highlight_min">
                                                    <div class="row-icon-div align-self-center bd-highlight">
                                                        <div
                                                            class="text-capitalize text-center text-strong">{{ $store->name }}</div>
                                                        <div class="d-flex"><img class="m-auto"
                                                                                 src="{{ asset('assets/icons/vector-heart-wh.png') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <img src="/storage/store_logo/{{ $store->logo }}">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        @endforeach
                    </div>
                @else
                    @if(isset($stores))
                        <div class="owl-carousel testimonials-carousel" id="owl-carousel">
                            @foreach ($stores as $store)

                                <div class="testimonial-item">
                                    <div class="row-d">
                                        <div class="collect-card carusel-card">
                                            <div class="img-card">
                                                <div class="transparent-div">
                                                    <div class=" d-flex bd-highlight">
                                                        <div class="row-icon-div align-self-center bd-highlight">
                                                            <div
                                                                class="text-capitalize text-center text-strong">{{ $store->name }}</div>
                                                            <div><img class="m-auto"
                                                                      src="{{ asset('assets/icons/vector-heart-wh.png') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <img src="/storage/store_logo/{{ $store->logo }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            @endforeach

                        </div>
                    @endif
                @endif
            </div>
        </div>

    </div>
</section>
