<?php

namespace App\Http\Resources\Articles;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'id' => (string)$this->id,
            'type' => 'articles',
            'attributes' => [
                'title' => $this->title,
                'body' => $this->body,
                'featured_image' => $this->featured_image,
                'thumbnail' => $this->thumbnail
            ]
        ];
    }
}
