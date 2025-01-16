<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LocationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'code' => $this->code,
            'name' => $this->name,
            'image' => $this->image,
            'creationDate' => $this->creation_date->toISOString(),
        ];
    }
}
