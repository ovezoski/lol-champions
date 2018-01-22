@component('mail::message')

Greeting sumoner,


a new champion has joined the league. {{ $champion->name }} will be present in the game from now on.  

@component('mail::button', ['url' => ''])
kako ne
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
