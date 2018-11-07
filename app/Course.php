<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;


    protected $fillable = [
      'master_id', 'title', 'description', 'cost', 'capacity', 'start_date', 'finish_date'
    ];



    public function master(){
      return $this->belongsTo('App\User', 'master_id');
    }

    public function students(){
      return $this->belongsToMany('App\User', 'user_courses', 'course_id', 'student_id');
    }

    public function messages(){
      return $this->hasMany('App\Message');
    }


    public function payments(){
      return $this->hasMany('App\Payment');
    }


    public function coverImage(){
      return $this->morphOne('App\Photo', 'imageable');
    }

}
