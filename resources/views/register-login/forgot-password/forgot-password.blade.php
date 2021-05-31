{{--@dump(session('modal_type'))--}}
{{--@dump(session('email'))--}}

<div class="modal fade" id="forgotPassword" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close ml-0" data-dismiss="modal" aria-label="Close" data-toggle="modal"
                        data-target="#signIn" data-dismiss="modal">
                    <span aria-hidden="true"><img src="{{asset('assets\icons\left-arrow.png')}}"></span>
                </button>
                <h5 class="modal-title text-strong" id="exampleModalLabel3">
                    {{ app()->getLocale()=='en' ? 'Forgot Your Password?' : ( app()->getLocale()=='ru' ? 'Забыли Свой Пароль?' : ( app()->getLocale()=='am' ? 'Մոռացե՞լ Եք Ձեր Գաղտնաբառը:' : 'Forgot Your Password?')) }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><img src="{{asset('assets\icons\close.png')}}"></span>
                </button>
            </div>
            <div class="row">
                <div class="modal-body text-center">
                    <form action="{{ route('reset', app()->getLocale()) }}" method="POST">
                        @csrf
                        @if(session()->has('error_reset'))

                            <p class="reset_error text-center text-danger">
                                <strong>{{ session('error_reset')}}</strong>
                            </p>

                        @elseif(session()->has('modal_type'))

                            @if(session('modal_type')[0] == 'no_reset_email')
                                <div class="success_message">Inncorect email please send new reset link</div>
                                {{--                            @elseif(session('modal_type')[0] == 'no_reset_email')--}}

                            @endif


                        @endif

                        <div class="mt-3 mb-3 pt-4 pb-4">
                            <div class="form-group parent">
                                <div class="text-left">
                                    <label class="text-strong ">{{ app()->getLocale()=='en' ? 'E-mail' : ( app()->getLocale()=='ru' ? 'Эл. почта' : ( app()->getLocale()=='am' ? 'Էլ․ փոստ' : 'E-mail')) }}</label>
                                    <span class="required hide"> &nbsp *</span>
                                    <input type="email" name="email" class="form-control" id="send-mail" data-name='0'>
                                </div>
                                <div class="invalid-inp invalid-mail"></div>
                            </div>
                            <button type="submit" class="btn sign-in mt-2 text-strong text-uppercase" id="for-got-pass" data-lng='{{ app()->getLocale() }}'>
                                {{ app()->getLocale()=='en' ? 'Send Request' : ( app()->getLocale()=='ru' ? 'Отправить запрос' : ( app()->getLocale()=='am' ? 'Ուղարկել' : 'Send Request')) }}
                            </button>
                        </div>
                    </form>

                    <div class="result-send-mail"></div>
                </div>
            </div>

        </div>
    </div>
</div>
