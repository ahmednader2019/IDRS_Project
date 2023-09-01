<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class photoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return
        [
            "id" => $this->id,
            "driver_id" => $this->driver_id,
            "personal_photo"=> $this->personal_photo,
            "driver_licence" => $this->driver_licence,
            "car_licence" => $this->car_licence
        ];
    }
}
