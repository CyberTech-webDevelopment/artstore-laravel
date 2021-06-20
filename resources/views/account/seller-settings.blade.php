<input type="hidden" id="edit_store_post_route" value="{{ route('edit.store',app()->getLocale()) }}">
<form method="post" enctype="multipart/form-data" id="edit_store_form">
    <div class="create-store-container ml-1 pb-5">
        <div class="row">
            <h5 class="text-strong">Edit The Store</h5>
        </div>
        <div class="row pr-0">
            <div class="form-group parent">
                <div>
                    <label class="text-strong">Store Name</label>
                    <input type="text" class="form-control store-inp"
                           value="@if(isset($store)) {{ $store->name }} @endif" id=" store_name">
                    <p class="font-size-14">Your shop name will appear in your shop and next to each of your listings
                        throughout Artstore. You can change it later if you’d like.</p>
                </div>
            </div>
            <div class="row pl-0">
                <div class="canvas-cont_store_e hide ml-auto mr-auto" tabindex="3">
                    <canvas id="canvas_store_e"></canvas>
                    <div class="ml-1 edit-img">
                        <div id="crop-image_store_e"><i class='fas fa-crop' style='font-size:24px'></i></div>
                        <p></p>
                        <div class="delete-image_store_e"><img src="{{asset('assets/icons/close.png')}}"></div>
                    </div>
                </div>
                <div class="form-group parent">
                    <div class="d-flex uploade-image_store_e">
                        <div class="drag-photo input-file-trigger_store_e pt-4" id="drag-photo-logo-e">
                            <div class="text-center"><img src="{{ asset('assets/icons/upload.png') }}"></div>
                            <div class="font-size-12 text-center">Drag photo to upload</div>
                            <div class="font-size-12 text-center">or</div>
                            <div class="text-center"><label class="browse font-size-12 text-strong"><input
                                        id="shop_img_e" type='file'>Browse</label></div>

                        </div>
                        <div id='divHabilitSelectors_store'
                             class="input-file-container text-center pt-2 input-file-trigger_store_e"></div>

                    </div>
                    <div id="image-cont_store_e" class="d-flex">

                    </div>
                    <div class="pt-2">
                        <input type="checkbox" @if(isset($store) && $store->use_name == "on") checked
                               @endif name="use_name">
                        <label class="font-size-14">Use Username as Store Name</label>
                    </div>
                    <div>

                        <input type="checkbox" @if(isset($store) && $store->use_avatar == "on") checked
                               @endif name="use_avatar">
                        <label class="font-size-14">Apply User’s Avatar as Store’s Logo.</label>
                    </div>
                </div>

            </div>

            <div class="border-bottom pt-3"></div>
        </div>
        <div class="row pr-0">
            <div class="row pt-3 pl-2">
                <div>
                    <p class="text-underline text-strong">Let’s Design Your Store</p>
                    <p class="font-size-14">Upload a custom background image</p>
                </div>
            </div>
            <div class="form-group parent col-12 pl-0 pr-0">
                <div class="d-flex">
                    <div class="drag-photo pt-4" id="drag-photo-e-back">
                        <div class="text-center pb-2"><img src="{{asset('assets/icons/upload.png')}}"></div>
                        <div class="font-size-12 text-center">Drag photo to upload</div>
                        <div class="font-size-12 text-center">or</div>
                        <div class="text-center"><label class="browse font-size-12 text-strong"><input
                                    type='file'>Browse</label></div>
                    </div>
                </div>
                <div id="img-cont-back-e"></div>
            </div>
            <div class="form-group parent col-12 pl-0 pr-0">
                <div class="pt-2">
                    <label class="mb-1">Store Description</label><br>
                    <textarea id="edit_desc_store"
                              name="edit_desc">@if(isset($store)) {{ $store->description }} @endif</textarea>
                </div>
            </div>
        </div>
        <div class="row pr-0 ">
            <div>
                <div>
                    <h5 class="text-underline text-strong edit-h5-click">Choose The Style</h5>
                </div>
                <div class="hide-style" id="edit-store-style">
                    <div class="d-flex flex-wrap justify-content-between pt-4 style-group-cont">
                        <div class="d-flex">
                            <div><img src="{{asset('assets/images/style-group1.png')}}" class="style-group-img"></div>
                            <div><input type="radio" @if(isset($store) && $store->page_type == "store_first") checked
                                        @endif value="store_first" name="store_style"></div>
                        </div>
                        <div class="d-flex">
                            <div><img src="{{asset('assets/images/style-group2.png')}}" class="style-group-img"></div>
                            <div><input type="radio" @if(isset($store) && $store->page_type == "store_second") checked
                                        @endif value="store_second" name="store_style"></div>
                        </div>
                        <div class="d-flex">
                            <div><img src="{{asset('assets/images/style-group3.png')}}" class="style-group-img"></div>
                            <div><input type="radio" @if(isset($store) && $store->page_type == "store_third") checked
                                        @endif value="store_third" name="store_style"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3 pb-5">
            <button class="create-store-btn" type="button" data-toggle="modal" data-target="#edit-centered">Create Store
            </button>
        </div>
    </div>
</form>

<!-- -------------------modal-successfully create-store-------------------- -->

<div class="modal fade" id="edit-centered" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{asset('assets/icons/close.png')}}"></span>
                </button>
            </div>
            <div class="modal-body pt-3 pb-3">
                <div class="text-center"><img src="{{asset('assets/icons/success.png')}}"></div>
                <div class="text-center success-text pt-5 pb-5 text-strong">Dear Name, Surname, Congratulations! You
                    have successfully created the "Store Name" in Artstore.am. Now you can download and sell your
                    products worlwide.
                </div>
                <div class="text-center">
                    <button class="lets-sell">Let’s Sell</button>
                </div>
            </div>
        </div>
    </div>
</div>
