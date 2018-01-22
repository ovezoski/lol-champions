@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{asset('css/champions/create.css')}}">

<form class=" well form-group col-sm-8 col-xs-11" style="float:none" id="champion-form" action="/champions/make" enctype="multipart/form-data" method="post">

    <input class="form-control" placeholder="Name" type="text" name="name" />

    <input class="form-control" placeholder="Title" type="text" name="title" />

    Profile picture:
    <label class='btn btn-file btn-default'>
    Browse <input style="display:none" type="file" name="picture"  />
    </label>
    <br>
    <br>
    Video:
    <input type="text" name="video" class='form-control' value="">
    <!-- <label class='btn btn-file btn-default'>
     Browse  <input style="display:none" type="file" name="video" />
    </label> -->

    {{ csrf_field() }}
<br><br>
    <input class='btn btn-default btn-block' type="submit" name="" value="Next">

</form>
@include('layouts.errors')

@endsection
