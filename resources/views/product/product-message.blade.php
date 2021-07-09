<button type="button" id="s11" class="btn pl-3 pt-1 sign-up text-strong close" data-toggle="modal"
        data-target="#send_email" data-dismiss="modal" aria-label="Close">
    SIGN UP
</button>
<div class="modal fade" id="send_email" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title_send_email text-strong" id="exampleModalLabel4">
                    @if(isset($cur_product))
                        {{ app()->getLocale()=='en' ? 'Send Message To ' . ' - ' . $cur_product->product_store->name  : ( app()->getLocale()=='ru' ? 'Отправить Сообщение ' . ' - ' . $cur_product->product_store->name : ( app()->getLocale()=='am' ? 'Ուղարկել Նամակ ' . ' - ' . $cur_product->product_store->name : 'Send Message To ' . ' - ' . $cur_product->product_store->name)) }}
                    @endif
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{asset('assets\icons\close.png')}}"></span>
                </button>
            </div>
            <div class="row">
                <div class="modal-body" id="new-password-changed">

                    <form action="{{ route('change.password',app()->getLocale()) }}" method="POST">
                        @csrf
                        <div class="mt-3 mb-3 pt-4 pb-4">

                            <div class="form-group parent">
                                <label class="text-strong">
                                    {{ app()->getLocale()=='en' ? 'Name' : ( app()->getLocale()=='ru' ? 'Имя' : ( app()->getLocale()=='am' ? 'Անուն' : 'Name')) }}
                                </label>
                                <span class="required hide"> &nbsp *</span>
                                <div class="input-group">
                                    <input type="text" class="form-control change-inp" name="name_email"
                                           id="send_email_name"
                                           class="password"
                                           min="8" max="16" data-name='0' data-lng='{{ app()->getLocale() }}'>

                                </div>
                                <div class="invalid-inp invalid-pass float-left"></div>
                            </div>
                            <div class="form-group parent">
                                <label class="text-strong">
                                    {{ app()->getLocale()=='en' ? 'Phone' : ( app()->getLocale()=='ru' ? 'Телефон' : ( app()->getLocale()=='am' ? 'Հեռախոս' : 'Phone')) }}
                                </label>
                                <span class="required hide"> &nbsp *</span>
                                <div class="input-group">
                                    <input type="text" class="form-control change-inp" name="phone_email"
                                           id="send_email_phone"
                                           class="password"
                                           min="8" max="16" data-name='0' data-lng='{{ app()->getLocale() }}'>

                                </div>
                                <div class="invalid-inp invalid-pass float-left"></div>
                            </div>
                            <div class="form-group parent pt-4">
                                <label class="text-strong">
                                    {{ app()->getLocale()=='en' ? 'Email' : ( app()->getLocale()=='ru' ? 'Эл.почта' : ( app()->getLocale()=='am' ? 'Էլ․հասցե' : 'Email')) }}
                                </label>
                                <span class="required hide"> &nbsp *</span>
                                <div class="input-group">

                                    <input type="password" class="form-control change-inp" name="email_send_email"
                                           id="send_email_email"
                                           class="password" min="8" max="16" data-name='0'
                                           data-lng='{{ app()->getLocale() }}'>

                                </div>
                                <div class="invalid-inp invalid-pass float-left"></div>
                            </div>

                            <div class="form-group parent pt-4">
                                <label class="text-strong">
                                    {{ app()->getLocale()=='en' ? 'Message' : ( app()->getLocale()=='ru' ? 'Текст' : ( app()->getLocale()=='am' ? 'Նամակ' : 'Message')) }}
                                </label>
                                <span class="required hide"> &nbsp *</span>
                                <div class="input-group">

                                    <textarea type="password" class="form-control change-inp" name="message_email"
                                           id="send_email_email"
                                           class="password"
                                           data-lng='{{ app()->getLocale() }}'>
                                    </textarea>

                                </div>
                                <div class="invalid-inp invalid-pass float-left"></div>
                            </div>

                            <button type="submit" class="btn sign-in mt-2 text-strong text-uppercase"
                                    id="send_email_product">
                                {{ app()->getLocale()=='en' ? 'Send' : ( app()->getLocale()=='ru' ? 'Отправить' : ( app()->getLocale()=='am' ? 'Ուղարկել' : 'Send')) }}
                            </button>
                        </div>

                    </form>

                    <div class="text-center text-danger password-changed">

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

