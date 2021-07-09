<div class="row account-settings  pl-4  pr-4">
 <form id="change_form" enctype="multipart/form-data">
    <div class="col-12 border-bottom d-flex pb-3 align-items-end">
        <div class="avatar">
            <div class="text-strong text-center">Avatar</div>
            <img id="user_avatar" src="/storage/{{Auth::user()->only_user_avatar()}}">
            <div class="text-strong text-danger" id="avatar_error"></div>
        </div>
        <div class="col-6 buttons_change_message d-flex flex-column align-items-center">

            <div class="mb-2 error_change_data text-danger">
                @if(session()->has('no_img'))

                    {{ session('no_img') }}
                @endif

            </div>
             <div class="pl-5 d-flex">
               <div class="upload_user_img d-flex align-items-center justify-content-center text-strong">Upload</div>
               <input type="file" id="download_user_img" name="avatar_change" class="none_see">
               <a href="{{ route('delete.avatar',app()->getLocale()) }}" class="remove_user_img d-flex align-items-center justify-content-center text-strong ml-2">Remove</a>
             </div>

        </div>

    </div>
    <input type="hidden" id="change_data_url" value="{{ route('change.data',app()->getLocale()) }}">
    <!-- ----------------------edit account-------------------------- -->
    <div class="col-12 border-bottom">
        <div class="form-group parent col-7 mt-4">

                <div class="">
                    <label class="text-strong mb-0">Username</label>
                    <div class="d-flex">
                        <input type="text" disabled="true" class="form-control account-change-inp "
                               id="account-change-name" name="name_change" min="6" max="29" value="{{ Auth::user()->name }}" data-name='0' placeholder="Username">
                        <div class="pl-2 mt-1 disable_turn"><img src="{{asset('assets/icons/edit-account-settings.png')}}"></div>
                    </div>
                </div>
                <div class="form-group parent mb-0">
                    <div>
                        <label class="text-strong mt-3">E-mail</label>
                        <div class="d-flex">
                            <input type="email" disabled="true" class="form-control account-change-inp"
                                   id="account-change-email" name="email_change" value="{{ Auth::user()->email }}" data-name='0' placeholder="e-mail">
                            <div class="pl-2 mt-1 disable_turn"><img src="{{asset('assets/icons/edit-account-settings.png')}}"></div>
                        </div>
                    </div>
                    <div class="invalid-inp invalid-mail"></div>
                </div>
                <div class="form-group parent mb-0">
                    <label class="text-strong  mt-3">Old Password</label>
                    <div class="input-group">
                        <input type="password" disabled="true" class="form-control account-change-inp"
                               id="account-change-pass-old" name="old_pass_change" min="8" max="16" data-name='0'>
                        <div class="pl-2 mt-1 disable_turn"><img src="{{asset('assets/icons/edit-account-settings.png')}}"></div>
                    </div>
                    <div class="invalid-inp invalid-pass"></div>
                </div>
                <div class="form-group parent mb-0">
                    <label class="text-strong  mt-3">New Password</label>
                    <div class="input-group">
                        <input type="password" disabled="true" class="form-control account-change-inp"
                               id="account-change-pass-new" name="new_pass_change" min="8" max="16" data-name='0'>
                        <div class="pl-2 mt-1 disable_turn"><img src="{{asset('assets/icons/edit-account-settings.png')}}"></div>
                    </div>
                    <div class="invalid-inp invalid-pass"></div>
                </div>
                <div class="form-group parent mb-0">
                    <label class="text-strong  mt-3">Confirm Password</label>
                    <div class="input-group">
                        <input type="password" disabled="true" class="form-control account-change-inp"
                               id="account-change-pass-confirm" name="confirm_pass_change" min="8" max="16" data-name='0'>
                        <div class="pl-2 mt-1 disable_turn"><img src="{{asset('assets/icons/edit-account-settings.png')}}"></div>
                    </div>
                    <div class="invalid-inp invalid-pass"></div>
                </div>

                <button class="mt-3 mb-4 save-account-change">Save Changes</button>
                <div class="succes_data_change text-success">@if(session()->has('modal_type_account') && session('modal_type_account') == 'change_email') Your data changes successfuly @endif</div>
            </form>
        </div>
    </div>

    <!-- --------------------delete account------------------------------ -->
    <div class="col-12 border-bottom">
        <div class="form-group parent col-7 mt-4">
            <form>
                <div class="">
                    <label class="text-strong mb-0">Delete Account</label>
                    <div class="d-flex">
                        <select class="form-control delete-account-sel" placeholder="Select a reason...">
                            <option>Select a reason...</option>
                            <option>It doesn’t seem useful</option>
                            <option>It gate too many time</option>
                            <option>I have a privacy concern</option>
                            <option>Other...</option>
                        </select>
                        <div class="pl-2 mt-1"><img src="{{asset('assets/icons/edit-account-settings.png')}}"></div>
                    </div>
                </div>
                <button class="delete-account text-strong mt-3 mb-4">Delete Account</button>

            </form>
        </div>
    </div>
</div>
