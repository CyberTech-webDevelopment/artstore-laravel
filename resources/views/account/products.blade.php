<div class="row justify-content-end add-new-product-row  pr-3">
    <button class="add-new-product text-strong" data-toggle="modal" data-target=".add-product-modal">Add New Product +</button>
</div>
<table class="table seller-add-products table-responsive">
    <thead class="thead-lightorange">
    <tr>
        <th scope="col"><input type="checkbox" name=""></th>
        <th scope="col" class="">Product</th>
        <th scope="col" class="text-center">Quantity</th>
        <th scope="col" class="text-center">Status</th>
        <th scope="col" class="text-center pl-0 pr-0">Basic Price</th>
        <th scope="col" class="text-center">Sale</th>
        <th scope="col" class="text-center">Photos</th>
        <th scope="col" class="text-center"> <div data-toggle="modal" data-target=".delete-prds" class="delete-all-products">Delete</div></th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <th scope="row"><input type="checkbox" name=""></th>
        <td class="d-flex flex-nowrap ">
            <div class="product-img"><img src="{{asset('assets/images/andrijana1.png')}}"></div>
            <div class="product-info pl-2">
                <p class="text-capitalize sml-caps text-strong mb-0">Handemade name</p>
                <div data-toggle="modal" data-target=".product-description" class="description-click">Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry
                </div>
            </div>
        </td>
        <td class="text-strong">
            <div class="d-flex">
                <button class="minus">-</button>
                <span class="pl-2 pr-2 quantity">1</span>
                <button class="plus">+</button>
            </div>
        </td>
        <td class="text-center text-strong">
            <button class="active-product text-strong">Active</button>
            <button class="inactive-product text-strong mt-2">Inactive</button>
        </td>
        <td class="text-strong pl-4 pr-4 text-center">$140</td>
        <td class="text-strong">
            <div class="d-flex">
                <label>$ </label>
                <input type="" name="" class="sale-inp ml-2">
            </div>
        </td>
        <td class="text-strong">
            <img src="{{asset('assets/icons/show-img.png')}}">
        </td>
        <td class="text-strong">
            <button class="download text-strong">Download</button>
            <button class="delete-product text-strong mt-2" data-toggle="modal" data-target=".delete-prd">Delete</button>
            <button class="save-product text-strong mt-2">Save</button>
        </td>
    </tr>
    <tr>
        <th scope="row"><input type="checkbox" name=""></th>
        <td class="d-flex flex-nowrap ">
            <div class="product-img"><img src="{{asset('assets/images/andrijana1.png')}}"></div>
            <div class="product-info pl-2">
                <p class="text-capitalize sml-caps text-strong mb-0">Handemade name</p>
                <div data-toggle="modal" data-target=".product-description" class="description-click">Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry
                </div>
            </div>
        </td>
        <td class="text-strong">
            <div class="d-flex">
                <button class="minus">-</button>
                <span class="pl-2 pr-2 quantity">1</span>
                <button class="plus">+</button>
            </div>
        </td>
        <td class="text-center text-strong">
            <button class="active-product text-strong">Active</button>
            <button class="inactive-product text-strong mt-2">Inactive</button>
        </td>
        <td class="text-strong pl-4 pr-4 text-center">$140</td>
        <td class="text-strong">
            <div class="d-flex">
                <label>$ </label>
                <input type="" name="" class="sale-inp ml-2">
            </div>
        </td>
        <td class="text-strong">
            <img src="{{asset('assets/icons/show-img-active.png')}}">
        </td>
        <td class="text-strong">
            <button class="download text-strong">Download</button>
            <button class="delete-product text-strong mt-2" data-toggle="modal" data-target=".delete-prd">Delete</button>
            <button class="save-product text-strong mt-2">Save</button>

        </td>
    </tr>
    </tbody>
</table>



<!-- -----------------modal-for edit product description------------ -->

<div class="modal fade product-description" tabindex="-1" aria-labelledby="product-description" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="text-center mr-0 text-strong">Edit product description</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{asset('assets/icons/close.png')}}"></span>
                </button>
            </div>
            <div class="modal-body product-description-body ml-auto mr-auto pt-3 pb-3">
                <div class=" ">Description</div>
                <div class=" ">
                    <textarea class="prod-description-textarea"></textarea>
                </div>
                <div class="text-center mt-4 mb-4"><button class="save-prod-description">Save Changes</button></div>
            </div>
        </div>
    </div>
</div>


<!-- -----------------modal-for delete product ------------ -->

<div class="modal fade delete-prd" tabindex="-1" aria-labelledby="product-description" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{asset('assets/icons/close.png')}}"></span>
                </button>
            </div>
            <div class="modal-body product-description-body ml-auto mr-auto pt-3 pb-3">
                <div class="mt-3 text-center"><img src="{{asset('assets/icons/delete-icon.png')}}" class="img-delete"></div>
                <div class="mt-2 text-center ">
                    Are you sure you want to remove this item from the store? If the product is removed, it will not be possible to restore it. If you remove this item, you can deactivate it.
                </div>
                <div class=" mt-2  text-center">
                    <div class="text-center mt-4 mb-4">
                        <button class="cancel" data-dismiss="modal">Cancel</button>
                        <button class="delete ml-4">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- -----------------modal-for delete products ------------ -->

<div class="modal fade delete-prds" tabindex="-1" aria-labelledby="product-description" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{asset('assets/icons/close.png')}}"></span>
                </button>
            </div>
            <div class="modal-body product-description-body ml-auto mr-auto pt-3 pb-3">
                <div class="mt-3 text-center"><img src="{{asset('assets/icons/delete-icon.png')}}" class="img-delete"></div>
                <div class="mt-2  text-center">
                    Are you sure you want to remove these items from the store? If the products are removed, they will not be possible to restore. If you remove these items, you can deactivate them.
                </div>
                <div class=" mt-2  text-center">
                    <div class="text-center mt-4 mb-4">
                        <button class="cancel" data-dismiss="modal">Cancel</button>
                        <button class="delete ml-4">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

