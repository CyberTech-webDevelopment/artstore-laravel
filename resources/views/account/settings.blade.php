<div class="row pl-0 pr-0 mr-0 ml-0">
    <div class="col-2 pr-0">
        <div class="nav flex-column nav-pills settings-nav" id="" role="tablist" aria-orientation="vertical">
            <a class="nav-link  text-strong active pl-3 pr-1 pt-0 pb-0" id="v-pills-account-settings-tab"
               data-toggle="pill" href="#v-pills-account-settings" role="tab" aria-controls="v-pills-account-settings"
               aria-selected="true">Account</a>
            <a class="nav-link text-strong pl-3 pr-1 pt-0 pb-0" id="v-pills-profile-tab" data-toggle="pill"
               href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Privacy</a>
            <a class="nav-link text-strong pl-3 pr-1 pt-0 pb-0" id="v-pills-history-tab" data-toggle="pill"
               href="#v-pills-history" role="tab" aria-controls="v-pills-history" aria-selected="false">History</a>
            <a class="nav-link text-strong pl-3 pr-1 pt-0 pb-0" id="v-pills-address-tab" data-toggle="pill"
               href="#v-pills-address" role="tab" aria-controls="v-pills-address" aria-selected="false">Addresses</a>
        </div>
    </div>
    <div class="col-10 pl-0 pr-0">
        <div class="tab-content" id="">
            <div class="tab-pane fade show active" id="v-pills-account-settings" role="tabpanel"
                 aria-labelledby="v-pills-account-settings-tab">
                @include('account.settings.account-setting')
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...
            </div>
            <div class="tab-pane fade" id="v-pills-history" role="tabpanel" aria-labelledby="v-pills-history-tab">
                @include('account.settings.account-history')

            </div>
            <div class="tab-pane fade" id="v-pills-address" role="tabpanel" aria-labelledby="v-pills-address-tab">
                @include('account.settings.account-address')

            </div>
        </div>
    </div>
</div>
