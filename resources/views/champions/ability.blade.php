@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{asset('css/champions/abilities.css')}}">

<form class="" action="/ability/store/{{$ability}}" method="post" enctype="multipart/form-data">

    <div id="abilities" class="col-sm-8 col-xs-11">

      <div class="ability row">

        <h3> {{ $ability }} </h3>
        <input placeholder="Title" class='title form-control' type="text" name="title" />
        <input placeholder="Image" class='image form-control' type="file" name="image" />
        <input placeholder="Video URL" class='video form-control' type="text" name="video" />
        <textarea placeholder="Ability description" type="text" class='description form-control' name="description" />
        </textarea>

      </div>


            <input type="submit">
    </div>

{{csrf_field()}}

  </form>

@include('layouts.errors')


    @endsection
