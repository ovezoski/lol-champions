<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribersController extends Controller
{
    public function store()
    {
      $this->validate(request(),[
        'email' => 'required|email'
      ]);

      \App\Subscriber::create(['email'=> request('email')]);

      return back();

    }
}
