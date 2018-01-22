
@if(count($errors->all()))
  <div class="col-sm-8 col-xs-10 mx-auto " style="float: none; margin: 30px auto;">
    <ul class="list-group ">
      @foreach($errors->all() as $error)
        <li class='list-group-item list-group-item-danger'> {{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
