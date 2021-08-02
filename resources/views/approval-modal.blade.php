<!-- -----------------modal-for delete product ------------ -->

<div class="modal fade delete-prd" tabindex="-1" aria-labelledby="delete-prd" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" id="close_del" aria-label="Close">
                    <span aria-hidden="true"><img src="{{asset('assets/icons/close.png')}}"></span>
                </button>
            </div>
            <div class="modal-body product-description-body ml-auto mr-auto pt-3 pb-3">
                <div class="mt-3 text-center"><img src="{{asset('assets/icons/delete-icon.png')}}"
                                                   class="img-delete"></div>
                <div class="mt-2 text-center delete_text_current">
                    Are you sure you want to remove this item(s) from the store? If the product is removed, it already
                    will be impossible to restore. If you
                    want remove this item, you can deactivate it.
                </div>
                <div class="mt-2 text-center delete_text_all" style="display: none">
                    Are you sure you want to remove all products from the store? If the all products are removing,its
                    already
                    will be impossible to restore If you want removed all items, you can deactivate its.
                </div>
                <div class="mt-2 text-center delete_text_order" style="display: none">
                    Are you sure you want to remove orders from the store history? If the orders are removing,its
                    already
                    will be impossible to restore.
                </div>
                <div class=" mt-2  text-center">
                    <div class="text-center mt-4 mb-4">
                        <button class="cancel cancel_del" data-dismiss="modal">Cancel</button>
                        <button class="delete delete-multi ml-4">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
