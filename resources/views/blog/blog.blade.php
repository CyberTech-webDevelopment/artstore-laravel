@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/blog1.css') }}">
@endsection
@section('content')

<div class="container >">
    <div class="back-home pt-2">
        Homepage &gt; <span class='top-und'>Blog</span>
    </div>

    <div class="caps big-caps text-center mt-4 mb-3">artstore blog</div>
    <div class='bg-col'>
        <div class="inner">
            <div class="d-flex mb-3">
                <div class="pt-2 pb-1 flex-fill text-center bg-col caps small-caps flex-cat">category</div>
                <div class="pt-2 pb-1 flex-fill text-center bg-col caps small-caps flex-cat">category</div>
                <div class="pt-2 pb-1 flex-fill text-center bg-col caps small-caps flex-cat">category</div>
                <div class="pt-2 pb-1 flex-fill text-center bg-col caps small-caps flex-cat">category</div>
                <div class="pt-2 pb-1 flex-fill text-center bg-col caps small-caps flex-cat">category</div>

            </div>
        </div>
    </div>
    <div class="main-flex">
        <div class="d-flex justify-content-between flex-main">
            <div class="fl-item">
                <div class='cards cards-bigger'>
                    <div class="covering-div covering-div-bigger">
                        <div class="w-80">
                            <div class="caption-covering caps">Category name</div>
                            <div class="text-covering">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</div>
                            <button class="covering-button">Read More</button>
                            <div class="covering-last">Continue Shopping <img class='img-arrow' src="{{ asset('assets/icons/right-arrow.png') }}" alt=""></div>
                        </div>
                    </div>
                    <div class='divimg'>
                        <img src="{{ asset('assets/images/Mask-group.png') }}" alt="">
                    </div>
                    <div class='divtext mt-2 caps'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="d-flex divtext pt-4 pb-3">
                        <div class="comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/comments.png') }}" alt="" onmouseover="this.src='icons/comments-active.png') }}'" onmouseout="this.src='icons/comments.png') }}'"> Comments</div>
                        </div>
                        <div class=" ml-3 comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/favorites.png') }}" alt="" onmouseover="this.src='icons/favorites-active.png') }}'" onmouseout="this.src='icons/favorites.png') }}'"> Comments</div>
                        </div>
                        <div class="ml-3 comment-last">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/last-views1.png') }}" alt="" onmouseover="this.src='icons/last-views-active.png') }}'; this.classList.add('pa')" onmouseout="this.src='icons/last-views1.png') }}'"> Comments</div>
                        </div>
                    </div>
                </div>
                <div class='cards cards-smaller'>
                    <div class="covering-div">
                        <div class="w-80">
                            <div class="caption-covering1 caps"><span class="black">Category: </span>Category name</div>
                            <div class="text-covering">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</div>
                            <button class="covering-button">Read More</button>
                            <div class="covering-last1">Continue Shopping <img class='img-arrow' src="{{ asset('assets/icons/right-arrow.png') }}" alt=""></div>
                        </div>
                    </div>
                    <div class='divimg'>
                        <img src="{{ asset('assets/images/Mask-group1.png') }}" alt="">
                    </div>
                    <div class='divtext mt-2 caps'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="d-flex divtext pt-4 pb-3">
                        <div class="comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/comments.png') }}" alt="" onmouseover="this.src='icons/comments-active.png') }}'" onmouseout="this.src='icons/comments.png') }}'"> Comments</div>
                        </div>
                        <div class=" ml-3 comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/favorites.png') }}" alt="" onmouseover="this.src='icons/favorites-active.png') }}'" onmouseout="this.src='icons/favorites.png') }}'"> Comments</div>
                        </div>
                        <div class="ml-3 comment-last">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/last-views1.png') }}" alt="" onmouseover="this.src='icons/last-views-active.png') }}'; this.classList.add('pa')" onmouseout="this.src='icons/last-views1.png') }}'"> Comments</div>
                        </div>
                    </div>
                </div>
                <div class='cards cards-bigger'>
                    <div class="covering-div covering-div-bigger">
                        <div class="w-80">
                            <div class="caption-covering caps">Category name</div>
                            <div class="text-covering">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</div>
                            <button class="covering-button">Read More</button>
                            <div class="covering-last">Continue Shopping <img class='img-arrow' src="{{ asset('assets/icons/right-arrow.png') }}" alt=""></div>
                        </div>
                    </div>
                    <div class='divimg'>
                        <img src="{{ asset('assets/images/Mask-group.png') }}" alt="">
                    </div>
                    <div class='divtext mt-2 caps'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="d-flex divtext pt-4 pb-3">
                        <div class="comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/comments.png') }}" alt="" onmouseover="this.src='icons/comments-active.png') }}'" onmouseout="this.src='icons/comments.png') }}'"> Comments</div>
                        </div>
                        <div class=" ml-3 comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/favorites.png') }}" alt="" onmouseover="this.src='icons/favorites-active.png') }}'" onmouseout="this.src='icons/favorites.png') }}'"> Comments</div>
                        </div>
                        <div class="ml-3 comment-last">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/last-views1.png') }}" alt="" onmouseover="this.src='icons/last-views-active.png') }}'; this.classList.add('pa')" onmouseout="this.src='icons/last-views1.png') }}'"> Comments</div>
                        </div>
                    </div>
                </div>
                <div class='cards cards-smaller'>
                    <div class="covering-div">
                        <div class="w-80">
                            <div class="caption-covering1 caps"><span class="black">Category: </span>Category name</div>
                            <div class="text-covering">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</div>
                            <button class="covering-button">Read More</button>
                            <div class="covering-last1">Continue Shopping <img class='img-arrow' src="{{ asset('assets/icons/right-arrow.png') }}" alt=""></div>
                        </div>
                    </div>
                    <div class='divimg'>
                        <img src="{{ asset('assets/images/Mask-group1.png') }}" alt="">
                    </div>
                    <div class='divtext mt-2 caps'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="d-flex divtext pt-4 pb-3">
                        <div class="comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/comments.png') }}" alt="" onmouseover="this.src='icons/comments-active.png') }}'" onmouseout="this.src='icons/comments.png') }}'"> Comments</div>
                        </div>
                        <div class=" ml-3 comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/favorites.png') }}" alt="" onmouseover="this.src='icons/favorites-active.png') }}'" onmouseout="this.src='icons/favorites.png') }}'"> Comments</div>
                        </div>
                        <div class="ml-3 comment-last">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/last-views1.png') }}" alt="" onmouseover="this.src='icons/last-views-active.png') }}'; this.classList.add('pa')" onmouseout="this.src='icons/last-views1.png') }}'"> Comments</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="fl-item">
                <div class='cards cards-smaller'>
                    <div class="covering-div">
                        <div class="w-80">
                            <div class="caption-covering1 caps"><span class="black">Category: </span>Category name</div>
                            <div class="text-covering">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</div>
                            <button class="covering-button">Read More</button>
                            <div class="covering-last1">Continue Shopping <img class='img-arrow' src="{{ asset('assets/icons/right-arrow.png') }}" alt=""></div>
                        </div>
                    </div>
                    <div class='divimg'>
                        <img src="{{ asset('assets/images/Mask-group1.png') }}" alt="">
                    </div>
                    <div class='divtext mt-2 caps'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="d-flex divtext pt-4 pb-3">
                        <div class="comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/comments.png') }}" alt="" onmouseover="this.src='icons/comments-active.png') }}'" onmouseout="this.src='icons/comments.png') }}'"> Comments</div>
                        </div>
                        <div class=" ml-3 comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/favorites.png') }}" alt="" onmouseover="this.src='icons/favorites-active.png') }}'" onmouseout="this.src='icons/favorites.png') }}'"> Comments</div>
                        </div>
                        <div class="ml-3 comment-last">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/last-views1.png') }}" alt="" onmouseover="this.src='icons/last-views-active.png') }}'; this.classList.add('pa')" onmouseout="this.src='icons/last-views1.png') }}'"> Comments</div>
                        </div>
                    </div>
                </div>
                <div class='cards cards-bigger'>
                    <div class="covering-div covering-div-bigger">
                        <div class="w-80">
                            <div class="caption-covering caps">Category name</div>
                            <div class="text-covering">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</div>
                            <button class="covering-button">Read More</button>
                            <div class="covering-last">Continue Shopping <img class='img-arrow' src="{{ asset('assets/icons/right-arrow.png') }}" alt=""></div>
                        </div>
                    </div>
                    <div class='divimg'>
                        <img src="{{ asset('assets/images/Mask-group.png') }}" alt="">
                    </div>
                    <div class='divtext mt-2 caps'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="d-flex divtext pt-4 pb-3">
                        <div class="comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/comments.png') }}" alt="" onmouseover="this.src='icons/comments-active.png') }}'" onmouseout="this.src='icons/comments.png') }}'"> Comments</div>
                        </div>
                        <div class=" ml-3 comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/favorites.png') }}" alt="" onmouseover="this.src='icons/favorites-active.png') }}'" onmouseout="this.src='icons/favorites.png') }}'"> Comments</div>
                        </div>
                        <div class="ml-3 comment-last">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/last-views1.png') }}" alt="" onmouseover="this.src='icons/last-views-active.png') }}'; this.classList.add('pa')" onmouseout="this.src='icons/last-views1.png') }}'"> Comments</div>
                        </div>
                    </div>
                </div>
                <div class='cards cards-smaller'>
                    <div class="covering-div">
                        <div class="w-80">
                            <div class="caption-covering1 caps"><span class="black">Category: </span>Category name</div>
                            <div class="text-covering">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</div>
                            <button class="covering-button">Read More</button>
                            <div class="covering-last1">Continue Shopping <img class='img-arrow' src="{{ asset('assets/icons/right-arrow.png') }}" alt=""></div>
                        </div>
                    </div>
                    <div class='divimg'>
                        <img src="{{ asset('assets/images/Mask-group1.png') }}" alt="">
                    </div>
                    <div class='divtext mt-2 caps'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="d-flex divtext pt-4 pb-3">
                        <div class="comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/comments.png') }}" alt="" onmouseover="this.src='icons/comments-active.png') }}'" onmouseout="this.src='icons/comments.png') }}'"> Comments</div>
                        </div>
                        <div class=" ml-3 comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/favorites.png') }}" alt="" onmouseover="this.src='icons/favorites-active.png') }}'" onmouseout="this.src='icons/favorites.png') }}'"> Comments</div>
                        </div>
                        <div class="ml-3 comment-last">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/last-views1.png') }}" alt="" onmouseover="this.src='icons/last-views-active.png') }}'; this.classList.add('pa')" onmouseout="this.src='icons/last-views1.png') }}'"> Comments</div>
                        </div>
                    </div>
                </div>
                <div class='cards cards-bigger'>
                    <div class="covering-div covering-div-bigger">
                        <div class="w-80">
                            <div class="caption-covering caps">Category name</div>
                            <div class="text-covering">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</div>
                            <button class="covering-button">Read More</button>
                            <div class="covering-last">Continue Shopping <img class='img-arrow' src="{{ asset('assets/icons/right-arrow.png') }}" alt=""></div>
                        </div>
                    </div>
                    <div class='divimg'>
                        <img src="{{ asset('assets/images/Mask-group.png') }}" alt="">
                    </div>
                    <div class='divtext mt-2 caps'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="d-flex divtext pt-4 pb-3">
                        <div class="comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/comments.png') }}" alt="" onmouseover="this.src='icons/comments-active.png') }}'" onmouseout="this.src='icons/comments.png') }}'"> Comments</div>
                        </div>
                        <div class=" ml-3 comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/favorites.png') }}" alt="" onmouseover="this.src='icons/favorites-active.png') }}'" onmouseout="this.src='icons/favorites.png') }}'"> Comments</div>
                        </div>
                        <div class="ml-3 comment-last">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/last-views1.png') }}" alt="" onmouseover="this.src='icons/last-views-active.png') }}'; this.classList.add('pa')" onmouseout="this.src='icons/last-views1.png') }}'"> Comments</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fl-item">
                <div class='cards cards-bigger'>
                    <div class="covering-div covering-div-bigger">
                        <div class="w-80">
                            <div class="caption-covering caps">Category name</div>
                            <div class="text-covering">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</div>
                            <button class="covering-button">Read More</button>
                            <div class="covering-last">Continue Shopping <img class='img-arrow' src="{{ asset('assets/icons/right-arrow.png') }}" alt=""></div>
                        </div>
                    </div>
                    <div class='divimg'>
                        <img src="{{ asset('assets/images/Mask-group.png') }}" alt="">
                    </div>
                    <div class='divtext mt-2 caps'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="d-flex divtext pt-4 pb-3">
                        <div class="comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/comments.png') }}" alt="" onmouseover="this.src='icons/comments-active.png') }}'" onmouseout="this.src='icons/comments.png') }}'"> Comments</div>
                        </div>
                        <div class=" ml-3 comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/favorites.png') }}" alt="" onmouseover="this.src='icons/favorites-active.png') }}'" onmouseout="this.src='icons/favorites.png') }}'"> Comments</div>
                        </div>
                        <div class="ml-3 comment-last">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/last-views1.png') }}" alt="" onmouseover="this.src='icons/last-views-active.png') }}'; this.classList.add('pa')" onmouseout="this.src='icons/last-views1.png') }}'"> Comments</div>
                        </div>
                    </div>
                </div>
                <div class='cards cards-smaller'>
                    <div class="covering-div">
                        <div class="w-80">
                            <div class="caption-covering1 caps"><span class="black">Category: </span>Category name</div>
                            <div class="text-covering">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</div>
                            <button class="covering-button">Read More</button>
                            <div class="covering-last1">Continue Shopping <img class='img-arrow' src="{{ asset('assets/icons/right-arrow.png') }}" alt=""></div>
                        </div>
                    </div>
                    <div class='divimg'>
                        <img src="{{ asset('assets/images/Mask-group1.png') }}" alt="">
                    </div>
                    <div class='divtext mt-2 caps'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="d-flex divtext pt-4 pb-3">
                        <div class="comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/comments.png') }}" alt="" onmouseover="this.src='icons/comments-active.png') }}'" onmouseout="this.src='icons/comments.png') }}'"> Comments</div>
                        </div>
                        <div class=" ml-3 comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/favorites.png') }}" alt="" onmouseover="this.src='icons/favorites-active.png') }}'" onmouseout="this.src='icons/favorites.png') }}'"> Comments</div>
                        </div>
                        <div class="ml-3 comment-last">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/last-views1.png') }}" alt="" onmouseover="this.src='icons/last-views-active.png') }}'; this.classList.add('pa')" onmouseout="this.src='icons/last-views1.png') }}'"> Comments</div>
                        </div>
                    </div>
                </div>
                <div class='cards cards-bigger'>
                    <div class="covering-div covering-div-bigger">
                        <div class="w-80">
                            <div class="caption-covering caps">Category name</div>
                            <div class="text-covering">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</div>
                            <button class="covering-button">Read More</button>
                            <div class="covering-last">Continue Shopping <img class='img-arrow' src="{{ asset('assets/icons/right-arrow.png') }}" alt=""></div>
                        </div>
                    </div>
                    <div class='divimg'>
                        <img src="{{ asset('assets/images/Mask-group.png') }}" alt="">
                    </div>
                    <div class='divtext mt-2 caps'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="d-flex divtext pt-4 pb-3">
                        <div class="comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/comments.png') }}" alt="" onmouseover="this.src='icons/comments-active.png') }}'" onmouseout="this.src='icons/comments.png') }}'"> Comments</div>
                        </div>
                        <div class=" ml-3 comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/favorites.png') }}" alt="" onmouseover="this.src='icons/favorites-active.png') }}'" onmouseout="this.src='icons/favorites.png') }}'"> Comments</div>
                        </div>
                        <div class="ml-3 comment-last">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/last-views1.png') }}" alt="" onmouseover="this.src='icons/last-views-active.png') }}'; this.classList.add('pa')" onmouseout="this.src='icons/last-views1.png') }}'"> Comments</div>
                        </div>
                    </div>
                </div>
                <div class='cards cards-smaller'>
                    <div class="covering-div">
                        <div class="w-80">
                            <div class="caption-covering1 caps"><span class="black">Category: </span>Category name</div>
                            <div class="text-covering">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</div>
                            <button class="covering-button">Read More</button>
                            <div class="covering-last1">Continue Shopping <img class='img-arrow' src="{{ asset('assets/icons/right-arrow.png') }}" alt=""></div>
                        </div>
                    </div>
                    <div class='divimg'>
                        <img src="{{ asset('assets/images/Mask-group1.png') }}" alt="">
                    </div>
                    <div class='divtext mt-2 caps'>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="d-flex divtext pt-4 pb-3">
                        <div class="comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/comments.png') }}" alt="" onmouseover="this.src='icons/comments-active.png') }}'" onmouseout="this.src='icons/comments.png') }}'"> Comments</div>
                        </div>
                        <div class=" ml-3 comments">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/favorites.png') }}" alt="" onmouseover="this.src='icons/favorites-active.png') }}'" onmouseout="this.src='icons/favorites.png') }}'"> Comments</div>
                        </div>
                        <div class="ml-3 comment-last">
                            <div class="pr-2"><img class='act-style' src="{{ asset('assets/icons/last-views1.png') }}" alt="" onmouseover="this.src='icons/last-views-active.png') }}'; this.classList.add('pa')" onmouseout="this.src='icons/last-views1.png') }}'"> Comments</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="more-posts">
        <button class="posts-button">
            Show More Posts
        </button>
    </div>
</div>
<div class="subscribe">
    <h3 class="subs-caption caps">subscribe for newsletter</h3>
    <div class="subs-div">
            <input type="text" name="email" placeholder="Your e-mail address" class="inp-email" id='enter-email'>
            <button type="but-submit" id='subscribe-email' class='but-submit'>
                Subscribe here <span class='mar-left'><i class="fas fa-arrow-right"></i><span>
            </button>
            <div id='result-message'>

            </div>
    </div>
</div>
@endsection
