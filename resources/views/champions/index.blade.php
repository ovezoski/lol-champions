@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{asset('css/champions/index.css')}}">
<div id="champions">

  @foreach($champions as $champion)

  <div class="champion">
    @if(auth()->check())
    @if( \Auth::user()->role )
    <form class="" action="index.html" method="post">

    </form>
    @endif
    @endif

<a href="/champions/{{$champion->name}}">
    <img src="/storage/{{$champion->name}}/profile-picture.png" alt="">
    <h1>{{ $champion->name }}</h1>
  </a>
  </div>

  @endforeach
</div>

@endsection
