<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $actors = Actor::with('movies')->get();
        return view('actors.index', compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('actors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => ['required', 'min:3'],
            'gender' => ['required'],
            'biography' => ['required', 'min:10'],
            'dob' => ['required'],
            'pob' => ['required'],
            'image_url' => ['required', 'image'],
            'popularity' => ['required', 'numeric']
        ]);

        if($request->file('image_url')){
            $validated['image_url'] = $request->file('image_url')->store('img/actors');
        }

        Actor::create($validated);

        return redirect('/movies')->with('message', 'New actor added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Actor $actor)
    {
        //
        return view('actors.show', compact('actor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Actor $actor)
    {
        //
        return view('actors.edit', compact('actor'));
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
        $validated = $request->validate([
            'name' => ['required', 'min:3'],
            'gender' => ['required'],
            'biography' => ['required', 'min:10'],
            'dob' => ['required'],
            'pob' => ['required'],
            'image_url' => ['required_if:old_image_url,null', 'image'],
            'popularity' => ['required', 'numeric']
        ]);

        if($request->image_url){
            $validated['image_url'] = $request->file('image_url')->store('img/actors');
            Storage::delete($request->old_image_url);
        }else{
            $validated['image_url'] = $request->old_image_url;
        }
        

        Actor::where('id', $id)->update($validated);

        return redirect('/movies')->with('message', ucwords($request->name) . ' has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actor $actor)
    {
        //
        Actor::destroy($actor->id);

        // if($actor->image_url){
        //     Storage::delete($actor->image_url);
        // }

        return redirect('/movies')->with('message', ucwords($actor->name) . ' has been removed!');
    }
}
