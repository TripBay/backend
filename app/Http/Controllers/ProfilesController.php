<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Traits\UploadTrait;
use App\Profile;
use App\User;
use File;

class ProfilesController extends Controller
{
    use UploadTrait;
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

            $img_arr = [];

            if($request->image){
               $image = $request->file('image');
               $name = $user->name.'_'.time();
               $folder = '/uploads/images/';
               $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
               $avatarFilePath = $folder. 'avatar/' . $name . '.' . $image->getClientOriginalExtension();

               $this->uploadUserProfile($user,$image,$folder,'public', $name);
               array_push($img_arr, ['image' => $filePath]);
               array_push($img_arr, ['avatar' => $avatarFilePath]);
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
