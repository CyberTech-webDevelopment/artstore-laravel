@component('mail::message')
    Artstore
    Hello {{$email_data['name']}}

    @component('mail::button', ['url' => route('index').'?code='.$email_data['verification_code']])
        Please click here
    @endcomponent

    Please ignore this email if you received it by mistake.
@endcomponent


{{--Hello {{$email_data['name']}}--}}
{{--<br><br>--}}
{{--Welcome To Artstore--}}
{{--<br>--}}
{{--Please click the below link to verify your email and activate your account--}}
{{--<br><br>--}}
{{--<a href="#">Click Her</a>--}}

{{--<br><br>--}}
{{--Thank You--}}
{{--<br>--}}
{{--Artstore--}}
