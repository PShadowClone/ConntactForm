@component('mail::message')
    # Introduction
    Hi {{$name}} ,<br/>
    {{$message}}
    @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
