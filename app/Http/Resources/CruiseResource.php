<?php

namespace App\Http\Resources;

use App\Models\Cruise;
use http\Env\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CruiseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {


        return [
            'departurePoint'=>$this->route->departurePoint,
            'id'=> $this->id,
            "destination" => $this->dest->destination,
            "departureDate"=>$this->departureDate,
            "departureTime"=>$this->departureTime,
            "arrivalDate"=>$this->arrivalDate,
            "arrivalTime"=>$this->arrivalTime,
            "ticketPrice"=>$this->ticketPrice,
        ];
    }
}
