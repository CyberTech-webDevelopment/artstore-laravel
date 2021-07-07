<!-- ======= Carusel ======= -->
<section id="testimonials" class=" ">
    <div class="container-fluid">
      <div class="row">

         <div class="container-carusel index-carousel">
              <h3 class="text-center " style="font-family:'Aniyah Personal Use Regular';font-weight:normal;font-size:42px">Welcome</h3>
              <p class="text-center p">We sell only handmade products. Here you can find whatever you need, or sell your unique handmade works.</p>
              @if (count($stores) <= 5)
              @foreach ($stores as $store)


              <div class="testimonial-item">
                  <div class="row-d" >
                      <div class="collect-card carusel-card">
                          <div class="img-card">
                               <div class="transparent-div">
                                    <div class=" d-flex bd-highlight">
                                      <div class="row-icon-div align-self-center bd-highlight">
                                        <div class="text-capitalize text-center text-strong">{{ $store->name }}</div>
                                        <div ><img class="m-auto" src="{{ asset('assets/icons/vector-heart-wh.png') }}"></div>
                                      </div>
                                    </div>
                               </div>
                               <img src="/storage/store_logo/{{ $store->logo }}">
                          </div>
                       </div>
                  </div>
               </div>


              @endforeach
              @else
              <div class="owl-carousel testimonials-carousel" id="owl-carousel">
                  @foreach ($stores as $store)

                  <div class="testimonial-item">
                    <div class="row-d" >
                        <div class="collect-card carusel-card">
                            <div class="img-card">
                                 <div class="transparent-div">
                                      <div class=" d-flex bd-highlight">
                                        <div class="row-icon-div align-self-center bd-highlight">
                                          <div class="text-capitalize text-center text-strong">{{ $store->name }}</div>
                                          <div ><img class="m-auto" src="{{ asset('assets/icons/vector-heart-wh.png') }}"></div>
                                        </div>
                                      </div>
                                 </div>
                                 <img src="/storage/store_logo/{{ $store->logo }}">
                            </div>
                         </div>
                    </div>
                </div>


                  @endforeach

                  {{-- <div class="testimonial-item">
                      <div class="row-d" >
                          <div class="collect-card carusel-card">
                            <div class="img-card">
                              <div class="transparent-div">
                                        <div class=" d-flex bd-highlight">
                                          <div class="row-icon-div align-self-center bd-highlight">
                                            <div class="text-capitalize text-center text-strong">toys</div>
                                            <div ><img class="m-auto " src="{{ asset('assets/icons/vector-heart-wh.png') }}"></div>
                                          </div>
                                        </div>
                                </div>
                                <img src="{{ asset('assets/images/carusel/foto-phanatic.png') }}">
                            </div>
                          </div>
                      </div>
                  </div>

                 <div class="testimonial-item">
                      <div class="row-d" >
                        <div class="collect-card carusel-card">
                             <div class="img-card">
                              <div class="transparent-div">
                                        <div class=" d-flex bd-highlight">
                                          <div class="row-icon-div align-self-center bd-highlight">
                                            <div class="text-capitalize text-center text-strong">for home</div>
                                            <div ><img class="m-auto " src="{{ asset('assets/icons/vector-heart-wh.png') }}"></div>
                                          </div>
                                        </div>
                                   </div>
                                 <img src="{{ asset('assets/images/carusel/freestocks.png') }}">
                             </div>
                        </div>
                      </div>
                  </div>

                 <div class="testimonial-item">
                       <div class="row-d" >
                           <div class="collect-card carusel-card">
                               <div class="img-card">
                                <div class="transparent-div">
                                        <div class=" d-flex bd-highlight">
                                          <div class="row-icon-div align-self-center bd-highlight">
                                            <div class="text-capitalize text-center text-strong">vintage</div>
                                            <div ><img class="m-auto " src="{{ asset('assets/icons/vector-heart-wh.png') }}"></div>
                                          </div>
                                        </div>
                                   </div>
                                  <img src="{{ asset('assets/images/carusel/jason-blackeye.png') }}">
                              </div>
                           </div>
                       </div>
                </div>
                <div class="testimonial-item">
                      <div class="row-d" >
                           <div class="collect-card carusel-card">
                                <div class="img-card">
                                  <div class="transparent-div">
                                        <div class=" d-flex bd-highlight">
                                          <div class="row-icon-div align-self-center bd-highlight">
                                            <div class="text-capitalize text-center text-strong">food</div>
                                            <div ><img class="m-auto " src="{{ asset('assets/icons/vector-heart-wh.png') }}"></div>
                                          </div>
                                        </div>
                                   </div>
                                    <img src="{{ asset('assets/images/carusel/luke-lung.png') }}">
                                </div>
                          </div>
                      </div>
                </div>
                <div class="testimonial-item">
                      <div class="row-d" >
                           <div class="collect-card carusel-card">
                               <div class="img-card">
                                <div class="transparent-div">
                                        <div class=" d-flex bd-highlight">
                                          <div class="row-icon-div align-self-center bd-highlight">
                                            <div class="text-capitalize text-center text-strong">for garden</div>
                                            <div ><img class="m-auto " src="{{ asset('assets/icons/vector-heart-wh.png') }}"></div>
                                          </div>
                                        </div>
                                   </div>
                                   <img src="{{ asset('assets/images/carusel/maria-ilves.png') }}">
                               </div>
                           </div>
                      </div>
                </div> --}}
         </div>
         @endif
      </div>
    </div>

  </div>
</section>
