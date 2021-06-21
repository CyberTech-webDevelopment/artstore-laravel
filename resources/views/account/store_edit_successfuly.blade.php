<!-- -------------------modal-successfully create-store-------------------- -->

<button type="button" style="display: none" data-toggle="modal" data-target="#centered_edit_store" data-dismiss="modal"
        aria-label="Close" id="open_success_modal_store_edit">Open_Success
</button>
{{--@dd(Auth::user()->store->name)--}}
<div class="modal fade" id="centered_edit_store" tabindex="-1" aria-labelledby="success store" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                {{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                {{--                    <span aria-hidden="true"><img src="{{ asset('assets/icons/close.png') }}"></span>--}}
                {{--                </button>--}}
            </div>
            <div class="modal-body pt-3 pb-3">
                <div class="text-center"><img src="{{ asset('assets/icons/success.png') }}"></div>
                <div class="text-center success-text pt-5 pb-5 text-strong">
                    Dear @if(Auth::check()) <span style="color: #3D2006">{{ Auth::user()->name }}</span>  @endif,
                    Congratulations! You
                    have successfully edited
                    the!!!!!!!! <span style="color: #3D2006" id="store_name_edit"></span> in Artstore.am. Now
                    you can download and sell your
                    products worlwide.
                </div>
                {{--                <div class="text-center">--}}
                {{--                    <button class="lets-sell">Let’s Sell</button>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
</div>

