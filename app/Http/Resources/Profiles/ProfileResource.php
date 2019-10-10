<?php

namespace App\Http\Resources\Profiles;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
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
            'type' => 'profiles',
            'id' => (string)$this->id,
            'attributes' => [
                'user_id' => $this->user_id,
                'about' => $this->about,
                'address' => $this->address,
                'image_url' => $this->image,
                'avatar_url' => $this->avatar,
                'is_verified' => $this->is_verified
            ],
            'links' => [
                'self' => url('/api/profiles', $this->id)
            ]
        ];
    }
}
