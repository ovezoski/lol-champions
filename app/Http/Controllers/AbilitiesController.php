<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ability;

class AbilitiesController extends Controller
{


    public function create()
    {

      //  Detrimines which ability is going to be created
      //  based on the session data

      $storedAbilities = request()->session()->get('abilities', []);
      $nextAbility = Ability::idToAbility(count($storedAbilities) );


      return view('champions.ability')->with('ability', $nextAbility);
    }

    public function store($ability)
    {


      //Verification

      // Store the ability image in the storage
      $champion = request()->session()->get('champion');
      $extension =  \File::extension(request()->file('image')->getClientOriginalName());

      $filename  =  request()->file('image')->storeAs('public/'.$champion['name'], "{$ability}.{$extension}" );
      $filename = str_replace("public", 'storage', $filename);

      //Saving the ability data in the session
      $abilities = request()->session()->get('abilities', []);
      $abilities[$ability] = request(['title', 'description', 'video']);
      $abilities[$ability]['image'] = $filename;
      request()->session()->put('abilities', $abilities);

      // If all of the abilities are uploaded,
      // it stores the user and the abilities to the database

      if($ability == 'R'){
        return redirect('/champions/store');
      }
      
      return redirect('/ability/create');

    }

}
