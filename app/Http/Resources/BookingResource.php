<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
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
            'car_number' => $this->car_number,
            'pick_up_date' => $this->pick_up_date,
            'drop_up_date' => $this->drop_up_date,
            'pick_up_time' => $this->pick_up_time,
            'drop_up_time' => $this->drop_up_time,
            'age' => $this->age,
            'vehicle_type' => $this->vehicle_type,
            'pick_up_location' => $this->pick_up_location,
            'promoCode' => $this->promoCode,
            'rent_price' => $this->rent_price,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone_no' => $this->phone_no,
            'payment_type' => $this->payment_type,
        ];
    }
}
