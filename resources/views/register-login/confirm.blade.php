<button type="button" id="s12" class="close" data-toggle="modal" data-target="#timelimited" data-dismiss="modal" aria-label="Close">
    SI12
</button>
<div class="modal fade" id="timelimited" tabindex="-1" aria-labelledby="exampleModalLabel55" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{asset('assets\icons\close.png')}}"></span>
                </button>
            </div>
            <div class="row">
                <div class="modal-body mt-4 mb-4 text-strong text-center" id="">
                    <p>@lang('auth.modal_confirm')</p><br>
                    <p>@lang('auth.modal_artstore')</p>
{{--                    <p>Your confirm email time confirm is expired.</p>--}}
{{--                    <p>Please registered again.</p>--}}

                </div>

            </div>
        </div>
    </div>
</div>
