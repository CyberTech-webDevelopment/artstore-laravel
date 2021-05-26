<button type="button" id="s11" class="btn pl-3 pt-1 sign-up text-strong close" data-toggle="modal"
        data-target="#changePassword" data-dismiss="modal" aria-label="Close">
    SIGN UP
</button>
<div class="modal fade" id="changePassword" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close ml-0" data-dismiss="modal" aria-label="Close" data-toggle="modal"
                        data-target="#signIn" data-dismiss="modal">
                    <span aria-hidden="true"><img src="{{asset('assets\icons\left-arrow.png')}}"></span>
                </button>
                <h5 class="modal-title text-strong" id="exampleModalLabel4">Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{asset('assets\icons\close.png')}}"></span>
                </button>
            </div>
            <div class="row">
                <div class="modal-body" id="new-password-changed">
                    <form action="{{ route('change.password') }}" method="POST">
                        @csrf
                        <div class="mt-3 mb-3 pt-4 pb-4">

                            <div class="form-group parent">
                                <label class="text-strong">New Password</label>
                                <span class="required hide"> &nbsp *</span>
                                <div class="input-group">
                                    <input type="password" class="form-control change-inp" name="password" id="change-pass"
                                           class="password"
                                           min="8" max="16" data-name='0'>
                                    <div class="input-group-append">
                           <span class="input-group-text eye-span" id="change-password-icon-lock">
                                <img src="{{asset('assets\icons\icon-lock.png')}}">
                           </span>
                                    </div>
                                </div>
                                <div class="invalid-inp invalid-pass float-left"></div>
                            </div>

                            <div class="form-group parent pt-4">
                                <label class="text-strong">Confirm Password</label>
                                <span class="required hide"> &nbsp *</span>
                                <div class="input-group">
                                    <input type="password" class="form-control change-inp" name="password_confirm"  id="confirm-change-pass"
                                           class="password" min="8" max="16" data-name='0'>
                                </div>
                                <div class="invalid-inp invalid-pass float-left"></div>
                            </div>
                            @if(session()->has('email'))
{{--                                @dump(session('email'))--}}
                                <input type="hidden" name="changing_email" value="{{ session('email') }}" id="hidden-inp">
                            @endif
                            <button type="submit" class="btn sign-in mt-2 text-strong text-uppercase"
                                    id="change-password">
                                DONE
                            </button>
                        </div>

                    </form>

                    <div class="text-center text-danger password-changed">
                        @if(session()->has('no_confirm'))
                            {{ session('no_confirm') }}
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
