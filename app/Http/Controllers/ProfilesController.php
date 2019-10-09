<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;

class ProfilesController extends Controller
{
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        return view('pages.profile.index', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('pages.profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Profile $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        if($request->get('action') == 'profile')
        {
            $request->validate([
                'name'          =>  'sometimes|min:5',
                'image'         =>  'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=255,max_width=1000'
            ]);

            $user->updateProfileImage($request);
            return redirect()->route('profile.edit',$user->id)->withSuccess('Profile updated successfully!');

        }elseif($request->get('action') == 'details')
        {
            $request->validate([
                'address'   =>  'required|min:5|max:191',
                'about'     =>  'required|min:5'
            ]);
            $user->updateProfileDetails($request);
            return redirect()->route('profile.edit',$user->id)->withSuccess('Profile updated successfully!');
        }
    }
}
