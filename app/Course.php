<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

    protected $fileable = ['name'];

    public function doctors(){


        return $this->hasMany('App\Doctor');
    }

    public function lectures(){


        return $this->hasMany('App\Lecture');
    }

    public function quizs(){


        return $this->hasMany('App\Quiz');
    }

    public function attendences(){


        return $this->hasMany('App\Attendence');
    }



}
