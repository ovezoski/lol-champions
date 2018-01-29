@component('mail::message')

Greeting summoner,

A new champion has been added to the league, make sure to check {{$champion->name}}`s abilities and stats <a href="{{ url('champions/').'/'.$champion->name }}"> here. </a>
 @component('mail::button', ['url' => url('champions').'/'.$champion->name ])
 kako ne
 @endcomponent

 Thanks,<br>
{{ config('app.name') }}
@endcomponent
