<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Profile;
use App\User;
use File;

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
    public function checkImage($image)
    {
        return Profile::exists(storage_path('app/public/'.$image));
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

            $img_arr = [];

            if($request->image){
                
                if($this->checkImage($user->profile->image)){
                    File::delete(storage_path('app/public/'. $user->profile->image));
                }
                $image = $request->file('image')->store('uploads','public');
                $imageFit = Image::make(public_path("storage/{$image}"))->fit(200,200);
                $imageFit->save();
                array_push($img_arr, ['image' => $image]);

                if($this->checkImage($user->profile->avatar)){
                    File::delete(storage_path('app/public/'. $user->profile->avatar));
                }

                $avatar = $request->file('image')->store('avatar','public');
                $avatarFit = Image::make(public_path("storage/{$avatar}"))->fit(50,50);
                $avatarFit->save();
                array_push($img_arr, ['avatar' => $avatar]);
            }

            $user->update([
                'name' => $request->name
            ]);

            $user->profile->update(array_merge(
                $img_arr[0] ?? [],
                $img_arr[1] ?? []
            ));

            return redirect()->route('profile.edit', $user->id)->withSuccess('Profile updated successfully!');
        }
    }
}
