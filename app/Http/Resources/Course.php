<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Course extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'year_id'=>$this->year_id,
            'name'=>$this->name,
            'doctor_id'=>$this->doctor_id,
            'doctor_name'=>$this->doctor_name
       ];
    }
}
