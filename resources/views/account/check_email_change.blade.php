<!-- -------------------modal-changing email-------------------- -->

<button type="button" style="display: none" data-toggle="modal" data-target="#centered_change_email" data-dismiss="modal"
        aria-label="Close" id="open_changing_email">Open_Success
</button>

<div class="modal fade" id="centered_change_email" tabindex="-1" aria-labelledby="success store" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true"><img src="{{ asset('assets/icons/close.png') }}"></span>
               </button>
            </div>
            <div class="modal-body pt-3 pb-3">
                <div class="text-center"><img src="{{ asset('assets/icons/success.png') }}"></div>
                <div class="text-center success-text pt-5 pb-5 text-strong">
                    To change your e-mail address, go to the link sent to the new e-mail address
                </div>

            </div>
        </div>
    </div>
</div>
