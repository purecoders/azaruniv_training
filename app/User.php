<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;


    protected $fillable = [
        'name', 'email', 'mobile', 'student_number', 'national_code', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];




    public function studentCourses(){
      return $this->belongsToMany('App\Course', 'user_courses', 'student_id', 'course_id');
    }


    public function masterCourses(){
      return $this->hasMany('App\Course', 'master_id');
    }


    public function masterInfo(){
      return $this->hasOne('App\MasterExtraInfo', 'master_id');
    }

    public function messages(){
      return $this->hasMany('App\Message');
    }


    public function payments(){
      return $this->hasMany('App\Message');
    }


    public function photo(){
      return $this->morphOne('App\Photo');
    }

}
