<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('users.edit', compact('user'));
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
            'username' => ['required'],
            'email' => ['required', 'email'],
            'dob' => ['required', 'date'],
            'phone' => ['required', 'min:5', 'max:13']
        ]);

        User::where('id', $id)->update($validated);

        return back()->with('message', 'Changes has been saved!');
    }

    public function updateAvatar(Request $request, $id){

        $validated = $request->validate([
            'image_url' => ['required', 'image']
        ]);

        if($request->file('image_url')){
            $validated['image_url'] = $request->file('image_url')->store('img/users');
            Storage::delete($request->old_image_url);
        }

        User::where('id', $id)->update($validated);

        return back()->with('message', 'Changes has been saved!');
    }
}
