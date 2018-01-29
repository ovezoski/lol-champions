<form class="" action="/subscribe/{{$champion->name}}" method="post">

  You will be notified when this champion gets updates.

  <input type="text" name="email" >
  <input type="submit"  value="Subscribe">
  {{csrf_field()}}
</form>
