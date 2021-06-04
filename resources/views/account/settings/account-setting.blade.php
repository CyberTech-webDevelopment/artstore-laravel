<div class="row account-settings  pl-4  pr-4">
    <div class="col-12 border-bottom d-flex pb-3 align-items-end">
        <div class="avatar">
            <div class="text-strong">Avatar</div>
            <img src="{{asset('assets/images/users-image/1.png')}}">
        </div>
        <div class="pl-5">
            <button class="upload text-strong">Upload</button>
            <button class="remove text-strong ml-2">Remove</button>
        </div>
    </div>
    <!-- ----------------------edit account-------------------------- -->
    <div class="col-12 border-bottom">
        <div class="form-group parent col-7 mt-4">
            <form>
                <div class="">
                    <label class="text-strong mb-0">Username</label>
                    <div class="d-flex">
                        <input type="text" disabled="true" class="form-control account-change-inp "
                               id="account-change-name" min="6" max="29" data-name='0' placeholder="Username">
                        <div class="pl-2 mt-1"><img src="{{asset('assets/icons/edit-account-settings.png')}}"></div>
                    </div>
                </div>
                <div class="form-group parent mb-0">
                    <div>
                        <label class="text-strong mt-3">E-mail</label>
                        <div class="d-flex">
                            <input type="email" disabled="true" class="form-control account-change-inp"
                                   id="account-change-mail" data-name='0' placeholder="e-mail">
                            <div class="pl-2 mt-1"><img src="{{asset('assets/icons/edit-account-settings.png')}}"></div>
                        </div>
                    </div>
                    <div class="invalid-inp invalid-mail"></div>
                </div>
                <div class="form-group parent mb-0">
                    <label class="text-strong  mt-3">Password</label>
                    <div class="input-group">
                        <input type="password" disabled="true" class="form-control account-change-inp"
                               id="account-change-pass" min="8" max="16" data-name='0'>
                        <div class="pl-2 mt-1"><img src="{{asset('assets/icons/edit-account-settings.png')}}"></div>
                    </div>
                    <div class="invalid-inp invalid-pass"></div>
                </div>
                <!-- <div class="form-group parent">
                   <label  class="text-strong">Password</label>
                   <div class="input-group">
                          <input type="password" class="form-control account-change-inp" id="account-change-pass" class="password" min="8" max="16" data-name='0'>
                          <div class="input-group-append">
                               <span class="input-group-text eye-span" id="icon-lock">
                                    <img src="{{asset('assets/icons/icon-lock.png')}}">
                               </span>
                          </div>
                   </div>
                   <div class="invalid-inp invalid-pass" ></div>
                </div> -->
                <button class="mt-3 mb-4 save-account-change">Save Changes</button>
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
