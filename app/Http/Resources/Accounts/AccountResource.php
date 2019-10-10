<?php

namespace App\Http\Resources\Accounts;

use Illuminate\Http\Resources\Json\JsonResource;

class AccountResource extends JsonResource
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
            'type' => 'accounts',
            'id' => (string)$this->id,
            'attributes' => [
                'user_id' => $this->user_id,
                'name'  => $this->name,
                'location' => $this->location,
                'dest_tag' => $this->dest_tag
            ],
            'links' => [
                'self' => url('api/accounts', $this->id)
            ]
        ];
    }
}
