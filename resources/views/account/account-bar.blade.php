<div class="col-lg-3 col-sm-12 col-xs-12 acount-nav mt-3">
    <div>
        <div class="row d-flex flex-nowrap acount-nav-head pt-3 pb-4 ml-0 mr-0 pl-1 pr-1">
            <div class="col-lg-4 col-md-3 col-sm-2 col-xs-2 acount-user-img pl-0 pr-0"><img src="{{asset('assets/images/users-image/1.png')}}"></div>
            <div class="col-lg-8 col-md-5 col-sm-4 col-xs-4 pr-0 user-info">
                <div class="text-strong font-size-24">Name Surname</div>
                <div class="edit-profile font-size-20"><a href="">Edit Profile <span ><img src="{{asset('assets/icons/edit-profile.png')}}"></span></a></div>
                <div class="star-cont">
                    <span><img src="{{asset('assets/icons/vector-star.png')}}"></span>
                    <span><img src="{{asset('assets/icons/vector-star.png')}}"></span>
                    <span><img src="{{asset('assets/icons/vector-star.png')}}"></span>
                    <span><img src="{{asset('assets/icons/vector-star-tr.png')}}"></span>
                    <span><img src="{{asset('assets/icons/vector-star-tr.png')}}"></span>
                    <span class="point">(48)</span>
                </div>
            </div>
        </div>
    </div>
    <div class="acount-nav-body pt-4 pb-4 border-top">
        <div class="d-flex flex-nowrap justify-content-around pb-4" id="buttons">
            <button id="byer" class="acount-type acount-type-active">Buy in Artstore</button>
            <button id="seller" class="acount-type">Sell in Artstore</button>
        </div>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link d-flex justify-content-between acount-bar-item acount-bar-type-item" data-type="byer" data-name="basket" id="v-pills-basket-tab" data-toggle="pill" href="#v-pills-basket" role="tab" aria-controls="v-pills-basket" aria-selected="true"><div class="font-size-16"><img src="{{asset('assets/icons/basket.png')}}"><span class="pl-2">Basket</span></div><span class="new-int">20</span></a>
            <a id="product-a" class="nav-link d-flex justify-content-between acount-bar-item acount-bar-type-item" data-type="seller" data-name="products" id="v-pills-products-tab" data-toggle="pill" href="#v-pills-products" role="tab" aria-controls="v-pills-products" aria-selected="true"><div class="font-size-16"><img src="{{asset('assets/icons/products.png')}}"><span class="pl-2">Products</span></div></a>

            <a class="nav-link d-flex justify-content-between acount-bar-item acount-bar-type-item" data-type="byer" data-name="favorites" id="v-pills-favorites-tab" data-toggle="pill" href="#v-pills-favorites" role="tab" aria-controls="v-pills-favorites" aria-selected="false"><div class="font-size-16"><img src="{{asset('assets/icons/favorites.png')}}"><span class="pl-2">Favorites</span></div><span class="new-int">7</span></a>
            <a class="nav-link d-flex justify-content-between acount-bar-item" data-name="messages" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><div class="font-size-16"><img src="{{asset('assets/icons/messages.png')}}"><span class="pl-2">Messages</span></div><span class="new-int">14</span></a>
            <a class="nav-link d-flex justify-content-between acount-bar-item acount-bar-type-item" data-type="byer" data-name="last-views" id="v-pills-last-views-tab" data-toggle="pill" href="#v-pills-last-views" role="tab" aria-controls="v-pills-last-views" aria-selected="false"><div class="font-size-16"><img src="{{asset('assets/icons/last-views.png')}}"><span class="pl-2">Last Views</span></div><span class="new-int"></span></a>
            <a class="nav-link d-flex justify-content-between acount-bar-item acount-bar-type-item" data-type="byer" data-name="purchase" id="v-pills-purchases-tab" data-toggle="pill" href="#v-pills-purchases" role="tab" aria-controls="v-pills-purchase" aria-selected="false"><div class="font-size-16"><img src="{{asset('assets/icons/purchase.png')}}"><span class="pl-2">Purchases</span></div><span class="new-int"></span></a>
            <a class="nav-link d-flex justify-content-between acount-bar-item" data-name="comments" id="v-pills-my-comments-tab" data-toggle="pill" href="#v-pills-my-comments" role="tab" aria-controls="v-pills-my-comments" aria-selected="false"><div class="font-size-16"><img src="{{asset('assets/icons/comments.png')}}"><span class="pl-2">My Comments</span></div><span class="new-int">15</span></a>
            <a class="nav-link d-flex justify-content-between acount-bar-item acount-bar-type-item" data-type="byer" data-name="settings" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><div class="font-size-16"><img src="{{asset('assets/icons/settings.png')}}"><span class="pl-2">Account Settings</span></div></a>
            <a class="nav-link d-flex justify-content-between acount-bar-item acount-bar-type-item" data-type="seller" data-name="settings" id="v-pills-seller-settings-tab" data-toggle="pill" href="#v-pills-seller-settings" role="tab" aria-controls="v-pills-seller-settings" aria-selected="false"><div class="font-size-16"><img src="{{asset('assets/icons/settings.png')}}"><span class="pl-2">Account Settings</span></div></a>

            <a class="nav-link d-flex justify-content-between acount-bar-item" data-name="wallet" id="v-pills-wallet-tab" data-toggle="pill" href="#v-pills-wallet" role="tab" aria-controls="v-pills-wallet" aria-selected="false"><div class="font-size-16"><img src="{{asset('assets/icons/wallet.png')}}"><span class="pl-2">Wallet</span></div><span class="new-int">$2600</span></a>

            <a class="nav-link d-flex justify-content-between  acount-bar-type-item" onclick="fff()" id="add-product-a" data-type="seller" data-toggle="modal" data-target=".add-product-modal" aria-selected="false" ><div class="font-size-16 text-danger">Add new product</div></a>
        </div>
        <div class="acount-nav-footer pt-4 pb-4 border-top">
            <div>
                <a class="nav-link d-flex justify-content-between acount-sign-out" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><div class="font-size-16"><img src="{{asset('assets/icons/exit.png')}}"><span class="pl-2">Sign Out</span></div></a>
            </div>
        </div>
    </div>
</div>

@include('account.add-products-modal')
