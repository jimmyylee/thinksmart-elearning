<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    // protected $fillable = [
    //     'firstname',
    //     'lastname',
    //     'username',
    //     'student_id',
    //     'e_mail',
    //     'password',
    //     'year_id',
    //     'course_id'
    // ];




    public function quizs(){


        return $this->hasMany('App\Quiz');
    }

    public function attendences(){


        return $this->hasMany('App\Attendence');
    }

    public function courses(){


        return $this->belongsToMany('App\Course');
    }

    
}
