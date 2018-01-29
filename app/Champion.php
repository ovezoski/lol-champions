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

    public function Subscribers()
    {
      return $this->belongsToMany(Subscriber::class);
    }

    public function subscribe(Subscriber $subscriber)
    {
      if(!$this->subscribers()->where('email', $subscriber->email)->get()->first()){
        $this->subscribers()->attach($subscriber->id);
      }
    }
}
