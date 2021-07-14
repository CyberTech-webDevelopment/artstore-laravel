@php

    $arr_lng=array('am', 'ru', 'en');

    $locale=app()->getLocale();

@endphp

<section class="nav-group">
    <section class="header">
        <div class="container-fluid">
            <div class="row">
                <div class=" align-self-stretch  align-items-stretch col-md-2 logo"><a
                        href="{{ route('index', $locale) }}"><img
                            src="{{asset('assets\images\logo.png')}}"></a></div>
                </a>
                <div class="align-self-end col-md-7">
                    <div class="input-group mb-4">
                        <input type="text" class="form-control"
                               aria-label="Dollar amount (with dot and two decimal places)" id="search">
                        <div class="input-group-append">

                            <span class="input-group-text" id="icon-search">
                            	<img src="{{asset('assets\icons\vector-search.png')}}">
                            </span>
                            <span class="input-group-text" id="icon-camera">
                            	<img src="{{asset('assets\icons\vector-camera.png')}}">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="align-self-end col-md-3">
                    <div class="d-flex hrader-left">
                        <div class="flex-fill orange">@lang('nav.nav.artstore')</div>
                        <div class="flex-fill">@lang('nav.nav.about')</div>
                        <div class="flex-fill">@lang('nav.nav.contact')</div>
                        <div class="flex-fill">@lang('nav.nav.help')</div>
                        <div class="flex-fill ">
                            <div class="flags-nav">
                                @php


                                    @endphp
                                <img src="{{asset('assets\images\flags/' .$locale.'.png')}}"
                                     class='flg-nav-img active-nav-lng'>
                                <div class='hide hide-flags'>
                                    {{--                                    @php--}}



                                    {{--                                    @endphp--}}
                                    @foreach ($arr_lng as $value)
                                        @if ($value!=$locale)
                                            {{--  route(Route::currentRouteName(),[ 'locale' => $value, 'slug' => Route::current()->parameters()['slug']])    its working variant and working variant to add ? in parametr web fail   --}}
                                            <a href={{ URL::toRoute($cur = Route::current(), ['locale' => $value] + $cur->parameters(), true)}}><img
                                                    src="{{asset('assets\images\flags/'. $value.'.png')}}"
                                                    class='flg-nav-img mt-1'></a>
                                            <br>
                                        @endif
                                    @endforeach


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class='d-flex d-flex justify-content-center align-self-end mb-4 mt-4 icons '>
                        <div class="btn-group">

                            @if (Auth::check())
                                <button type="button" class="btn dropdown-toggle text-strong" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    @lang('nav.nav.login')
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item text-strong" href="#"></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">@lang('nav.nav.message')</a>
                                    <a class="dropdown-item" href="#">@lang('nav.nav.purchas')</a>
                                    <a class="dropdown-item"
                                       href="{{ route('account',app()->getLocale()) }}">@lang('nav.nav.account_setting')</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item header_logo_menu"
                                       href="{{ route('logout',app()->getLocale()) }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        @lang('nav.nav.sign_out')
                                    </a>
                                    <form id="logout-form" action="{{ route('logout',app()->getLocale()) }}"
                                          method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                    {{--                                        <a class="dropdown-item sign-out" href="{{ route('logout') }}">Sign Out</a>--}}
                                </div>

                            @else
                                <button id="nav-sign-in" type="button" class="btn" data-toggle="modal"
                                        data-target="#signIn">
                                    <img src="{{asset('assets\icons\vector.png')}}">
                                </button>

                            @endif

                        </div>
                        <div class="btn-group ">
                            <button type="button" class="btn">
                                <img src="{{asset('assets\icons\vector-heart.png')}}">
                            </button>
                            <div>12</div>
                        </div>
                        <div class="btn-group">
                            @if(Auth::check())
                                <a href="{{ route('basket',app()->getLocale()) }}" type="button"
                                   class="btn basket_site">
                                    <img src="{{asset('assets\icons\vector-cart.png')}}">
                                </a>
                            @else
                                <a data-toggle="modal" data-target="#signUp" data-dismiss="modal" aria-label="Close"
                                   type="button"
                                   class="btn basket_site">
                                    <img src="{{asset('assets\icons\vector-cart.png')}}">
                                </a>
                            @endif
                            {{--                            @dd(Basket::user_basket_count())--}}
                            <div class="basket_count">{{ Basket::user_basket_count() }}</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('nav.nav_menu')
</section>
<section id="hidden">
    <div class="row h-100">
        <div class="w-100 h-100 back-hidden"></div>
    </div>
</section>


