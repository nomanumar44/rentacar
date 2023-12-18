<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'dob' => $this->dob,
            'license_no' => $this->license_no,
            'license_country' => $this->license_country,
            'license_expiry' => $this->license_expiry,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'zipcode' => $this->zipcode,
            'country' => $this->country,
            'number_of_traveller' => $this->number_of_traveller,
            'comment' => $this->comment,
        ];
    }
}
