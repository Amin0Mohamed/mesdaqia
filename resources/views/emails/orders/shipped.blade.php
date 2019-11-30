@component('mail::message')
<div>
    Hello my bro :: {{$Name}}
    <br>
    Message password is :: {{$message_Pass}}
</div>

@component('mail::button', ['url' => url('/').'/add_product'])
    Click to return to profile
@endcomponent

Thanks,<br>

@endcomponent
