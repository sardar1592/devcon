<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Developer extends JsonResource
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

            'name' => $this->name,
            'skill' => $this->skill,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
            'intro' => $this->intro,
            'pic' => $this->pic,
            'city' => $this->city,

        ];
    }
}
