<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\User;
use App\Article;
use App\Profile;
use File;

trait UploadTrait
{
    public function checkImage($image, $model)
    {
        $exist = $model->exists(public_path($image));
        if($exist)
        {
            File::delete(public_path($image));
        }
    }

    public function uploadUserProfile(User $user, UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {

        $this->checkImage($user->profile->image, $user);
        $this->checkImage($user->profile->avatar, $user);

        $name = !is_null($filename) ? $filename : str_random(25);
        $avatarFolder = $folder.'/avatar';

        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
        $avatar = $uploadedFile->storeAs($avatarFolder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        $imageFit = Image::make(public_path($avatar))->fit(200,200);
        $imageFit->save();

        return $file;
    }

    public function uploadArticleFeaturedImage(Article $article, UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $this->checkImage($article->featured_image, $article);
        $this->checkImage($article->thumbnail, $article);

        $name = !is_null($filename) ? $filename : str_random(25);

        $thumbnailFolder = $folder.'/thumbnail';
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
        $thumbnail = $uploadedFile->storeAs($thumbnailFolder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);

        $makeThumbnail = Image::make(public_path($thumbnail))->fit(400,400);

        $makeThumbnail->save();

        return $file;
    }
}