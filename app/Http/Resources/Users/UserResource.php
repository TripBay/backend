<?php

namespace App\Http\Resources\Users;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ModelsRelationship\UsersRelationshipResource;
class UserResource extends JsonResource
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
            'type' => 'users',
            'id' => (string)$this->id,
            'attributes' => [
                'name' => $this->name,
                'email' => $this->email,
            ],
            'relationships' => new UsersRelationshipResource($this),
            'links' => [
                'self' => url('/api/users',$this->id)
            ]
        ];
    }
}
