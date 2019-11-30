@component('mail::message')

    <h1>
        The Reply on your Message is :: {{$msg}}
    </h1>
@component('mail::button', ['url' => url('/').'/homemesdakia'])
    return home Mesdaiqa
@endcomponent

Thanks,<br>
@endcomponent
