<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Student extends JsonResource
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
            'id'=>$this->id,
            'firstname'=>$this->firstname,
            'lastname'=>$this->lastname,
            'username'=>$this->username,
            'card_id'=>$this->card_id,
            'email'=>$this->email,
            'password'=>$this->password,
            'year_id'=>$this->year,
            'course_id'=>$this->course_id
       ];
    }

    public function with($request){
        return [
            'Api-Test-Version' => '1.0.0',
            'Abdulwahab-Mohammed' => url('https://abdelwahabmoh97.wixsite.com/home')
        ];
    }
}
