<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;


    protected $fillable = [
      'master_id', 'category_id', 'title', 'description', 'cost', 'gender', 'capacity', 'start_date', 'finish_date', 'is_open'
    ];



    public function master(){
      return $this->belongsTo('App\User', 'master_id');
    }

    public function students(){
      return $this->belongsToMany('App\User', 'user_courses', 'course_id', 'student_id');
    }

    public function publicMessages(){
      return $this->hasMany('App\Message')->orderBy('id', 'desc')->where('type', '=', 'public')->get();
    }


    public function payments(){
      return $this->hasMany('App\Payment');
    }


    public function coverImage(){
      return $this->morphOne('App\Photo', 'imageable');
    }


    public function usersCourses(){
      return $this->hasMany('App\UserCourse');
    }

}
