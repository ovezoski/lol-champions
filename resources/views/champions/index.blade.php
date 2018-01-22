@extends('layouts.app')

@section('content')

  @foreach($champions as $champion)

<a href="/champions/{{$champion->name}}">
  <div class="champion">
    <img src="/storage/{{$champion->name}}/profile-picture.png" alt="">
    <h1>{{ $champion->name }}</h1>
  </div>
</a>

  @endforeach

@endsection
