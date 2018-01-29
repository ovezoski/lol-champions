<style>


</style>
<h1 style="text-align:center"> Edit Champion</h1>

<div id='edit'>


<form  action="/champions/{{$champion->name}}/update" method="post">
  {{csrf_field()}}

<label for="champion-video">
  <span style="width: 20%"> Champion video URL: </span>
  <input style="width: 70%" type="text" name="champion-video" value='{{$champion->video}}'  placeholder="Video URL">
</label>

<br><br><br>

  <!-- <textarea name="description" rows="8" cols="80"></textarea> -->

  @foreach($champion->abilities as $ability)
  <div class="ability-edit">

  <h1>
    {{ $ability::idToAbility($ability->ability) }}
  </h1>


    <label  for="">
      <span> Title: </span>
      <input class='form__right-input' type="text" name="title[]" value="{{ $ability->title }}">
    </label>

      <label for="">
        <span> Video URL: </span>
        <input  type="text" name="video[]" value="{{ $ability->video }}">
      </label>


      <textarea name="description[]" rows="4" cols="80">{{ $ability->description}}</textarea>

  </div>

  @endforeach

  <input type="submit" value='Save'>
</form>

</div>
