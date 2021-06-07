@extends('layouts.app')
@section('style')
   <link rel="stylesheet" href="{{ asset('assets/css/blog-name.css') }}">
@endsection
@section('content')
<div class="container >">
    <div class="back-home pt-2">
        Homepage &gt; <span class='top-und'>Blog &gt; Blog Name</span>
    </div>

    <div class='bold-caption mt-5 mb-3'>Blog</div>
    <div class="d-flex f-flex">
        <div class="f-flex-item"><img src="{{ asset('assets/images/Mask-group.png') }}" alt="Mask-group" class='main-image'></div>
        <div class="f-flex-item2">
            <div class="caps">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry
            </div>
            <div class="f-flex-text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.
            </div>
        </div>
    </div>
    <p class='plain-text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </p>
    <div class="d-flex s-flex">
        <div class="s-flex-item">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.
        </div>
        <div class="s-flex-item">
            <img src="{{ asset('assets/images/Mask-group-mini.png') }}" alt="" class='s-image'>
        </div>
    </div>
    <p class='plain-text'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </p>
    <hr class='hr1'>
    <div class="div-comment d-flex justify-content-between">
        <div class="d-flex pt-1 pb-3 f-comments">
            <div class="comments">
                <div class="pr-2 mt-1"><img class='act-style' src="{{ asset('assets/icons/comments.png') }}" alt="" onmouseover="this.src='icons/comments-active.png') }}'" onmouseout="this.src='icons/comments.png') }}'"> Comments</div>
            </div>
            <div class="ml-3 comments">
                <div class="pr-2 mt-1"><img class='act-style' src="{{ asset('assets/icons/favorites.png') }}" alt="" onmouseover="this.src='icons/favorites-active.png') }}'" onmouseout="this.src='icons/favorites.png') }}'"> Comments</div>
            </div>
            <div class="ml-3 comment-last">
                <div class="pr-2"><img class='act-style1' src="{{ asset('assets/icons/last-views1.png') }}" alt="" onmouseover="this.src='icons/last-views-active.png') }}'" onmouseout="this.src='icons/last-views1.png') }}'"> Comments

                </div>
            </div>
        </div>
        <div class="share">
            <span class="share">
                <img src="{{ asset('assets/icons/share1.png') }}" alt="" class="share-img"> <span class="span-share">Share</span>
                <img src="{{ asset('assets/icons/linkedin-c.jpg') }}" alt="" class="soc-img">
                <img src="{{ asset('assets/icons/instagram-c.png') }}" alt="" class="soc-img">
                <img src="{{ asset('assets/icons/facebook.png') }}" alt="" class="soc-img">
                <img src="{{ asset('assets/icons/pinterest-c.png') }}" alt="" class="soc-img">
            </span>
        </div>

    </div>

    <div class="user-message d-flex">
        <div class="img-user">
            <img src="{{ asset('assets/icons/user-ava.png') }}" alt="" class='user-icon'>
        </div>
        <div class="input-user">
            <form action="">
                <input type="text" class="user-message">
            </form>
        </div>
        <div class='send'>
            <img src="{{ asset('assets/icons/send1.png') }}" alt="">

        </div>
    </div>
    <hr class="hr2">

    <div class="disp-mes d-flex">
        <div class="img-user">
            <img src="{{ asset('assets/icons/user-ava.png') }}" alt="" class='user-icon'>
        </div>
        <div class="message mb-5 pb-5">
            <div class="user-name"> Name surname <span class="date"> 12/02/20</span></div>
            <div class="stars">
                <img src="{{ asset('assets/icons/vector-star-product.png') }}" alt="" class="star">
                <img src="{{ asset('assets/icons/vector-star-product.png') }}" alt="" class="star">
                <img src="{{ asset('assets/icons/vector-star-product.png') }}" alt="" class="star">
                <img src="{{ asset('assets/icons/vector-star-tr-product.png') }}" alt="" class="star">
                <img src="{{ asset('assets/icons/vector-star-tr-product.png') }}" alt="" class="star">
            </div>
            <div class="mess-text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </div>
        </div>
    </div>
    <div class="disp-mes d-flex">
        <div class="img-user">
            <img src="{{ asset('assets/icons/user-ava.png') }}" alt="" class='user-icon'>
        </div>
        <div class="message mb-5 pb-5">
            <div class="user-name"> Name surname <span class="date"> 12/02/20</span></div>
            <div class="stars">
                <img src="{{ asset('assets/icons/vector-star-product.png') }}" alt="" class="star">
                <img src="{{ asset('assets/icons/vector-star-product.png') }}" alt="" class="star">
                <img src="{{ asset('assets/icons/vector-star-product.png') }}" alt="" class="star">
                <img src="{{ asset('assets/icons/vector-star-tr-product.png') }}" alt="" class="star">
                <img src="{{ asset('assets/icons/vector-star-tr-product.png') }}" alt="" class="star">
            </div>
            <div class="mess-text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </div>
        </div>
    </div>

</div>
@endsection
