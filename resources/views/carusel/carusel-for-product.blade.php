<!-- ======= Carusel ======= -->
<section id="testimonials" class=" ">
    <div class="owl-carousel testimonials-carousel" id="owl-carousel">
{{--        <div class="testimonial-item">--}}
{{--            <div class="row-d">--}}
{{--                <div class="collect-card carusel-card">--}}
{{--                    <div class="img-card">--}}
{{--                        <img src="{{ asset('assets/images/carusel/ecopanda.png') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        {{--                  <div class="testimonial-item">--}}
        {{--                      <div class="row-d" >--}}
        {{--                          <div class="collect-card carusel-card">--}}
        {{--                            <div class="img-card">--}}
        {{--                                <img src="{{ asset('assets/images/carusel/foto-phanatic.png') }}">--}}
        {{--                            </div>--}}
        {{--                          </div>--}}
        {{--                      </div>--}}
        {{--                  </div>--}}

        {{--                 <div class="testimonial-item">--}}
        {{--                      <div class="row-d" >--}}
        {{--                        <div class="collect-card carusel-card">--}}
        {{--                             <div class="img-card">--}}
        {{--                                 <img src="{{ asset('assets/images/carusel/freestocks.png') }}">--}}
        {{--                             </div>--}}
        {{--                        </div>--}}
        {{--                      </div>--}}
        {{--                  </div>--}}

        {{--                 <div class="testimonial-item">--}}
        {{--                       <div class="row-d" >--}}
        {{--                           <div class="collect-card carusel-card">--}}
        {{--                               <div class="img-card">--}}
        {{--                                      <img src="{{ asset('assets/images/carusel/jason-blackeye.png') }}">--}}
        {{--                              </div>--}}
        {{--                           </div>--}}
        {{--                       </div>--}}
        {{--                </div>--}}
        {{--                <div class="testimonial-item">--}}
        {{--                      <div class="row-d" >--}}
        {{--                           <div class="collect-card carusel-card">--}}
        {{--                                <div class="img-card">--}}
        {{--                                    <img src="{{ asset('assets/images/carusel/luke-lung.png') }}">--}}
        {{--                                </div>--}}
        {{--                          </div>--}}
        {{--                      </div>--}}
        {{--                </div>--}}
        @foreach($cur_product->product_images() as $img)
            <div class="testimonial-item_cur">
                <div class="row-d">
                    <div class="collect-card carusel-card">
                        <div class="img-card">
                            <img src="/storage/product/{{$img->image}}" class="product_carusel_image">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</section>
