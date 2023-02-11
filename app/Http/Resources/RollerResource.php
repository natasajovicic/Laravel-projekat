<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RollerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
         // return parent::toArray($request);
         public function toArray($request)
         {
             return [
                 'velicina'=>$this->resource->velicina,
                 'boja'=>$this->resource->boja,
                 'materijal'=>$this->resource->materijal,
                 'stanje'=>$this->resource->stanje,
                         ];
         }
    }

