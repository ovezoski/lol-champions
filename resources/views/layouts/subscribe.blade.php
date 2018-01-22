<div class="well">

<form  action="/subscribe" method="post">

  <input type="email" name="email" class='form-control' placeholder="Your e-mail">

  <button type="submit" class='btn btn-success btn-block my-4'>Subscribe</button>
  {{csrf_field()}}
</form>

</div>
