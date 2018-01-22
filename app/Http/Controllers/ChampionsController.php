<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\champion;
use App\Ability;

class ChampionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $champions = Champion::get();

      return view('champions.index', compact('champions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      if(request()->session()->get('champion')){
        return redirect('/ability/create');
      }
        return view('champions.create');
    }

    public function make(Request $request)
    {

      $this->validate(request(), [
        'picture' => 'required|mimes:jpeg,jpg,bmp,png',
        'name' => 'required'
      ]);

        $extension =  \File::extension($request->file('picture')->getClientOriginalName());
        $filename = $request->file('picture')->storeAs( 'public/'.request('name'), 'profile-picture.'.$extension);

        //stores the champion data in a session
        request()->session()->put('champion', request(['name', 'title', 'video']));
        return  view('champions.ability')->with('ability', 'Passive');

    }

    /**
    * Store a newly created resource in storage.
    */

    public function store()
    {


      //stores the champion from the session data
      $champion = Champion::create(request()->session()->get('champion'));
      $abilities =  request()->session()->get('abilities');

      //stores the abilities from the session dataa
        foreach($abilities as $name=>$ability){
          Ability::create([
              'ability' => Ability::abilityToId($name),
              'title'=> $ability['title'],
              'description' => $ability['description'],
              'video' => $ability['video'],
              'champion_id' => $champion->id,
              'image' => $ability['image']
            ]);
        }

      request()->session()->forget('champion');
      request()->session()->pull('abilities');

      event(new App\events\ChampionCreated($champion));

      return redirect('champions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Champion $champion)
    {
      return view('champions.show', compact('champion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
