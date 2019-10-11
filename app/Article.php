<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UploadTrait;

class Article extends Model
{
    use UploadTrait;

    protected $fillable = ['title', 'body', 'featured_image', 'thumbnail'];

    public function createOrUpdateArticle($request)
    {
        $img_arr = [];
        if($request->featured_image)
        {
            $image = $request->file('featured_image');
            $name = str_random(25).'_'.time();
            $folder = '/uploads/articles/';
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            $thumbnailFilePath = $folder. 'thumbnails/' . $name . '.' . $image->getClientOriginalExtension();

            $this->uploadArticleFeaturedImage($this,$image,$folder,'public', $name);

            array_push($img_arr, ['featured_image' => $filePath]);
            array_push($img_arr, ['thumbnail' => $thumbnailFilePath]);
        }
        $this->updateOrCreate(
            ['id' => $request->id],
            array_merge([
                'title' => $request->title,
                'body'  => $request->body
                ],
                $img_arr[0] ?? [],
                $img_arr[1] ?? []
            ));
    }
}
