<?php

namespace App\Http\Resources\Roles;

use Illuminate\Http\Resources\Json\JsonResource;

class RoleResource extends JsonResource
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
            'type' => 'roles',
            'id' => (string)$this->id,
            'attributes' => [
                'name' => $this->name,
            ],
            'link' => [
                'self' => url('/api/roles', $this->id)
            ]
        ];
    }
}
