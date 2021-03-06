<div class="modal fade" id="signUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" id="modal-header">
                <h5 class="modal-title text-uppercase text-strong" id="exampleModalLabel">
                    {{ app()->getLocale()=='en' ? 'SIGN UP' : ( app()->getLocale()=='ru' ? 'ЗАРЕГИСТРИРОВАТЬСЯ' : ( app()->getLocale()=='am' ? 'ԳՐԱՆՑՎԵԼ' : 'SIGN UP')) }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{asset('assets\icons\close.png')}}"></span>
                </button>
            </div>
            <div class="row">

                <div class="modal-body" id="newSignUP">

                    <form method="POST" action="{{ route('register',app()->getLocale()) }}">

                        @csrf
                        <div>
                            <div class="form-group parent">
                                <div>
                                    <label class="text-strong">{{ app()->getLocale()=='en' ? 'Username' : ( app()->getLocale()=='ru' ? 'Имя пользователя' : ( app()->getLocale()=='am' ? 'Օգտագործողի անունը' : 'Username')) }}</label>
                                    <span class="required hide"> &nbsp *</span>
                                    <input type="text" class="form-control reg-inp" name="name" id="reg-name" min="6"
                                           max="29"
                                           data-name='0'
                                           data-lng='{{ app()->getLocale() }}'>
                                </div>
                                <div class="invalid-inp invalid-name"></div>
                            </div>
                            <div class="form-group parent">
                                <div>
                                    <label class="text-strong">{{ app()->getLocale()=='en' ? 'E-mail' : ( app()->getLocale()=='ru' ? 'Эл. почта' : ( app()->getLocale()=='am' ? 'Էլ․ փոստ' : 'E-mail')) }}</label>
                                    <span class="required hide"> &nbsp *</span>
                                    <input type="email" class="form-control reg-inp" name="email" id="reg-mail"
                                           data-name='0' data-lng='{{ app()->getLocale() }}'>
                                </div>
                                <div class="invalid-inp invalid-mail"></div>
                            </div>
                            <div class="form-group parent">
                                <label class="text-strong">{{ app()->getLocale()=='en' ? 'Password' : ( app()->getLocale()=='ru' ? 'Пароль' : ( app()->getLocale()=='am' ? 'Գաղտնաբառ' : 'Password')) }}</label>
                                <span class="required hide"> &nbsp *</span>
                                <div class="input-group">
                                    <input type="password" class="form-control reg-inp" name="password" id="reg-pass"
                                           min="8" max="16"
                                           data-name='0' data-lng='{{ app()->getLocale() }}'>
                                    <div class="input-group-append">
			                     <span class="input-group-text eye-span" id="icon-lock">
			                          <img src="{{asset('assets\icons\icon-lock.png')}}">
			                     </span>
                                    </div>
                                </div>
                                <div class="invalid-inp invalid-pass"></div>
                            </div>
                            <div class="custom-control custom-checkbox my-1 mr-sm-2 parent">
                                <div>
                                    <input type="checkbox" class="custom-control-input reg-inp check"
                                           id="customControlInline1" value="" name="privacy" min="0" max='1'
                                           data-name='0'>
                                    <label class="custom-control-label text-strong" for="customControlInline1"
                                           id="agree">
                                           {{-- : --}}

                                           @php
                                              echo app()->getLocale()=="en" ? "Agree to <a href=''> Terms of Use and Privacy Policy. </a>" : ( app()->getLocale()=="ru" ? "Примите <a href=''> Условия использования и Политику конфиденциальности.</a>" : ( app()->getLocale()=="am" ? "Համաձայնել <a href=''> օգտագործման պայմաններին և գաղտնիության քաղաքականությանը </a>" : "Agree to <a href=''> Terms of Use and Privacy Policy. </a>"));
                                           @endphp
                                        </label>
                                    <span class="required hide"> &nbsp *</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center" id="chaptcha-parent">

                                {{-- <div id="recaptchaid" class="g-recaptcha"

                                     data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div> --}}
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                                <span class="required hide" id="required-captcha"> &nbsp *</span>
                                @error('g-recaptcha-response')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            @if(session()->has('reg_failed'))

                                <p class="text-center text-danger result reg_failed">
                                    <strong>{{ session('reg_failed') }}</strong>
                                </p>

                            @endif
{{--                            @if(session()->has('unique_email'))--}}


{{--                                <p class="text-center text-danger result reg_failed">{{ session('unique_email')['email.unique:users'] }}</p>--}}

{{--                            @endif--}}


                            <button type="submit" class="btn sign-in mt-2 text-strong" id="registration">
                                {{ app()->getLocale()=='en' ? 'SIGN UP' : ( app()->getLocale()=='ru' ? 'ЗАРЕГИСТРИРОВАТЬСЯ' : ( app()->getLocale()=='am' ? 'ԳՐԱՆՑՎԵԼ' : 'SIGN UP')) }}
                            </button>
                        </div>
                    </form>

                    <div class="d-flex justify-content-center mt-2">
                        <hr width="30%" class="mt-2 mr-2" color='#fefffd'>
                        <span class="text-strong or">{{ app()->getLocale()=='en' ? 'OR' : ( app()->getLocale()=='ru' ? 'Или' : ( app()->getLocale()=='am' ? 'Կամ' : 'OR')) }}</span>
                        <hr width="30%" class="mt-2 ml-2" color='#fefffd'>
                    </div>
                    <div class="text-center pb-4">
                        <div class="text-strong mt-4 mb-4">{{ app()->getLocale()=='en' ? 'Sign in with' : ( app()->getLocale()=='ru' ? 'Войти в систему с' : ( app()->getLocale()=='am' ? 'Մուտք գործել' : 'Sign in with')) }}</div>
                        <div class="d-flex justify-content-center ">
                            <div class="ml-2 mr-2 facebook1"><img src="{{asset('assets\icons\facebook.png')}}"></div>
                            <div class="ml-2 mr-2 google1"><img src="{{asset('assets\icons\google.png')}}"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" id="modal-footer">
                <div class="text-center footer-div">
                    <span class="text-strong">{{ app()->getLocale()=='en' ? 'Have an Account?' : ( app()->getLocale()=='ru' ? 'Иметь аккаунт?' : ( app()->getLocale()=='am' ? 'Գրանցվա՞ծ եք' : 'Have an Account?')) }}</span>
                    <button type="button" id="sign-in" class="btn pl-3 pt-1 sign-up text-strong close"
                            data-toggle="modal" data-target="#signIn" data-dismiss="modal" aria-label="Close">
                            {{ app()->getLocale()=='en' ? 'SIGN IN' : ( app()->getLocale()=='ru' ? 'ВОЙТИ' : ( app()->getLocale()=='am' ? 'ՄՈՒՏՔ ԳՈՐԾԵԼ' : 'SIGN IN')) }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>







