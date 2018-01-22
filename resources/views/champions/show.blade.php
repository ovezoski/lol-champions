@extends('layouts.app')

@section('content')

<link href="{{ asset('css/champions/show.css') }}" rel="stylesheet">


  <div id="champion" class="col-sm-9 col-xs-11 jumbotron">
    <div class="bio">

    <img src="/storage/{{$champion->name}}/profile-picture.png" class='col-sm-2 col-xs-4' alt="">
    <span class=' info '>
      <div class='name'>{{ $champion->name }}</div>
      <span class='title'>-{{ $champion->title }}</span>
    </span>
  </div>

    <span class='video'>
      <iframe src="{{$champion->video}}" ></iframe>
    </span>

    <span id='abilities'>
          @foreach($champion->abilities as $ability)
          <hr>
            <div class="ability">

              <img src="/{{ $ability->image }}" alt="">

              <div class='name'>

                <div class='type'> {{App\Ability::idToAbility($ability->ability) }}: </div>
                <div class='title'> {{$ability->title}} </div>

              </div>

              <div class="description">
                {{$ability->description}}
              </div>

              <iframe src="{{ $ability->video }}" width="" height=""></iframe>
          </div>
        @endforeach
    </span>


  </div>

@endsection                                                                                                                                                                   
