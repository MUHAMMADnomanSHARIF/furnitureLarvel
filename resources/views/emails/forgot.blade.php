@component('mail::message')
<h4>Helo {{$user->name}}</h4>

<p>We understand it hapens.</p>

@component('mail::button', ['url' =>url('reset/'.$user->remember_token) ])
    Reset Your Password
    @endcomponent

    <p>In case you have any issue plese contact Us </p>
    <p>Thanks <br>
{{ config('app.name') }}</p>

@endcomponent
