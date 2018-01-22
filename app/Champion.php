<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    protected $guarded = [];
    public function getRouteKeyName()
    {
      return 'name';
    }

    public function abilities()
    {
      return $this->hasMany(Ability::class);
    }
}
