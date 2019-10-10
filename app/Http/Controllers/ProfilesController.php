<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserProfile;
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

     // Returns array of actions associated with its corresponding functions
    protected $syncRelatedModels = [
        'profile'   =>  'updateProfileImage',
        'details'   =>  'updateProfileDetails'
    ];

    public function update(UpdateUserProfile $request, User $user)
    {

        foreach($this->syncRelatedModels as $index => $syncRelatedModel)
        {
            $request->validated();

            if($request->get('action') == $index)
            {
                $user->$syncRelatedModel($request);
                return redirect()->route('profile.edit',$user->id)->withSuccess('Profile updated successfully!');
            }
        }
    }
}
