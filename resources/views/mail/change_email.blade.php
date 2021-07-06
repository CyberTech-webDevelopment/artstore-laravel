@component('mail::message')
    Artstore
    Hello {{$email_data['name']}}

    @component('mail::button', ['url' => route('account',app()->getLocale()).'?code_change='.$email_data['reset_token'].'&email='.$email_data['email']])
        If you want change your email please click here
    @endcomponent

    Please ignore this email if you received it by mistake.
@endcomponent
