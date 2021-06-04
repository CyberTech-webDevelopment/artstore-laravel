<div class="create-store-container ml-1 pb-5">
    <div class="row">
        <h5 class="text-strong">Edit The Store</h5>
    </div>
    <div class="row pr-0">
        <div class="form-group parent">
            <div>
                <label  class="text-strong">Store Name</label>
                <input type="text" class="form-control store-inp" id="">
                <p class="font-size-14">Your shop name will appear in your shop and next to each of your listings throughout Artstore. You can change it later if you’d like.</p>
            </div>
        </div>
        <div class="form-group parent">
            <div class="d-flex">
                <div class="drag-photo pt-4">
                    <!-- <dir><img src="{{asset('assets/images/seller-images/1.png')}}"></dir> -->
                    <div class="text-center"><img src="{{asset('assets/icons/upload.png')}}"></div>
                    <div class="font-size-12 text-center">Drag photo to upload</div>
                    <div class="font-size-12 text-center">or</div>
                    <div class="text-center"><label class="browse font-size-12 text-strong"><input type='file'>Browse</label></div>
                </div>
                <div class="ml-2">
                    <img src="{{asset('assets/icons/edit-account-settings.png')}}">
                    <div></div>
                    <img src="{{asset('assets/icons/delete.png')}}">
                </div>
            </div>
            <div class="pt-2">
                <input type="checkbox" name="">
                <label class="font-size-14">Use Username as Store Name</label>
            </div>
            <div>
                <input type="checkbox" name="" >
                <label class="font-size-14">Apply User’s Avatar as Store’s Logo.</label>
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
                <div class="drag-photo pt-4">
                    <div class="text-center pb-2"><img src="{{asset('assets/icons/upload.png')}}"></div>
                    <div class="font-size-12 text-center">Drag photo to upload</div>
                    <div class="font-size-12 text-center">or</div>
                    <div class="text-center"><label class="browse font-size-12 text-strong"><input type='file'>Browse</label></div>
                </div>
                <div class="ml-2">
                    <img src="{{asset('assets/icons/edit-account-settings.png')}}">
                    <div></div>
                    <img src="{{asset('assets/icons/delete.png')}}">
                </div>
            </div>
        </div>
        <div class="form-group parent col-12 pl-0 pr-0">
            <div class="pt-2">
                <label class="mb-1">Store Description</label><br>
                <textarea ></textarea>
            </div>
        </div>
    </div>
    <div class="row pr-0 " >
        <div >
            <div >
                <h5 class="text-underline text-strong edit-h5-click">Choose The Style</h5>
            </div>
            <div class="hide-style" id="edit-store-style">
                <div class="d-flex flex-wrap justify-content-between pt-4 style-group-cont">
                    <div class="d-flex">
                        <div><img src="{{asset('assets/images/style-group1.png')}}" class="style-group-img"></div>
                        <div><input type="checkbox" name=""></div>
                    </div>
                    <div class="d-flex">
                        <div><img src="{{asset('assets/images/style-group2.png')}}" class="style-group-img"></div>
                        <div><input type="checkbox" name=""></div>
                    </div>
                    <div class="d-flex">
                        <div><img src="{{asset('assets/images/style-group3.png')}}" class="style-group-img"></div>
                        <div><input type="checkbox" name=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-3 pb-5">
        <button class="create-store-btn" type="button" data-toggle="modal" data-target="#edit-centered">Create Store</button>
    </div>
</div>
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
                <div class="text-center success-text pt-5 pb-5 text-strong">Dear Name, Surname, Congratulations! You have successfully created the "Store Name" in Artstore.am. Now you can download and sell your products worlwide.</div>
                <div class="text-center"><button class="lets-sell">Let’s Sell</button></div>
            </div>
        </div>
    </div>
</div>
