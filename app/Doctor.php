<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //

    // protected $fillable = [
    //     'firstname',
    //     'lastname',
    //     'username',
    //     'doctor_id',
    //     'e_mail',
    //     'password',
    //     'year_id',
    //     'course_id'
    // ];

    public function posts(){


        return $this->hasMany('App\Post');
    }
}
