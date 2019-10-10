<?php

namespace App\Http\Resources\Faqs;

use Illuminate\Http\Resources\Json\ResourceCollection;

class FaqsResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'data' => FaqResource::collection($this->collection)
        ];
    }
}
