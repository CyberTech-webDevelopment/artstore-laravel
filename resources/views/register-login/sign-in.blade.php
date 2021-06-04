<div class="modal fade" id="signIn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase text-strong" id="exampleModalLabel">
                    {{ app()->getLocale()=='en' ? 'SIGN IN' : ( app()->getLocale()=='ru' ? 'ВОЙТИ' : ( app()->getLocale()=='am' ? 'ՄՈՒՏՔ ԳՈՐԾԵԼ' : 'SIGN IN')) }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{asset('assets\icons\close.png')}}"></span>
                </button>
            </div>
            <div class="row">
                <div class="modal-body">

                    <form method="POST" action="{{ route('login',app()->getLocale()) }}">

                        @csrf
                        @if ($errors->has('email'))
                            {{--                              @dump($errors->first('email'))--}}
                            <p class="text-center text-danger email_pass_error">
                                <strong>{{ $errors->first('email') }}</strong>
                            </p>
                        @elseif($errors->has('password'))

                            <p class="text-center text-danger password_pass_error">
                                <strong>@lang( $errors->first('password') )</strong>
                            </p>

                        @else
                        @endif
                        <div class="mb-4 success_message">
                            @if(session()->has('modal_type'))
                                @if(session('modal_type')[0] == 'success_email')

                                    @lang('auth.success_confirmed')

                                @endif
                                @if(session()->has('pass_change'))

                                    {{ session('pass_change') }}

                                @endif
                            @endif
                        </div>
                        <div>
                            <div class="form-group parent">
                                <div>
                                    <label
                                        class="text-strong">{{ app()->getLocale()=='en' ? 'E-mail' : ( app()->getLocale()=='ru' ? 'Эл. почта' : ( app()->getLocale()=='am' ? 'Էլ․ փոստ' : 'E-mail')) }}</label>
                                    <span class="required hide"> &nbsp *</span>
                                    <input type="email" class="form-control log-inp" name="email" id="log-mail"
                                           data-name='0' data-lng='{{ app()->getLocale() }}'>
                                </div>
                                <div class="invalid-inp invalid-mail"></div>
                            </div>
                            <div class="form-group parent">
                                <label
                                    class="text-strong">{{ app()->getLocale()=='en' ? 'Password' : ( app()->getLocale()=='ru' ? 'Пароль' : ( app()->getLocale()=='am' ? 'Գաղտնաբառ' : 'Password')) }}</label>
                                <span class="required hide"> &nbsp *</span>
                                <div class="input-group">
                                    <input type="password" class="form-control log-inp" name="password" id="log-pass"
                                           class="password"
                                           min="8" max="16" data-name='0' data-lng='{{ app()->getLocale() }}'>
                                    <div class="input-group-append">
			                     <span class="input-group-text eye-span" id="login-icon-lock">
			                          <img src="{{asset('assets\icons\icon-lock.png')}}">
			                     </span>
                                    </div>
                                </div>
                                <div class="invalid-inp invalid-pass float-left"></div>
                                <small id="forgot-password" class="form-text text-right" data-toggle="modal"
                                       data-target="#forgotPassword" data-dismiss="modal" aria-label="Close">{{ app()->getLocale()=='en' ? 'Forgot your
                                       password?' : ( app()->getLocale()=='ru' ? 'Забыли Ваш пароль?' : ( app()->getLocale()=='am' ? 'Մոռացե՞լ եք Ձեր գաղտնաբառը' : 'Forgot your
                                    password')) }}</small>
                            </div>
                            <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                <input type="checkbox" class="custom-control-input" name="remember" id="remember-inp">
                                <label class="custom-control-label text-strong" for="remember-inp" id="remember">{{ app()->getLocale()=='en' ? 'Remember me' : ( app()->getLocale()=='ru' ? 'Запомнить' : ( app()->getLocale()=='am' ? 'Հիշել ինձ
                                    ' : 'Remember me')) }}
                                </label>
                            </div>
                            <button type="submit" class="btn sign-in mt-2 text-strong" id="log-in">
                                {{ app()->getLocale()=='en' ? 'SIGN IN' : ( app()->getLocale()=='ru' ? 'ВОЙТИ' : ( app()->getLocale()=='am' ? 'ՄՈՒՏՔ ԳՈՐԾԵԼ' : 'SIGN IN')) }}
                            </button>
                            <div class="result mt-3"></div>
                        </div>
                        <div class="d-flex justify-content-center mt-2">
                            <hr width="30%" class="mt-2 mr-2" color='#fefffd'>
                            <span
                                class="text-strong or">{{ app()->getLocale()=='en' ? 'OR' : ( app()->getLocale()=='ru' ? 'Или' : ( app()->getLocale()=='am' ? 'Կամ' : 'OR')) }}</span>
                            <hr width="30%" class="mt-2 ml-2" color='#fefffd'>
                        </div>
                        <div class="text-center pb-4">
                            <div
                                class="text-strong mt-4 mb-4">{{ app()->getLocale()=='en' ? 'Sign in with' : ( app()->getLocale()=='ru' ? 'Войти в систему с' : ( app()->getLocale()=='am' ? 'Մուտք գործել' : 'Sign in with')) }}</div>
                            <div class="d-flex justify-content-center ">
                                <div class="ml-2 mr-2 facebook1"><img src="{{asset('assets\icons\facebook.png')}}">
                                </div>
                                <div class="ml-2 mr-2 google1"><img src="{{asset('assets\icons\google.png')}}"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="text-center footer-div">
                    <span
                        class="text-strong">{{ app()->getLocale()=='Don’t have an Account?' ? 'OR' : ( app()->getLocale()=='ru' ? 'Нет учетной записи?' : ( app()->getLocale()=='am' ? 'Գրանցված չէ՞ք' : 'Don’t have an Account?')) }}</span>
                    <button type="button" id="sign-up" class="btn pl-3 pt-1 sign-up text-strong close"
                            data-toggle="modal" data-target="#signUp" data-dismiss="modal" aria-label="Close">
                        {{ app()->getLocale()=='en' ? 'SIGN UP' : ( app()->getLocale()=='ru' ? 'ЗАРЕГИСТРИРОВАТЬСЯ' : ( app()->getLocale()=='am' ? 'ԳՐԱՆՑՎԵԼ' : 'SIGN UP')) }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

