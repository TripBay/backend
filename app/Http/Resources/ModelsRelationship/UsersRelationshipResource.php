<?php

namespace App\Http\Resources\ModelsRelationship;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Accounts\AccountResource;
use App\Http\Resources\Profiles\ProfileResource;

class UsersRelationshipResource extends JsonResource
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
            'account' => [
                'data' =>  new AccountResource($this->account)
            ],
            'profile' => [
                'data' => new ProfileResource($this->profile)
            ]
        ];
    }
}
