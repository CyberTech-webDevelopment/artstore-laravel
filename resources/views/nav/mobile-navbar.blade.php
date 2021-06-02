@php

    $arr_lng=array('am', 'ru', 'en');

    $locale=app()->getLocale();

@endphp
<section class="w-100 mobile-navbar">

    <nav class="navbar ">
        <div class="d-flex align-items-center fixt-top w-100 justify-content-around pl-1 pr-1">
            <div class="w-25 text-center d-flex">
                <button class="navbar-toggler pl-0" type="button" data-toggle="collapse"
                        data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <img src="{{asset('assets/icons/mobile-navbar-icon.png')}}">
                </button>
            </div>
            <div class="w-50 text-center"><img src="{{asset('assets/images/logo.png')}}" class="logo"></div>
            <div class="d-flex align-items-center w-25 justify-content-between mobile-right-div">
                <div class="w-25">
                    <button id="nav-sign-in" type="button" class="btn pl-0 pr-0 pb-0 pt-0" data-toggle="modal"
                            data-target="#signIn">
                        <img src="{{asset('assets/icons/vector.png')}}">
                    </button>
                </div>
                <div class="w-25">
                    <div class="mobile-favorites-point text-strong">12</div>
                    <img src="{{asset('assets/icons/vector.png')}}">
                </div>
                <div class="w-25">
                    <div class="mobile-cart-point text-strong">12</div>
                    <img src="{{asset('assets/icons/vector-cart.png')}}">
                </div>
            </div>
        </div>
    </nav>

    <div class="collapse mobile-collapse" id="navbarToggleExternalContent">
        <div class="p-4">

            <div class="input-group mb-4 mobile-input-group">
                <input type="text" class="form-control" aria-label="" id="search">
                <div class="input-group-append">
                     <span class="input-group-text pl-1 pr-1" id="icon-search">
                         <img src="{{asset('assets/icons/vector-search.png')}}" class="w-75">
                     </span>
                    <span class="input-group-text pl-1 pr-1" id="icon-camera">
                          <img src="{{asset('assets/icons/vector-camera.png')}}" class="w-75">
                     </span>
                </div>
            </div>
            <div class="">
                <div class="list-group list-group-horizontal" id="list-tab-mob" role="tablist">
                    <a class="list-group-item list-group-item-action active w-50 pt-2 pb-2" id="list-mobile-home-list"
                       data-toggle="list" href="#list-mobile-home" role="tab" aria-controls="home">Homepage</a>
                    <a class="list-group-item list-group-item-action w-50 pt-2 pb-2" id="list-mobile-nav-list"
                       data-toggle="list" href="#list-mobile-nav" role="tab" aria-controls="profile">Categories</a>
                </div>
                <div class="tab-content" id="nav-tabContent-mob">
                    <div class="tab-pane fade show active" id="list-mobile-home" role="tabpanel"
                         aria-labelledby="list-mobile-home-list">
                        <div class="w-100 text-strong pt-3 pb-3 border-bot">@lang('nav.nav.artstore')</div>
                        <div class="w-100 text-strong pt-3 pb-3 border-bot">@lang('nav.nav.about')</div>
                        <div class="w-100 text-strong pt-3 pb-3 border-bot">@lang('nav.nav.contact')</div>
                        <div class="w-100 text-strong pt-3 pb-3 border-bot">@lang('nav.nav.help')</div>
                        <div class="w-100  pt-3 pb-3 border-bot">
                            <!-- <div class="flags-mob">
                           <img src="images/flags/en.png" class='flg-img active-lng'>

                                  <div class="hide hide-flags">
                             <img src="images/flags/am.png" class="flg-img"><br>
                             <img src="images/flags/ru.png" class="flg-img">
                           </div>
                       </div> -->
                            <div class="flags-nav-mobile">

                                <img src='{{asset('assets\images\flags/' .$locale.'.png')}}'
                                     class='flg-nav-img active-nav-lng'>

                                <div class='hide hide-flags'>
                                    @foreach($arr_lng as $value)
                                        @if($value!=$locale)
                                            <a href={{ url($value) }}>
                                                <img src='{{asset('assets\images\flags/'. $value.'.png')}}'
                                                     class='flg-nav-img mt-1'>
                                            </a>
                                            <br>
                                        @endif
                                    @endforeach
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-mobile-nav" role="tabpanel"
                         aria-labelledby="list-mobile-nav-list">

                        @foreach($menu as $elem)
                            <div class="dropdown mobile-nav ">
                                <div
                                    class="dropdown-item dropdown-first-item text-strong d-flex justify-content-between pl-0 pr-3 pb-0 pt-0">
                                    <div
                                        class="w-100 pt-2 pb-2 mr-3 border-bot-right">{{ $elem['menu_name_' . app()->getLocale()] }}</div>
                                    <div class="pt-2"><i class="fa fa-angle-right"></i></div>
                                </div>
                                <div class="w-100 dropdown-menu hide menu-first-item pt-0 pb-0">

                                    @foreach($elem->sub_menues as $sub_el)
                                        <div class="dropdown-item pl-0 pt-0 pb-0 pr-rem">
                                            <div
                                                class="dropdown-item dropdown-second-item text-strong d-flex justify-content-between pt-2 pb-2 pl-3 pr-1">
                                                <div>{{ $sub_el['sub_menu_name_' . app()->getLocale()] }}</div>
                                                <div><i class="fa fa-angle-right"></i></div>
                                            </div>
                                            <div class="w-100 dropdown-menu hide menu-second-item">
                                                @foreach($sub_el->sub_categories as $sub_cat)
                                                    <div
                                                        class="dropdown-item">{{$sub_cat['name_category_' . app()->getLocale()]}}
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                    @endforeach


                    <!-- ---------------------important---------------------------- -->
                        <div class="dropdown-item "></div>

                    </div>
                </div>
            </div>

            <!-- <div></div> -->

        </div>
    </div>
</section>
