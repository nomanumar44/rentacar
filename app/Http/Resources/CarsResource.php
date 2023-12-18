<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarsResource extends JsonResource
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
            'vehicle_name' => $this->vehicle_name,
            'vehicle_type' => $this->vehicle_type,
            'vehicle_number' => $this->vehicle_number,
            'brand' => $this->brand,
            'price' => $this->price,
            'number_of_seats' => $this->number_of_seats,
            'image' => $this->image,
            'location_store' => $this->location_store,
        ];
    }
}
