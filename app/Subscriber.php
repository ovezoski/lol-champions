<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
  protected $guarded = [];
    //

    public function champions()
    {
      return $this->belongsToMany(Champion::class);
    }

    public static function Subscribe($email)
    {

      //Examines weather person has subscribed


      $subscriber = Subscriber::where('email' , $email)->first();

      if ($subscriber) {

        return $subscriber;
      }

      $subscriber =  new subscriber(['email' => $email]);
      $subscriber->save();
      return $subscriber;

    }

    public function getRouteKeyName()
    {
      return 'email';
    }

}
