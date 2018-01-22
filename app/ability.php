<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ability extends Model
{

  protected $guarded = [];

  public static function idToAbility($id)
  {
    return ['Passive', 'Q', 'W', 'E', 'R'][$id];
  }

  public static function abilityToId($ability){
    return array_search( $ability, ['Passive', 'Q', 'W', 'E', 'R']);

  }

}
