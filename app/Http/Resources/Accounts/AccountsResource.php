<?php

namespace App\Http\Resources\Accounts;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Collection;

class AccountsResource extends ResourceCollection
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
            'data' => AccountResource::collection($this->collection),
        ];
    }

    public function with($request)
    {
        return [
            'links'    => [
                'self' => url('/api/accounts'),
            ],
        ];
    }
}
