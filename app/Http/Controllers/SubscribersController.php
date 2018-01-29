<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;
use App\Champion;

class SubscribersController extends Controller
{
    public function store()
    {
      $this->validate(request(),[
        'email' => 'required|email'
      ]);

      Subscriber::create(['email'=> request('email')]);

      return back();

    }

    public function champion(Champion $champion)
    {

        $subscriber = Subscriber::subscribe(request('email'));
        $champion->subscribe($subscriber);
        return redirect('/champions');
    }

}
